<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Congratulations') }}
        </h2>
    </x-slot>

<div class="max-w-3xl mx-auto px-4 py-10">
    <div class="bg-white rounded-lg p-10 flex items-center shadow justify-between">
					<div>
						<svg class="mb-4 h-20 w-20 text-green-500 mx-auto" viewBox="0 0 20 20" fill="currentColor">  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>

						<h2 class="text-2xl mb-4 text-gray-800 text-center font-bold">Congratulations</h2>

						<div class="text-gray-600 mb-8">
							 You have been offered a provisional Admission. Please click to Accept or Reject the offer.
						</div>
                        <div class="flex justify-between">
                        <form method="POST" action="{{ route('applications.accept') }}">
                            @csrf
                            <button type="submit" class="w-70 block mx-auto focus:outline-none py-2 px-5 rounded-lg shadow-sm text-center text-gray-600 bg-white hover:bg-gray-100 font-medium border">Accept Admission</button>
                        </form>

                        <form method="POST" action="{{ route('applications.reject') }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="w-70 block mx-auto focus:outline-none py-2 px-5 rounded-lg shadow-sm text-center text-gray-600 bg-white hover:bg-gray-100 font-medium border">Reject Admission</button>
                        </form>
					    </div>
                </div>
						
				</div>
                </div>
</x-app-layout>