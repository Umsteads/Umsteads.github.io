$(document).ready(function(){
document.getElementById("my_captcha_form").addEventListener("submit", function (evt) {
console.log(evt)
    var response = grecaptcha.getResponse();
    if (response.length == 0) {
        //reCaptcha not verified
        alert("please verify you are humann!");
        evt.preventDefault();
        return false;
    }
    return console.log(response)
    //captcha verified
    //do the rest of your validations here

});
});