<x-app-layout>
    <link href="{{ asset('admin/datatables/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-12">
                    <h4 class="page-title">Welcome to My Admin</h4>
                    <ol class="breadcrumb">
                        <li><a href="#" class="active">Category</a></li>
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
                        {{-- <h3>Data Table</h3>
                <p class="text-muted m-b-30">Data table example</p> --}}
                        {{-- <div class="toolbar"> --}}
                        <x-alert />
                        {{-- </div> --}}
                        <table id="myTable" class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ID.</th>
                                    <th>Parent Category</th>
                                    <th>Sub Category Name</th>
                                    <th>Vertical industry</th>
                                    <th>Thumbnail</th>
                                    <th>Active</th>
                                    <th>Added date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @foreach ($list as $key => $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>-</td>
                                        <td>{{ $item->vertical ? 'Show' : '-' }}</td>
                                        <td>
                                            @if ($item->thumbnail)
                                                <img src="{{AWS3($item->thumbnail )}}" height="100"
                                                    width="80">
                                            @else
                                                no thumbnail
                                            @endif
                                        </td>
                                        <td>{{ $item->active ? 'Active' : 'Deactive' }}</td>
                                        <td>{{ date('d M y H:i A', strtotime($item->created_at)) }}</td>
                                        <td>
                                        @can('category-edit')
                                        <a href="{{ route('category.edit', $item->id) }}"
                                            class="btn btn-outline btn-rounded btn-info">Edit</a>
                                    @endcan
                                    @can('category-delete')
                                        <form action="{{ route('category.destroy', $item->id) }}"
                                            method="post" style='display:inline'>
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit"
                                                onclick="return confirm('Are you sure you want to delete this category?')"
                                                class="btn btn-outline btn-rounded btn-danger">Delete</button>
                                        </form>
                                    @endcan
                                        </td>

                                    </tr>
                                    @foreach ($item->SubCategory as $key2 => $item2)
                                        <tr>
                                            <td>{{ $item2->id }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item2->name }}</td>
                                            <td>-</td>
                                            <td>{{ $item2->active ? 'Active' : 'Deactive' }}</td>
                                            <td>{{ date('d M y H:i A', strtotime($item2->created_at)) }}</td>
                                            <td>
                                                @can('category-edit')
                                                    <a href="{{ route('category.edit', $item2->id) }}"
                                                        class="btn btn-outline btn-rounded btn-info">Edit</a>
                                                @endcan
                                                @can('category-delete')
                                                    <form action="{{ route('category.destroy', $item2->id) }}"
                                                        method="post" style='display:inline'>
                                                        @method('DELETE')
                                                        @csrf
                                                        <button type="submit"
                                                            onclick="return confirm('Are you sure you want to delete this category?')"
                                                            class="btn btn-outline btn-rounded btn-danger">Delete</button>
                                                    </form>
                                                @endcan

                                            </td>

                                        </tr>
                                        @php
                                            $i = $i + 1;
                                        @endphp
                                    @endforeach
                                    @php
                                        $i = $i + 1;
                                    @endphp
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
            <!-- row -->

        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
    <x-slot name="script">
        <script src="{{ asset('admin/datatables/jquery.dataTables.min.js') }}"></script>
        <script>
            $(document).ready(function() {
                // alert('vikesh');
                $('#myTable').DataTable();
            });
        </script>

    </x-slot>
</x-app-layout>
