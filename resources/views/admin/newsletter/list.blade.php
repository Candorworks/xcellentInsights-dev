<x-app-layout>
    <link href="{{ asset('admin/datatables/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Page Content -->
	  <div id="page-wrapper">
	    <div class="container-fluid">
	      <div class="row bg-title">
	        <div class="col-lg-12">
	          <h4 class="page-title">Welcome to My Admin</h4>
	          <ol class="breadcrumb">
	            <li><a href="#" class="active">News Letter</a></li>
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
                 <a href="{{ route('admin.newsletter.export') }}"> <button class="btn btn-outline btn-rounded btn-success">Export</button></a>
                <table id="myTable" class="table table-striped">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Email</th>
                      {{-- <th>Status</th> --}}
                      <th>Subscribe date</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php $i=1; @endphp
                    @foreach ($list as $item)
                      <tr>
                        <td>{{$i}}</td>
                        <td>{{$item->email}}</td>
                        {{-- <td>{{ $item->active == '0' ? 'Subscribed' : 'UnSubscribed' }}</td> --}}
                        <td>{{ date('d M y H:i A', strtotime($item->created_at)) }}</td>
                      </tr>
                      @php $i=$i+1; @endphp
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
