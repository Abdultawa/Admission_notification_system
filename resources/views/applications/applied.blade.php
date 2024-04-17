<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Applied User') }}
        </h2>
    </x-slot>

   <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <!-- Welcome Message -->
                    <div class="text-2xl font-bold mb-4">
                        Welcome, {{ Auth::user()->name }}!
                    </div>
                    <p class="text-gray-600 pb-2">
                        We're glad to see you back. Your application status is still in pending
                    </p>
                    <a href="{{ route('applications.edit', ['application' => $application->id]) }}" class="bg-blue-500 text-white rounded-xl px-4 py-2 float-end text-decoration-none">
                        Edit
                    </a>

                </div>
            </div>
        </div>
    </div>
    @if (session()->has('success'))
    <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 4000)" x-show="show" class="fixed bg-blue-500 text-white py-2 px-4 rounded-xl bottom-3 right-3 text-sm">
        <p>{{ session('success') }}</p>
    </div>
    @endif
</x-app-layout>
