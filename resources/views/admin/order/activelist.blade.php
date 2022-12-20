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
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="white-box">
                        <x-alert />
                        <div class="row">
                            <form action="{{ route('admin.orderlist.active') }}" method="GET" >
                                <div class="form-row">
                                    <div class="form-group col-md-2">
                                        <label for="report_id">Report ID</label>
                                        <input type="text" class="form-control" value="{{@$data['report_id'] }}"name="report_id" placeholder="Report ID">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="order_id">Order ID</label>
                                        <input type="text" class="form-control" value="{{@$data['order_id'] }}"name="order_id" placeholder="Order ID">
                                    </div>

                                    <div class="form-group col-md-2">
                                        <label for="customer_name">Customer Name</label>
                                        <input type="text" class="form-control" value="{{@$data['customer_name'] }}"name="customer_name" placeholder="Customer Name">
                                    </div>

                                    <div class="form-group col-md-2">
                                        <label for="customer_number">Customer Number</label>
                                        <input type="number" class="form-control" value="{{@$data['customer_number'] }}"name="customer_number" placeholder="Customer Number">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="customer_number">Customer Email</label>
                                        <input type="email" class="form-control" value="{{@$data['email'] }}"name="email" placeholder="Customer Email">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="country">Country</label>
                                        <select name="country" class="form-control">
                                            <option value="" {{@$data['country'] == "" ? "selected" : "" }}>Select Country</option>
                                            @foreach ($countries as $country)
                                            <option value="{{ $country->id }}" {{@$data['country'] == $country->id  ? "selected" : "" }}>{{ $country->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="job_title">Job Title</label>
                                        <input type="text" class="form-control" value="{{@$data['job_title'] }}"name="job_title" placeholder="Job Title">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="plan">Plan</label>
                                        <input type="text" class="form-control" value="{{@$data['plan'] }}"name="plan" placeholder="Plan">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="plan_price">Plan Price</label>
                                        <input type="number" class="form-control" value="{{@$data['plan_price'] }}"name="plan_price" placeholder="Plan Price">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="payment_status">Payment Status</label>
                                        <input type="text" class="form-control" value="{{@$data['payment_status'] }}"name="payment_status" placeholder="Payment Status">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="from_date">From Date</label>
                                        <input type="date" class="form-control" value="{{@$data['from_date'] }}"name="from_date" placeholder="From Date">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="till_date">Till Date</label>
                                        <input type="date" class="form-control" value="{{@$data['till_date'] }}"name="till_date" placeholder="Till Date">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <button type="submit" class="btn btn-primary btn-block">Filter</button>
                                    </div>
                                    {{-- <div class="form-group col-md-6">
                                        <input type="reset" value="Reset" class="btn btn-danger btn-block">
                                    </div> --}}
                                </div>
                            </form>
                        </div>
                        <div class="table-responsive">
                            <table id="myTable" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>
                                            <div class="col-sm-1">
                                                <input type="checkbox" id="select_all_reports" class="report_ids">
                                            </div>
                                            <div class="col-sm-3">
                                                <button class="btn btn-outline btn-rounded btn-success"
                                                    onclick="return ExportformSubmit();">Export</button>
                                                <button class="btn btn-outline btn-rounded btn-danger"
                                                    onclick="return formSubmit();">Delete</button>
                                                <button class="btn btn-outline btn-rounded btn-info"
                                                  onclick="return orderActive();">Deactivate</button>
                                            </div>
                                        </th>
                                        <th>ID</th>
                                        <th>Date</th>
                                        <th>Transaction ID</th>
                                        <th>Order ID</th>
                                        <th>Report ID</th>
                                        <th>Report Name</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Number</th>
                                        <th>Country</th>
                                        <th>Company</th>
                                        <th>Job Title</th>
                                        <th>Address</th>
                                        <th>City</th>
                                        <th>State</th>
                                        <th>Zip</th>
                                        <th>Payment Method</th>
                                        <th>Plan</th>
                                        <th>Plan Price</th>
                                        <th>Discount Price</th>
                                        <th>Final Price</th>
                                        <th>Payment Status</th>
                                        <th>Active</th>
                                        {{-- <th>Remark</th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($list as $item)
                                        <tr>
                                            <td> <input type="checkbox" class="select_reports" name="select_reports"
                                                    value="{!! $item->id !!}"> </td>
                                            <td>{!! $item->id !!}</td>
                                            <td>{{ date('d M Y h:m A', strtotime($item->created_at)) }}</td>
                                            <td>{!! @$item->history->transaction_id !!}</td>
                                            <td>{!! @$item->order_id !!}</td>
                                            <td>{!! @$item->report_id !!}</td>
                                            <td>{!! @$item->report->title !!}</td>
                                            <td>{!! @$item->name !!}</td>
                                            <td>{{ @$item->email }}</td>
                                            <td>{!! $item->number !!}</td>
                                            <td>{!! $item->country !!}</td>
                                            <td>{{ $item->company }}</td>
                                            <td>{!! $item->job_title !!}</td>
                                            <td>{!! $item->address !!}</td>
                                            <td>{!! $item->city !!}</td>
                                            <td>{!! $item->state !!}</td>
                                            <td>{!! $item->zip !!}</td>
                                            <td>{!! $item->payment_method !!}</td>
                                            <td>{!! $item->plan !!}</td>
                                            <td>{!! $item->plan_price !!}</td>
                                            <td>{!! $item->discount_price !!}</td>
                                            <td>{!! $item->final_price !!}</td>
                                            <td>{!! $item->payment_status !!}</td>
                                            {{-- <td><i class="fa fa-toggle-on fa-xl fa-fw" style="color:#19dc30;"></i></td> --}}
                                            {{-- <td>{!! $item->remark!!}</td> --}}
                                            <td><label class="switch">
                                                <input type="checkbox" onclick="return orderStatusChange({!! $item->id !!});" id="select_reports_status{!! $item->id !!}" name="select_reports_status" value="{!! $item->id !!}" checked>
                                                <span class="slider round"></span>
                                                </label>
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
             <!-- multidelete form -->
            <form id="multi-delete" action='{{ route('admin.order.multiOrderListDelete') }}' method="POST">
                @csrf
                <input type="hidden" name="report_ids" class="report_ids" id="report_ids" value="">
            </form>
            <form id="Exportform" action='{{ route('admin.order.export') }}' method="get">
                <input type="hidden" name="report_ids" class="report_ids" id="report_ids" value="">
            </form>
            <form id="order-active" action='{{ route('admin.order.active') }}' method="POST">
                @csrf
                <input type="hidden" name="report_ids" class="report_ids" id="report_ids" value="">
            </form>
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
    <x-slot name="script">
        <script src="{{ asset('admin/datatables/jquery.dataTables.min.js') }}"></script>
        <script>
            $(document).ready(function() {
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
                $(".report_ids").val(searchIDs);
                $("#Exportform").submit();
            }

            function formSubmit() {
              var searchIDs = $('input[name="select_reports"]:checked').map(function() {
                    return $(this).val();
              }).get(); 
              $(".report_ids").val(searchIDs);
              $("#multi-delete").submit();
            }
            function orderActive() {
                var searchIDs = $('input[name="select_reports"]:checked').map(function() {
                    return $(this).val();
                }).get(); // <----
                // alert(searchIDs);
                if (searchIDs.length == 0) {
                    alert('please select order to inactive.');
                    return false;
                }
                $(".report_ids").val(searchIDs);
                $("#order-active").submit();
            }
           

            function orderStatusChange($id) {
                var searchIDs = $('#select_reports_status'+$id).val();
                if (searchIDs.length == 0) {
                    alert('please select order to inactive.');
                    return false;
                }
                $(".report_ids").val(searchIDs);
                $("#order-active").submit();
            }
        </script>
    </x-slot>
</x-app-layout>