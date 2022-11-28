// Numeric Recaptcha
var totalEnquiry;

function getRandom() {
    return Math.ceil((Math.random() * 10) / 2);
}

function createSumEnquiry() {
    var randomNum1 = getRandom();
    var randomNum2 = getRandom();
    totalEnquiry = randomNum1 + randomNum2;
    $(".speakWithAnalystValidationTextEnquiry").html(
        randomNum1 + " + " + randomNum2 + " = "
    );
}

function checkInputEnquiry() {
    var inputEnquiry = $(".speakWithAnalystValidationEnquiry").val();
    var hasInputEnquiry = !!inputEnquiry;

    var validEnquiry = hasInputEnquiry && inputEnquiry == totalEnquiry;
    $(".fail").toggle(hasInputEnquiry && !validEnquiry);
    if (inputEnquiry == totalEnquiry) {
        $(".speakWithAnalystSubmitBtnEnquiry").prop("disabled", false);
        // $('#fail').css('display','none');
    } else {
        $(".speakWithAnalystSubmitBtnEnquiry").prop("disabled", true);
        // $('#fail').css('display','block');
    }
}

$(document).ready(function () {
    createSumEnquiry();
    $(".speakWithAnalystValidationEnquiry").keyup(checkInputEnquiry);
});
