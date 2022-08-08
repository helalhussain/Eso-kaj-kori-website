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
  window.location.href='http://localhost/aso/header.php?language='+language;
}

    </script>

  </body>
</html>
