<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('User Infomation') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <div>
  <div class="px-4 sm:px-0">
    <h3 class="text-base font-semibold leading-7 text-gray-900">Applicant Information</h3>
    <p class="mt-1 max-w-2xl text-sm leading-6 text-gray-500">Personal details and application.</p>
  </div>
  <div class="mt-6 border-t border-gray-100">
    <dl class="divide-y divide-gray-100">
    <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
        <dt class="text-sm font-medium leading-6 text-gray-900">Full name</dt>
        <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{$application->firstname .' '. $application->lastname}}</dd>
      </div>
      <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
        <dt class="text-sm font-medium leading-6 text-gray-900">Date of birth</dt>
        <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{$application->dob}}</dd>
      </div>
      <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
        <dt class="text-sm font-medium leading-6 text-gray-900">Gender</dt>
        <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{$application->gender}}</dd>
      </div>
      <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
        <dt class="text-sm font-medium leading-6 text-gray-900">Phone number</dt>
        <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{$application->phone}}</dd>
      </div>
      <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
        <dt class="text-sm font-medium leading-6 text-gray-900">Email Address</dt>
        <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{$application->email}}</dd>
      </div>
      <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
        <dt class="text-sm font-medium leading-6 text-gray-900">Address</dt>
        <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{$application->state .' '. $application->address}}</dd>
      </div>
      <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
        <dt class="text-sm font-medium leading-6 text-gray-900">Country</dt>
        <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{$application->country}}</dd>
      </div>
      <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
        <dt class="text-sm font-medium leading-6 text-gray-900">Application for</dt>
        <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{$application->dept . ' Department, '.$application->program_type}}</dd>
      </div>
      <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
    <dt class="text-sm font-medium leading-6 text-gray-900">Attachments</dt>
    <dd class="mt-2 text-sm text-gray-900 sm:col-span-2 sm:mt-0 flex space-x-4">
        <img src="{{ asset('storage/' . $application->primaryCertificate) }}" alt="primaryCertificate" class="w-32 h-auto">
        <img src="{{ asset('storage/' . $application->birthCertificate) }}" alt="birthCertificate" class="w-32 h-auto">
        <img src="{{ asset('storage/' . $application->olevelCertificate) }}" alt="olevelCertificate" class="w-32 h-auto">
        <img src="{{ asset('storage/' . $application->indegineCertificate) }}" alt="indegineCertificate" class="w-32 h-auto">
    </dd>
</div>
    </dl>
  </div>
</div>

            </div>
                </div>
                @if($application->status == "approved"|| $application->status == "accepted")
                <div class="flex justify-end mt-2">
                <button class="bg-green-300 text-white rounded-xl px-4 py-2 mt-2">{{ ucwords($application->status) }}</button>
                </div>
                @elseif($application->status == "declined")
                <div class="flex justify-end mt-2">
                <button class="bg-yellow-300 text-white rounded-xl px-4 py-2 mt-2">{{ ucwords($application->status) }}</button>
                </div>
                @else
                <div class="flex justify-end mt-2">
                <form action="{{ route('admin.approve', ['id' => $application->id]) }}" method="POST">
                    @csrf
                    @method('POST')
                    <button type="submit" class="bg-green-500 text-white rounded-xl px-4 py-2">Approve</button>
                </form>
                <form action="{{ route('admin.decline', ['id' => $application->id]) }}" method="POST">
                    @csrf
                    @method('POST')
                    <button type="submit" class="bg-yellow-300 text-white rounded-xl px-4 py-2">Decline</button>
                </form>
                <!-- <form action="{{ route('admin.destroy', $application->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-500 text-white rounded-xl px-4 py-2 float-end">Delete</button>
                </form> -->
                </div>
                @endif
        </div>
    </div>
    @if (session()->has('success'))
    <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 4000)" x-show="show" class="fixed bg-blue-500 text-white py-2 px-4 rounded-xl bottom-3 right-3 text-sm">
        <p>{{ session('success') }}</p>
    </div>
    @endif
    @if (session()->has('error'))
    <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 4000)" x-show="show" class="fixed bg-red-500 text-white py-2 px-4 rounded-xl bottom-3 right-3 text-sm">
        <p>{{ session('error') }}</p>
    </div>
    @endif
    @if (session()->has('warning'))
    <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 4000)" x-show="show" class="fixed bg-yellow-300 text-white py-2 px-4 rounded-xl bottom-3 right-3 text-sm">
        <p>{{ session('warning') }}</p>
    </div>
    @endif
</x-app-layout>
