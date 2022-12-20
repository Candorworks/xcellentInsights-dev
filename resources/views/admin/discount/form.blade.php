<div class="form-group">
    <label class="col-sm-12">Report ID</label>
    <div class="col-sm-12">
      <input type="text" max="100" name="report_id" class="form-control" value="@if(isset($discountLead)) {{ $discountLead->report_id }} @else {{ old('report_id') }} @endif" required>
    </div>
  </div>
<div class="form-group">
    <label class="col-md-12">Email</span></label>
    <div class="col-md-12">
      <input type="text" max="100" name="email" class="form-control" value="@if(isset($discountLead)) {{ $discountLead->email }} @else {{ old('email') }} @endif" required>
    </div>
  </div>
  {{-- <div class="form-group">
    <label class="col-md-12">Plan</span></label>
    <div class="col-md-12">
      <select class="form-control" name="plan">
        
            <option value="single"  @if(isset($discountLead)) {{ $discountLead->plan == 'single' ? 'selected' : '' }} @else {{ old('plan') == 'single' ? 'selected' : ''}} @endif > Single User license</option>
            <option value="multi"  @if(isset($discountLead)) {{ $discountLead->plan == 'multi' ? 'selected' : '' }} @else {{ old('plan') == 'multi' ? 'selected' : ''}} @endif > Multi User license</option>
            <option value="enterprise"  @if(isset($discountLead)) {{ $discountLead->plan == 'enterprise' ? 'selected' : '' }} @else {{ old('plan') == 'enterprise' ? 'selected' : ''}} @endif > Enterprise User license </option>
      </select>
    </div>
  </div> --}}

  <div class="form-group">
    <label class="col-md-12">Discount Type</span></label>
    <div class="col-md-12">
      <select class="form-control" name="type">
        
            <option value="flat"  @if(isset($discountLead)) {{ $discountLead->type == 'flat' ? 'selected' : '' }} @else {{ old('type') == 'flat' ? 'selected' : ''}} @endif > Flat</option>
            <option value="percent"  @if(isset($discountLead)) {{ $discountLead->type == 'percent' ? 'selected' : '' }} @else {{ old('type') == 'percent' ? 'selected' : ''}} @endif > Percent</option>
          
      </select>
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-12">Discount</label>
    <div class="col-sm-12">
      <input type="text" max="100" name="discount_value" class="form-control" value="@if(isset($discountLead)) {{ $discountLead->discount_value }} @else {{ old('discount_value') }} @endif" required>
    </div>
      {{-- <span class="help-block col-sm-offset-0"><small>A block of help text that breaks onto a new line and may extend beyond one line.</small></span>  --}}
  </div>
  <div class="form-group">
    <label class="col-sm-12">Status</label>
    <div class="col-sm-2">
        <div class="radio radio-success">
            <input type="radio" name="status" id="radio3" value="Active" @if(isset($category)) {{ $category->status ? 'checked' : '' }} @else checked @endif >
            <label for="radio3"> Active </label>
        </div>
    </div>
    <div class="col-sm-10">
        <div class="radio radio-danger">
            <input type="radio" name="status" id="radio3" value="Expired" @if(isset($category)) {{ $category->status ? '' : 'checked' }} @endif>
            <label for="radio3"> Expired </label>
        </div>
    </div>
      {{-- <span class="help-block col-sm-offset-0"><small>A block of help text that breaks onto a new line and may extend beyond one line.</small></span>  --}}
  </div>
  <button type="submit" class="btn btn-purple waves-effect waves-light">Submit</button>
