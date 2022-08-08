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

    <style  >
	.card_j{border:none;border:3px solid lightblue; transition:0.8s all; border-radius: 0px;}
	.card_j:hover{background: black;color:#fff; }
	.pic{overflow: hidden;}
	.pic img{transition:0.5s;}
	.card_j:hover img{transform:scale(1.1,1.1); transition:0.5s;}


	@media screen and (max-width: 992px) {
  iframe{
    width: 289px;
  }
}
			.footersection{
			width:100%;
			height: auto;
			padding: 70px 0 20px 0;
			background:  #23085A;;
			position: relative;
			
		}
		.footer-name{color:#fff;
			font-weight: bold;
			font-size:21px; margin: auto;
			font-family:"SolaimanLipiNormal" !important;
		}

		.list_style .add{font-size:15px;color:#fff!important;text-decoration: none; }
		.list_style{padding-left: 8px;list-style:none;}
			.fa{width:60px;height: auto;background: #fff!important;border-radius: 4px!important;margin:auto;text-align:center;}
	.fa:hover{box-shadow: 8px 10px 10px #23085A!important; }

    </style>
  </head>
  <body>

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
 
              <option value="en" <?php echo $en_select ?> >English</option>
              <option value="ban" <?php echo $ban_select ?> >বাংলা</option>

            </select>
  </a>


  <div class="collapse navbar-collapse" id="navbarSupportedContent">


  </div>

</div>


</nav>
	<div class="container">
		<div class="about_jaha pt-4">
			<div class="row">
				<div class="col-lg-4 ml-auto ">
					<div class="text-center pb-2">
						<img class="card-img-top  img-thumbnail" style="auto; width:260px;"src="image/jahanara.jpg" alt="">
					</div>
				</div>
				<div class="col-lg-7">
					 <p class="card-text main_text  p-1">
			    	এসো কাজ করি মহিলা উন্নয়ন সমিতিটি প্রতিষ্টাতা জাহানারা বেগম
			    	সমাজে উনি একজন নারী নেত্রী বা নারী উদ্দ্যুক্ত হিসাবে পরিচিত
			    	পাশা পাশি উনি একজন লেখক। এই পর্যন্ত উনার নিজের লেখা ৫ টি বই প্রকাশ হয়েছে । 
			    	এরমধ্যে সিঁড়ি কজন দুআ জল বিজয় লাক্ষি উল্লেখ যুগ্য । ২০১০ সলে ষের নেত্রী হিসাবে এবং ২০১৪ সালে জয়তা পুরস্কার লাভ করেন
			    				    	এসো কাজ করি মহিলা উন্নয়ন সমিতিটি প্রতিষ্টাতা জাহানারা বেগম
			    	সমাজে উনি একজন নারী নেত্রী বা নারী উদ্দ্যুক্ত হিসাবে পরিচিত
			    	পাশা পাশি উনি একজন লেখক। এই পর্যন্ত উনার নিজের লেখা ৫ টি বই প্রকাশ হয়েছে । 
			    	এরমধ্যে সিঁড়ি কজন দুআ জল বিজয় লাক্ষি উল্লেখ যুগ্য । ২০১০ সলে ষের নেত্রী হিসাবে এবং ২০১৪ সালে জয়তা পুরস্কার লাভ করেন
			    				    	এসো কাজ করি মহিলা উন্নয়ন সমিতিটি প্রতিষ্টাতা জাহানারা বেগম
			    	সমাজে উনি একজন নারী নেত্রী বা নারী উদ্দ্যুক্ত হিসাবে পরিচিত
			    	পাশা পাশি উনি একজন লেখক। এই পর্যন্ত উনার নিজের লেখা ৫ টি বই প্রকাশ হয়েছে । 
			    	এরমধ্যে সিঁড়ি কজন দুআ জল বিজয় লাক্ষি উল্লেখ যুগ্য । ২০১০ সলে ষের নেত্রী হিসাবে এবং ২০১৪ সালে জয়তা পুরস্কার লাভ করেন
			    </p>
				</div>
				<div class="col-lg-1"></div>
			</div>
		</div>
		<!-----------------------------------End_about-------------------------->
		<div class="pic_jahanara  pb-3 pt-5">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-12">
					<div class="card card_j" style="">
					  <div class="pic">
					  	<img class="card-img-top" src="image/jahanara1.jpg" class="j_img">
					  </div>
					  <div class="card-body">
					    <p class="card-text">সমতির সভাপতি জাহানারা বেগম এর সাক্ষাৎকার নিচ্ছেন সাংবাদিক শামীম আরা শিউলি</p>
					  </div>
					</div>
				</div>

								<div class="col-lg-4 col-md-4 col-12">
					<div class="card card_j" style="">
					  <div class="pic">
					  	<img class="card-img-top" src="image/jahanara2.jpg" class="j_img">
					  </div>
					  <div class="card-body">
					    <p class="card-text">'ধুপ পোড়া গন্ধ' বইয়ের মোড়ক উন্মোচন অনুষ্ঠানে কৃষি মন্ত্রী বেগম মতিয়া চৌধুরী সাথে বই হাতে লেখক জাহানারা বেগম
					  </div>
					</div>
				</div>

				<div class="col-lg-4 col-md-4 col-12">
					<div class="card card_j" style="">
					  <div class="pic">
					  	<img class="card-img-top" src="image/jahanara3.jpg" class="j_img">
					  </div>
					  <div class="card-body">
					    <p class="card-text">আত্ম-নির্বরশীল নারী হিসাবে মন্ত্রী আশরাফুল ইসলাম এর কাছ থেকে সৃষ্ট নারীর পুরস্কার গ্রহণ করছেন জাহানারা বেগম</p>
					  </div>
					</div>
				</div><br><br>

					<div class="col-lg-4 col-md-4 col-12">
					<div class="card card_j" style="">
					  <div class="pic">
					  	<img class="card-img-top" src="image/jahanara4.jpg" class="j_img">
					  </div>
					  <div class="card-body">
					    <p class="card-text"> জাহানারা বেগম রচিত উপন্যাস বিজয় লক্ষী এর মোড়ক উন্মোচন অনুষ্ঠানে সুনামগঞ্জ ঘেলা প্রশাসক আব্দুল আহাদসহ নারী নেতৃত্ব বৃন্দ
					  </div>
					</div>
				</div>
					<div class="col-lg-4 col-md-4 col-12">
					<div class="card card_j" style="">
					  <div class="pic">
					  	<img class="card-img-top" src="image/jahanara5.jpg" class="j_img">
					  </div>
					  <div class="card-body">
					    <p class="card-text">আন্তর্জাতিক নারী দিবসে ঢাকা LGED ভবনে বক্তব্য রাখছেন জাহানারা বেগম</p>
					  </div>
					</div>
				</div>
			</div>
		</div>
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
						<li class="list_style"><a  class="add"> <?php echo $contact[$language]['1']?></a></li><br>
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
					<div class="footer-name">গুগল লোকেশন</div><hr>
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
সর্বসত্ত্ব সংরক্ষিত  © 2020 এসো কাজ করি মহিলা উন্নয় সমিতি</h7>
		</div>
	</div>
</div>
</footer>
<!-------------------------------End_footer-------------------------------->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.0.min.js"></script>
<script>

function set_language(){
	var language =jQuery('#language').val();
	window.location.href='http://localhost/aso/jaha.php?language='+language;

}

  </body>
</html>