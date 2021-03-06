<?php
$page_cat = "services";
$page_tit = "form";
include __DIR__ . '/check.php';
$ctID = $_GET["ctID"];
?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<html>
<head>
<?php include ('webkit/meta'); ?>
<!-- Le styles -->
<link href="assets/stylesheets/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="assets/stylesheets/bootstrap-responsive.min.css" rel="stylesheet" type="text/css">
<link href="assets/stylesheets/main.css" rel="stylesheet" type="text/css">
<link href="assets/stylesheets/forums.css" rel="stylesheet" type="text/css">
<link href="assets/stylesheets/media.css" rel="stylesheet" type="text/css">
<!-- Le javascripts -->
<script src="assets/javascript/jquery.min.js"></script>
<script src="assets/javascript/jquery.flexslider.min.js"></script>
<script src="assets/javascript/bootstrap.min.js"></script>
<script src="assets/javascript/global.js"></script>
<script src="assets/javascript/common_orig.js"></script>
<script src="assets/stylesheets/form/reg.js"></script>
<script src="assets/stylesheets/form/reg1.js"></script>
</head>
<body>
<?php include("settings/googletracking.php") ?>
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
<div class="container_form_1" align="center">
<div class="warning_notice fix_recr_warn">
<p>All Recruits are instantly posted and will be read when an officer gets online! Please be patient! It's all about you anyway!</p>
</div>
<?php
$recr = "SELECT * FROM recruits WHERE id=$ctID";
$recrslt = $aquaglz->query($recr); 
if ($recrslt->num_rows > 0) {
// output data of each row
while($recr = $recrslt->fetch_assoc()) {
$char = $recr['character'];
$cbTag = $recr['battletag'];
$rclass = $recr['class'];
$rrole = $recr['spec'];
$rtype = $recr['type'];
$rappr = $recr['approved'];
$rdate = $recr['last_date'];
?>
<div class="container_3 bg-wide-screen fix_recr_title">
<div class="grad">
<div class="page-title">Recruitment > <?php echo $rclass; ?></div>
<a href="form.php">Back to Recruits</a>
</div>
</div>
<?php if($login_rank < 4)
{
echo'';
}else{
echo '<p style="margin: 6px 0 0 0;"></p>
<div class="container_3 bg-wide-screen fix_recr_title">
<div class="grad">
<div class="page-title">Change Recruit Status</div>
<a href="settings/closed.php?id='.$recr['id'].'">Cancelled</a>
<a href="settings/considering.php?id='.$recr['id'].'">Considering</a>
<a href="settings/accepted.php?id='.$recr['id'].'">Accepted</a>
</div>
</div>';
}
?>
<div class="container_3 recr_light_cont recr_info_cont" align="left">
<div class="recr_info" align="left">
<ul class="recr_class">
<?php if ($rclass == 'Death Knight'){
echo '<li id="class"><span style="background:url(assets/images/recr-banners/Death-Knight.png) no-repeat; background-size: 100%; position:static;"></span><p></p></li>
';}else{
echo '<li id="class"><span style="background:url(assets/images/recr-banners/'.$rclass.'.png) no-repeat; background-size: 100%; position:static;"></span><p></p></li>';
}
?>
</ul>		
<ul class="recr_info_main">
<li id="charname"><span>Character:</span><p><?php echo $char; ?></p></li>
<li id="role"><span>BattleTag:</span><p><font color="#0072a3"><?php echo $cbTag; ?></font></p></li>
<li><span>Class:</span><p>
<?php
if ($rclass == 'Warrior'){
echo '<font color="#c69b6d">Warrior</font>';}
?>
<?php
if ($rclass == 'Paladin'){
echo '<font color="#f48cba">Paladin</font>';}
?>
<?php
if ($rclass == 'Hunter'){
echo '<font color="#aad372">Hunter</font>';}
?>
<?php
if ($rclass == 'Rogue'){
echo '<font color="#fff468">Rogue</font>';}
?>
<?php
if ($rclass == 'Priest'){
echo '<font color="#f0ebe0">Priest</font>';}
?>
<?php
if ($rclass == 'Death Knight'){
echo '<font color="#c41e3b">Death Knight</font>';}
?>
<?php
if ($rclass == 'Shaman'){
echo '<font color="#2359ff">Shaman</font>';}
?>
<?php
if ($rclass == 'Mage'){
echo '<font color="#68ccef">Mage</font>';}
?>
<?php
if ($rclass == 'Warlock'){
echo '<font color="#9382c9">Warlock</font>';}
?>
<?php
if ($rclass == 'Monk'){
echo '<font color="#00ffba">Monk</font>';}
?>
<?php
if ($rclass == 'Druid'){
echo '<font color="#ff7c0a">Druid</font>';}
?>
</p></li>
<li><span>Role:</span><p><?php echo $rrole; ?></p></li>
</ul>				
<ul class="recr_info_second">
<li><span>Posted:</span><p><?php echo $rdate; ?></p></li>
<div id="moveme">
<?php if ($rtype == 'New'){
echo '<div class="recruit-reports-holder new">
<h1>NEW</h1>
<h3>YOUR POST IS NEW</h3>
</div>
';}
?>
<?php if ($rtype == 'Considering'){
echo '<div class="recruit-reports-holder considering">
<h1>Considering</h1>
<h3>YOUR POST IS BEING PROCESSED</h3>
</div>
';}
?>
<?php if ($rtype == 'Closed'){
echo '<div class="recruit-reports-holder closed">
<h1>NO</h1>
<h3>CANCELLED</h3>
</div>
';}
?>
<?php if ($rappr == '1'){
echo '<div class="recruit-reports-holder approved">
<h1>YES</h1>
<h3>YOU ARE APPROVED</h3>
</div>
';}
?>
</div>
</ul>                
<div class="clear"><br></div>
</div>
</div>
<div class="clear"><br></div>
<div class="recr">
<div id="title">
<h1>Personal Information</h1>
</div>
</div>
<div class="clear"><br></div>
<div class="container_rec_form rec-search-results" style="width:843px; padding-top:14px; padding-bottom:10px;">
<div class="unity_rec">
<div class="recr-row" align="left">
<h4>What's your name?</h4>
<p>
<?php echo $recr['p1']; ?>
</p>
</div>
<div class="recr-row" align="left">
<h4>What's your occupation?</h4>
<p>
<?php echo $recr['p2']; ?>
</p>
</div>
<div class="recr-row" align="left">
<h4>What's your age?</h4>
<p>
<?php echo $recr['p3']; ?>
</p>
</div>
<div class="recr-row" align="left">
<h4>Please describe yourself as a player. We need to know your attitude.</h4>
<p>
<?php echo $recr['q12']; ?></p>
</div>
<div class="recr-row" align="left">
<h4>Please describe how comfortable you are when playing games.</h4>
<p>
<?php echo $recr['q13']; ?></p>
</div>
</div>
</div>
<div class="clear"><br></div>
<div class="recr">
<div id="title">
<h1>Character Information</h1>
</div>
</div>
<div class="clear"><br></div>
<div class="container_rec_form rec-search-results" style="width:843px; padding-top:14px; padding-bottom:10px;">
<div class="unity_rec">
<div class="recr-row" align="left">
<h4>Are you familiar with raiding?</h4>
<p>
<?php echo $recr['q1']; ?>
</p>
</div>
<div class="recr-row" align="left">
<h4>Link your Armory Link:</h4>
<p>
<a onclick="window.open('<?php echo $recr['q2']; ?>');"href="<?php echo $recr['q2']; ?>"><?php echo $char; ?> - <?php echo $rclass; ?> - <?php echo $rrole; ?> - Armory Link</a>
</p>
</div>
<div class="recr-row" align="left">
<h4>RaidUI Image:</h4>
<p>
<a onclick="window.open('<?php echo $recr['q3']; ?>');"href="<?php echo $recr['q3']; ?>"><?php echo $char; ?> - <?php echo $rclass; ?> - <?php echo $rrole; ?> - RaidingUI</a>
</p>
</div>
<div class="recr-row" align="left">
<h4>Do you have an Authenticator?</h4>
<p><?php echo $recr['q4']; ?>
<h4>Do you wish to get one, if we request it?</h4>
</p>
<p>
<?php echo $recr['q4_info']; ?>
</p>
</div>
<div class="recr-row" align="left">
<h4>What addons do you use? We use some specific Add-ons like WeakAuras, EPGPlootmaster and Exorsus. Do you mind downloading them?</h4>
<p>
<?php echo $recr['q5']; ?></p>
</div>
<div class="recr-row" align="left">
<h4>Are you patient enough to handle Wipes while we Progress?</h4>
<p>
<?php echo $recr['q16']; ?></p>
</div>
<div class="recr-row" align="left">
<h4>What is your Rotation? (Don’t bother Copy/Paste a rotation guide from a site. Just let us know the key parts of your rotation and how you perfect them to max your damage!)</h4>
<p>
<?php echo $recr['q14']; ?></p>
</div>
<div class="recr-row" align="left">
<h4>What made you consider applying to Hellenic Horde?</h4>
<p>
<?php echo $recr['q6']; ?></p>
</div>
<div class="recr-row" align="left">
<h4>Tell us about your last guild. Why are you choosing us over them? Do you have any references?</h4>
<p>
<?php echo $recr['q7']; ?></p>
</div>
<div class="recr-row" align="left">
<h4>Tell us about the rest of your raiding history. What content have you cleared in the past? Which guilds did you do it with? Do you have any experience in guild leadership positions or other positions of responsibility?</h4>
<p>
<?php echo $recr['q8']; ?></p>
</div>
<div class="recr-row" align="left">
<h4>Prove that you are as good as we expect. Go into detail about what makes someone a master of your current class/spec, and show us how that is reflected in your own logs.</h4>
<p>
<?php echo $recr['q9']; ?></p>
</div>
<div class="recr-row" align="left">
<h4>Do you have a good Computer & Internet Connection? How often do you upgrade?</h4>
<p>
<?php echo $recr['q10']; ?></p>
</div>
<div class="recr-row" align="left">
<h4>Do you have friends in the Guild?</h4>
<p><?php echo $recr['q11']; ?>
<h4>Name one or two of them! Not more.</h4>
</p>
<p>
<?php echo $recr['q11_info']; ?>
</p>
</div>
</div>
<?php } }?>
</div>


<div class="container_rec_form rec-search-results" style="width:843px; padding-top:14px; padding-bottom:10px;">
<div class="forum-padding fix-padding">
<!-- Topic Post -->
<!-- Forum Header -->
<div class="topic_header">
<div class="topic_title">
<h1 class="fix_officer">Officer Replies</h1>
<h3>For Candidate: <?php echo $char; ?> - <?php echo $rclass; ?> - <?php echo $rrole; ?></h3>
</div>
</div>	
<div class="topic_post recr_post admin_post" id="post-9">
<div class="officer_post_logo_hh"></div>
<div class="left_side">	
<div class="user_avatar"><span style="background:url(assets/images/avatar/profile.gif) no-repeat; background-size: 100%;">
</span></div>
<div class="user_info">
<div class="usr_and_pr">
<a class="username">SYSTEM</a>
</div>
<h3><font color="#FF0000">Management</font></h3>
</div>
</div>
<div class="right_side fix_recr">
<div class="post_container">
<p style="text-align: left;">
Hello there, <?php echo $char; ?>!</p>
<p style="text-align: left;">
One of our Officers will contant you here as soon as possible. Thanks for your post for the recruitment about the <?php echo $rclass; ?>! We might need a <?php echo $rrole; ?> like you! The Hellenic Horde Team wishes you good luck with your Post!
</p>
<p style="text-align: left;">
With Respect,</p>
<p style="text-align: left;">
SYSTEM
</p>
</div>
<ul class="post_controls">
<li class="post_date">2015-12-17 12:11:21</li>
</ul>
</div>
<div class="clear"></div>
</div>
<?php
$var = mysqli_query($aquaglz, "SELECT rank FROM `users` WHERE `email`='$user_check'");
if (mysqli_num_rows($var) > 0) {
while ($rowvar = mysqli_fetch_array($var)) {
$rank_check = $rowvar['rank'];
$qu = mysqli_query($aquaglz, "SELECT * FROM `recr_replies` WHERE `recrID`='$ctID'");
if (mysqli_num_rows($qu) > 0) {
while ($row = mysqli_fetch_array($qu)) {
$author = $row['author'];
$qer = mysqli_query($aquaglz, "SELECT avatar, rank, bTag FROM `users` WHERE `email`='$author'");
if (mysqli_num_rows($qer) > 0) {
while ($recr = mysqli_fetch_array($qer)) {
$avatar = $recr['avatar'];
$rank = $recr['rank'];
$btRag = $recr['bTag'];
echo '
<div class="topic_post recr_post admin_post" id="post-9">
<div class="officer_post_logo_hh"></div>
<div class="left_side">	
<div class="user_avatar"><span style="background:url(assets/images/avatar/'.$avatar.') no-repeat; background-size: 100%;">
</span></div>
<div class="user_info">
<div class="usr_and_pr">
<a class="username">'.$btRag.'</a>
</div>
';
if ($rank == '6'){
echo '<h3><font color="#00B4FF">Developer</font></h3>
';}
if ($rank == '5'){
echo '<h3><font color="#ff8000">Guild Master</font></h3>
';}
if ($rank == '4'){
echo '<h3><font color="#81B558">Officer</font></h3>
';}
if ($rank == '3'){
echo '<h3><font color="#a335ee">Raider</font></h3>
';}
echo'
</div>
</div>
<div class="right_side fix_recr">
';
if ($rank == '6'){
echo '<div class="post_container" style="color: #00B4FF;">
<p style="text-align: left;">'.$row['content'].'</p>
</div>
';}
if ($rank == '5'){
echo '<div class="post_container" style="color: #ff8000;">
<p style="text-align: left;">'.$row['content'].'</p>
</div>
';}
if ($rank == '4'){
echo '<div class="post_container" style="color: #81B558;">
<p style="text-align: left;">'.$row['content'].'</p>
</div>
';}
if ($rank == '3'){
echo '<div class="post_container" style="color: #a335ee;">
<p style="text-align: left;">'.$row['content'].'</p>
</div>
';}
echo'
<ul class="post_controls">
<li class="post_date">'.$row['date'].'</li>';
if ($author == $user_check){
echo '<li><a class="report" href="#" title="Edit">Edit</a></li><li><a class="quote post-quote-button" data-post-id="'.$id.'" href="#" title="Delete">Delete</a></li>
';}
else{
if ( in_array($rank_check, array(4, 5, 6)) ) {
echo '<li><a class="report" href="#" title="Edit">Edit</a></li><li><a class="quote post-quote-button" data-post-id="'.$id.'" href="#" title="Delete">Delete</a></li>
';}
}
echo'
</ul>
</div>
<div class="clear"></div>
</div>
';
}
}
}
}}}
?>
<!-- Actions -->
</div>
</div>
<?php $rer = mysqli_query($aquaglz, "SELECT bTag FROM `users` WHERE `email`='$user_check'");
if (mysqli_num_rows($rer) > 0) {
while ($rera = mysqli_fetch_array($rer)) {
?>
<?php if($login_rank < 3)
{
echo "
<div class='container_rec_form rec-search-results' style='width:843px; padding-top:14px; padding-bottom:10px;'>
<div id='bottom' class='forum-padding fix-padding'>
<div class='topic_header'>
<div class='topic_title'>
<h1>You are not allowed to reply!</h1>
</div>
</div>
</div>
</div>
";
}else{
echo "
<div class='container_rec_form rec-search-results' style='width:843px; padding-top:14px; padding-bottom:10px;'>
<div id='bottom' class='forum-padding fix-padding'>
<div class='topic_header'>
<div class='topic_title'>
<h1>Leave a Reply</h1>
<h3>Reply as: $user_check (Thou your BattleTag will be posted, relax your BattleTag Numbers will not)</h3>
</div>
</div>
<div class='quick_reply topic_post recr_post'>
<form action='' method='POST'>
<h2>Quick Reply</h2>
<textarea id='quick_reply_textarea' name='cont'></textarea>
<input type='submit' value='Post Reply' name='createReply'>
</form>
</div>
</div>
</div>
";
}
?>
<?php
if(isset($_POST["createReply"])){
$sql = "INSERT INTO recr_replies VALUES ('', '".$ctID."', '".$_POST["cont"]."', '".$user_check."', NOW())";

if ($aquaglz->query($sql) === TRUE) {
echo "<script type= 'text/javascript'>alert('Your reply has been submitted!');</script>";
} else {
echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $aquaglz->error."');</script>";
}
}
}
}
?>
</div>
</div>
<?php include("webkit/recr_login.less"); ?>
</div>
<?php include("webkit/footer"); ?>
</div>
<?php 
// Closing the Connection for Injection Measures!
$aquaglz->close();
?>
</body>
</html>