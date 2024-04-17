<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class AppicationController extends Controller
{
    public function show()
    {
        $userId = auth()->id();

        if (Gate::allows('admin')) {
            // If the user is an admin, redirect them to the admin dashboard
            return redirect()->route('admin.dashboard');
        }
        $userApplication = Application::where('user_id', $userId)->first();
        if ($userApplication && $userApplication->status === 'approved') {
            return redirect()->route('applications.admitted');
        }
        $userApplication = Application::where('user_id', $userId)->first();
        if ($userApplication && $userApplication->status === 'accepted') {
            return redirect()->route('applications.admission');
        }
        // Check if the user has already submitted an application
        if (Application::where('user_id', $userId)->exists()) {
            // Get the ID of the existing application
            $applicationId = Application::where('user_id', $userId)->value('id');
            // Redirect to the applied route with the application ID
            return redirect()->route('applications.applied', ['application' => $applicationId])->with('warning', 'You have already submitted an application.');
        }
       
    
        // If the user has not submitted an application, show the application page
        return view('dashboard');
    }
    protected function validateApplication(?Application $application = null): array
    {
        $application ??= new Application();

        return request()->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'dob' => 'required',
            'gender' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'country' => 'required',
            'state' => 'required',
            'address' => 'required',
            'program_type' => 'required',
            'dept' => 'required',
            'primaryCertificate' => $application->exists ? ['image'] : ['required', 'image'],
            'birthCertificate' => $application->exists ? ['image'] : ['required', 'image'],
            'olevelCertificate' => $application->exists ? ['image'] : ['required', 'image'],
            'indegineCertificate' => $application->exists ? ['image'] : ['required', 'image']
        ]);
    }
    public function store()
{
    $validatedData = $this->validateApplication();

    $application = new Application($validatedData);

    $application->user_id = auth()->id();

    $application->primaryCertificate = request()->file('primaryCertificate')->store('certificates');
    $application->birthCertificate = request()->file('birthCertificate')->store('certificates');
    $application->olevelCertificate = request()->file('olevelCertificate')->store('certificates');
    $application->indegineCertificate = request()->file('indegineCertificate')->store('certificates');
    $application->save();

    return redirect()->route('applications.applied', ['application' => $application->id]);
}
public function edit(Application $application){    
    return view('applications.edit', compact('application'));
}
public function applied(Application $application){
    return view('applications.applied', compact('application'));

}
public function admitted()
{
    // Retrieve all admitted applications from the database
    $admittedApplications = Application::where('status', 'approved')->get();
    
    // Pass the admitted applications to the view
    return view('applications.admitted', compact('admittedApplications'));
}
public function acceptAdmission(Application $application)
{
    $userId = auth()->id();
    Application::where('user_id', $userId)->update(['status' => 'accepted']);

    // Redirect the user to the admission page or wherever needed

    return redirect()->route('applications.admission', compact('application'));
}

public function rejectAdmission()
{
    $userId = auth()->id();
    Application::where('user_id', $userId)->delete();

    // Redirect the user to the dashboard or wherever needed
    return redirect()->route('dashboard');
}
public function showAdmissionLetter(Application $application)
{
    $userId = auth()->id();
    $application = Application::where('user_id', $userId)->firstOrFail();
    return view('applications.admission_letter', compact('application'));
}
public function update(Application $application)
{
    // Validate the request data
    $validatedData = $this->validateApplication($application);
    // Check if certificate files are present in the request
    if (request()->hasFile('primaryCertificate') && request()->hasFile('birthCertificate') &&
        request()->hasFile('olevelCertificate') && request()->hasFile('indegineCertificate')) {

        // Store the certificate files
        $application->primaryCertificate = request()->file('primaryCertificate')->store('certificates');
        $application->birthCertificate = request()->file('birthCertificate')->store('certificates');
        $application->olevelCertificate = request()->file('olevelCertificate')->store('certificates');
        $application->indegineCertificate = request()->file('indegineCertificate')->store('certificates');
    }

    // Update the application with validated data
    $application->update($validatedData);

    return back()->with('success', 'Application Updated Successfully!');
}
}
