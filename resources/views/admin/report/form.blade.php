<div class="form-group">
    <label class="col-md-12">Report Title</span></label>
    <div class="col-md-12">
        <input type="text" max="255" name="title" class="form-control" value="@if (isset($report)) {{ $report->title }} @else {{ old('title') }} @endif" required>
    </div>
</div>

<div class="form-group">
    <label class="col-md-12">Meta Title</span></label>
    <div class="col-md-12">
        <input type="text" max="255" name="meta_title" class="form-control" value="@if (isset($report)) {{ $report->meta_title }} @else {{ old('meta_title') }} @endif" required>
    </div>
</div>

<div class="form-group">
    <label class="col-md-12">Meta Descreption</span></label>
    <div class="col-md-12">
        <textarea name="meta_desc"  placeholder="" class="form-control"  required rows="10">@if (isset($report)) {{ $report->meta_desc }} @else {{ old('meta_desc') }} @endif </textarea>
    </div>
</div>

<div class="form-group">
    <label class="col-md-12">Report URL</span></label>
    <div class="col-md-12">
        <input type="text" max="100" name="url_title" class="form-control" value="@if (isset($report)) {{ $report->url_title }} @else {{ old('url_title') }} @endif" required>
    </div>
</div>

<div class="form-group">
    <label class="col-md-12">Category</span></label>
    <div class="col-md-12">
        <select name="category_id" id="" class="form-control" required onchange="getSubCategory(this.value)">
            <option value="">Select Category</option>
            @foreach ($categories as $key => $item)
            <option value="{{$item[0]['id']}}" @if (isset($report)) {{ $report->category_id ==$item[0]['id'] ? "selected" : ""  }} @else {{ old('category_id') }} @endif>{{$item[0]['name']}}</option>
            @endforeach
        </select>
    </div>
</div>
<div class="form-group" id="subdiv">
    <label class="col-md-12">Sub Category</span></label>
    <div class="col-md-12">
        <select name="subcategory_id" id="subcategory_id" class="form-control">
            <option value="">Select Sub Category</option>
        </select>
    </div>
</div>
<div class="form-group">
    <label class="col-md-12">Publisher</span></label>
    <div class="col-md-12">
        <select name="publisher_id" required class="form-control">
            <option value="">Select Publisher</option>
            @foreach ($publishers as $item)
            <option value="{{$item->id}}" @if (isset($report)) {{ $report->publisher_id == $item->id ? "selected" : ""  }} @else {{ old('publisher_id') }} @endif>{{$item->name}} ({{$item->sort_name}})</option>
            @endforeach
        </select>
    </div>
</div>
<div class="form-group">
    <label class="col-md-12">Report Format</span></label>
    <div class="col-md-12">
        <input type="text" name="format" class="form-control" value="@if (isset($report)) {{ $report->format }} @else {{ old('format') }} @endif" required>
    </div>
</div>
<div class="form-group">
    <label class="col-md-12">Report Pages</span></label>
    <div class="col-md-12">
        <input type="text" name="pages" class="form-control" value="@if (isset($report)) {{ $report->pages }} @else {{ old('pages') }} @endif" required>
    </div>
</div>
<div class="form-group">
    <label class="col-md-12">Single Licence Price</span></label>
    <div class="col-md-12">
        <input type="text" name="single_price" class="form-control" value="@if (isset($report)) {{ $report->single_price }} @else {{ old('single_price') }} @endif" required>
    </div>
</div>
<div class="form-group">
    <label class="col-md-12">Multi Licence Price</span></label>
    <div class="col-md-12">
        <input type="text" name="multi_price" class="form-control" value="@if (isset($report)) {{ $report->multi_price }} @else {{ old('multi_price') }} @endif" required>
    </div>
</div>
<div class="form-group">
    <label class="col-md-12">Enter Price Licence Price</span></label>
    <div class="col-md-12">
        <input type="text" name="enterprise_price" class="form-control" value="@if (isset($report)) {{ $report->enterprise_price }} @else {{ old('enterprise_price') }} @endif" required>
    </div>
</div>
<!-- <div class="form-group">
    <label class="col-md-12">Thumbnail</span></label>
    <div class="col-md-12">
        <input type="file" name="thumbnail" id="" class="form-control" >
    </div>
</div> -->
{{-- <div class="form-group">
    <label class="col-md-12">Sample Pdf</span></label>
    <div class="col-md-12">
        <input type="file" name="sample_pdf" id="" class="form-control" @if (isset($report)) @else "required" @endif>
    </div>
</div>
<div class="form-group">
    <label class="col-md-12">Pdf</span></label>
    <div class="col-md-12">
        <input type="file" name="pdf" id="" class="form-control" @if (isset($report)) @else "required" @endif>
    </div>
</div> --}}

<div class="form-group">
    <label class="col-md-12">Descreption</span></label>
    <div class="col-md-12">
        <textarea name="description" id="" class="mymce" cols="30" required rows="10">@if (isset($report)) {{ nl2br($report->description) }} @else {{ nl2br(old('description')) }} @endif</textarea>
    </div>
</div>
<div class="form-group">
    <label class="col-md-12">Table Of Content</span></label>
    <div class="col-md-12">
        <textarea name="toc" id="" class="mymce" cols="30" required rows="10">@if (isset($report)) {{ nl2br($report->toc) }} @else {{ nl2br(old('toc')) }} @endif</textarea>
    </div>
</div>
<div class="form-group">
    <label class="col-md-12">Table Figures</span></label>
    <div class="col-md-12">
        <textarea name="table_figures" id="" class="mymce" cols="30" required rows="10">@if (isset($report)) {{ nl2br($report->table_figures) }} @else {{ nl2br(old('table_figures')) }} @endif</textarea>
    </div>
</div>

<div class="form-group">
    <label class="col-md-12">Companies</span></label>
    <div class="col-md-12">
        <textarea name="companies" id="" class="mymce" cols="30" required rows="10">@if (isset($report)) {{ nl2br($report->companies) }} @else {{ nl2br(old('companies')) }} @endif</textarea>

    </div>
</div>
<div class="form-group">
    <label class="col-md-12">Keywords</span></label>
    <div class="col-md-12">
        <input type="text" name="keywords" class="form-control" value="@if (isset($report)) {{ $report->keywords }} @else {{ old('keywords') }} @endif" required>
    </div>
</div>
<div class="form-group">
    <label class="col-md-12">Publish Date (yyyy-mm-dd)</span></label>
    <div class="col-md-12">
        <input type="text" name="publish" class="form-control" value="@if (isset($report)) {{ date('Y-m-d',strtotime($report->publish)) }} @else {{ old('publish') }} @endif" required>
    </div>
</div>
<div class="form-group">
    <label class="col-sm-12">Status</label>
    <div class="col-sm-2">
        <div class="radio radio-success">
            <input type="radio" name="active" id="radio3" value="1" @if (isset($report)) {{ $report->active==1 ? 'checked' : '' }} @else checked @endif>
            <label for="radio3"> Active </label>
        </div>
    </div>
    <div class="col-sm-2">
        <div class="radio radio-danger">
            <input type="radio" name="active" id="radio3" value="0" @if (isset($report)) {{ $report->active==0 ? 'checked' : '' }} @endif>
            <label for="radio3"> Deactive </label>
        </div>
    </div>
    <div class="col-sm-2">
        <div class="radio radio-warning">
            <input type="radio" name="active" id="radio3" value="2" @if (isset($report)) {{ $report->active==2 ? 'checked' : '' }} @endif>
            <label for="radio3"> Active but Not Published </label>
        </div>
    </div>
    {{-- <span class="help-block col-sm-offset-0"><small>A block of help text that breaks onto a new line and may extend beyond one line.</small></span> --}}
</div>
<button type="submit" class="btn btn-purple waves-effect waves-light">Submit</button>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $('document').ready(function(){
        var old = @json(@$report);
        if(old){
            getSubCategory(old.category_id);
        }
    })
    function getSubCategory(id){
        $('#subdiv').hide();
        var categories =@json($categories);
        var old = @json(@$report);
        $('#subcategory_id').html('');
        $('#subcategory_id').append('<option value="">Select Sub Category</option>');
        if(categories[id].length > 0){
            $('#subdiv').show();
        }
        $.each(categories[id][0]['sub_category'],function(key,item){
           // console.log(item);
            if(old){
                if(old.subcategory_id==item.id){
                $('#subcategory_id').append('<option value="'+item.id+'" selected>'+item.name+'</option>');
                }else{
                    $('#subcategory_id').append('<option value="'+item.id+'">'+item.name+'</option>');
                }
            }else{
                $('#subcategory_id').append('<option value="'+item.id+'">'+item.name+'</option>');
            }


        });
    }
</script>
