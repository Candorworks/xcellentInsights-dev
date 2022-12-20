<x-app-layout>
    <link href="{{ asset('admin/datatables/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-12">
                    <h4 class="page-title">Welcome to My Admin</h4>
                    <ol class="breadcrumb">
                        <li><a href="#" class="active">Reports</a></li>
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
                            <div class="row" style="margin-bottom: 20px;">

                                <div class="col-lg-1">
                                    <button class="form-control btn-block btn btn-outline btn-rounded btn-success" onclick="return ExportformSubmit();">Export</button>
                                </div>

                                <div class="col-lg-2">
                                    <div class="dropdown btn-group">
                                        <button class="form-control btn btn-outline btn-rounded btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Top Selling <span class="caret"></span>
                                        </button>
                                        <div class="dropdown-menu top_selling_dropdown" aria-labelledby="dropdownMenuButton">
                                            <button class="dropdown-item btn btn-primary btn-block btn-rounded " onclick="return markTopSellingFormSubmit();">Mark Top Selling</button>
                                            <button class="dropdown-item btn btn-primary btn-block btn-rounded" onclick="return unmarkTopSellingFormSubmit();">Unmark Top Selling</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6" id="normal_search" style="display:block;">
                                    <form action='{{ route('reports.index') }}' method="GET">
                                        <div class="row">
                                            <div class="col-md-9 p-0">
                                                <input type="text" name="title" id="title" class="form-control" value="{{@request()->title}}" placeholder="Search here..">
                                            </div>
                                            <div class="col-md-3">
                                                <input type="submit" value="Search" class="form-control topSelling_search btn btn-outline btn-rounded btn-primary btn-block">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-lg-6" id="csv_search" style="display:none;">
                                    <div class="row">
                                        <div class="col-lg-11">
                                            <form id="Uploadcsvfile" action='{{ route('admin.report.uploadCsvFile') }}' method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-md-9 p-0">
                                                        <input type="file" name="importcsv" id="importcsv" class="col-md-12 form-control">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <button type="submit" class="btn btn-rounded btn-warning btn-block form-control" required>Search by CSV</button>
                                                    </div>

                                                </div>
                                            </form>
                                        </div>
                                        <div class="col-lg-1 p-0">
                                            <a href="{{route('admin.report.downloadSampleCsv')}}">
                                                <button class="btn btn-outline btn-rounded btn-info btn-block header_file form-control" style="width:60px;" title="Download Header File">
                                                    <i class="fa fa-download fa-lg" aria-hidden="true"></i>
                                                </button>
                                            </a>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-lg-3">
                                    <div class="row">
                                        <div class="col-lg-5 form-check">
                                            <label class="switch form-check-label" for="search_asset_csv">
                                                <input class="form-check-input" type="checkbox" id="search_asset_csv" checked>
                                                <span class="slider round" id="searc_asset_span" title="Search by CSV"></span>
                                            </label>
                                        </div>
                                        <div class="col-lg-5 p-0" style="position: relative; left:-43px; bottom:-7px;">
                                            <p id="toggle_search_button">Search by CSV</p>
                                        </div>
                                        <div class="col-lg-2">
                                            <a href="{{url('admin/reports')}}" target="_self" title="Refresh">
                                                <i class="fa fa-refresh fa-lg text-primary" id="reportsRefresh" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                            </div>



                            <table id="myTable" class="table table-striped">
                                <thead>
                                    <tr>
                                        @can('report-delete')
                                        <th>
                                            <div class="col-sm-1">
                                                <input type="checkbox" id="select_all_reports" class="report_ids">
                                            </div>
                                            <div class="col-sm-3">
                                                <button class="btn btn-outline btn-rounded btn-danger" onclick="return formSubmit();">Delete</button>
                                            </div>
                                        </th>
                                        @endcan
                                        <th>Action</th>
                                        <th>Top Selling</th>
                                        <th>Report Id</th>
                                        <th>Unique Id</th>
                                        <th>Category</th>
                                        <th>Publisher</th>
                                        <th>Meta Title</th>
                                        <th>Meta Desc</th>
                                        <th>Title</th>
                                        <th>Url Title</th>
                                        <th>Report Page</th>
                                        <th>Format</th>
                                        <th>S L Price</th>
                                        <th>M L Price</th>
                                        <th>E L Price</th>
                                        <th>Pages</th>
                                        <th>Active</th>
                                        <th>Publish date</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($list->items() as $item)
                                    <tr>
                                        @can('report-delete')
                                        <td> <input type="checkbox" class="select_reports" name="select_reports" value="{!! $item->id !!}"> </td>
                                        @endcan
                                        <td>
                                            @can('report-edit')
                                            <a href="{{ route('reports.edit', $item->id) }}" class="btn btn-outline btn-rounded btn-info">Edit</a>
                                            @endcan
                                            @can('report-delete')
                                            <form action="{{ route('reports.destroy', $item->id) }}" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <button class="btn btn-outline btn-rounded btn-danger">Delete</button>
                                            </form>
                                            @endcan
                                        </td>
                                        <td class="text-center">
                                            <!-- {{ $item->top_selling === 0 ? 'No'  : 'Yes' }}  -->
                                            @if($item->top_selling===0)
                                            <input type="checkbox" class="select_top_selling_reports" name="select_top_selling_reports" onclick="return markTopSellingFormSubmitSingle();" value="{!! $item->id !!}">
                                            @else
                                            <input type="checkbox" class="select_top_selling_reports" name="select_top_selling_reports" onclick="return unmarkTopSellingFormSubmitSingle({!! $item->id !!});" value="{!! $item->id !!}" checked>
                                            @endif
                                        </td>
                                        <td>{!! $item->id !!}</td>
                                        <td>{!! $item->unique_id !!}</td>
                                        <td>{!! @$item->category->name !!}</td>
                                        <td>{!! @$item->publisher->name !!}</td>
                                        <td>{!! $item->meta_title !!}</td>
                                        <td>{!! $item->meta_desc !!}</td>
                                        <td>{!! $item->title !!}</td>
                                        <td>{!! $item->url_title !!}</td>
                                        <td><a href="{{ route('report_detail', $item->slug) }}" target="_blank">open link <i class="ti-new-window"></i></a></td>
                                        <td>{!! $item->format !!}</td>
                                        <td>{!! $item->single_price !!}</td>
                                        <td>{!! $item->multi_price !!}</td>
                                        <td>{!! $item->enterprise_price !!}</td>
                                        <td>{!! $item->pages !!}</td>
                                        <td>{{ ($item->active==1) ? 'Active' : (($item->active==2) ?'Active but Not Published' : 'Deactive' )}}</td>
                                        <td>{{ date('M y', strtotime($item->publish)) }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        {{ $list->onEachSide(5)->links() }}
                    </div>
                </div>

            </div>
            <form id="multi-delete" action='{{ route('admin.report.multiReportDelete') }}' method="POST">
                @csrf
                <input type="hidden" name="report_ids" class="report_ids" id="report_ids" value="">
            </form>
            <form id="Exportform" action='{{ route('admin.report.bulk.all') }}' method="get">
                <input type="hidden" name="report_ids" class="report_ids" id="report_ids" value="">
            </form>
            <form id="MarkTopSellingForm" action='{{ route('admin.reports.mark-top-selling') }}' method="POST">
                @csrf
                <input type="hidden" name="report_ids" class="report_ids" id="report_ids" value="">
            </form>
            <form id="UnmarkTopSellingForm" action='{{ route('admin.reports.unmark-top-selling') }}' method="POST">
                @csrf
                <input type="hidden" name="report_ids" class="report_ids" id="report_ids" value="">
            </form>
            <!-- row -->

        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
    <x-slot name="script">
        <script src="{{ asset('admin/datatables/jquery.dataTables.min.js') }}"></script>
        <script>
            $("#select_all_reports").click(function() {
                $(".select_reports").prop('checked', $(this).prop('checked'));
            });
            $(document).ready(function() {

                // alert('vikesh');
                // $('#myTable').DataTable();
                var table = $('#myTable').DataTable({
                    "searching": false,
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


            function formSubmit() {
                var searchIDs = $('input[name="select_reports"]:checked').map(function() {
                    return $(this).val();
                }).get();
                $(".report_ids").val(searchIDs);
                $("#multi-delete").submit();
            }

            function ExportformSubmit() {
                var searchIDs = $('input[name="select_reports"]:checked').map(function() {
                    return $(this).val();
                }).get(); // <----
                if (searchIDs.length == 0) {
                    alert('please select report for export');
                    return false;
                }
                $(".report_ids").val(searchIDs);
                $("#Exportform").submit();
            }

            function markTopSellingFormSubmit() {
                var searchIDs = $('input[name="select_reports"]:checked').map(function() {
                    return $(this).val();
                }).get(); // <----
                // alert(searchIDs);
                if (searchIDs.length == 0) {
                    alert('please select report to mark top selling.');
                    return false;
                }
                $(".report_ids").val(searchIDs);
                $("#MarkTopSellingForm").submit();
            }

            function unmarkTopSellingFormSubmit() {
                var searchIDs = $('input[name="select_reports"]:checked').map(function() {
                    return $(this).val();
                }).get(); // <----
                // alert(searchIDs);
                if (searchIDs.length == 0) {
                    alert('please select report to mark top selling.');
                    return false;
                }
                $(".report_ids").val(searchIDs);
                $("#UnmarkTopSellingForm").submit();
            }


            function markTopSellingFormSubmitSingle() {
                var searchIDs = $('input[name="select_top_selling_reports"]:checked').map(function() {
                    return $(this).val();
                }).get(); // <----

                if (searchIDs.length == 0) {
                    alert('please select report to mark top selling.');
                    return false;
                }
                $(".report_ids").val(searchIDs);
                $("#MarkTopSellingForm").submit();
            }

            function unmarkTopSellingFormSubmitSingle($id) {
                $(".report_ids").val($id);
                $("#UnmarkTopSellingForm").submit();
            }
        </script>
        <!-- Search by ID or by CSV -->
        <script>
            $("#search_asset_csv").on("click", function(e) {
                var title = document.getElementById("searc_asset_span");
                var flag = document.getElementById("search_asset_csv").checked;
                var toggle_text = document.getElementById("toggle_search_button");
                if (flag) {
                    title.title = "Search by CSV";
                    toggle_text.innerHTML = "Search by CSV"
                    $("#normal_search").css("display", "block");
                    $("#csv_search").css("display", "none");
                    flag = false;
                } else {
                    title.title = "Search by ID/Title";
                    toggle_text.innerHTML = "Search by ID/Title"
                    $("#csv_search").css("display", "block");
                    $("#normal_search").css("display", "none");

                }
            });
        </script>

    </x-slot>
</x-app-layout>