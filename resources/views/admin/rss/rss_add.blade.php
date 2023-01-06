<x-app-layout>
    <link href="{{ asset('admin/datatables/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css" />
    <!--Admin Blogs Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-12">
                    <h4 class="page-title">Admin RSS Feed</h4>
                    <ol class="breadcrumb">
                        <li><a href="{{ route('rss.create') }}" class="active">Add</a></li>
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
                        <!-- <h1>Blogs & News</h1> -->

                        <!--admin add blogs form  -->
                        <div class="white-box">
                            <div class="toolbar">
                                <div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <form method="POST" action="@isset($rss) 
                                                    {{route('rss.update',$rss->id)}} 
                                                    @else {{route('rss.store')}} 
                                                    @endisset">
                                        @csrf
                                        <div class="row">
                                            @isset($rss)
                                            @method('PUT')
                                            @endisset
                                            <div class="col-md-10">
                                                <div class="form-group">
                                                    <label for="rsstitle">Title</label>
                                                    <input type="text" name="title" id="rsstitle" required @isset($rss) value="{{$rss->title}}" @endisset placeholder="Title" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="toggle-button-cover">
                                                    <div class="button-cover">
                                                        <div class="button b2" id="button-11">
                                                            <input type="checkbox" class="checkbox" name="active" @isset($rss) @if($rss->active == 0) checked value="0" @endif @endisset>
                                                            <div class="knobs">
                                                                <span></span>
                                                            </div>
                                                            <div class="layer"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="url">URL Slug</label>
                                            <input type="text" name="url" id="url" required placeholder="URL Here.." class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="rssdescription">Description</label>
                                            <textarea name="rssdescription" id="rssdescription" rows="3" required placeholder="Decription" class="form-control">@isset($rss){{$rss->description}}@endisset</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="pr">Public Release</label>
                                            <textarea name="pr" id="ps" rows="3" required placeholder="PR" class="from-control">@isset($rss){{$rss->pr}}@endisset</textarea>
                                        </div>
                                        <div>
                                            <button class="btn btn-primary">Submit</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
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
        <script src="https://cdn.ckeditor.com/4.20.0/standard/ckeditor.js"></script>
        <script>
            CKEDITOR.replace('pr');
        </script>

        <script>
            $(document).ready(function() {
                $(".tokenizationSelect2").select2({
                    placeholder: "Add Tag for Image", //placeholder
                    tags: true,
                    tokenSeparators: ['/', ';']
                });
            })
        </script>

    </x-slot>
</x-app-layout>