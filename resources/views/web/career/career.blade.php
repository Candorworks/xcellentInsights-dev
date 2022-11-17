@extends("web.include.index")

@section("content")
   <div class="breadcrums-container py-5" style="background-image: linear-gradient(45deg, rgb(0 0 0 / 65%), rgb(0 0 0 / 65%)),url(http://localhost/xcellentinsights/public/web/images/breadcrums/contact-us.jpg);">
    <div class="container pt-5">
        <div class="text-center mt-3">
            <h3 class="breadcrumbs-title  fw-bold text-white">Careers</h3>
        </div>
    </div>
   </div>
   <div class="career-content mt-5">  
      <div class="container">
         <div class="row">
            <div class="col-lg-6">
               <div class="row we-are-hiring">
                     <div class="col-lg-12 we-are-hiring-content">
                        <i class="fas fa-briefcase mr-4 fa-lg" aria-hidden="true"></i>
                        <span style="font-size: 1.5rem; margin-left: 10px;" >We are Hiring</span>
                     </div>
               </div>
               <div class="row">
                  @foreach($results as $result)
                  <div class="openings pb-3 pe-3 ps-0 pt-0">
                     <div class="opening-heading">
                        <h6 class="mb-0 fw-semibold">{{$result->title}}</h6>
                     </div>
                     <div class="opening-desc">
                        <div class="row mb-3">
                           <div class="col-lg-6 fw-semibold">Location:</div>
                           <div class="col-lg-6">{{$result->location}}</div>
                        </div>
                        <div class="row mb-3">
                           <div class="col-lg-6 fw-semibold">No of position:</div>
                           <div class="col-lg-6">{{$result->no_vacancy}}</div>
                        </div>
                        <div class="row mb-3">
                           <div class="col-lg-6 fw-semibold">Experience required:</div>
                           <div class="col-lg-6">{{$result->experience}}</div>
                        </div>
                        <div class="row mb-3">
                           <div class="col-lg-6 fw-semibold">Roles & Responsibilities:</div>
                           <div class="col-lg-6">{{$result->roles}}</div>
                        </div>
                        <div class="row">
                           <div class="col-lg-6 fw-semibold">What we are looking for in you:</div>
                           <div class="col-lg-6">{{$result->roles}}</div>
                        </div>
                     </div>
                  </div>
                  @endforeach
               </div>
            </div>
            <div class="col-lg-6">
               <div class="join-our-team-heading pb-3">
                  <h2 style="color: #002c60;">Join Our Team</h2>
               </div>
               <div class="join-our-team-desc mt-3">
                  <p>
                     Join our team to start your consulting career with us. If you are passionate about market research and consulting we have a pool of opportunities for you. To apply, please send your C.V./Resume at hr@xcellentinsights.com or fill out the below form.
                  </p>
               </div>
               <form  action="" class="contact-form" method="post" id="career-form" enctype="multipart/form-data">
                  @csrf
                  <div class="row">
                     <div class="col-md-6">
                        <div class="form-group" >
                           <select class="form-control input-field-career" name="job_id">
                                 <option value="">------- Select Opening -----</option>
                                 <option name="DM-Executive" id="">DM-Executive</option>
                                 {{-- @foreach ($jobs as $key=> $item)
                                 <option value="{{$item->id}}" {{old('job_id')== $item->id ? "selected" : ""}}>{{$item->title}}</option>
                                 @endforeach --}}
                           </select>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-group">
                           <input type="text" class="form-control input-field-career" name="name" value="{{old('name')}}" placeholder="Name" required="">
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-6">
                        <div class="form-group">
                           <input type="email" class="form-control input-field-career" name="email" value="{{old('email')}}" placeholder="Email" required="">
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-group">
                           <input type="text" class="form-control input-field-career" maxlength="12" onkeypress="return isNumber(event)"  name="phone" value="{{old('phone')}}" placeholder="Phone Number" required="">
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-6">
                        <div class="form-group">
                           <input type="text" class="form-control input-field-career" name="resume_title" value="{{old('resume_title')}}" placeholder="Resume Title" required="">
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="custom-file">  
                           <input type="file" class="custom-file-input input-field-career" name="resume_file" placeholder="Resume Title*" required="">
                           <label class="custom-file-label input-field-career " for="customFile">Upload Resume</label>
                           <div class="file-types">File .doc, .docx, .odt and pdf (2Mb Max.)</div>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-12">
                        <div class="form-group">
                           <textarea name="msg" class="form-control input-field-career" placeholder="Your Message Here" rows="5" required="">{{old('msg')}}</textarea>
                        </div>
                     </div>
                  </div>
                  <div class="row mt-4">
                        <div class="col-lg-12" style="text-align: right;">
                           <button type="submit" class="btn career-submit-btn">Submit Now</button>
                        </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
@endsection