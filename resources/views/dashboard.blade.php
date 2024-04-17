<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Make Application') }}
        </h2>
    </x-slot>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tailwind Starter Template - Multi Section Form / Scrollspy: Tailwind Toolbox</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/>
    <link href="https://unpkg.com/@tailwindcss/custom-forms/dist/custom-forms.min.css" rel="stylesheet">
    <!--Replace with your tailwind.css once created-->
    <style>
        .max-h-64 {
            max-height: 16rem;
        }
        /*Quick overrides of the form input as using the CDN version*/
        .form-input,
        .form-textarea,
        .form-select,
        .form-multiselect {
            background-color: #edf2f7;
        }
    </style>

</head>

<body class="bg-gray-100 text-gray-900 tracking-wider leading-normal">
    <form action="{{route('application')}}" method="POST" enctype="multipart/form-data">
        @csrf
<div class="mb-5 text-center">
    <!--Container-->
    <div class="container w-full flex flex-wrap mx-auto px-2 pt-8 lg:pt-16 mt-8">
        <div class="w-full lg:w-1/5 px-6 text-xl text-gray-800 leading-normal">
            <div class="w-full sticky inset-0 hidden max-h-64 lg:h-auto overflow-x-hidden overflow-y-auto lg:overflow-y-hidden lg:block mt-0 my-2 lg:my-0 border border-gray-400 lg:border-transparent bg-white shadow lg:shadow-none lg:bg-transparent z-20" style="top:6em;" id="menu-content">
                <ul class="list-reset py-2 md:py-0">
                    <li class="py-1 md:my-2 hover:bg-yellow-100 lg:hover:bg-transparent border-l-4 border-transparent font-bold border-yellow-600">
                        <a href='#section1' class="block pl-4 align-middle text-gray-700 no-underline hover:text-yellow-600">
                            <span class="pb-1 md:pb-0 text-sm">Personal Information</span>
                        </a>
                    </li>
                    <li class="py-1 md:my-2 hover:bg-yellow-100 lg:hover:bg-transparent border-l-4 border-transparent">
                        <a href='#section2' class="block pl-4 align-middle text-gray-700 no-underline hover:text-yellow-600">
                            <span class="pb-1 md:pb-0 text-sm">Contact Information</span>
                        </a>
                    </li>
                    <li class="py-1 md:my-2 hover:bg-yellow-100 lg:hover:bg-transparent border-l-4 border-transparent">
                        <a href='#section3' class="block pl-4 align-middle text-gray-700 no-underline hover:text-yellow-600">
                            <span class="pb-1 md:pb-0 text-sm">Programs</span>
                        </a>
                    </li>
                    <li class="py-1 md:my-2 hover:bg-yellow-100 lg:hover:bg-transparent border-l-4 border-transparent">
                        <a href='#section4' class="block pl-4 align-middle text-gray-700 no-underline hover:text-yellow-600">
                            <span class="pb-1 md:pb-0 text-sm">Upload Certificates</span>
                        </a>
                    </li>

                    <li class="py-1 md:my-2 hover:bg-yellow-100 lg:hover:bg-transparent border-l-4 border-transparent">
                        <a href='#section5' class="block pl-4 align-middle text-gray-700 no-underline hover:text-yellow-600">
                            <span class="pb-1 md:pb-0 text-sm">Confirmation</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <!--Section container-->
        <section class="w-full lg:w-4/5">
            <!--divider-->
            <hr class="bg-gray-300 my-2">

            <!--Title-->
            <h2 id='section1' class="font-sans font-bold break-normal text-gray-700 px-2 pb-8 text-xl">Personal Information</h2>

            <!--Card-->
            <div class="p-8 mt-6 lg:mt-0 leading-normal rounded shadow bg-white">
            <div class="md:flex mb-6">
                        <div class="md:w-1/3">
                            <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4" for="my-textfield">
                                First Name
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <input class="form-input block w-full focus:bg-white" id="my-textfield" type="text" name="firstname" value="{{ auth()->user()->name }}">
                            @error('firstname')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="md:flex mb-6">
                        <div class="md:w-1/3">
                            <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4" for="my-textfield">
                                Last Name
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <input class="form-input block w-full focus:bg-white" id="my-textfield" type="text" name="lastname">
                            @error('lastname')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="md:flex mb-6">
                        <div class="md:w-1/3">
                            <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4" for="my-textfield">
                                Date of Birth
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <input class="form-input block w-full focus:bg-white" id="my-textfield" type="date" name="dob">
                            @error('dob')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="md:flex mb-6">
                        <div class="md:w-1/3">
                            <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4" for="my-textfield">
                                Gender
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <select name="gender" class="form-input block w-full focus:bg-white">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>

                            </select>
                            @error('gender')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
            </div>
            <!--/Card-->

            <!--divider-->
            <hr class="bg-gray-300 my-12">

            <!--Title-->
            <h2 class="font-sans font-bold break-normal text-gray-700 px-2 pb-8 text-xl">Contact Information</h2>

            <!--Card-->
            <div id='section2' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">
                    <div class="md:flex mb-6">
                        <div class="md:w-1/3">
                            <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4" for="my-textfield">
                                Phone Number
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <input class="form-input block w-full focus:bg-white" id="my-textfield" type="text" name="phone">
                            @error('phone')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="md:flex mb-6">
                        <div class="md:w-1/3">
                            <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4" for="my-textfield">
                                Email Address
                            </label>
                        </div>
                        <div class="md:w-2/3">
                        <input class="form-input block w-full focus:bg-white" id="my-textfield" type="email" name="email" value="{{ auth()->user()->email }}">
                        @error('email')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                        </div>
                    </div>

                    <div class="md:flex mb-6">
                        <div class="md:w-1/3">
                            <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4" for="my-textfield">
                                Country
                            </label>
                        </div>
                        <div class="md:w-2/3">
                        <select name="country" class="form-input block w-full focus:bg-white">
                            <option value="Nigeria">Nigeria</option>
                            <option value="Foreign Country">Foreign Country</option>

                            </select>
                            @error('country')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="md:flex mb-6">
                        <div class="md:w-1/3">
                            <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4" for="my-textfield">
                                State and LGA
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <input class="form-input block w-full focus:bg-white" id="my-textfield" type="text" name="state">
                            @error('state')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="md:flex mb-6">
                        <div class="md:w-1/3">
                            <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4" for="my-textfield">
                                Address
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <input class="form-input block w-full focus:bg-white" id="my-textfield" type="text" name="address">
                            @error('address')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="md:flex md:items-center">
                        <div class="md:w-1/3"></div>
                    </div>
            </div>
            <!--/Card-->

            <!--divider-->
            <hr class="bg-gray-300 my-12">

            <!--Title-->
            <h2 class="font-sans font-bold break-normal text-gray-700 px-2 pb-8 text-xl">Programs</h2>

            <!--Card-->
            <div id='section3' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">
            <div class="md:flex mb-6">
                        <div class="md:w-1/3">
                            <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4" for="my-textfield">
                                Program Type
                            </label>
                        </div>
                        <div class="md:w-2/3">
                        <select name="program_type" class="form-input block w-full focus:bg-white">
                            <option value="Regular">Regular</option>
                            <option value="Evening">Evening</option>

                            </select>
                            @error('program_type')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="md:flex mb-6">
                        <div class="md:w-1/3">
                            <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4" for="my-textfield">
                                Department
                            </label>
                        </div>
                        <div class="md:w-2/3">
                        <select name="dept" class="form-input block w-full focus:bg-white">
                            <option value="Computer Science">Computer Science</option>
                            <option value="Cooperative Economics and Management">Cooperative Economics and Management</option>
                            <option value="Banking and Finance">Banking and Finance</option>
                            <option value="AGRIBUSINESS AND MANAGEMENT">AGRIBUSINESS AND MANAGEMENT</option>
                            <option value="BUSINESS ADMINISTRATION AND MANAGEMENT">BUSINESS ADMINISTRATION AND MANAGEMENT</option>
                            <option value="ACCOUNTANCY">ACCOUNTANCY</option>
                            <option value="HOME AND RURAL ECONOMICS">HOME AND RURAL ECONOMICS</option>

                            </select>
                            @error('dept')
        <p class="text-red-500 text-xs italic">{{ $message }}</p>
        @enderror
                        </div>
                    </div>
                    <div class="md:flex md:items-center">
                        <div class="md:w-1/3"></div>
                    </div>
            </div>
            <!--/Card-->

            <!--divider-->
            <hr class="bg-gray-300 my-12">

            <!--Title-->
            <h2 class="font-sans font-bold break-normal text-gray-700 px-2 pb-8 text-xl">Upload Certificates</h2>

            <!--Card-->
            <div id='section4' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">

            <div class="md:flex mb-6">
            <div id="certificateForm" class="container mx-auto px-4 py-8">
    <div class="max-w-lg mx-auto bg-white shadow-md rounded-lg overflow-hidden">
        <div class="px-6 py-4">
            <h2 class="text-xl font-semibold text-gray-800 mb-2">Upload Certificates</h2>

            <!-- Primary Certificate -->
            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="primaryCertificate">Primary Certificate</label>
                <div class="flex items-center justify-between">
                    <label for="primaryCertificate" class="flex-1 mr-4 rounded-md bg-gray-200 px-4 py-2 cursor-pointer hover:bg-gray-300">
                        <svg class="w-6 h-6 mr-2 text-gray-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="9 14 12 17 20 9"></polyline>
                            <path d="M5 20v-7a4 4 0 0 1 4-4h11"></path>
                        </svg>
                        <span>Choose File</span>
                        <input id="primaryCertificate" name="primaryCertificate" type="file" class="_hidden" accept=".jpg, .jpeg, .png">
                    </label>
                    <span class="text-gray-500 text-xs">Supported formats: PDF, DOCX, JPG, JPEG, PNG</span>
                </div>
                @error('primaryCertificate')
        <p class="text-red-500 text-xs italic">{{ $message }}</p>
        @enderror
            </div>

            <!-- Birth Certificate -->
            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="birthCertificate">Birth Certificate</label>
                <div class="flex items-center justify-between">
                    <label for="birthCertificate" class="flex-1 mr-4 rounded-md bg-gray-200 px-4 py-2 cursor-pointer hover:bg-gray-300">
                        <svg class="w-6 h-6 mr-2 text-gray-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="9 14 12 17 20 9"></polyline>
                            <path d="M5 20v-7a4 4 0 0 1 4-4h11"></path>
                        </svg>
                        <span>Choose File</span>
                        <input id="birthCertificate" name="birthCertificate" type="file" class="_hidden" accept=".jpg, .jpeg, .png">
                    </label>
                    <span class="text-gray-500 text-xs">Supported formats: PDF, DOCX, JPG, JPEG, PNG</span>
                </div>
                @error('birthCertificate')
        <p class="text-red-500 text-xs italic">{{ $message }}</p>
        @enderror
            </div>

            <!-- OLevel Certificate -->
            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="olevelCertificate">OLevel Certificate</label>
                <div class="flex items-center justify-between">
                    <label for="olevelCertificate" class="flex-1 mr-4 rounded-md bg-gray-200 px-4 py-2 cursor-pointer hover:bg-gray-300">
                        <svg class="w-6 h-6 mr-2 text-gray-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="9 14 12 17 20 9"></polyline>
                            <path d="M5 20v-7a4 4 0 0 1 4-4h11"></path>
                        </svg>
                        <span>Choose File</span>
                        <input id="olevelCertificate" name="olevelCertificate" type="file" class="_hidden" accept=".jpg, .jpeg, .png">
                    </label>
                    <span class="text-gray-500 text-xs">Supported formats: PDF, DOCX, JPG, JPEG, PNG</span>
                </div>
                @error('olevelCertificate')
        <p class="text-red-500 text-xs italic">{{ $message }}</p>
        @enderror
            </div>

            <!-- Indegine Certificate -->
            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="indegineCertificate">Indegine Certificate</label>
                <div class="flex items-center justify-between">
                    <label for="indegineCertificate" class="flex-1 mr-4 rounded-md bg-gray-200 px-4 py-2 cursor-pointer hover:bg-gray-300">
                        <svg class="w-6 h-6 mr-2 text-gray-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="9 14 12 17 20 9"></polyline>
                            <path d="M5 20v-7a4 4 0 0 1 4-4h11"></path>
                        </svg>
                        <span>Choose File</span>
                        <input id="indegineCertificate" name="indegineCertificate" type="file" class="_hidden" accept=".jpg, .jpeg, .png">
                    </label>
                    <span class="text-gray-500 text-xs">Supported formats: PDF, DOCX, JPG, JPEG, PNG</span>
                </div>
                @error('indegineCertificate')
        <p class="text-red-500 text-xs italic">{{ $message }}</p>
        @enderror
            </div>
        </div>
    </div>
</div>

                    <div class="md:flex md:items-center">
                        <div class="md:w-1/3"></div>
                    </div>

            </div>
            </div>
            <!--/Card-->

            <!--divider-->
            <hr class="bg-gray-300 my-12">

            <!--Title-->
            <h2 class="font-sans font-bold break-normal text-gray-700 px-2 pb-8 text-xl">Confirmation</h2>

            <!--Card-->
            <div id='section5' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">

                <blockquote class="border-l-4 border-yellow-600 italic my-4 pl-8 md:pl-12">Do confirm your details before submission</blockquote>

                <div class="pt-8">
                    <input class="shadow bg-yellow-700 hover:bg-yellow-500 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded mr-4" type="submit" value="Save">

                </div>

            </div>
            <!--/Card-->

        </section>
        <!--/Section container-->


      </div>
      </form>
      <!--/container-->

<!-- Toggle dropdown list -->
<script>

var userMenuDiv = document.getElementById("userMenu");
var userMenu = document.getElementById("userButton");

 var helpMenuDiv = document.getElementById("menu-content");
 var helpMenu = document.getElementById("menu-toggle");

document.onclick = check;

function check(e){
  var target = (e && e.target) || (event && event.srcElement);

  //User Menu
  if (!checkParent(target, userMenuDiv)) {
	// click NOT on the menu
	if (checkParent(target, userMenu)) {
	  // click on the link
	  if (userMenuDiv.classList.contains("invisible")) {
		userMenuDiv.classList.remove("invisible");
	  } else {userMenuDiv.classList.add("invisible");}
	} else {
	  // click both outside link and outside menu, hide menu
	  userMenuDiv.classList.add("invisible");
	}
  }

   //Help Menu
   if (!checkParent(target, helpMenuDiv)) {
	// click NOT on the menu
	if (checkParent(target, helpMenu)) {
	  // click on the link
	  if (helpMenuDiv.classList.contains("hidden")) {
		helpMenuDiv.classList.remove("hidden");
	  } else {helpMenuDiv.classList.add("hidden");}
	} else {
	  // click both outside link and outside menu, hide menu
	  helpMenuDiv.classList.add("hidden");
	}
   }

}

function checkParent(t, elm) {
  while(t.parentNode) {
	if( t == elm ) {return true;}
	t = t.parentNode;
  }
  return false;
}

</script>

<!-- jQuery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

<!-- Scroll Spy -->
<script>
/* http://jsfiddle.net/LwLBx/ */

// Cache selectors
var lastId,
    topMenu = $("#menu-content"),
    topMenuHeight = topMenu.outerHeight()+175,
    // All list items
    menuItems = topMenu.find("a"),
    // Anchors corresponding to menu items
    scrollItems = menuItems.map(function(){
      var item = $($(this).attr("href"));
      if (item.length) { return item; }
    });

// Bind click handler to menu items
// so we can get a fancy scroll animation
menuItems.click(function(e){
  var href = $(this).attr("href"),
      offsetTop = href === "#" ? 0 : $(href).offset().top-topMenuHeight+1;
  $('html, body').stop().animate({ 
      scrollTop: offsetTop
  }, 300);
  if (!helpMenuDiv.classList.contains("hidden")) {
		helpMenuDiv.classList.add("hidden");
	  }
  e.preventDefault();
});

// Bind to scroll
$(window).scroll(function(){
   // Get container scroll position
   var fromTop = $(this).scrollTop()+topMenuHeight;

   // Get id of current scroll item
   var cur = scrollItems.map(function(){
     if ($(this).offset().top < fromTop)
       return this;
   });
   // Get the id of the current element
   cur = cur[cur.length-1];
   var id = cur && cur.length ? cur[0].id : "";

   if (lastId !== id) {
       lastId = id;
       // Set/remove active class
       menuItems
         .parent().removeClass("font-bold border-yellow-600")
         .end().filter("[href='#"+id+"']").parent().addClass("font-bold border-yellow-600");
   }                   
});

</script>

</body>
</html>
</x-app-layout>
