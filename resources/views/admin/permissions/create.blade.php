<x-app-layout>
    <!-- Latest compiled and minified CSS -->
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
 
 
     <!-- Page Content -->
     <div id="page-wrapper">
         <div class="container-fluid">
             <div class="row bg-title">
                 <div class="col-lg-12">
                     <h4 class="page-title">Permissions</h4>
                     <ol class="breadcrumb">
                         <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                         <li><a href="{{ route('permissions.index') }}">Permissions</a></li>
                         <li class="active">Add</li>
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
                                 <form action="{{ route('permissions.store') }}" method="post">
                                     @csrf
                                     <div class="form-group">
                                         <strong>Name:</strong>
                                         <input type="text" name="name" id="" class="form-control" Placeholder="Name" required>
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
        
     </x-slot>
 </x-app-layout>
 
