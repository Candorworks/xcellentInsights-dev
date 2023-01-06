<x-app-layout>
    <link href="{{ asset('admin/datatables/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Page Content -->
	  <div id="page-wrapper">
	    <div class="container-fluid">
	      <div class="row bg-title">
	        <div class="col-lg-12">
	          <h4 class="page-title">Welcome to My Admin</h4>
	          <ol class="breadcrumb">
	            <li><a href="#" class="active">Sub Admin</a></li>
	          </ol>
	        </div>
	        <!-- /.col-lg-12 -->
	      </div>
          <div class="row">
            <div class="col-sm-12">
              <div class="white-box">
                  <x-alert/>
                <table id="myTable" class="table table-striped">
                  <thead>
                    <tr>
                      <th>ID.</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Active</th>
                      <th>Added date</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                      @php
                          $i=1;
                      @endphp
                    @foreach ($list as $key => $item)
                      <tr>
                        <td>{{ $item->id }}</td>
                        <td >{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->active ? 'Active' : 'Deactive' }}</td>
                        <td>{{ date('d M y H:i A', strtotime($item->created_at)) }}</td>
                        <td>
                          @can('subadmin-edit')
                            <a href="{{ route('subadmin.edit', $item->id) }}" class="btn btn-outline btn-rounded btn-info">Edit</a>
                          @endcan
                          @can('subadmin-delete')
                          <form action="{{ route('subadmin.destroy', $item->id) }}" method="post" style='display:inline'>
                            @method('DELETE')
                            @csrf
                            <button type="submit"onclick="return confirm('Are you sure you want to delete this sub Admin?')" class="btn btn-outline btn-rounded btn-danger">Delete</button>
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
