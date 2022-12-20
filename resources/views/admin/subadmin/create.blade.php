<x-app-layout>
{{-- <button type="submit" class="btn btn-purple waves-effect waves-light">Submit</button> --}}

    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-12">
                    <h4 class="page-title">Category</h4>
                    <ol class="breadcrumb">
                        <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                        <li><a href="{{ route('category.index') }}">SubAdmin</a></li>
                        <li class="active">Add</li>
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
                        <div class="toolbar">
                            <x-alert/>
                        </div>
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <strong>Opps!</strong> Something went wrong, please check below errors.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="row">
                            <div class="col-md-12">
                                <form action="{{ route('subadmin.store') }}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <strong>Name:</strong>
                                        <input type="text" name="name" id="" class="form-control" Placeholder="Name" required>
                                    </div>
                                    <div class="form-group">
                                        <strong>Email:</strong>
                                        <input type="email" name="email" id="" class="form-control" Placeholder="Email" required>
                                    </div>
                                    {{-- <div class="form-group">
                                        <strong>Mobile:</strong>
                                        <input type="tel" name="mobile" id="" class="form-control" Placeholder="Mobile" required>
                                    </div> --}}
                                    <div class="form-group">
                                        <strong>Password:</strong>
                                        <input type="password" name="password" id="" class="form-control" Placeholder="Password" required>
                                    </div>
                                    <div class="form-group">
                                        <strong>Confirm Password:</strong>
                                        <input type="text" name="password_confirmation" id="" class="form-control" Placeholder="Confirm Password" required>
                                    </div>
                                    <div class="form-group">
                                        <strong>Role:</strong>
                                        <select name="roles" id="" class="form-control">
                                            @foreach ($roles as $item)
                                                <option value="{{$item}}">{{$item}}</option>
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
    </x-slot>
</x-app-layout>