<x-app-layout>
    <link href="{{ asset('admin/datatables/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Page Content -->
	  <div id="page-wrapper">
	    <div class="container-fluid">
	      <div class="row bg-title">
	        <div class="col-lg-12">
	          <h4 class="page-title">Welcome to My Admin</h4>
	          <ol class="breadcrumb">
	            <li><a href="#" class="active">Permissions</a></li>
	          </ol>
	        </div>
	        <!-- /.col-lg-12 -->
	      </div>
          <div class="row">
            <div class="col-sm-12">
              <div class="white-box">
                
                <table class="table table-hover"id="myTable">
                    <thead class="thead-dark">
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th width="280px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $key => $permission)
                            <tr>
                                <td>{{ ++$key }}</td>
                                <td>{{ $permission->name }}</td>
                                <td>
                                    @can('permissions-edit')
                                        <a class="btn btn-outline btn-rounded btn-info" href="{{ route('permissions.edit', $permission->id) }}">Edit</a>
                                    @endcan
                                    @can('permissions-delete')
                                      <form action="{{ route('permissions.destroy', $permission->id) }}" method="post" style='display:inline'>
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit"onclick="return confirm('Are you sure you want to delete this permission?')" class="btn btn-outline btn-rounded btn-danger">Delete</button>
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
