<!DOCTYPE html>
<?php session_start(); ?>
<html>
<head>
	<title>
		Wsdesign E-business Technologies
	</title>
</head>
<style type="text/css">
	body .homepage{
		
		display: inline-block;
		width: 100%
		height:2500px;
		position: initial;
		height: auto;
		border-radius: 15px;
		border:1px solid black;
		box-sizing: border-box;


	}
	.homepage .section{

		margin: 3% 5%;
		box-sizing: border-box;

	}
	.homepage .section .box1{
		float: left;
		width: 30%;
		margin-right: 3%;
		background-color: black;
		border-radius: 15px;
		height: 750px;
		display: inline-block;
		margin-top: 3%;
		margin-bottom: 5%;
		box-sizing: border-box;

	}
.clearfix{

	clear: both;


}
.homepage .section .box1 h4{

	    font-size: 18px;
	    color: #ea1d5d;
	    line-height: 33px;
    	padding: 3%;
    	text-align: center;
    text-transform: uppercase;
}

.homepage .section .box1 h4:after {

    border-top: 3px solid white;

    display: block;
    width: 300px;
    content: "";
    margin: 8px auto 0;
}
.homepage .section .box1 h4:before {

    border-top: 3px solid white;

    display: block;
    width: 300px;
    content: "";
    margin: 8px auto 0;
}
.homepage .section .box1 p{

		font-size: 12px;
	    color: white;
	    line-height: 33px;
    	padding: 3%;
    	text-align: center;
    	text-transform: uppercase;
}
.homepage .section .box1 p:after {

    border-top: 3px solid white;

    display: block;
    width: 300px;
    content: "";
    margin: 8px auto 0;
}
.homepage .section .box2{
float: left;
		width: 30%;
		margin-right: 3%;
		background-color: white;
		border-radius: 15px;
		height: 350px;
		display: inline-block;
		margin-top: 3%;
		margin-bottom: 5%;
		box-sizing: border-box;
		border:1px solid black;

	}
.homepage .section .box2 img{
	border-radius: 15px;
	width: 90%;
	margin:1% 5%;
	height: 250px; 
}


</style>
<?php include('header.php'); ?>
<body>
<div class="clearfix"></div>
		<?php error_reporting(0); if($_SESSION['loginusername']) {?>
		<h4 style="color: #ea1d5d; text-align: center;text-transform: uppercase; font-size: 15px;">Welcome To You <span style="text-decoration: underline; font-weight: 900;">  <?php echo $_SESSION['loginusername']; ?></span><a style="color: #ea1d5d;text-transform: lowercase;" href="signout.php">         Signout</a></h4>
	<?php } ?>
<div class="homepage">
	<div class="section">
	<div class="box1">
		<h4>WEB DESIGN USING HTML AND OTHER TOOLS</h4>
                <p>As a professional web designing service provider, we offer affordable browsing friendly solutions in addition to creating a new pattern. We include technology with creativity to deliver an elegant and professional way of creating an online identity for your product needs. In addition, it is quiet important to tackle your web appearance which should not only be informative, it should also have a pleasing look ensuring the ability to attract more and more visitors. This is the only critical and crucial way for the success of your firm. Here at Opal Infotech, we have a highly expertise team of web developers, who never miss even minute niche while bring forth maximum information about the purpose behind your business appearance in the internet.</p>
	</div>


	<div class="box1">
                <h4>Responsive Web Design / Mobile Website</h4>
                <p>It is an approach where a site is adjusted for optimal viewing on a range of platforms and devices of different sizes. Such devices include mobile phones, net-books, notebooks, laptops, smartphones, desktops and tablets, which have different monitor sizes and different viewing environments. The intention of creating such an online link is to optimize viewing experience, as well as to re-size the link for ease of scrolling and panning. It can also help businesses present their page content in different platforms and browsers that are compatible with different devices.In this type of creation, the internet pages are coded using the cascading style sheets and with use of media query          In this type of creation, the internet pages are coded using the CSS.</p>
		
	</div>


	<div class="box1">
                <h4>Custom PHP Web Design & Development</h4>
                <p>PHP is perhaps the most effective and powerful programming language used to develop dynamic sites and applications. Over the years PHP web design and development has been continuously updated which has made this programming language highly interactive and allows for creating applications and layouts which have been used at a mass scale in today’s technological world. Opal Infotech has extensive knowledge and experience of providing web developing services using this popular programming language. Our experienced professionals are dedicated to PHP programming and expertise in different kinds of services complementing the design process including content management, promotion of websites online and many other services.</p>

		
	</div>


<div class="box1">
	<h4>CodeIgniter</h4>
                <p>CodeIgniter is an Application Development Framework - a toolkit - for people who build web sites using PHP. Its goal is to enable you to develop projects much faster than you could if you were writing code from scratch, by providing a rich set of libraries for commonly needed tasks, as well as a simple interface and logical structure to access these libraries. CodeIgniter lets you creatively focus on your project by minimizing the amount of code needed for a given task.CodeIgniter is right for you if:1)You want a framework with a small footprint.2)You need exceptional performance.3)You need broad compatibility with standard hosting accounts that run a variety of PHP versions and configurations.4)You want a framework that requires nearly zero configuration.5)You want a framework that does not require you to use the command line.
</p>
	
</div>
<div class="box1">
	<h4>WordPress Web Design</h4>
                <p>
                  WordPress is an open source content management system and a blogging tool powered by PHP and MySQL. Currently WordPress is known as the most easy to use content management systems available. Using this CMS, one can develop business small or large web sites and blogs. As It is an open source CMS, it can be downloaded from the internet free of cost. After downloading WP, one can immediately start posting and publishing the content. It has number of in built features which provides facility to create and maintain the internet pages in an effective manner. It plays an important role in creating functional and attractive internet page and which can give an online presence to your business quickly.With the advancement in the system, it is now not only used to create blogs, but also for creating custom pages. </p>
</div>
<div class="box1">
	<h4>Android Marketplace</h4>
                <p>Android app market is growing on large scale, as Android seems to be the first preference of majority Smartphone users Nowadays. More than 80% mobile segment has been captured by Android and 800 million users use Android apps as of now. So there is not at all, over to say that Android is the leading mobile platform that grows exponentially day by day. Hence, it is utmost crucial to develop android application to focus, expand and get success in your business.Platform specific application will be useful to that mobile Operating system only and not for others. Yet, several businesses need wide spectrum application to be catered on all mobile platforms including IPhones, Android gadgets, Windows phone, Blackberry etc. This can be a challenging situation for an app developer to indentify and define the app as per the present and future business needs and scalability.</p>
</div>	
       

</div>

</div>
<div class="clearfix"></div>

</body>
</html>
<?php include('footer.php'); ?>
