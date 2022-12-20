<x-app-layout>
    <!-- Latest compiled and minified CSS -->
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
 
 
     <!-- Page Content -->
     <div id="page-wrapper">
         <div class="container-fluid">
             <div class="row bg-title">
                 <div class="col-lg-12">
                     <h4 class="page-title">Roles</h4>
                     <ol class="breadcrumb">
                         <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                         <li><a href="{{ route('roles.index') }}">Roles</a></li>
                         <li class="active">Edit</li>
                     </ol>
                 </div>
                 <!-- /.col-lg-12 -->
             </div>
             <!-- row -->
             <div class="row">
                 <div class="col-sm-12">
                     <div class="white-box">
                         <div class="toolbar">
                             <x-alert />
                         </div>
                         <div class="row">
                             <div class="col-md-12">
                                 <form action="{{ route('roles.update',$role->id) }}" method="post">
                                    @method('PATCH')
                                     @csrf
                                     <div class="form-group">
                                         <strong>Name:</strong>
                                         <input type="text" value="{{$role->name}}" name="name" id="" class="form-control" Placeholder="Name" required>
                                     </div>
                                     <div class="form-group">
                                         <strong>Permission:</strong>
                                         <br />
                                         <select name="permission[]" id="" class="form-control selectpicker" data-actions-box="true" data-live-search="true" multiple="multiple"required multiple>
                                            @foreach($permission as $value)
                                                <option value="{{ $value->id }}" {{ in_array($value->id, $rolePermissions) ? 'selected' : '' }}>{{ $value->name }}</option>
                                            @endforeach
                                         </select>
                                     </div>
                                     <button type="submit" class="btn btn-primary">Submit</button>
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
         
         <!-- Latest compiled and minified JavaScript -->
         <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
 
         <!-- (Optional) Latest compiled and minified JavaScript translation files -->
         <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/i18n/defaults-*.min.js"></script>
         <script>
             $(function () {
                 $('select').selectpicker();
             });
         </script>
 
     </x-slot>
 </x-app-layout>
 