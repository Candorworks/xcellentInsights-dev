<div class="col-lg-12">
    
    <div class="card" id="datanotFoundForm">
        <div class="card-header">
            <h5 class="mb-0" style="color: #002c60">Not found what are you looking for, Don’t worry kindly fill the
                below form with your
                specific requirements</h5>
        </div>
        <form role="form" method="POST" autocomplete="on" action="">
            @csrf
            <div class="modal-body p-3">
                <div class="requestformbox">
                    <div class="mb-3">
                        <input type="text" class="form-control shadow-inset" name="fname" placeholder="First name"
                            required="">
                    </div>

                    <div class="mb-3">
                        <input type="text" class="form-control shadow-inset" name="lname" placeholder="Last Name"
                            required="">
                    </div>

                    <div class="mb-3">
                        <input type="hidden" name="lead_type" id="lead_type_id1" value="4">
                        <input type="email" name="email" class="form-control shadow-inset" placeholder="Enter email"
                            required />
                    </div>

                    <div class="mb-3">
                        <input type="text" maxlength="12" onkeypress="return isNumber(event)"
                            class="form-control shadow-inset" placeholder="Enter number" name="number" required>
                    </div>

                    <div class="mb-3">
                        <input type="text" class="form-control shadow-inset" placeholder="Enter job title"
                            name="job_title" required>
                    </div>

                    <div class="mb-3">
                        <input type="text" class="form-control shadow-inset" placeholder="Enter company name"
                            name="company" required>
                    </div>

                    <div class="mb-3">
                        <textarea class="form-control shadow-inset" maxlength="400" rows="3"
                            placeholder="Do you have any Specific field of Interest? Please suggest us" required name="description"></textarea>
                    </div>

                    <div>
                        We ensure/ offer complete secrecy of your personal details <a
                            style="text-decoration: none; color: #002c60" href="{{ route('privacy') }}">Privacy</a>
                    </div>
                </div>
            </div>
            <div class="card-footer text-end p-3">
                <button type="button" class="p-2 btn me-3" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="p-2 btn">Save</button>
            </div>
        </form>
    </div>
</div>
