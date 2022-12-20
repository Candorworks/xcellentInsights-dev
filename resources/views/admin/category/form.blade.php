<div class="form-group">
    <label class="col-sm-12">Select Master Category</label>
    <div class="col-sm-12">
      <select class="form-control" name="parent_id">
        <option value="0" @if(isset($category)) {{ $category->parent_id == 0 ? 'selected' : '' }} @else {{ old('parent_id') == 0 ? 'selected' : ''}} @endif >Master</option>
        @foreach ($list as $item)
            <option value="{{ $item->id }}"  @if(isset($category)) {{ $category->parent_id == $item->id ? 'selected' : '' }} @else {{ old('parent_id') == $item->id ? 'selected' : ''}} @endif >{{ $item->name }}</option>
        @endforeach
      </select>
    </div>
  </div>
  <div class="form-group">
    <label class="col-md-12">Category Name</span></label>
    <div class="col-md-12">
      <input type="text" max="100" name="name" class="form-control" value="@if(isset($category)){{$category->name}}@else{{old('name')}}@endif" required>
    </div>
  </div>

  <div class="form-group">
    <label class="col-md-12">Thumbnail</span></label>
    <div class="col-md-12">
        <input type="file" name="thumbnail" id="" class="form-control" @if (isset($category)) @else "required" @endif>
    </div>
  </div>

  <div class="form-group">
    <label class="col-md-12">Category Information</span></label>
    <div class="col-md-12">
      <textarea required name='information' class="form-control" rows='5'>@if(isset($category)){{$category->information}}@else{{old('information')}}@endif</textarea>
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-12">Vertical Industry</label>
    <div class="col-sm-2">
        <div class="radio radio-success">
            <input type="radio" name="vertical" id="radio1" value="1" @if(isset($category)) {{ $category->vertical=="1" ? 'checked' : '' }} @else checked @endif >
            <label for="radio3"> Yes </label>
        </div>
    </div>
    <div class="col-sm-10">
        <div class="radio radio-danger">
            <input type="radio" name="vertical" id="radio1" value="0" @if(isset($category)) {{ $category->vertical =="1" ? '' : 'checked' }} @endif>
            <label for="radio3"> No </label>
        </div>
    </div>
      {{-- <span class="help-block col-sm-offset-0"><small>A block of help text that breaks onto a new line and may extend beyond one line.</small></span>  --}}
  </div>
  <div class="form-group">
    <label class="col-sm-12">Status</label>
    <div class="col-sm-2">
        <div class="radio radio-success">
            <input type="radio" name="active" id="radio3" value="1" @if(isset($category)) {{ $category->active ? 'checked' : '' }} @else checked @endif >
            <label for="radio3"> Active </label>
        </div>
    </div>
    <div class="col-sm-10">
        <div class="radio radio-danger">
            <input type="radio" name="active" id="radio3" value="0" @if(isset($category)) {{ $category->active ? '' : 'checked' }} @endif>
            <label for="radio3"> Deactive </label>
        </div>
    </div>
      {{-- <span class="help-block col-sm-offset-0"><small>A block of help text that breaks onto a new line and may extend beyond one line.</small></span>  --}}
  </div>
  <button type="submit" class="btn btn-purple waves-effect waves-light">Submit</button>
