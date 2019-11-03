
@extends('layouts.app')
@section('content')







		

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


@endsection
