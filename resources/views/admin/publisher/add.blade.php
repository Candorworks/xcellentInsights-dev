<x-app-layout>
  {{-- <button type="submit" class="btn btn-purple waves-effect waves-light">Submit</button> --}}

	 <!-- Page Content -->
   <div id="page-wrapper">
    <div class="container-fluid">
      <div class="row bg-title">
        <div class="col-lg-12">
          <h4 class="page-title">Add Publisher</h4>
          <ol class="breadcrumb">
            <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
            <li><a href="{{ route('publisher.index') }}">Publisher</a></li>
            <li class="active">Add</li>
          </ol>
        </div>
        <!-- /.col-lg-12 -->
      </div>
      <!-- row -->
      <div class="row">
        <div class="col-sm-12">
          <div class="white-box">
            {{-- <h3>Default Basic Forms</h3>
            <p class="text-muted m-b-30 font-13"> All bootstrap element classies </p> --}}
            <div class="toolbar">
              <x-alert/>
            </div>
            <div class="row">
              <div class="col-md-12">
                <form class="form-horizontal" action="{{ route('publisher.store') }}" method="POST">
                  @csrf
                  @include('admin.publisher.form')
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
