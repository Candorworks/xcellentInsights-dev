<x-app-layout>
  {{-- <button type="submit" class="btn btn-purple waves-effect waves-light">Submit</button> --}}

	 <!-- Page Content -->
   <div id="page-wrapper">
    <div class="container-fluid">
      <div class="row bg-title">
        <div class="col-lg-12">
          <h4 class="page-title">Add discount</h4>
          <ol class="breadcrumb">
            <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
            <li><a href="{{ route('admin.discount.list') }}">Discount</a></li>
            <li class="active">Edit</li>
          </ol>
        </div>
        <!-- /.col-lg-12 -->
      </div>
      <!-- row -->
      <div class="row">
        <div class="col-sm-12">
          <div class="white-box">
            {{-- <div class="col-sm-12">
              <a href="{{ route('admin.discount.list') }}" class="btn btn-default btn-circle btn-lg "><i class="fa fa-check"></i> </a>
            </div> --}}
            {{-- <h3>Default Basic Forms</h3>
            <p class="text-muted m-b-30 font-13"> All bootstrap element classies </p> --}}
            <div class="toolbar">
              <x-alert/>
            </div>
            <div class="row">
              <div class="col-md-12">
                <form class="form-horizontal" action="{{ route('admin.discount.update', $discountLead->id) }}" method="POST">
                  @csrf
                  @include('admin.discount.form')
                </form>
              </div>
            </div>
          </div>
        </div>
        
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </div>
	  <!-- /#page-wrapper -->
        <x-slot name="script">
            <script>
                // $(document).ready(function(){
                //     // alert('vikesh');
                //     $('#myTable').DataTable();
                // });
            </script>
            
        </x-slot>
</x-app-layout>
