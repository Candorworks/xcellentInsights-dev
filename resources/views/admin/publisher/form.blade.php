<div class="form-group">
    <label class="col-md-12">Publisher Name</span></label>
    <div class="col-md-12">
        <input type="text" max="100" name="name" class="form-control" value="@if (isset($job)) {{ $job->name }} @else {{ old('name') }} @endif" required>
    </div>
</div>
<div class="form-group">
    <label class="col-md-12">Publisher Sort Name</span></label>
    <div class="col-md-12">
        <input type="text" max="100" name="sort_name" class="form-control" value="@if (isset($job)) {{ $job->sort_name }} @else {{ old('sort_name') }} @endif" required>
    </div>
</div>
<button type="submit" class="btn btn-purple waves-effect waves-light">Submit</button>
