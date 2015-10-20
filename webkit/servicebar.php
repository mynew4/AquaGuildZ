<div class="fullscreen-bg">
<video loop muted autoplay poster="assets/images/frame.png" class="fullscreen-bg__video">
<source src="http://media.blizzard.com/wow/legion-6a153ad2/videos/demon-hunters.webm" type="video/webm">
<source src="http://media.blizzard.com/wow/legion-6a153ad2/videos/demon-hunters.mp4" type="video/mp4">
</video>
</div>
<link href="assets/stylesheets/nav.css" rel="stylesheet" type="text/css">
<div id="nav-client-header" class="nav-client compact">
<div id="nav-client-bar">
<div class="grid-container nav-header-content">
<ul class="nav-list nav-left" id="nav-client-main-menu">
<li>
<a id="nav-client-home" class="nav-item nav-home" href="/en/" data-analytics="global-nav" data-analytics-placement="Home"></a>
</li>
<li>
<a id="nav-client-shop" class="nav-item nav-link" href="index.php" data-analytics="global-nav" data-analytics-placement="Home">Home</a>
</li>
</ul>
<ul class="nav-list nav-right" id="nav-client-account-menu">
<li>
<?php if(isset($_SESSION['email'])){ ?>
<div id="username">
<div class="dropdown pull-right">
<a class="nav-link username needsclick dropdown-toggle" data-toggle="dropdown" rel="navbar">NAME
<b class="caret"></b></a>
<div class="dropdown-menu  pull-right">
<div class="arrow top"></div>
<div class="user-profile">
<div class="dropdown-section">
<div class="nav-box selectable">
<div class="label">
<span class="battletag">NAME</span>#
<span class="code">ID</span>
</div>
<div class="email"><?php echo $login_user;?></div>
</div>
</div>
<div class="dropdown-section">
<ul class="nav-list">
<li>
<a class="nav-item nav-a nav-item-box" href="#" data-analytics="global-nav" data-analytics-placement="Nav - Account - Settings"><i class="nav-icon-24-blue nav-icon-character-cog"></i>Account Settings</a>
</li>
</ul>
</div>
<div class="dropdown-section">
<a class="nav-item nav-item-box" href="#" data-analytics="global-nav" data-analytics-placement="Nav - Account - Log Out"><i class="nav-icon-24-blue nav-icon-logout"></i>Log Out</a>
</div>
</div>
</div>
</div>
</div>
<?php }else{ ?>
<div id="username">
<div class="dropdown pull-right">
<a class="nav-link username dropdown-toggle" data-toggle="dropdown" rel="navbar">Your account<b class="caret"></b></a>
<div class="dropdown-menu">
<div class="arrow top"></div>
<div class="user-profile">
<div class="dropdown-section">
<div class="nav-box">
<a class="nav-item nav-btn nav-btn-block nav-login-btn" href="login.php" data-analytics="global-nav" data-analytics-placement="Log In">Log In</a>
</div>
</div>
<div class="dropdown-section">
<ul class="nav-list">
<li>
<a class="nav-item nav-a nav-item-box" href="register.php" data-analytics="global-nav" data-analytics-placement="Settings"><i class="nav-icon-24-blue nav-icon-character-cog"></i>Register an Account</a>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</li>
<li>
<a id="nav-client-support-link" class="nav-item nav-link" href="services.php" data-analytics="global-nav" data-analytics-placement="About Us"> About Us </a>
</li>
</ul>
</div>
</div>
</div>
<?php } ?>