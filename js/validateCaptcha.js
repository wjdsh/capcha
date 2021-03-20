$(()=>{
    $("form#validationForm").validate({
        submitHandler: (form) =>
        {
            let code = $("input#code").val();

            let generatedValue = Cookies.get("ar_captcha_code");

            console.log(generatedValue);
            

            if(generatedValue === code)
                //success captcha
                alert("تم التحقق");
            else
                //error captcha
                alert("النص خطأ, اعد المحاولة");
        },
        messages:
        {
            code:"ادخل النص اولا من فضلك"
        }
    });
});