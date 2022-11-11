// Numeric Recaptcha
var total;

function getRandom() {
    return Math.ceil((Math.random() * 10) / 2);
}

function createSum() {
    var randomNum1 = getRandom();
    var randomNum2 = getRandom();
    total = randomNum1 + randomNum2;
    $(".speakWithAnalystValidationText").html(
        randomNum1 + " + " + randomNum2 + " = "
    );
}

function checkInput() {
    var input = $(".speakWithAnalystValidation").val();
    var hasInput = !!input;

    var valid = hasInput && input == total;
    $(".fail").toggle(hasInput && !valid);
    if (input == total) {
        $(".speakWithAnalystSubmitBtn").prop("disabled", false);
        // $('#fail').css('display','none');
    } else {
        $(".speakWithAnalystSubmitBtn").prop("disabled", true);
        // $('#fail').css('display','block');
    }
}

$(document).ready(function () {
    createSum();
    $(".speakWithAnalystValidation").keyup(checkInput);
});
