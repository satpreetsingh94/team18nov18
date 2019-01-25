<?php
	require('confige.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Wsdesign E-business Technologies
	</title>
	<style type="text/css">
		

	</style>
</head>
<?php include('header.php'); ?>
<body>
<?php
if(isset($_POST['send'])){

		
			$qry = mysql_query("insert into contact(`name`,`email`,`comments`) values ('".$_POST['name']."','".$_POST['email']."','".$_POST['comments']."')");
			
			
			if ($qry) {

				echo "<script> alert('your message Send Successfull')</script>";
				echo '<meta http-equiv="refresh" content="0; url=index.php">';
				exit;
			}
			}




?>


<!--contact -->
    <section class="contact py-lg-4 py-md-3 py-sm-3 py-3" id="contact">
      <div class="container py-lg-5 py-md-5 py-sm-4 py-3">
        <h3 class="title clr text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">Contact Us</h3>
        <div class="row">
          <div class="col-md-5 address-grid">
            <div class="addres-office-hour text-center" >
              <ul style="list-style: none;">
                <li class="mb-2">
                  <h6 data-blast="color">Address</h6>
                </li>
                <li>
                  <p>Melbourne,south Brisbane,<br>QLD 4101,Aurstralia.</p>
                </li>
              </ul>
              <ul style="list-style: none;">
                <li class="mt-lg-4 mt-3">
                  <h6 data-blast="color">Phone</h6>
                </li>
                <li class="mt-2">
                  <p>+ 1 (234) 567 8901</p>
                </li>
                <li class="mt-lg-4 mt-3">
                  <h6 data-blast="color">Email</h6>
                </li>
                <li class="mt-2">
                  <p><a href="mailto:info@example.com">info@wsdesign.com</a></p>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-7 contact-form">
            <form action="" method="post">
              <div class="row text-center contact-wls-detail">
                <div class="col-md-6 form-group contact-forms">
                  <input type="text" class="form-control" style="color:white;" name="name" placeholder="Your Name" required="">
                </div>
                <div class="col-md-6 form-group contact-forms">
                  <input type="email" class="form-control" style="color:white;" name="email" placeholder="Your Email" required="">
                </div>
              </div>
             
              <div class="form-group contact-forms">
                <textarea class="form-control" rows="3"  name="comments" style="color:white;"  placeholder="Your Message" required=""></textarea>
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
    <!--//contact -->

</body>
</html>
<?php include('footer.php'); ?>
