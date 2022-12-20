<x-app-layout>
    <link href="{{ asset('admin/datatables/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Page Content -->
	  <div id="page-wrapper">
	    <div class="container-fluid">
	      <div class="row bg-title">
	        <div class="col-lg-12">
	          <h4 class="page-title">Welcome to My Admin</h4>
	          <ol class="breadcrumb">
	            <li><a href="#" class="active">Career</a></li>
	          </ol>
	        </div>
	        <!-- /.col-lg-12 -->
	      </div>
        {{-- <div class="toolbar">
          <x-alert/>
        </div> --}}
          <div class="row">
            <div class="col-sm-12">
              <div class="white-box">
                {{-- <a href="{{route('jobs.create')}}" class="btn btn-outline btn-rounded btn-info">Create</a> --}}
                {{-- <h3>Data Table</h3>
                <p class="text-muted m-b-30">Data table example</p> --}}
                {{-- <div class="toolbar"> --}}
                  <x-alert/>
                {{-- </div> --}}
                <table id="myTable" class="table table-striped">
                  <thead>
                    <tr>
                      <th>Title</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>resume_title</th>
                      <th>Message</th>
                      <th>Resume File</th>
                      <th>Received date</th>
                      <th>Active</th>
                      {{-- <th>Action</th> --}}
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($careers as $item)
                      <tr>
                        <td>{{ $item->job_title }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->resume_title }}</td>
                        <td>{{ $item->msg }}</td>
                        <td><a href="{{url('public/File/'.$item->msg)}}" download><i class="fa fa-download" aria-hidden="true"></i></td>
                        <td>{{ $item->created_at->format('d-m-y') }}</td>
                        <td>{{ $item->active ? 'Active' : 'Deactive' }}</td>
                        {{-- <td>
                          <a href="{{ route('jobs.edit', $item->id) }}" class="btn btn-outline btn-rounded btn-info">Edit</a>
                          <form action="{{ route('jobs.destroy', $item->id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-outline btn-rounded btn-danger">Delete</button>
                          </form>
                        </td> --}}

                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>

          </div>
	      <!-- row -->

	    </div>
	    <!-- /.container-fluid -->
	  </div>
	  <!-- /#page-wrapper -->
        <x-slot name="script">
            <script src="{{ asset('admin/datatables/jquery.dataTables.min.js') }}"></script>
            <script>
                $(document).ready(function(){
                    // alert('vikesh');
                    $('#myTable').DataTable();
                });
            </script>

        </x-slot>
</x-app-layout>
