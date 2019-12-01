@extends('layouts.master')

@section('content')

    <!-- this is a if else statement -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- this line loades css file inside static folder -->
    <link rel="stylesheet" type="text/css" href="{% static 'home/main.css' %}">

  <link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,800,700,300' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=BenchNine:300,400,700' rel='stylesheet' type='text/css'>

<style>
  body{
	margin: 0;
	padding: 0;
}
li{
	list-style: none;
}
a:hover, a:visited, a{
	text-decoration: none;
}
h1, h2{
	text-transform: uppercase;
	font-weight: bold;
}



/*about area*/
.about h2{
	font-size: 90px;
	color: #42b3e5;
	margin-top: 50px;
}
.about h4{
	font-size: 24px;
	color: #737373;
	margin-bottom: 45px;
}
.about-img img{
	width: 100%;
}
.single-about-detail{
	position: relative;
}
.pentagon-text h1{
	font-size: 60px;
	color: #383838;
	margin-top: 0;
	transition: all .7s ease 0s;
	-webkit-transition: all .7s ease 0s;
	-moz-transition: all .7s ease 0s;
	-o-transition: all .7s ease 0s;
	-ms-transition: all .7s ease 0s;
	position: absolute;
	  left: 15%;
	  width: 50px;
	  top: -6%;
}
.pentagon-text {
  width: 70px;
  height: 52px;
  background: #fff;
  position: relative;
   top: -30px;
  left: 43%;
}
.pentagon-text:before {
  content: "";
  position: absolute;
  top: -15px;
  left: 0;
  width: 0;
  height: 0;
  border-left: 34px solid transparent;
  border-right: 35px solid transparent;
  border-bottom: 15px solid #fff;
}
.pentagon-text:after {
  content: "";
  position: absolute;
  bottom: -15px;
  left: 0;
  width: 0;
  height: 0px;
  border-left: 36px solid transparent;
  border-right: 34px solid transparent;
  border-top: 15px solid #fff;
}
.about-details{
	background: #2a2a2a;
	border-top: 2px solid #fff;
	transition: all .7s ease 0s;
	-webkit-transition: all .7s ease 0s;
	-moz-transition: all .7s ease 0s;
	-o-transition: all .7s ease 0s;
	-ms-transition: all .7s ease 0s;
}
.about-details h3{
	font-size: 36px;
	color: #fff;
	margin-top: 0;
}
.about-details p{
	font-size: 13px;
	color: #fff;
	font-family: 'Open Sans', sans-serif;
	padding: 0 25px;
	padding-bottom: 30px;
}
.single-about-detail:hover .about-details{
	background: #3a9dca;
}
.single-about-detail:hover .pentagon-text h1{
	color: #3a9dca;
}


/*service area*/
.service{
	background: url(../img/pattern.jpg);
	background-repeat: repeat-y;
	margin-top: 40px;
}
.service h2{
	font-size: 90px;
	color: #fff;
	margin-top: 70px;
	margin-bottom: 0;
}
.service h4{
	font-size: 24px;
	color: #fff;
	margin-top: 0;
	margin-bottom: 70px;
	display: block;
}
.single-service{
	text-align:center;
}
.single-service-img {
  width: 205px;
  height: 125px;
  padding-left:30px;
  position: relative;
}
.service-img {
  width: 205px;
  height: 125px;
  background: #3a9ecb;
  position: relative;
}
.single-service h3{
	margin-top: 10px;
	color: #fff;
	padding-bottom: 50px;
	position:relative;
}
.service-img img{
	position: absolute;
}




/*contact section*/
.contact-caption{
	background: #3a9dca;
}
.contact-heading h2{
	color: #fff;
	font-size: 90px;
}
.contact-info{
	padding-left: 10px;
}
.contact-info h3{
	padding-left: 0;
	font-size: 30px;
	color: #fff;
	text-transform: uppercase;
	font-weight: bold;
	border-bottom: 1px solid #13849c;
	padding-bottom: 12px;
	margin-bottom: 0;
}
.contact-form h3{
	padding-left: 0;
	font-size: 30px;
	color: #fff;
	text-transform: uppercase;
	font-weight: bold;
	border-bottom: 1px solid #13849c;
	padding-bottom: 12px;
	margin-bottom: 0;
}
.contact-info ul{
	margin: 0;
	padding: 0;
}
.contact-info ul li{
	font-family: 'Open Sans', sans-serif;
	font-size: 14px;
	color: #fff;
}
.contact-info i.fa{
	font-size: 16px;
  	padding-right: 12px;
  	width: 25px;
  	height: 38px;
}
.contact-info ul li span{
	font-weight: bold;
}
.contact-form input{
	width: 100%;
	height: 40px;
	background: #fff;
	font-size: 13px;
	color: #084a5c;
	font-family: 'Open Sans', sans-serif;
	padding: 12px;
	border:0;
	margin-bottom: 12px;
}
.contact-form textarea{
	font-family: 'Open Sans', sans-serif;
	padding:12px;
	width: 100%;
	height: 140px;
	border:0;
	margin-bottom: 12px;
}
.info-detail{
	border-top: 1px solid #53cde5;
	padding-top: 15px;
}
.form{
	border-top: 1px solid #53cde5;
	padding-top: 15px;
	text-align: right;
}
.contact-form input.submit-btn{
	width: 180px;
	height: 50px;
	float: right;
	font-size: 24px;
	color: #fff;
	background:black;
	padding: 0;
	font-family: 'BenchNine', sans-serif;
	font-weight: bold;

}
.contact-form{
	padding-right: 10px;
}



/******************************
responsive area
********************************/

/* md */
@media (min-width: 992px) and (max-width: 1199px) {
	.navbar-default .navbar-nav>li>a {
	  font-size: 20px;
	  padding: 14px 12px;
	}
	.carousel-caption h1 {
  		font-size: 120px;
  	}
  	.carousel-caption p {
  		font-size: 32px;
  	}
  	.carousel-caption button {
	  width: 215px;
	  height: 55px;
	  font-size: 26px;
	}
	h2 {
  		font-size: 75px !important;
  	}
  	h4 {
  		font-size: 22px !important;
  	}
  	.person-detail h3 {
  		font-size: 26px;
  	}
  	.person-detail p {
  		font-size: 12px;
  	}

}

/* sm */
@media (min-width: 768px) and (max-width: 991px) {
	.navbar-default .navbar-nav>li>a {
	  font-size: 16px;
	  padding: 10px 8px;
	}
	.carousel-caption h1 {
  		font-size: 90px;
  	}
  	.carousel-caption p {
  		font-size: 30px;
  	}
  	.carousel-caption button {
		 width: 180px;
		 height: 50px;
		 background: #3a9ecb;
		 color: #fff;
		 font-size: 22px;
	}
	h2 {
  		font-size: 70px !important;
  	}
  	h4 {
  		font-size: 18px !important;
  	}
  	#map{
		height: 1050px;
	}
	.contact{
		margin-top:-1050px;
		height: 1050px;
	}
	.contact-caption {
	 margin-top: 110px;
	}
}

/* xs */
@media (min-width: 480px) and (max-width: 767px) {
	.header-logo img{
	  margin-top: 20px;
	}
	.navbar-default .navbar-nav>li>a {
	  font-size: 20px;
	}
	.carousel-caption {
	    margin-top: -110px;
	}
	.carousel-caption h1 {
  		font-size: 75px;
  	}
  	.carousel-caption p {
  		font-size: 25px;
  	}
  	.carousel-caption button {
	  width: 160px;
	  height: 40px;
	  font-size: 20px;
	}
	#map{
		height: 1120px;
	}
	.contact{
		height: 1120px;
		margin-top: -1120px;
	}
	h2 {
	  font-size: 70px !important;
	}
	h4{
  		font-size: 21px !important;
  	}
	.contact-info ul {
	  margin-left: 4px;
	}
	.contact-info i.fa {
	  width: 25px;
	}
	.contact-caption {
	  margin-top: 140px;
	}
}

/* XS Portrait */
@media (max-width: 479px) {
	.top-header img.logo {
	  margin: 20px 10px;
	}
	.header-logo{
		margin-top: 20px !important;
	}
	.navbar-default .navbar-toggle {
		 border-color: #fff;
		 margin-top: -7px;
		 right: 10%;
	}
	.navbar-default .navbar-nav>li>a {
	  font-size: 16px;
	  text-align: left;
	}
	.header-backup{
		  height: 80px;
	}
	.carousel-caption {
	    margin-top: -60px;
	}
	.carousel-caption h1 {
  		  font-size: 20px;
  	}
  	.carousel-caption p {
  		font-size: 12px;
  	}
	.carousel-caption button {
	  width: 90px;
	  height: 23px;
	  font-size: 16px;
	}
	.carousel-control .glyphicon-chevron-right, .carousel-control .icon-next {
	  margin-top: 30px;
	}
	.carousel-control .glyphicon-chevron-left, .carousel-control .icon-prev {
	  margin-top: 30px;
	}
	.about h2 {
	  font-size: 50px;
	  color: #42b3e5;
	  margin-top: 30px;
	}
	.service h2 {
	  font-size: 50px;
	  margin-top: 40px;
	}
	.team h2 {
	  font-size: 50px;
	  margin-top: 40px;
	}
	h4 {
	  font-size: 18px !important;
	}
	.contact-caption{
		margin-top: 38%;
	}
	#map{
		height: 950px;
	}
	.contact{
		height: 950px;
		margin-top: -950px;
	}
	.contact-heading h2 {
	  font-size: 50px;
	  text-align: left;
	  margin-left: 15px;
	}
	.contact-info h3 {
	  margin-left: 8px;
	  font-size: 25px;
	  padding-bottom: 8px;
	}
	.info-detail {
	  margin-left: 8px;
	}
	.contact-info ul li {
	  font-size: 10px;
	}
	.contact-info i.fa {
	  font-size: 13px;
	  width: 20px;
	  height: 18px;
	}
	.contact-info, .contact-form{
		padding: 10px;
	}
	.contact-form h3 {
	  font-size: 25px;
	  padding-bottom: 8px;
	  margin-bottom: 0;
	  margin-right: 0px;
	}
	.footer a i.fa {
	  font-size: 18px;
	  padding: 25px 7px;
	}
	.footer p {
  		font-size: 10px;
  	}
}

</style>




<div style="font-family: 'BenchNine', sans-serif;">

<section class="about text-center" id="about">
				<div class="container">
					<div class="row">
						<h2>about us</h2>
						<h4>banglarruptravels.com is the most trust worthy website where you can book yor hotel room when you need where you need.</h4>

						<div class="col-md-4 col-sm-6">
							<div class="single-about-detail clearfix">
								<div class="about-img">
									<img src="img/about1.jpg" alt="">
								</div>

								<div class="about-details">
									<div class="pentagon-text">
										<h1>T</h1>
									</div>

									<h3>Trust is your main goal</h3>
									<p>We can provide you a residence , where you can spend your time winh no tension.</p>
								</div>
							</div>
						</div>

						<div class="col-md-4 col-sm-6">
							<div class="single-about-detail">
								<div class="about-img">
									<img class="img-responsive" src="img/about2.jpg" alt="">
								</div>

								<div class="about-details">
									<div class="pentagon-text">
										<h1>S</h1>
									</div>

									<h3>Your Satisfaction is our reward</h3>
									<p>We have 250+ hotels around the countery where you can choose any room available. Customer is the BOSS so your satisfaction is our reward</p>
								</div>
							</div>
						</div>


						<div class="col-md-4 col-sm-6">
							<div class="single-about-detail">
								<div class="about-img">
									<img class="img-responsive" src="img/about3.jpg" alt="">
								</div>

								<div class="about-details">
									<div class="pentagon-text">
										<h1>C</h1>
									</div>

									<h3>Conditions</h3>
									  <p>	Book on our website and get 10% less.<br>
										100% sequrity	<br>
	We provide service 24 hours.
</p>
								</div>
							</div>
						</div>

					</div>
				</div>
			</section>



<section class="contact">
				<div class="container">
					<div class="row">
							<div class="contact-caption clearfix">
								<div class="contact-heading text-center">
									<h2>contact us</h2>
								</div>



								<div class="col-md-5 contact-info text-left float-left">
									<h3>contact information</h3>
									<div class="info-detail">
										<ul><li><i class="fa fa-calendar"></i><span>Monday - Friday:</span> 9:30 AM to 6:30 PM</li></ul>
										<ul><li><i class="fa fa-map-marker"></i><span>Address:</span> 123 Some Street , California, US, CP 123</li></ul>
										<ul><li><i class="fa fa-phone"></i><span>Phone:</span> (01) 999-1235</li></ul>
										<ul><li><i class="fa fa-fax"></i><span>Fax:</span> (01) 999-1234</li></ul>
										<ul><li><i class="fa fa-envelope"></i><span>Email:</span> info@domain.com</li></ul>
									</div>
								</div>


								<div class="col-md-6 col-md-offset-1 contact-form float-right">
									<h3>leave us a message</h3>
									<form class="form" method="POST" data-email="example@email.net" action="https://script.google.com/macros/s/AKfycbz22GUYC3bGaQBD8QLqo0FOX0vYkx4sMeOYtNXc/exec">
										<input class="name" type="text" id="name" name="name" placeholder="Name">
										<input class="email" type="email" id="email" name="email" placeholder="Email">
										<input class="phone" type="text" id="phone" name="phone" placeholder="Phone No:">
										<textarea class="message" name="message" id="message" cols="30" rows="10" placeholder="Message"></textarea>
										<input class="submit-btn" type="submit" value="SUBMIT">

									</form>
								</div>

							</div>
					</div>
				</div>
			</section>
</div>

<!--code for navigation and side bar-->

 <script data-cfasync="false" src="form-submission-handler.js"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



@endsection
