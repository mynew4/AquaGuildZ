<?php
$page_cat = "forums";
$page_tit = "forums";
include __DIR__ . '/settings/forum.php';
include __DIR__ . '/check.php';
if($login_rank <= 1)
{
die('<meta http-equiv="refresh" content="2;url=wrong.php"/>');
}
?>
<!DOCTYPE html>
<html>
<head>
<?php include ('webkit/meta'); ?>
<!-- Le styles -->
<link href="assets/stylesheets/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="assets/stylesheets/bootstrap-responsive.min.css" rel="stylesheet" type="text/css">
<link href="assets/stylesheets/main.css" rel="stylesheet" type="text/css">
<link href="assets/stylesheets/forums.css" rel="stylesheet" type="text/css">
<!-- Le javascripts -->
<script src="assets/javascript/jquery.min.js"></script>
<script src="assets/javascript/jquery.flexslider.min.js"></script>
<script src="assets/javascript/bootstrap.min.js"></script>
<script src="assets/javascript/global.js"></script>
<script src="assets/javascript/common_orig.js"></script>
<!-- Special CSS & JS for WYSIWYG Editor -->
<script src="assets/ckeditor/ckeditor.js"></script>
<!-- WoWHead Linking -->
<script type="text/javascript" src="//static.wowhead.com/widgets/power.js"></script>
<script>var wowhead_tooltips = { "colorlinks": true, "iconizelinks": true, "renamelinks": true }</script>
</head>
<body>
<?php include("webkit/servicebar") ?>
<div id="wrapper">
<header id="main_header" class="clearfix">
<a href="index.php"><div id="logo"></div></a>
<div id="searchbar">
<form>
<input placeholder="Search characters, items, forums and more..." type="text">
</form>
</div>
</header>
<div id="content" class="clearfix">
<div id="main">
<?php include("webkit/menu"); ?>
<!-- Main Content Add here -->
<?php include("webkit/warning"); ?>
<div class="container main-wide">
<div class="forum-padding">
<?php
if (isSet($_POST['createThread'])) {
if (isSet($_POST['title']) && $_POST['title'] != '' && isSet($_POST['cat']) && $_POST['cat'] != '' && isSet($_POST['description']) && $_POST['description'] != '' && isSet($_SESSION['email']) && $_SESSION['email'] != '' && isSet($_POST['tags']) && $_POST['tags'] != '') {
$title = $_POST['title'];
$cat = $_POST['cat'];
$description = $_POST['description'];
$tags = $_POST['tags'];
$tags = strtolower($tags);
$user = $_SESSION['email'];
$q = mysqli_query($aquaglz, "INSERT INTO `threads` VALUES ('', '$cat', '$title', '', '', '$description', '$user', '$tags', now())") or die(mysql_error());
if ($q) {
echo '<a href="#" class="important_succ"><p>Topic Created. Please wait while we redirect you!</p></a>
<meta http-equiv="refresh"content="2;url=topics.php">';
}else
echo '<a href="#" class="important_notice"><p>Failed to Create Topic. Please wait while we redirect you!</p></a>
<meta http-equiv="refresh"content="2;url=crtThread.php">';
}
}
?>
<div class="forum_header">
<div class="new_title">
<p>Post New Topic</p>
<div></div>
</div>		
<div class="forum_title">
<h1>Forums</h1>
<h3>Create your Topic now!</h3>
</div>
</div>	
<form action='crtThread.php' method='POST' class="post_topic_reply" name="post_topic">
<label>
<p>Title:</p><br>
<input style="width: 832px" type='text' name='title' maxlength="150">
</label>
<div class="row" style="float: right;">
<label>Secret Category</label>
<select name="secretQuestion" style="width: 350px !important; display: none;" styled="true" id="select-style-1">
<option disabled="disabled">Select Category</option>
<option value="1">News</option>
</select><div id="select-style-1" class="js-select">
<div class="js-select-selected">News</div>
<div class="js-select-arrow js-select-arrow-active"></div>
<div class="js-select-list-container js-select-list-container-scrollable" id="js-list-container" style="z-index: 101;">
<div class="js-select-list-top-controller" id="js-list-top-controller" align="center"><p></p></div>
<div class="js-select-list-scroller" id="js-list-scroller"><div class="js-select-list-scrollable" id="js-list">
<ul id="0" class="js-select-list-option js-select-list-option-disabled">Select Category</ul>
<ul id="1" class="js-select-list-option js-select-list-option-selected">News</ul>
<ul id="2" class="js-select-list-option">Developer's Place </ul>
</div>
</div><div class="js-select-list-bottom-controller" id="js-list-bottom-controller" align="center"><p></p>
</div></div></div>
</div>
<label>
<p>Tags:</p><br>
<input type='text' name='tags' maxlength="150">
</label>
<label>
<textarea name='description' id="editor1" class="bbcode" rows="10" cols="80"></textarea>
<script data-sample="1">
CKEDITOR.replace('editor1');
</script>
</label>
<div>
<input type='submit' value='Create Topic' name='createThread'>
</div>
</form>
</div>
</div>
<div class="clear"></div>
<br>
<div class="clear"></div>
</div>
<?php include("webkit/sidelogin"); ?>
</div>
</div>
<?php include("webkit/footer"); ?>
</body>
</html>