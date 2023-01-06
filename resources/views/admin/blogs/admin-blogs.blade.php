<x-app-layout>
<link href="{{ asset('admin/datatables/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css" />
    <!--Admin Blogs Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-12">
                    <h4 class="page-title">Admin Blogs</h4>
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
                                    <form class="form-horizontal" method="POST" action="@isset($blog) 
                                                    {{route('admin.blogs-news.update', ["blogs_news" => $blog->id])}} 
                                                    @else {{route('admin.blogs-news.store')}} 
                                                    @endisset" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            @isset($blog) 
                                                @method('PUT')
                                            @endisset
                                            <div class="col-md-10">
                                                <label>Title</label>
                                                <input type="text" name="title" class="form-control" required="" @isset($blog) value="{{$blog->title}}" @endisset>
                                            </div>
                                            <div class="col-md-2">
                                                <!-- <label>Active | Deactive</label> -->
                                                <!-- <input type="checkbox" name="act_dis" class="form-control" required=""> -->
                                                
                                                <!-- radio button -->
                                                <div class="toggle-button-cover">
                                                    <div class="button-cover">
                                                        <div class="button b2" id="button-11">
                                                            <input type="checkbox" class="checkbox" name="active" @isset($blog) @if((int)$blog->active === 0) checked value="0" @endif @endisset>
                                                            <div class="knobs">
                                                                <span></span>
                                                            </div>
                                                            <div class="layer"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- close radio button -->
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-md-6">
                                                <label >Sub Title</label>
                                                <input type="text" name="sub_title" class="form-control"  @isset($blog) value="{{$blog->subtitle}}" @endisset>
                                            </div>
                                        
                                            <div class="col-md-6">
                                                <label>Author</label>
                                                <input type="text" name="author" class="form-control" required="" @isset($blog) value="{{$blog->author}}" @endisset>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12">Description</label>
                                            <div class="col-md-12">
                                                <textarea name="blog_description">@isset($blog) {{$blog->description}} @endisset</textarea>
                                            </div>

                                        </div>

                                        <div class="form-group">
                                            <div class="col-md-6">
                                                <label>Image</label>
                                                <input type="file" name="blog_image" class="form-control" value="" accept="image/*">
                                                @isset($blog)
                                                    @if(!empty($blog->image))
                                                        <img src="{{asset("web/".$blog->image)}}" class='blog_image'>
                                                    @endif
                                                @endisset
                                            </div>
                                            <div class="col-md-6">
                                                <label>Tag</label>
                                                <select class="tokenizationSelect2 form-control" multiple="true" name='tags[]'>
                                                    
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-md-6">
                                                <label>Category</label>
                                                <select class="form-control" name="category">
                                                    @foreach ($categories as $category)
                                                    <option value="{{$category['id']}}">{{$category['name']}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <label>Blog Type</label>
                                                <select class="form-control" name="type">
                                                    @foreach ($types as $type)
                                                    <option value="{{$type}}">{{ $type }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12 text-right">

                                        <button type="submit" class="btn btn-purple waves-effect waves-light">Upload Blog</button>
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
            CKEDITOR.replace('blog_description');
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
        @isset($blog)
        <script>
            $(document).ready(function(){
                $(":input[name=category]").val('{{$blog->category_id}}');
                $(":input[name=type]").val('{{$blog->type}}');
                newTags = {!!$blog->tag!!};
                for(var i of newTags) {
                    var newOption = new Option(i, i, false, true);
                    $('.tokenizationSelect2').append(newOption).trigger('change');
                }
            })
        </script>
        @endisset
    </x-slot>
</x-app-layout>