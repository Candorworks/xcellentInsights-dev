<div class="footer-newsletter py-4 mt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h1 class="text-white fw-bold">Newsletter Subscribe</h1>
            </div>
            <div class="col-lg-6">
                <form class="newsletter-form">
                    <input type="email" name="subscribeEmail" id="subscribeEmail" placeholder="Your email address"
                        required="">
                    <button type="button" onclick="subscribe();">Subscribe</button>
                </form>
            </div>
        </div>
    </div>
</div>


{{-- scripts for sweet alert --}}
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>
<script>
    var ENDPOINT = "{{ url('/') }}";

    function subscribe() {
        var subscribeEmail = $('#subscribeEmail').val();
        var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        if (subscribeEmail.match(mailformat)) {
            $.ajax({
                    url: ENDPOINT + "/subscribe",
                    datatype: "json",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: {
                        email: subscribeEmail
                    },
                    type: "post",
                })
                .done(function(response) {
                    if (response.status == "200") {
                        swal("Newsletter subscribed");
                        return;
                    } else {
                        swal("Newsletter Already subscribed");
                    }

                })
                .fail(function(jqXHR, ajaxOptions, thrownError) {
                    swal("Oops!", "Something went wrong, please try again!", "error");
                });
        } else {
            swal("Oops!", "please enter valid email address!", "error");
            return;
        }


    }
</script>
