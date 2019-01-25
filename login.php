<?php
	require('confige.php');
  session_start();
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
  <?php error_reporting(0); if($_SESSION['loginusername']) {?>
    <h4 style="color: #ea1d5d; text-align: center;text-transform: uppercase; font-size: 15px;">Welcome To You <span style="text-decoration: underline; font-weight: 900;">  <?php echo $_SESSION['loginusername']; ?></span> You Are Logged In Now..!!!<a style="color: #ea1d5d;text-transform: lowercase;" href="signout.php">         Signout here</a></h4>
  <?php } else{ ?>

<section class="contact py-lg-4 py-md-3 py-sm-3 py-3" id="contact">
      <div class="container py-lg-5 py-md-5 py-sm-4 py-3">
        <h3 class="title clr text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">Login</h3>
        <div class="row">
          
            <div class="col-md-3">
          </div>
          <div class="col-md-7 contact-form">
            <form action="verify.php" method="post">
				<div class="col-md-6 form-group contact-forms">
                  <input type="email" class="form-control" name="email" style="color:white;" placeholder="Your Email" required="">
                </div>
				
                <div class="col-md-6 form-group contact-forms">
                  <input type="password" class="form-control" name="password" style="color:white;" placeholder="Your Password" required="">
                </div>
              
             
              <div class="sent-butnn text-center">
               <br><br><br> <button value="send" type="submit" class="btn btn-block" data-blast="bgColor" name="send">Login</button>
				<!-- <input class="btn btn-block" data-blast="bgColor" type="submit" name="send" value="send"> -->
              </div>

            </form>
          </div>
        </div>
      </div>
            <h4 style="text-align: center; color:white;">Create An Account..???<a href="signup.php">Click Here</a></h4>

    </section>
<?php } ?>
    <?php
error_reporting(0);
if($_GET['wrong']=='access'){
  echo "Username/Password mismatch !!!";
}
?>
	


</body>

</html>
<?php include('footer.php'); ?>
