<?php
	require('confige.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>
	Wsdesign E-business Technologies
	</title>
</head>
<?php include('header.php'); ?>
<body>
<section class="contact py-lg-4 py-md-3 py-sm-3 py-3" id="contact">
      <div class="container py-lg-5 py-md-5 py-sm-4 py-3">
        <h3 class="title clr text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">Sign Up</h3>
        <div class="row">
          
            <div class="col-md-3">
          </div>
          <div class="col-md-7 contact-form">
            <form action="" method="post">
              <div class="row text-center contact-wls-detail">
                <div class="col-md-6 form-group contact-forms">
                  <input type="text" class="form-control" name="fullname" style="color:white;" placeholder="Your Fullname" required="">
                </div>
				<div class="col-md-6 form-group contact-forms">
                  <input type="password" class="form-control" name="password" style="color:white;" placeholder="Your Password" required="">
                </div>
				<div class="col-md-6 form-group contact-forms">
                  <input type="email" class="form-control" name="email" style="color:white;" placeholder="Your Email" required="">
                </div>
				
                <div class="col-md-6 form-group contact-forms">
                  <input type="text" class="form-control" name="contact" style="color:white;" placeholder="Your contact no" limit="12" pattern="[0-9]{10}" required="">
                </div>
              </div>
             
              <div class="form-group contact-forms">
                <textarea class="form-control" rows="3"  name="comments"  style="color:white;" placeholder="Your Address" required=""></textarea>
              </div>
              <div class="sent-butnn text-center">
                <button value="send" type="submit" class="btn btn-block" data-blast="bgColor" name="send">Send</button>
				<!-- <input class="btn btn-block" data-blast="bgColor" type="submit" name="send" value="send"> -->
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
	


</body>
<?php

if(isset($_POST['send'])){

		
			$qry = mysql_query("insert into student(`fullname`,`password`,`emailid`,`contact`,`address`) values ('".$_POST['fullname']."','".$_POST['password']."','".$_POST['email']."','".$_POST['contact']."','".$_POST['comments']."')");
			if($qry){

			echo "<script> alert('your Signin Successfull')</script>";
				echo '<meta http-equiv="refresh" content="0; url=index.php">';
				exit;	
		}
		
			}
	
?>
</html>
<?php include('footer.php'); ?>
