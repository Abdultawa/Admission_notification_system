<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Notifications\AdmissionGranted;


class AdminController extends Controller
{
    public function index()
{
    $applications = Application::where('status', 'pending')->get();
    return view('admin.dashboard', compact('applications'));
}
    public function info(Application $application){
        return view('admin.info', compact('application'));
    }
    public function approve(int $id)
{
    // get application
    $application = Application::with('user')->findOrFail($id);

    // notify user
    $application->user->notify(new AdmissionGranted());
    
    // Update the status of the application to "approved"
    $application->status = 'approved';
    $application->save();

    // Redirect back or return a response as needed
    return redirect()->route('admin.dashboard')->with('success', 'Application approved successfully.');
}
public function destroy(Application $application)
{
    $application->delete();

    return redirect()->route('admin.dashboard')->with('success', 'Application deleted successfully');
}
}
