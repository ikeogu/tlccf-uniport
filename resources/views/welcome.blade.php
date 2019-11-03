
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Campus Fellowship Bretheren</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">

  <!-- Font Awesome if you need it
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
  -->
  <link rel="stylesheet" href="{{asset('css/tailwind.css')}}">
  <!--Replace with your tailwind.css once created-->
    
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet">

	<!-- Define your gradient here - use online tools to find a gradient matching your branding-->
	<style>
		.gradient {
			background: linear-gradient(90deg, #d53369 0%, #daae51 100%);
		}
	</style>

</head>

<body class="leading-normal tracking-normal text-white gradient" style="font-family: 'Source Sans Pro', sans-serif;">

<!--Nav-->
<nav id="header" class="fixed w-full z-30 top-0 text-white">

	<div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 py-2">
			
		<div class="pl-4 flex items-center">
			<a class="toggleColour text-white no-underline hover:no-underline font-bold text-2xl lg:text-4xl"  href="#"> 
				<!--Icon from: http://www.potlabicons.com/ -->
				<!-- <svg class="h-8 fill-current inline" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512.005 512.005">
				<rect fill="#2a2a31" x="16.539" y="425.626" width="479.767" height="50.502" transform="matrix(1,0,0,1,0,0)" fill="rgb(0,0,0)" />
				<path class="plane-take-off" d=" M 510.7 189.151 C 505.271 168.95 484.565 156.956 464.365 162.385 L 330.156 198.367 L 155.924 35.878 L 107.19 49.008 L 211.729 230.183 L 86.232 263.767 L 36.614 224.754 L 0 234.603 L 45.957 314.27 L 65.274 347.727 L 105.802 336.869 L 240.011 300.886 L 349.726 271.469 L 483.935 235.486 C 504.134 230.057 516.129 209.352 510.7 189.151 Z "/>
				</svg>  -->
				<div class="lg:flex">
					<div class="mr-3">
						<img src="{{asset('img/logo.jpg')}}" height='50' width='50' alt="logo">	
					</div>
					<div class="mr-3">
					TLCCF UNIPORT
					</div>
				</div>
				
				
			</a>
		</div>

		<div class="block lg:hidden pr-4">
			<button id="nav-toggle" class="flex items-center p-1 text-orange-800 hover:text-gray-900">
				<svg class="fill-current h-6 w-6" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
			</button>
		</div>

		<div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden lg:block mt-2 lg:mt-0 bg-white lg:bg-transparent text-black p-4 lg:p-0 z-20" id="nav-content">
			<ul class="list-reset lg:flex justify-end flex-1 items-center">
				<li class="mr-3">
					<a class="inline-block py-2 px-4 text-black font-bold no-underline" ></a>
				</li>
				<li class="mr-3">
					<a class="inline-block text-black no-underline hover:text-gray-800 hover:text-underline py-2 px-4" href="#"></a>
				</li>
				<li class="mr-3">
					<a class="inline-block text-black no-underline hover:text-gray-800 hover:text-underline py-2 px-4" href="#"></a>
				</li>
			</ul>
			<button id="navAction" class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full mt-4 lg:mt-0 py-4 px-8 shadow opacity-75"></button>
		</div>
	</div>
	
	<hr class="border-b border-gray-100 opacity-25 my-0 py-0" />
</nav>




<!--Hero-->
<div class="pt-24">

	<div class="container px-3 mx-auto flex flex-wrap flex-col md:flex-row items-center">
		<!--Left Col-->
		<div class="flex flex-col w-full md:w-2/5 justify-center items-start text-center md:text-left">
			<p class="uppercase tracking-loose w-full">The Lord's Chosen Campus Fellowship</p>
			<h3 class="my-4 text-5xl font-bold leading-tight">This is a student arm of the mother church!</h3>
			<p class="leading-normal text-2xl mb-8">Expanding God's Kingdom even on Campus!</p>
		
			

			<button class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full my-6 py-4 px-8 shadow-lg">UniPort Chapter</button>
			
		</div>
		<!--Right Col-->
		
		
	</div>

</div>


<div class="relative -mt-12 lg:-mt-24">
	<svg viewBox="0 0 1428 174" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
	<g transform="translate(-2.000000, 44.000000)" fill="#FFFFFF" fill-rule="nonzero">
	<path d="M0,0 C90.7283404,0.927527913 147.912752,27.187927 291.910178,59.9119003 C387.908462,81.7278826 543.605069,89.334785 759,82.7326078 C469.336065,156.254352 216.336065,153.6679 0,74.9732496" opacity="0.100000001"></path>
	<path d="M100,104.708498 C277.413333,72.2345949 426.147877,52.5246657 546.203633,45.5787101 C666.259389,38.6327546 810.524845,41.7979068 979,55.0741668 C931.069965,56.122511 810.303266,74.8455141 616.699903,111.243176 C423.096539,147.640838 250.863238,145.462612 100,104.708498 Z" opacity="0.100000001"></path>
	<path d="M1046,51.6521276 C1130.83045,29.328812 1279.08318,17.607883 1439,40.1656806 L1439,120 C1271.17211,77.9435312 1140.17211,55.1609071 1046,51.6521276 Z" id="Path-4" opacity="0.200000003"></path>
	</g>
	<g transform="translate(-4.000000, 76.000000)" fill="#FFFFFF" fill-rule="nonzero">
	<path d="M0.457,34.035 C57.086,53.198 98.208,65.809 123.822,71.865 C181.454,85.495 234.295,90.29 272.033,93.459 C311.355,96.759 396.635,95.801 461.025,91.663 C486.76,90.01 518.727,86.372 556.926,80.752 C595.747,74.596 622.372,70.008 636.799,66.991 C663.913,61.324 712.501,49.503 727.605,46.128 C780.47,34.317 818.839,22.532 856.324,15.904 C922.689,4.169 955.676,2.522 1011.185,0.432 C1060.705,1.477 1097.39,3.129 1121.236,5.387 C1161.703,9.219 1208.621,17.821 1235.4,22.304 C1285.855,30.748 1354.351,47.432 1440.886,72.354 L1441.191,104.352 L1.121,104.031 L0.457,34.035 Z"></path>
	</g>
	</g>
	</svg>
</div>




		

<section class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col my-5">
	
	<div class="container mx-auto flex flex-wrap pt-4 pb-12">
	
		<h1 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">Members</h1>
		<div class="w-full mb-4">	
			<div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
		</div>
	
		<div class="flex flex-wrap">
            @foreach($all as $item)
    
			<div class="flex-shrink-0 m-6 relative overflow-hidden bg-orange-500 rounded-lg max-w-xs shadow-lg">
				<svg class="absolute bottom-0 left-0 mb-8" viewBox="0 0 375 283" fill="none" style="transform: scale(1.5); opacity: 0.1;">
					<rect x="159.52" y="175" width="152" height="152" rx="8" transform="rotate(-45 159.52 175)" fill="white"/>
					<rect y="107.48" width="152" height="152" rx="8" transform="rotate(-45 0 107.48)" fill="white"/>
				</svg>
				<div class="relative pt-10 px-10 flex items-center justify-center">
					<div class="block absolute w-48 h-48 bottom-0 left-0 -mb-24 ml-3" style="background: radial-gradient(black, transparent 60%); transform: rotate3d(0, 0, 1, 20deg) scale3d(1, 0.6, 1); opacity: 0.2;"></div>
                        <img class="relative w-40" src="{{$item->image}}" alt="">
				</div>
                <div class="relative text-white px-6 pb-6 mt-6">
                    <span class="block opacity-75 -mb-1">{{$item->name}}</span>
                    <div class="flex justify-between">
                    <span class="block font-semibold text-xl">{{$item->phone}}</span>
                    <span class="block bg-white rounded-full text-orange-500 text-xs font-bold px-3 py-2 leading-none flex items-center">{{$item->year}}</span>
                    </div>
                </div>
			</div>
			
             
            
              
            @endforeach
		
        </div>
    </div>
     

</section>

<section >
	<div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col my-5">
            <div>
                    @if ($message = Session::get('success'))
      
                        <div class="p-2 bg-green-600 items-center text-indigo-100 leading-none lg:rounded-full flex lg:inline-flex" role="alert">
      
                            <button type="button" class="close" data-dismiss="alert">×</button>
      
                            <span class="font-semibold mr-2 text-left flex-auto">{{ $message }}</span>
      
                        </div>
      
                    @endif
      
                    @if (count($errors) > 0)
                        <div class="p-2 bg-red-500 items-center text-indigo-100 leading-none lg:rounded-full flex lg:inline-flex" role="alert">
						<span class="font-semibold mr-2 text-left flex-auto"><strong>Whoops!</strong> There were some problems with your input.</span><br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
			<h3 class="text-black text-xs font-bold bold">Please fill out this field.</h3>
			
				
			
		<form  id="form" action="{{route('member.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
			<div class="-mx-3 md:flex mb-6">
				<div class="md:w-1/2 px-3 mb-6 md:mb-0">
					<label class="block uppercase tracking-wide text-black text-xs font-bold mb-2" for="grid-first-name">
						Display Name
					</label>
					<input class="appearance-none block w-full bg-grey-lighter text-black border border-red rounded py-3 px-4 mb-3" id="grid-first-name" type="text" placeholder="Jane Emmanuel" name="name" required>
					
				</div>
				<div class="md:w-1/2 px-3">
					<label class="block uppercase tracking-wide text-black text-xs font-bold mb-2" for="grid-last-name">
						Email
					</label>
					<input class="appearance-none block w-full bg-grey-lighter text-black border border-grey-lighter rounded py-3 px-4" id="grid-last-name" type="email" placeholder="Emmanuel@mailCompany.com" name="email" required>
				</div>
			</div>
			
			<div class="-mx-3 md:flex mb-2">
				<div class="md:w-1/2 px-3 mb-6 md:mb-0">
					<label class="block uppercase tracking-wide text-black text-xs font-bold mb-2" for="grid-city">
						Set
					</label>
					<input class="appearance-none block w-full bg-grey-lighter text-black border border-grey-lighter rounded py-3 px-4" id="grid-city" type="text" placeholder="U2014" name="year" required>
				</div>
				
				<div class="md:w-1/2 px-3">
					<label class="block uppercase tracking-wide text-black text-xs font-bold mb-2" for="grid-zip">
						Phone 
					</label>
					<input class="appearance-none block w-full bg-grey-lighter text-black border border-grey-lighter rounded py-3 px-4" id="grid-zip" type="number" placeholder="09021805432" name="phone" required>
				</div>
				<div class="md:w-1/2 px-3" >
					<label class="block uppercase tracking-wide text-black text-xs font-bold mb-2" for="grid-zip">
						Photo 
					</label>
					 
						<label class="w-64 flex flex-col items-center px-4 py-6 bg-white text-blue rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer hover:bg-blue-700 hover:text-black bg-red-500" >
							<svg class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
								<path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
							</svg>
							<span class="mt-2 text-base leading-normal">Select  photo</span>
							<input type='file' class="hidden"  name="image">
						</label>
					
				</div>
			</div>
			<div class="container mx-auto">
					<button  class="mx-auto lg:mx-0  bg-red-500 text-white font-bold rounded-full mt-4 lg:mt-0 py-4 px-8 shadow opacity-75" type="submit"  name="click">Post</button>
			</div>
		</form>
	</div>
</section>


<!-- Change the colour #f8fafc to match the previous section colour -->
<svg class="wave-top" viewBox="0 0 1439 147" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
		<g transform="translate(-1.000000, -14.000000)" fill-rule="nonzero">
			<g class="wave" fill="#f8fafc">
				<path d="M1440,84 C1383.555,64.3 1342.555,51.3 1317,45 C1259.5,30.824 1206.707,25.526 1169,22 C1129.711,18.326 1044.426,18.475 980,22 C954.25,23.409 922.25,26.742 884,32 C845.122,37.787 818.455,42.121 804,45 C776.833,50.41 728.136,61.77 713,65 C660.023,76.309 621.544,87.729 584,94 C517.525,105.104 484.525,106.438 429,108 C379.49,106.484 342.823,104.484 319,102 C278.571,97.783 231.737,88.736 205,84 C154.629,75.076 86.296,57.743 0,32 L0,0 L1440,0 L1440,84 Z"></path>
			</g>
			<g transform="translate(1.000000, 15.000000)" fill="#FFFFFF">
				<g transform="translate(719.500000, 68.500000) rotate(-180.000000) translate(-719.500000, -68.500000) ">
					<path d="M0,0 C90.7283404,0.927527913 147.912752,27.187927 291.910178,59.9119003 C387.908462,81.7278826 543.605069,89.334785 759,82.7326078 C469.336065,156.254352 216.336065,153.6679 0,74.9732496" opacity="0.100000001"></path>
					<path d="M100,104.708498 C277.413333,72.2345949 426.147877,52.5246657 546.203633,45.5787101 C666.259389,38.6327546 810.524845,41.7979068 979,55.0741668 C931.069965,56.122511 810.303266,74.8455141 616.699903,111.243176 C423.096539,147.640838 250.863238,145.462612 100,104.708498 Z" opacity="0.100000001"></path>
					<path d="M1046,51.6521276 C1130.83045,29.328812 1279.08318,17.607883 1439,40.1656806 L1439,120 C1271.17211,77.9435312 1140.17211,55.1609071 1046,51.6521276 Z" opacity="0.200000003"></path>
				</g>
			</g>
		</g>
	</g>
</svg>

<section class="container mx-auto text-center py-6 mb-12">

	<h1 class="w-full my-2 text-5xl font-bold leading-tight text-center text-white">Let Love Lead.</h1>
	<div class="w-full mb-4">	
		<div class="h-1 mx-auto bg-white w-1/6 opacity-25 my-0 py-0 rounded-t"></div>
	</div>

	<h3 class="my-4 text-3xl leading-tight">Thank you for being part of my life for few years<br>God bless you</h3>	

	<button class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full my-6 py-4 px-8 shadow-lg">Go and Conquer!</button>
		
</section>


<!--Footer-->
<footer class="bg-white">
	<div class="container mx-auto  px-8">

        <div class="w-full flex flex-col md:flex-row py-6">
			
		
		
            <div class="flex-1">
                <p class="uppercase text-black md:mb-6">Campus Fellowship Uniport</p>
                <ul class="list-reset mb-6">
                    <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                        <a href="#" class="no-underline hover:underline text-gray-800 hover:text-orange-500"></a>
                    </li>
                    <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                        <a href="#" class="no-underline hover:underline text-gray-800 hover:text-orange-500"></a>
                    </li>
                    <li class="mt-2 inline-block mr-2 md:block md:mr-0">
						
                    </li>
                </ul>
            </div>
        </div>
    </div>
	<p class="uppercase text-black md:mb-6">Desiged by	<a href="https://emmanuel-chidera.netlify.com/"> Emmanuel Chidera</a></p>
	
</footer>




  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  

<script>

	var scrollpos = window.scrollY;
	var header = document.getElementById("header");
	var navcontent = document.getElementById("nav-content");
	var navaction = document.getElementById("navAction");
	var brandname = document.getElementById("brandname");
	var toToggle = document.querySelectorAll(".toggleColour");

	document.addEventListener('scroll', function() {

	/*Apply classes for slide in bar*/
	scrollpos = window.scrollY;

    if(scrollpos > 10){
      header.classList.add("bg-white");
	  navaction.classList.remove("bg-white");
	  navaction.classList.add("gradient");
	  navaction.classList.remove("text-gray-800");
	  navaction.classList.add("text-white");
	  //Use to switch toggleColour colours
  	  for (var i = 0; i < toToggle.length; i++) {
	     toToggle[i].classList.add("text-gray-800");
		 toToggle[i].classList.remove("text-white");
	  }
	  header.classList.add("shadow");
	  navcontent.classList.remove("bg-gray-100");
	  navcontent.classList.add("bg-white");
    }
    else {
	  header.classList.remove("bg-white");
	  navaction.classList.remove("gradient");
	  navaction.classList.add("bg-white");
	  navaction.classList.remove("text-white");
	  navaction.classList.add("text-gray-800");
	  //Use to switch toggleColour colours
  	  for (var i = 0; i < toToggle.length; i++) {
	     toToggle[i].classList.add("text-white");
		 toToggle[i].classList.remove("text-gray-800");
	  }
	  
	  header.classList.remove("shadow");
	  navcontent.classList.remove("bg-white");
	  navcontent.classList.add("bg-gray-100");
	  
    }

	});

	
</script>

<script>
	
	
	/*Toggle dropdown list*/
	/*https://gist.github.com/slavapas/593e8e50cf4cc16ac972afcbad4f70c8*/
	
	var navMenuDiv = document.getElementById("nav-content");
	var navMenu = document.getElementById("nav-toggle");
	
	document.onclick = check;
	function check(e){
	  var target = (e && e.target) || (event && event.srcElement);
	  
	  //Nav Menu
	  if (!checkParent(target, navMenuDiv)) {
		// click NOT on the menu
		if (checkParent(target, navMenu)) {
		  // click on the link
		  if (navMenuDiv.classList.contains("hidden")) {
			navMenuDiv.classList.remove("hidden");
		  } else {navMenuDiv.classList.add("hidden");}
		} else {
		  // click both outside link and outside menu, hide menu
		  navMenuDiv.classList.add("hidden");
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
<script>
// 	// Variable to hold request
// var request;
// var image = document.querySelector('input[data-image]');

// // Bind to the submit event of our form
// $("#form").submit(function(event){

//     // Prevent default posting of form - put here to work in case of errors
//     event.preventDefault();

//     // Abort any pending request
//     if (request) {
//         request.abort();
//     }
//     // setup some local variables
//     var $form = $(this);

//     // Let's select and cache all the fields
//      var $inputs = $form.find("input, button");

//     // Serialize the data in the form
//     var serializedData = $form.serialize();
	
// 	console.log(ímage);
	

//     // Let's disable the inputs for the duration of the Ajax request.
//     // Note: we disable elements AFTER the form data has been serialized.
//     // Disabled form elements will not be serialized.
//     $inputs.prop("disabled", true);

//     // Fire off the request to /form.php
//     request = $.ajax({
//         url: "/member.php",
//         type: "post",
//         data: serializedData
//     });

//     // Callback handler that will be called on success
//     request.done(function (response, textStatus, jqXHR){
//         // Log a message to the console
// 		alert(response);
// 		$("#result").html('Submitted successfully');
//     });

//     // Callback handler that will be called on failure
//     request.fail(function (jqXHR, textStatus, errorThrown){
//         // Log the error to the console
//         console.error(
//             "The following error occurred: "+
//             textStatus, errorThrown
//         );
//     });

//     // Callback handler that will be called regardless
//     // if the request failed or succeeded
//     request.always(function () {
//         // Reenable the inputs
//         $inputs.prop("disabled", false);
//     });
	

// });



</script>

</body>

</html>
