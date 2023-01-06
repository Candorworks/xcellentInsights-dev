<x-app-layout>
    <link href="{{ asset('admin/datatables/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Page Content -->
	  <div id="page-wrapper">
	    <div class="container-fluid">
	      <div class="row bg-title">
	        <div class="col-lg-12">
	          <h4 class="page-title">Welcome to My Admin</h4>
	          <ol class="breadcrumb">
	            <li><a href="#" class="active">Jobs</a></li>
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
                <div class="table-responsive">
                  <table id="myTable" class="table table-striped">
                    <thead>
                      <tr>
                        <th>Title</th>
                        <th>Location</th>
                        <th>Vacancy</th>
                        <th>Experience</th>
                        <th>Roles</th>
                        <th>Description</th>
                        <th>Active</th>
                        <th>Added date</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($list as $item)
                        <tr>
                          <td>{!! $item->title!!}</td>
                          <td>{!! $item->location!!}</td>
                          <td>{!! $item->no_vacancy!!}</td>
                          <td>{!! $item->experience!!}</td>
                          <td>{!! $item->roles!!}</td>
                          <td>{!! $item->description!!}</td>
                          <td>{{ $item->active ? 'Active' : 'Deactive' }}</td>
                          <td>{{ date('d M y H:i A', strtotime($item->created_at)) }}</td>
                          <td>
                            @can('jobs-edit')
                            <a href="{{ route('jobs.edit', $item->id) }}" class="btn btn-outline btn-rounded btn-info">Edit</a>
                            @endcan
                            @can('jobs-delete')
                            <form action="{{ route('jobs.destroy', $item->id) }}"
                              method="post" style='display:inline'>
                              @method('DELETE')
                              @csrf
                              <button type="submit"
                                  onclick="return confirm('Are you sure you want to delete this job?')"
                                  class="btn btn-outline btn-rounded btn-danger">Delete</button>
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
                    var table = $('#myTable').DataTable({
                        language: {
                        searchPlaceholder: "Search Results",
                        },
                        "lengthMenu": [
                        [5, 10, 25, 50, 100, -1],
                        [5, 10, 25, 50, 100, "All"]
                        ],
                        "autoWidth": true,
                        "responsive": true,
                        "lengthChange": true,
                        "ordering": true,
                        columnDefs: [{
                        targets: [4,5],
                        createdCell: function(cell) {
                            var $cell = $(cell);


                            $(cell).contents().wrapAll("<div class='content'></div>");
                            var $content = $cell.find(".content");

                            $(cell).append($("<button>Read more</button>"));
                            $btn = $(cell).find("button");

                            $content.css({
                            "height": "50px",
                            "overflow": "hidden"
                            })
                            $cell.data("isLess", true);

                            $btn.click(function() {
                            var isLess = $cell.data("isLess");
                            $content.css("height", isLess ? "auto" : "50px")
                            $(this).text(isLess ? "Read less" : "Read more")
                            $cell.data("isLess", !isLess)
                            })
                        }
                        }]
                    });
                });
            </script>

        </x-slot>
</x-app-layout>
