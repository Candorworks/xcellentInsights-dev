<div class="form-group">
    <label class="col-md-12">Job Title</span></label>
    <div class="col-md-12">
        <input type="text" max="100" name="title" class="form-control" value="@if (isset($job)) {{ $job->title }} @else {{ old('title') }} @endif" required>
    </div>
</div>
<div class="form-group">
    <label class="col-md-12">Job Location</span></label>
    <div class="col-md-12">
        <input type="text" max="100" name="location" class="form-control" value="@if (isset($job)) {{ $job->location }} @else {{ old('location') }} @endif" required>
    </div>
</div>
<div class="form-group">
    <label class="col-md-12">Job Vacancy</span></label>
    <div class="col-md-12">
        <input type="text" name="no_vacancy" class="form-control" value="@if (isset($job)) {{ $job->no_vacancy }} @else {{ old('no_vacancy') }} @endif" required>
    </div>
</div>
<div class="form-group">
    <label class="col-md-12">Job Experience</span></label>
    <div class="col-md-12">
        <textarea name="experience" id="" class="mymce" cols="30" required rows="10">@if (isset($job)) {{ $job->experience }} @else {{ old('experience') }} @endif</textarea>
    </div>
</div>
<div class="form-group">
    <label class="col-md-12">Job Descreption</span></label>
    <div class="col-md-12">
        <textarea name="description" id="" class="mymce" cols="30" required rows="10">@if (isset($job)) {{ $job->description }} @else {{ old('description') }} @endif</textarea>
    </div>
</div>
<div class="form-group">
    <label class="col-md-12">Job Roles</span></label>
    <div class="col-md-12">roles
        <textarea name="roles" id="" class="mymce" cols="30" required rows="10">@if (isset($job)) {{ $job->roles }} @else {{ old('roles') }} @endif</textarea>
    </div>
</div>

<div class="form-group">
    <label class="col-sm-12">Status</label>
    <div class="col-sm-2">
        <div class="radio radio-success">
            <input type="radio" name="active" id="radio3" value="1" @if (isset($job)) {{ $job->active ? 'checked' : '' }} @else checked @endif>
            <label for="radio3"> Active </label>
        </div>
    </div>
    <div class="col-sm-10">
        <div class="radio radio-danger">
            <input type="radio" name="active" id="radio3" value="0" @if (isset($job)) {{ $job->active ? '' : 'checked' }} @endif>
            <label for="radio3"> Deactive </label>
        </div>
    </div>
    {{-- <span class="help-block col-sm-offset-0"><small>A block of help text that breaks onto a new line and may extend beyond one line.</small></span> --}}
</div>
<button type="submit" class="btn btn-purple waves-effect waves-light">Submit</button>


