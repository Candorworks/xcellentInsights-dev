<x-app-layout>
  {{-- <button type="submit" class="btn btn-purple waves-effect waves-light">Submit</button> --}}

	 <!-- Page Content -->
   <div id="page-wrapper">
    <div class="container-fluid">
      <div class="row bg-title">
        <div class="col-lg-12">
          <h4 class="page-title">Bulk Reports</h4>
          <ol class="breadcrumb">
            <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
            <li><a href="#">Report</a></li>
            <li class="active">Bulk</li>
          </ol>
        </div>
        <!-- /.col-lg-12 -->
      </div>
      <!-- row -->
      <div class="row">
        <div class="col-sm-12">
          <div class="white-box">
            {{-- <h3>Default Basic Forms</h3>
            <p class="text-muted m-b-30 font-13"> All bootstrap element classies </p> --}}
            
            <div class="row">
              <div class="col-md-12">
                <a href="{{ route('admin.report.bulk.sample') }}" class="btn btn-outline btn-rounded btn-info">Sample export sheet</a>
              </div>
              </br>
              </br>
              </br>
              <div class="col-md-12">
                <div class="toolbar">
                  <x-alert/>
                </div>
                <form class="form-horizontal" action="{{ route('admin.report.bulk.import') }}" method="POST" enctype="multipart/form-data" name='bulk_upload_form'>
                  @csrf
                  <div class="form-group">
                      <label class="col-md-12">Select excel sheet for import</span></label>
                      <div class="col-md-12">
                          <input type="file" name="sheet" id="" class="form-control" required>
                      </div>
                  </div>
                  <button type="submit" class="btn btn-purple waves-effect waves-light">Submit</button>
                </form>
              </div>
            </div>
          </div>
        </div>

      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </div>
	  <!-- /#page-wrapper -->
        <x-slot name="script">
            <script>
                // $(document).ready(function(){
                //     // alert('vikesh');
                //     $('#myTable').DataTable();
                // });
                $(bulk_upload_form).on('submit', function(e) {
                    $('button[type=submit]').prop('disabled', true);
                    showLoader();
                })
            </script>

        </x-slot>
</x-app-layout>
