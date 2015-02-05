<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- HTML Code -->
<html>
<head>
<title>Demo</title>
<link href="css/style.css" rel="stylesheet">
<script src="js/script.js" type="text/javascript"></script>
</head>
<!-- Body Starts Here -->
<body>
<a onclick="show_hide()" style="cursor:pointer; text-decoration:underline; position:fixed; left: 1138px; top: 250px;" id="ele_show_hide">
<img src="image/down.jpg" width="58" height="54"/>Complaint Registration</a>
<div id="collapse" style="display:none;">
<div id="dragme">
<div class="container">
<!-- Feedback Form Starts Here -->
<div id="feedback">
<!-- Heading Of The Form -->
<div class="head">
<h3>Complaint Form</h3>
<p>This is complaint form. Send us your Message !</p>
</div>
<!-- Feedback Form -->
<form action="#" id="form" method="post" name="form">
<input name="vname" placeholder="Your Name" type="text" value="">
<input name="vemail" placeholder="Your Email" type="text" value="">
<input name="sub" placeholder="Subject" type="text" value="">
<label>Your Message</label>
<textarea name="msg" placeholder="Type your text here..."></textarea>
<input id="send" name="submit" type="submit" value="Send Message">
</form>
<h3><?php include "secure_email_code.php"?></h3>
</div>
<!-- Feedback Form Ends Here -->
</div>
</div>
</div>
</body>

<!-- Body Ends Here -->
</html>

<!-- HTML Ends Here -->
