<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500;700;800;900&display=swap" rel="stylesheet">

    <!-- Main CSS -->
    <link href="css/main.css" rel="stylesheet" />

    <title>كابتشا عربي</title>
  </head>
  <body>

  <div id="captcha-word">
        
    </div>
    

    <div id="validation-box">
		<p class="heading">ادخل النص في الصورة</p>
        <div id="captcha-final"></div>
		<form id="validationForm">
			<input class="myButton2" type="text" name="code" id="code" placeholder="ادخل النص..." required />
			<input type="submit" class="myButton" value="تحقق">
		</form>
	</div>

    


    
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script> 
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.min.js"></script>
    <script src="js/html2canvas.min.js"></script>
    <script src="js/createCaptcha.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/js-cookie@rc/dist/js.cookie.min.js"></script>
    <script src="js/validateCaptcha.js"></script>
  </body>
</html>