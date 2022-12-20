<x-app-layout>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'>
    </link>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>
    <link href="{{ asset('admin/datatables/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-12">
                    <h4 class="page-title">Welcome to My Admin</h4>
                    <ol class="breadcrumb">
                        <li><a href="#" class="active">Leads</a></li>
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
                        <x-alert />
                        <div class="table-responsive">
                            <button class="btn btn-outline btn-rounded btn-success" onclick="return ExportformSubmit();">Export</button>
                            <table id="myTable" class="table table-striped">
                                <thead>
                                    <tr>    
                                        <th>
                                            <div class="col-sm-1">
                                              <input type="checkbox" id="select_all_reports" class="report_ids">
                                              </div>
                                              
                                          </th>
                                        <th>ID</th>
                                        <th>Report ID</th>
                                        <th>Email</th>
                                        {{-- <th>Plan</th> --}}
                                        <th>Discount Type</th>
                                        <th>Discount</th>
                                        <th>Discount Link</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($list as $item)
                                        <tr>
                                            <td> <input type="checkbox" class="select_reports" name="select_reports"
                                                value="{!! $item->id !!}"> </td>
                                            <td>{{ $item->id }}</td>
                                            <td>{!! $item->report_id !!}</td>
                                            <td>{!! $item->email !!}</td>
                                            {{-- <td>{!! ucfirst($item->plan) !!} User license</td> --}}
                                            <td>{!! $item->type !!}</td>
                                            <td>{!! $item->discount_value !!}</td>
                                            <td><a href="{{ url('/checkout/').'/'.$item->report_id }}/{{ $item->link }}" target="_blank"> open link <i class="ti-new-window"></i></a></td>
                                            <td>{{ $item->status == 'Active' ? 'Active' : 'Expired' }}</td>
                                            <td>
                                                @can('discount-edit')
                                                <a href="{{ route('admin.discount.edit', $item->id) }}" class="btn btn-outline btn-rounded btn-info">Edit</a>
                                                @endcan
                                            </td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <form id="Exportform" action='{{ route('admin.discount.export') }}' method="get">
                    <input type="hidden" name="report_ids" class="report_ids" id="report_ids" value="">
                </form>

            </div>
            <!-- row -->

        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- Modal -->
   
    <!-- /#page-wrapper -->
    <x-slot name="script">
        <script src="{{ asset('admin/datatables/jquery.dataTables.min.js') }}"></script>
        <script>
                $(document).ready(function(){
                    // alert('vikesh');
                    // $('#myTable').DataTable();
                    var table = $('#myTable').DataTable({
                        // language: {
                        // searchPlaceholder: "Search Results",
                        // },
                        // "lengthMenu": [
                        // [5, 10, 25, 50, 100, -1],
                        // [5, 10, 25, 50, 100, "All"]
                        // ],
                        // "autoWidth": true,
                        // "responsive": true,
                        // "lengthChange": true,
                        "ordering": false,
                        // columnDefs: [{
                        // targets: [12],
                        // createdCell: function(cell) {
                        //     var $cell = $(cell);


                        //     $(cell).contents().wrapAll("<div class='content'></div>");
                        //     var $content = $cell.find(".content");

                        //     $(cell).append($("<button>Read more</button>"));
                        //     $btn = $(cell).find("button");

                        //     $content.css({
                        //     "height": "50px",
                        //     "overflow": "hidden"
                        //     })
                        //     $cell.data("isLess", true);

                        //     $btn.click(function() {
                        //     var isLess = $cell.data("isLess");
                        //     $content.css("height", isLess ? "auto" : "50px")
                        //     $(this).text(isLess ? "Read less" : "Read more")
                        //     $cell.data("isLess", !isLess)
                        //     })
                        // }
                        // }]
                    });
                });
                $("#select_all_reports").click(function() {
                    $(".select_reports").prop('checked', $(this).prop('checked'));
                });
                function ExportformSubmit() {
                  var searchIDs = $('input[name="select_reports"]:checked').map(function() {
                      return $(this).val();
                  }).get(); // <----
                  if(searchIDs.length == 0){
                      alert('please select lead for export');
                      return false;
                  }
                  $(".report_ids").val(searchIDs);
                  $("#Exportform").submit();
              }
                </script>

    </x-slot>
</x-app-layout>
