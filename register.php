<!DOCTYPE html>
<html lang="en">
<head>
<title>AquaGuildZ | Register</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<!-- ===== FAVICON =====-->
<link rel="shortcut icon" href="admin/img/favicon.png">
<!-- ===== CSS =====-->
<!-- General-->
<link rel="stylesheet" href="admin/css/basic.css">
<link rel="stylesheet" href="admin/css/general.css">
<link rel="stylesheet" href="admin/css/theme.css" class="style-theme">
<link rel="stylesheet" href="admin/css/background.css">
</head>
<body class="login-bg">
<div class="fullscreen-bg">
<video loop="" muted="" autoplay="" poster="assets/images/frame.png" class="fullscreen-bg__video">
<source src="http://media.blizzard.com/wow/legion-6a153ad2/videos/demon-hunters.webm" type="video/webm">
<source src="http://media.blizzard.com/wow/legion-6a153ad2/videos/demon-hunters.mp4" type="video/mp4">
</video>
</div>
<!--[if lt IE 9]>
<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!--SECTION-->
<section class="l-main-container">
<!--Main Content-->
<div class="login-wrapper register-wrapper">
<div class="login-container">
<!--Logo-->
<h1 class="login-logo"><img src="admin/img/logo.png"></h1>
<!--Login Form-->
<form id="registerForm" role="form" action="#" class="login-form">
<div class="form-group">
<input id="registerName" type="text" name="registerName" placeholder="Name" class="form-control">
</div>
<div class="form-group">
<input id="registerEmail" type="email" name="registerEmail" placeholder="Email" class="form-control">
</div>
<div class="form-group">
<input id="registerPassword" type="password" name="registerPassword" placeholder="Password" class="form-control">
</div>
<div class="form-group">
<input id="registerPasswordRepeat" type="password" name="registerPasswordRepeat" placeholder="Repeat password" class="form-control">
</div>
<div class="checkbox">
<input id="registerTerms" type="checkbox" name="registerTerms" class="checkradios checkradiosDark-1">By signing up you are accepting out
<a href="#">Terms and Conditions</a>
</div>
<button type="submit" class="btn btn-dark btn-block btn-login">Sign Up - Disabled</button>
<div class="login-social">
<div class="l-span-md-12">
<div class="or"><span>- OR -</span></div>
</div>
<div class="l-span-md-12 register-sign-in"><a href="page-login.html" class="btn btn-primary btn-block btn-login-register">Sign In - Disabled</a></div>
<div class="l-col-sm-6"><a class="btn btn-facebook btn-block"><i class="fa fa-facebook"></i>Sign with Facebook - Disabled</a></div>
<div class="l-col-sm-6"><a class="btn btn-bnet btn-block"><img src="admin/img/plugins/battlenet.png">  Sign with Battle.Net - Disabled</a></div>
</div>
<div class="login-options"></div>
</form>
</div>
</div>
</section>
<!-- ===== JS =====-->
<!-- jQuery-->
<script src="admin/js/basic/jquery.min.js"></script>
<script src="admin/js/basic/jquery-migrate.min.js"></script>
<!-- General-->
<script src="admin/js/basic/modernizr.min.js"></script>
<script src="admin/js/basic/bootstrap.min.js"></script>
<script src="admin/js/shared/jquery.asonWidget.js"></script>
<script src="admin/js/plugins/plugins.js"></script>
<script src="admin/js/general.js"></script>
<!-- Semi general-->
<script type="text/javascript">
var paceSemiGeneral = { restartOnPushState: false };
if (typeof paceSpecific != 'undefined'){
	var paceOptions = $.extend( {}, paceSemiGeneral, paceSpecific );
	paceOptions = paceOptions;
}else{
	paceOptions = paceSemiGeneral;
}

</script>
<script src="admin/js/plugins/pageprogressbar/pace.min.js"></script>
<!-- Specific-->
<script src="admin/js/plugins/forms/elements/jquery.checkradios.min.js"></script>
<script src="admin/js/plugins/forms/validation/jquery.validate.min.js"></script>
<script src="admin/js/plugins/forms/validation/jquery.validate.additional.min.js"></script>
<script src="admin/js/calls/page.register.js"></script>
</body>
</html>