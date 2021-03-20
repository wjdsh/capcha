$.ajax({
    url:"./createCaptcha.php",
    method: "post",
    beforeSend: function()
    {
        $('#captcha-final').html("جاري تحميل الرمز");
    },

    success: function(response)
    {
        let json = JSON.parse(response);
        let code = json.code;
        Cookies.set('ar_captcha_code',code);
        $('#captcha-word').html(code);
        html2canvas(document.getElementById('captcha-word')).then(function(canvas) {
            $('#captcha-word').hide();
            $('#captcha-final').html(canvas);
        });
    }
});