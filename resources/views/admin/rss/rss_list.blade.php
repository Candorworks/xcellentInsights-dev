<x-app-layout>
    <link href="{{ asset('admin/datatables/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css" />

    <!--Admin Blogs Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-12">
                    <h4 class="page-title">Admin RSS Feed</h4>
                    <ol class="breadcrumb">
                        <li><a href="{{ route('rss.index') }}" class="active">List</a></li>
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
                                    <div class="row">
                                        <div class="col-md-11">
                                            <div class="text-right">
                                                <a href="{{url('press-release')}}" target="_blank"><button class="btn btn-info">View PR</button></a>
                                            </div>
                                        </div>
                                        <div class="col-md-1">
                                            <div class="text-right">
                                                <a href="{{ route('rss.getxml') }}" target="_blank"><button class="btn btn-primary">view XML</button></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="white-box">
                                        <table id="rsslisttable" class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Title</th>
                                                    <th>URL</th>
                                                    <th>Description</th>
                                                    <th>Created_at</th>
                                                    <!-- <th>Updated_at</th> -->
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($results as $key => $item)
                                                <tr>
                                                    <td>{{ $item->id }}</td>
                                                    <td>{{ $item->title }}</td>
                                                    <td><a href="{{URL::to('/')}}/press-release/{{ $item->url }}">{{ $item->url }}</a></td>
                                                    <td>{!! $item->description !!}</td>
                                                    <td>{{ $item->created_at->toDayDateTimeString() }}</td>
                                                    <!-- <td>{{ $item->updated_at }}</td> -->
                                                    <td class="text-center {{$item->active == 1 ? 'text-success' : 'text-danger' }}">{{$item->active == 1 ? 'Active' : 'Inactive'}}</td>
                                                    <td>
                                                        <a href="{{route('rss.edit', $item->id)}}">
                                                            <button class="btn btn-primary btn-outline btn-rounded edit_rss">
                                                                Edit
                                                            </button>
                                                        </a>

                                                        <form action="{{ route('rss.destroy', $item->id) }}" method="POST">
                                                            @method('DELETE')
                                                            @csrf
                                                            <button class="btn btn-danger btn-outline btn-rounded delete_rss">Delete</button>
                                                        </form>
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
                $('#rsslisttable').DataTable();
            });
        </script>
    </x-slot>
</x-app-layout>