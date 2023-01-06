<x-app-layout>
    <link href="{{ asset('admin/datatables/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Page Content -->
	  <div id="page-wrapper">
	    <div class="container-fluid">
	      <div class="row bg-title">
	        <div class="col-lg-12">
	          <h4 class="page-title">Welcome to My Admin</h4>
	          <ol class="breadcrumb">
	            <li><a href="#" class="active">Publisher</a></li>
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
                  <x-alert/>
                <table id="myTable" class="table table-striped">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Sort Name</th>
                      <th>No of Reports</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($list as $item)
                      <tr>
                        <td>{!! $item->id !!}</td>
                        <td>{!! $item->name!!}</td>
                        <td>{!! $item->sort_name!!}</td>
                        <td>{!! $item->reports->count()!!}</td>
                        <td>
                          <a href="{{ route('publisher.edit', $item->id) }}" class="btn btn-outline btn-rounded btn-info">Edit</a>
                          <form action="{{ route('publisher.destroy', $item->id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-outline btn-rounded btn-danger">Delete</button>
                          </form>
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
