<x-app-layout>
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
                      <th>Sr.</th>
                      <th>Lead Type</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Number</th>
                      <th>Company</th>
                      <th>Company Website</th>
                      <th>No of reports</th>
                      <th>Yearly new publication</th>
                      <th>Descreption</th>
                      <th>IP</th>
                      {{-- <th>Active</th> --}}
                      <th>Added date</th>
                      {{-- <th>Action</th> --}}
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($list as $key=> $item)
                      <tr>
                        <td> <input type="checkbox" class="select_reports" name="select_reports"
                          value="{!! $item->id !!}"> </td>
                        <td>{{ ++$key }}</td>
                        <td>{{ @$item->leadtype->name }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>                      
                        <td>{{ $item->number }}</td>
                        <td>{{ $item->company }}</td>
                        <td>{{ $item->website }}</td>
                        <td>{{ $item->reports_no }}</td>
                        <td>{{ $item->new_publications }}</td>
                        <td>{!! $item->description !!}</td>
                        <td>{{ $item->ip }}</td>
                        <td>{{ date('d M y H:i A', strtotime($item->created_at)) }}</td>
                      
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <form id="Exportform" action='{{ route('admin.lead-partner.export') }}' method="get">
            <input type="hidden" name="report_ids" class="report_ids" id="report_ids" value="">
        </form>

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
                  $('#myTable').DataTable({
                    "ordering": false
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
