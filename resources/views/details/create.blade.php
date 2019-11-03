@extends('layouts.app')
@section('content')

<section >
		
	<div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col my-5 mx-8">
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
			<h2 class="text-black text-xs font-bold bold text-center">Add Your Biodata.</h2><br><br><br>
			
				
			
		<form  id="form" action="{{route('details.store')}}" method="POST" >
            @csrf
			<div class="-mx-3 md:flex mb-6 ml-2">
				<div class="md:w-3/4 px-3 mb-6 md:mb-0">
					<label class="block uppercase tracking-wide text-black text-xs font-bold mb-2" for="grid-first-name">
						FullName
					</label>
					<input class="appearance-none block w-full bg-grey-lighter text-black border border-red rounded py-3 px-4 mb-3" id="grid-first-name" type="text" placeholder="Ikeogu Emmanuel" name="name" required>
					
				</div>
				<div class="md:w-3/4 px-3 md:mb-0">
					<label class="block uppercase tracking-wide text-black text-xs font-bold mb-2" for="grid-last-name">
						Address
					</label>
					<input class="appearance-none block w-full bg-grey-lighter text-black border border-grey-lighter rounded py-3 px-4" id="grid-last-name" type="text" placeholder="Room 12,Arizona Lodge back of Genesis Choba" name="address" required>
                </div>
                
			</div>
			<div class="-mx-3 md:flex mb-6 ml-2">
				<div class="md:w-3/4 px-3 mb-6 md:mb-0">
					<label class="block uppercase tracking-wide text-black text-xs font-bold mb-2" for="grid-city">
						Department
					</label>
					<input class="appearance-none block w-full bg-grey-lighter text-black border border-grey-lighter rounded py-3 px-4" id="grid-city" type="text" placeholder="Computer Science" name="dept" required>
				</div>

				<div class="md:w-3/4 px-3">
					<label class="block uppercase tracking-wide text-black text-xs font-bold mb-2" for="grid-zip">
						Phone 
					</label>
					<input class="appearance-none block w-full bg-grey-lighter text-black border border-grey-lighter rounded py-3 px-4" id="grid-zip" type="number" placeholder="09021805432" name="phone" required>
				</div>
			</div>
			
			<div class="-mx-3 md:flex mb-2 ml-2">
				
				
				
				<div class="md:w-3/4 px-3" >
					<label class="block uppercase tracking-wide text-black text-xs font-bold mb-2" for="grid-zip">
						Guidian Name
					</label>
					 
					<input class="appearance-none block w-full bg-grey-lighter text-black border border-grey-lighter rounded py-3 px-4" id="grid-zip" type="text" placeholder="Mr John Dee " name="parent" required>
					
                </div>
                <div class="md:w-3/4 px-3">
					<label class="block uppercase tracking-wide text-black text-xs font-bold mb-2" for="grid-zip">
						Guidian Phone 
					</label>
					<input class="appearance-none block w-full bg-grey-lighter text-black border border-grey-lighter rounded py-3 px-4" id="grid-zip" type="number" placeholder="09021805432" name="p_phone" required>
				</div>
			</div>
			<div class="ml-8">
					<button  class="mx-auto lg:mx-0  bg-red-500 text-white font-bold rounded-full mt-4 lg:mt-0 py-4 px-8 shadow opacity-75" type="submit"  name="click">Submit</button>
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


    
@endsection