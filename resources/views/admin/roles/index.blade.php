<x-app-layout>
    <link href="{{ asset('admin/datatables/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Page Content -->
	  <div id="page-wrapper">
	    <div class="container-fluid">
	      <div class="row bg-title">
	        <div class="col-lg-12">
	          <h4 class="page-title">Welcome to My Admin</h4>
	          <ol class="breadcrumb">
	            <li><a href="#" class="active">Roles</a></li>
	          </ol>
	        </div>
	        <!-- /.col-lg-12 -->
	      </div>
          <div class="row">
            <div class="col-sm-12">
              <div class="white-box">
                
                <table class="table table-hover" id="myTable">
                    <thead class="thead-dark">
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th width="280px">Action</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        @foreach ($data as $key => $role)
                            <tr>
                                <td>{{ $role->id }}</td>
                                <td>{{ $role->name }}</td>
                                <td>
                                    @can('role-edit')
                                        <a class="btn btn-outline btn-rounded btn-info" href="{{ route('roles.edit', $role->id) }}">Edit</a>
                                    @endcan
                                    @can('role-delete')
                                    <form action="{{ route('roles.destroy', $role->id) }}" method="post" style='display:inline'>
                                      @method('DELETE')
                                      @csrf
                                      <button type="submit"onclick="return confirm('Are you sure you want to delete this role?')" class="btn btn-outline btn-rounded btn-danger">Delete</button>
                                    </form>
                                       
                                    @endcan
                                </td>
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

