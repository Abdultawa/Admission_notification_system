<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           {{__('Admission Letter')}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div>
                        <div class="text-center">
                            <p class="text-lg font-bold text-green-600">COOPERATIVE COLLEGE KADUNA</p>
                            <p class="text-sm text-gray-600">(Established as Kaduna Technical Institute in 1956)</p>
                            <p class="text-sm font-bold text-gray-600">Central Administration, Tudun Wada, Kaduna, Nigeria</p>
                        </div>
                        <hr class="border-green-600">
                        <div class="flex justify-between mt-2">
                            <div class="w-1/4">
                                <p class="font-bold text-sm">Rector</p>
                                <p class="italic text-sm">Dr. Suleiman Umar</p>
                                <p class="italic text-xs">Bsc, Msc, PhD.</p>
                            </div>
                            <div class="w-1/4 text-center">
                                <img src="/logo.png" class="w-20 h-20 mx-auto" alt="Logo">
                            </div>
                            <div class="w-1/4">
                                <p class="font-bold text-sm">Registrar:</p>
                                <p class="italic text-sm">Dr. Muhammed Tanimu</p>
                                <p class="italic text-xs">B.A(Pul.Admin), MPA,PGDE,Ph.D.,CIPA,DPA</p>
                            </div>
                        </div>
                        <div class="bg-green-600 text-white text-center mt-2 py-2">
                            <p class="font-bold">OFFER OF PROVISIONAL ADMISSION FOR 2023/2024 ACADEMIC SESSION</p>
                        </div>
                        <div class="flex mt-2">
                            <div class="w-1/4">
                                <img src="https://i.pravatar.cc/60?u={{ auth()->id() }}" class="w-32 h-36 mx-auto" alt="Student Image">
                            </div>
                            <div class="w-2/4">
                                <div class="font-bold">
                                    <div>Student Name: {{$application->firstname . ' '. $application->lastname}}</div>
                                    <div>Nationality: {{$application->country}}</div>
                                    <div>State of Origin: {{$application->state}}</div>
                                    <div>L.G.A of Origin: {{$application->date}}</div>
                                    <div>Admission Date: {{$application->updated_at}}</div>
                                </div>
                            </div>
                            <div class="w-1/4 text-center">
                                <img src="/barcode.png" class="w-20 h-20 mx-auto" alt="Seal">
                            </div>
                        </div>
                        <hr class="border-green-600 mt-2">
                        <div class="px-4">
                            <p class="mb-2">1. I am pleased to inform you that you have been offered admission into Cooperative College as follows:</p>
                            <ol class="list-decimal pl-5">
                                <li>Programme: ND {{$application->dept}}</li>
                                <li>Programme Type: {{$application->program_type}}, Entry Level: 100</li>
                                <li>Department: {{$application->dept}}</li>
                                <li>School: Applied Sciences</li>
                                <li>College: Science and Technology</li>
                            </ol>
                            <p class="mb-2">2. You may find that the programme offered to you is not what you applied for. This is because all programmes were heavily oversubscribed and it was found necessary to make adjustments to preferences in some cases.</p>
                            <p>3. Regular Registration ends on 17-04-2024. Candidates are expected to pay FULL school fees and complete their registration before the date specified above. Candidates will be charged a penalty fee of N5,000 during late registration. A period of two (2) weeks is given for late registration which commences immediately after the expiration of the registration period. No candidate shall be registered thereafter. Fee schedule can be downloaded from the website.</p>
                            <!-- Other content omitted for brevity -->
                        </div>
                    </div>
                    <div class="border-t border-gray-200 mt-4 pt-4">
                        <div class="text-center">
                            <img src="signatures.php?id=12&amp;tb=executive&amp;idname=Id&amp;what=Signature" class="w-32 h-20 mx-auto" alt="Signature">
                            <p class="font-bold">Mrs. H. S. Jandutse</p>
                            <p class="italic text-sm">For Registrar</p>
                        </div>
                        <hr class="border-green-600 mt-2">
                        <div class="text-center">
                            <p>Note: Any alteration renders this Admission Letter invalid.</p>
                        </div>
                        <div class="text-center mt-4">
                            <button class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700 mr-4" onclick="window.print()"><i class="fa fa-print mr-2"></i>Print</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
