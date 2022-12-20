<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Page Content -->
	  <div id="page-wrapper">
	    <div class="container-fluid">
	      <div class="row bg-title">
	        <div class="col-lg-12">
	          <h4 class="page-title">Welcome to My Admin</h4>
	          <ol class="breadcrumb">
	            <li><a href="#" class="active">Dashboard</a></li>
	          </ol>
	        </div>
	        <!-- /.col-lg-12 -->
	      </div>
	      <div class="row">
	        
	        <div class="col-md-3 col-xs-12 col-sm-6" >
	          <div class="bg-info m-b-20">
	            <div id="myCarouse2" class="carousel vcarousel slide p-20">
	              <!-- Carousel items -->
	              <div class="carousel-inner ">
	                <div class="active item">
	                  <h3 class="text-white"> <span class="font-bold">Industry Vertical</span><br/>
	                    </h3>
	                  <div class="twi-user">
	                    <h4 class="text-white m-b-0">{{ $category}}</h4>
	                    <!-- <p class="text-white">Actor</p> -->
	                  </div>
	                </div>
	                
	              </div>
	            </div>
	          </div>
	        </div>

			<div class="col-md-3 col-xs-12 col-sm-6" >
	          <div class="bg-info m-b-20">
	            <div id="myCarouse2" class="carousel vcarousel slide p-20">
	              <!-- Carousel items -->
	              <div class="carousel-inner ">
	                <div class="active item">
	                  <h3 class="text-white"> <span class="font-bold">Reports</span><br/>
	                    </h3>
	                  <div class="twi-user">
	                    <h4 class="text-white m-b-0">{{ $report}}</h4>
	                    <!-- <p class="text-white">Actor</p> -->
	                  </div>
	                </div>
	                
	              </div>
	            </div>
	          </div>
	        </div>

			<div class="col-md-3 col-xs-12 col-sm-6" >
	          <div class="bg-info m-b-20">
	            <div id="myCarouse2" class="carousel vcarousel slide p-20">
	              <!-- Carousel items -->
	              <div class="carousel-inner ">
	                <div class="active item">
	                  <h3 class="text-white"> <span class="font-bold">Leads</span><br/>
	                    </h3>
	                  <div class="twi-user">
	                    <h4 class="text-white m-b-0">{{ $leads}}</h4>
	                    <!-- <p class="text-white">Actor</p> -->
	                  </div>
	                </div>
	                
	              </div>
	            </div>
	          </div>
	        </div>

			<div class="col-md-3 col-xs-12 col-sm-6" >
	          <div class="bg-info m-b-20">
	            <div id="myCarouse2" class="carousel vcarousel slide p-20">
	              <!-- Carousel items -->
	              <div class="carousel-inner ">
	                <div class="active item">
	                  <h3 class="text-white"> <span class="font-bold">Publishers</span><br/>
	                    </h3>
	                  <div class="twi-user">
	                    <h4 class="text-white m-b-0">{{ $publisher}}</h4>
	                    <!-- <p class="text-white">Actor</p> -->
	                  </div>
	                </div>
	                
	              </div>
	            </div>
	          </div>
	        </div>
	      </div>
	      <!-- row -->
	      
	    </div>
	    <!-- /.container-fluid -->
	  </div>
	  <!-- /#page-wrapper -->
	    
		<x-slot name="script">
		</x-slot>
</x-app-layout>
