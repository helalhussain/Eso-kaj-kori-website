  <?php 
  include("webphp.php");
    $en_select ='';
    $ban_select ='';
    $language='';
    	if((isset($_GET['language']) && $_GET['language']=='en') || 
    		!isset($_GET['language'])){
    		$en_select='selected';
    	$language='en';
    	}else{
    		$ban_select='selected';
    		$language='ban';
    	}

     ?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" type="text/css" href="aso1.css">
    <!-- B	ootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css.map"
	 integrity="undefined" crossorigin="anonymous" />
 	 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 	 <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.0/animate.min.css">


   	 <title></title>

    <style type="text/css" media="screen">
    	*{box-sizing: border-box;}

    	html{
    		scroll-behavior: smooth;
    	}
    	.carousel-item{}

	.main_content .main_card{border:none;}
	.main_content .main_card:hover{ box-shadow: 8px 10px 10px #23085A;}
	.main_content .main_card .btn-block{
		background: #001158!important;
		border-radius: 0px!important;
	}
	.main_text{font-size:15px;}
	.carousel_text{color:green;background: #fff;font-weight: bold;}
	.backgroud_pic{}
	.fa{width:60px;height: auto;background: #fff;border-radius: 4px;margin:auto;text-align:center;}
	.fa:hover{box-shadow: 8px 10px 10px #23085A; }
	.sitename{color:#001158;font-family: sans-serif;font-weight:}
	@media screen and (max-width: 995px) {
  .sitename{
   text-align: center
  }
}
	@media screen and (max-width: 520px) {
  .sitename{
   font-size: 20px;text-align: center
  }
}

	/*Media queries*/
	@media screen and (max-width: 992px) {
  iframe{
    width: 289px;
  }
}

.lok .lokkho{
	text-decoration: none;
}
 .wark_card{
 	border:none;border:3px solid #fff; transition:0.8s all; border-radius: 0px;;height: 320px;
 }
 .pic{overflow: hidden;}
 .wark_card:hover{background: #23085A;color:#fff; }
 .pic img{transition:0.5s;}
	.wark_card:hover img{transform:scale(1.1,1.1); transition:0.5s;}
	#mybtn{
		
		position: fixed;
		bottom:26px;
		right: 40px;
		border: none;
		color:#fff;
		background: black;
		z-index: 99;
		border-radius: 10px;
		padding: 10px;
		text-decoration:none;
		font-weight: bold;

	}
	#mybtn:hover{box-shadow:8px 5px 5px #fff;}

    </style>
  </head>
  <body>
<?php 
	
 ?>
  	<div class="headermain p-2" id="start" style="background:#ffffff; ">
  		<div class="row">
  			<div class="col-lg-3 text-center">
  				<img src="image/logo.jpg" width="60" alt="">
  			</div>
  		<div class="col-lg-8 pt-3 " >
					<h3 class="sitename" style=""> 
 					এসো কাজ করি মহিলা উন্নয়ন সমিতি</h3>
		</div>

  	</div>
  </div>
 	   <nav class="navbar navbar-expand-lg navbar-light "><div class="container">
	  <a class="navbar-brand" href="#">
 	 <select class="form-control" id="language" onchange="set_language()" name="language" style="width:100px; ">
 
				      <option value="en"<?php echo $en_select ?> >English</option>
				      <option value="ban"<?php echo $ban_select ?> >বাংলা</option>

				    </select>
  </a>
  <button class="navbar-toggler" type="button" style="background: #fff;color:#fff;" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav text-center">
      <li class="nav-item active">
        <a class="nav-link" href="#"><?php echo $top_nav[$language]['0'] ?><span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#pori_chiti"><?php echo $top_nav[$language]['1'] ?></a>
      </li>
   	  <li class="nav-item">
        <a class="nav-link" href="#kaj"><?php echo $top_nav[$language]['2'] ?></a>
      </li>

            <li class="nav-item">
        <a class="nav-link" href="#footerdiv"><?php echo $top_nav[$language]['3'] ?></a>
      </li>
     
    </ul>

  </div>

</div>


</nav>
<div class="carousel">
	<div class="row">
		<div class="col-lg-12 "style="">
			<div class="container pt-5 ">
	<div class="slider">
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100 img-responsive img-thumbnail" style="background: black;"src="image/photo3.jpg" alt="First slide">
        <div class="carousel-caption d-none d-md-block">
			<h2 class=" carousel_text animated bounceInRight" style="animation-delay:1s;"><?php echo $slide[$language]['0']?></h2>
  </div>
    </div>
    <div class="carousel-item">
        <img class="d-block w-100  img-responsive img-thumbnail" style="background: black;" src="image/photo5.jpg" alt="First slide">
         <div class="carousel-caption d-none d-md-block">
		     <h2 class="carousel_text"  href="animate__animated animate__bounce animate__delay-2s"><?php echo $slide[$language]['1']?></h2>
  		</div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 img-responsive img-thumbnail"style="background: black;" src="image/photo4.jpg" alt="First slide">
        <div class="carousel-caption d-none d-md-block">
		<h2 class=""  style="color:green;background: #fff;"><?php echo $slide[$language]['2']?></h2>
  </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
</div>
		</div>
	</div>
</div>
<!--------------------------------End_Slider---------------------------->
<!--------------------Start_Section------------------------------------------>


<div class="help" id="pori_chiti">
<div class="container pt-5 pb-5">
			<div class="row pb-5">
				<div class="col-lg-4"></div>
				<div class="col-lg-4">
				<div class="porichiti text-center">
						<h2 class=" pb-2" style="border-bottom: 4px solid #001158; font-weight:bold; font-family: Arial Black;"><?php echo $about_us[$language]['0'] ?></h2><hr>
				</div>
				</div>
			<div class="col-lg-4"></div>
			</div>
		<div class="row">
		<div class="col-lg-4 col-md-4 col-12 main_content" >
			<div class="card main_card" style="">
			  <div class="im text-center">
			  	<img class="card-img-top text-center " style="height:190px; width:190px;" src="image/logo.jpg">
			  </div>
	  <div class="card-body">
			    <h5 class="card-title text-center"><?php echo $our_prupose[$language]['0']?></h5>
			   		 <p class="card-text main_text p-1">
						<li class="lok"><a  class="lokkho"><?php echo $our_prupose[$language]['1']?></a></li>
						<li class="lok"><a class="lokkho"><?php echo $our_prupose[$language]['2']?></a></li>
						<li class="lok"><a  class="lokkho"><?php echo $our_prupose[$language]['3']?></a></li>
						<li class="lok"><a  class="lokkho"><?php echo $our_prupose[$language]['4']?></a></li>
						<li class="lok"><a  class="lokkho"><?php echo $our_prupose[$language]['5']?></a></li>
						<li class="lok"><a  class="lokkho"><?php echo $our_prupose[$language]['6']?></a></li>

					</p>
			    <a target="_blank" href="about.php" class="btn btn-primary btn-block"><?php echo $btn[$language]['0']?></a>
			  </div>
			</div>
		</div>

			<div class="col-lg-4 col-md-4 col-12 main_content ">
			<div class=" card main_card" style="">
			  <div class="im text-center">
			  	<img class="card-img-top text-center  img-thumbnail" style="height:200px; width:200px; border-radius: 50%;" src="image/jahanara.jpg">
			  </div>
			  <div class="card-body">
			    <h5 class="card-title text-center"><?php echo $founder[$language]['0']?><span style="font-size:16px;"> <?php echo $founder[$language]['1']?></span></h5>
			    <p class="card-text main_text  p-1"><?php echo $founder[$language]['2']?>
			    </p>
			    <a target="_blank" href="webheader.php" class="btn btn-primary btn-block"><?php echo $btn[$language]['0']?></a>
			  </div>
			</div>
		</div>
			<div class="col-lg-4 col-md-4 col-12 main_content ">
			<div class="card main_card" style="">
			  <div class="im text-center">
			  	<img class="card-img-top text-center " style="height:200px; width:200px;" src="image/logo.jpg">
			  </div>
			  <div class="card-body">
			    <h6 class="card-title text-center" style="font-size:18px;"><?php echo $esho[$language]['0']?></h6>
			    <p class="card-text main_text  p-1"><?php echo $esho[$language]['1']?></p>
			    <a target="_blank" href="about.php" class="btn btn-primary btn-block"><?php echo $btn[$language]['0']?></a>
			  </div>
			</div>
		</div>
	</div>
</div>
</div>


<!-------------------------------End_Section------------------------------>
<!-------------------------------------------Shohojugita-------------------------------->
<div class="backgroud_pic"  height="200" style="background-image:url(image/photo3.jpg);width:100%;height:auto;background-size:100% 100%;background-attachment:fixed;">
	<br><br><br>
<!--------------------------------------------------OurWork--------------------------->
	<div class="our_wark pt-5 pb-4 bg-dark" id="kaj">
		<div class="container">
			<div class="porichiti text-center">
						<h2 class=" pb-4" style=" font-weight:bold; font-family: Arial Black; color:#fff;"><?php echo $our_program[$language]['0']?></h2><hr>
				</div>
			<div class="row">
				<div class="col-lg-4 col-md-4 col-12">
					<div class="card wark_card pb-4" style="">
					  <div class="pic">
					  	<img class="card-img-top" src="image/wark1.jpg" alt="Card image cap">
					  </div>
					  <div class="card-body">
					    <p class="card-text"><?php echo $our_program[$language]['1']?><br></p>
					  </div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-12">
						<div class="card wark_card" style="">
					  	<div class="pic">
					  		<img class="card-img-top" src="image/wark2.jpg" alt="Card image cap">
					  	</div>
					  <div class="card-body">
					    <p class="card-text"><?php echo $our_program[$language]['2']?></p>
					  </div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-12">
					<div class="card wark_card pb-4" style="">
					<div class="pic">
						  <img class="card-img-top" src="image/wark3.jpg" alt="Card image cap">
					</div>
					  <div class="card-body">
					    <p class="card-text"><?php echo $our_program[$language]['3']?></p>
					  </div>
					</div>
				</div>
			</div>
		</div>
	</div>
<!----------------------------------------------------------OurWork_End--------------------------------------->
<br><br><br>
</div>


<!------------------------------Start_footer--------------------->

<footer class="footersection pt-5" id="footerdiv">
	<div class="container pb-4">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-12">
				<div>
						<div class="container pl-5">
						<h3 class="footer-name" style="font-weight: bold;"><?php echo $contact[$language]['0']?></h3><hr>
						</div>
					<ul class="pt-3">
						<li class="list_style"><a  class="add"><?php echo $contact[$language]['1']?></a></li><br>
						<li class="list_style"><a  class="add"><?php echo $contact[$language]['2']?></a></li><br>
						<li class="list_style"><a  class="add"><?php echo $contact[$language]['3']?></a></li><br>
						<div class="icon">
							<li><a href="#"><i class="fa fa-facebook fa-3x p-2" style="background:#fff;"></i></a></li>
						</div>
					</ul>
				</div>
			</div>


			<div class="col-lg-6 col-md-6 col-12">
				<div class="container">
					<div class="footer-name"><?php echo $loc[$language]['0']?></div><hr>
				</div>
				<div class="goole_map pt-3 text-center" style="border:2px solid dark;">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d225.79486393738523!2d91.36911969929012!3d25.111411566528513!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3750c55e28218955%3A0x4df0cb1334dcbc09!2zMjXCsDA2JzQxLjIiTiA5McKwMjInMDguOSJF!5e0!3m2!1sen!2sbd!4v1597765072342!5m2!1sen!2sbd" width="500" height="250" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
				</div>

			</div>

		</div>
	</div>


<div class="copyright pt-5" style="">
	<div class="row pt-3">
		<div class="col-lg-12 col-md-12 col-12 text-center">
			<h7 style="color:#fff;"> 
<?php echo $copyright[$language]['0']?></h7>
		</div>
	</div>
</div>
</footer>
<!-------------------------------End_footer-------------------------------->

<!-------------------------End_site---------------------------------------->


<!------------------End_Site------------------------------------------->

<!---------------------End_Container_fluid------------------>

    <!-------------------Scroll-------------------------------->
    <div class="scrolltop float-right">
    	<a class=" text-uppercase" href="#start" id="mybtn" >Top</a>
    </div>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.0.min.js"></script>
<script>
function set_language(){
	var language =jQuery('#language').val();
	window.location.href='http://localhost/aso/web.php?language='+language;
}

    </script>

  </body>
</html>








