<x-app-layout>
    <link href="{{ asset('admin/datatables/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css" />

    <!--Admin Blogs Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-12">
                    <h4 class="page-title">Admin Blogs</h4>
                    <ol class="breadcrumb">
                        <li><a href="#" class="active">Blogs</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="white-box">
                        <div class="toolbar">
                            <x-alert />
                        </div>
                        <!-- start content -->

                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="white-box">
                                        <table id="myTable" class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Title</th>
                                                    <th>Sub Title</th>
                                                    <th>Author</th>
                                                    <th>Description</th>
                                                    <th>Tag</th>
                                                    <th>Category</th>
                                                    <th>Date</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($blogs as $key => $item)
                                                <tr>
                                                    <td>{{ $item->title }}</td>
                                                    <td>{{ $item->subtitle }}</td>
                                                    <td>{{ $item->author }}</td>
                                                    <td>{!! substr($item->description,0,100) !!}...</td>
                                                    <td>{{ $item->tag }}</td>
                                                    <td>{{ $item->category->name ?? '-' }}</td>
                                                    <td>{{ $item->created_at }}</td>
                                                    <td>{{ (int)$item->active === 1 ? "Active" : "Deactive" }}</td>
                                                    <td>
                                                        <a href="{{route('admin.blogs-news.edit', ["blogs_news" => $item->id])}}" class="btn btn-outline btn-rounded btn-info">Edit</a>
                                                    </td>
                                                </tr>
                                                
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- row -->
                            <!-- close content -->
                        </div>
                        <!-- close admin add blogs form -->
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
    <x-slot name="script">
        <script src="{{ asset('admin/datatables/jquery.dataTables.min.js') }}"></script>
        <script>
            $(document).ready(function() {
                $('#myTable').DataTable();
            });
        </script>

    </x-slot>
</x-app-layout>