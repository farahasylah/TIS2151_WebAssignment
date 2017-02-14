
<!DOCTYPE html>
<html>
<head>
	<title>Reservation Form</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" href="Style.css" type="text/css">
</head>

<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.11.3.min.js"></script>

<script>
/*scrolltotop*/
$(document).ready(function(){  
    //Check to see if the window is top if not then display button
    $(window).scroll(function(){
        if ($(this).scrollTop() > 100) {
            $('.scrollToTop').fadeIn();
        } else {
            $('.scrollToTop').fadeOut();
        }
    }); 
    //Click event to scroll to top
    $('.scrollToTop').click(function(){
        $('html, body').animate({scrollTop : 0},800);
        return false;
    }); 
});
$(document).ready(function(){
    $("#myinfo").click(function(){
        $("#myad").slideToggle("slow");
    });
});
</script>

<body>
<div id="container">
			<img src="images/header.jpg" alt="header">

		<div id="navigation">
        <ul id="menu" class="container">
        	<li><a class="nav" href="#" >Home</a></li>
        	<li><a class="nav" href="#">About Workshop</a></li>
            <li><a class="nav" href="RForm.php">Reservation Form</a></li>
            <li><a class="nav" href="#">Query Form</a></li>
            <li><a class="nav" href="Contact.html">Contact Us</a></li>
        </ul>
    	</div><!-- end navigation -->

	<div id = "subcontainer">
		
	<div class = "form">	
	<form method = "post" action = "#">
		<h1>Reservation Form</h1>
		<h4>Please fill this form to register. All are require to fill.</h4>
		<hr>
		<br>
		<p>
		<label>Name<span class = "red"> *</span></label>
		<div class = "align">
		&nbsp; : <input type = "text" name="name" class="input" required autofocus/>
		</div>
		</p>
		<br>

		<p>
		<label>NRIC/Passport<span class = "red"> *</span></label> 
		<div class = "align">
	 	&nbsp; : <input type = "text" name="ic/passport" class="input" pattern = "\d{6}-\d{2}-\d{4}" placeholder = "950125-10-4567" required/>
	 	</div>
		</p>
		<br>

	 	<p>
		<label>Gender<span class = "red"> *</span></label>
		<div class = "align">
		&nbsp; : <select name = "gender" class="input">
			<option selected>Male</option>
			<option>Female</option>
		</select>
		</div>
		</p>
		<br>

		<p>
		<label>Affiliation<span class = "red"> *</span></label>
		<div class = "align">
		&nbsp; : <input type = "text" name = "affiliation" class="input" required/>
		</div>
		</p>
		<br>

		<p>
		<label>Nationality<span class = "red"> *</span></label>
		<div class = "align">
		&nbsp; : <input type = "text" required name = "nationality" class="input" autocomplete = "on"/>
		</div>
		</p>
		<br>

		<p>
		<label>Contact No <span class = "red"> *</span></label>
		<div class = "align">
		&nbsp; : <input type = "tel" name = "tel" placeholder = "012-3456789" class="input" pattern = "\d{3}-\d{7}" required/>
		</div>
		</p>
		<br>

	 	<p>
	 	<label>Email<span class = "red"> *</span></label>
	 	<div class = "align">
	 	&nbsp; : <input type = "email" name="email" class="input" placeholder="web@mail.com" required/>
		</div>
	 	</p>
		<br>

		<p><input type = "submit" value ="Register" class="breg"/>
		<input type = "reset" value ="Clear" class="bclear"/>
		</p>
	</form>
	</div><!--end form-->
	<br><br>
	</div><!--end subcontainer-->
	<img src="images/footerline.gif" alt="Footerline" width="1000">
	<div id ="footer">
			<div id="copyright">
				<p>Copyright &copy; 2015.<br/> All Rights Reserved.</p>
			</div>
			<div id="name">
				<p>Tan Beng Yee 1122700816 | Estevez Ben Lajamin 1122700554</p>
				<p>Rifhan Binti Razali 1122700445 | Nur Farah Asylah Bt Nordin 1122702103</p>
			</div><!--end name-->
		</div><!--end footer-->
</div><!--end container-->
	<a class="scrollToTop" href="#"></a>
</body>
</html>

<?php 
 
if(isset($_POST['submit']))
{
	$name = $_POST["name"];
	$ic = $_POST["ic/passport"];
	$gender = $_POST["gender"];
	$affiliation = $_POST["affiliation"];
	$nationality = $_POST["nationality"];
	$tel = $_POST["tel"];
	$email = $_POST["email"];

	
	mysql_query("INSERT INTO `Account` (`acc_ID`, `Acc_email`, `password`, `firstname`, `lastname`, `phone_no`, `street_address`, `id`)
			  VALUES ('$name', '$ic', '$gender', '$affiliation', '$nationality', '$tel', '$email', NULL);"); 
	echo '<script type="text/javascript">alert("Reservation Success!");
				</script>';
	$last_ID = mysql_insert_id();
}
mysql_close($connection);
?>