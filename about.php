
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
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	
		 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css.map"
	 integrity="undefined" crossorigin="anonymous" />
 	 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 	 <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <title></title>

    <style type="text/css" media="screen">
	.card_j{border:none;border:3px solid lightblue; transition:0.8s all; border-radius: 0px;}
	.card_j:hover{background: black;color:#fff; }
	.pic{overflow: hidden;}
	.pic img{transition:0.5s;}
	.card_j:hover img{transform:scale(1.1,1.1); transition:0.5s;}

		@media screen and (max-width: 992px) {
  iframe{
    width: 300px;
  }
}
		@media screen and (max-width: 592px) {
  .copyright_text{
    font-size: 15px;
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
 <?php 
	include("webheader.php");
 ?>
	
<!-------------------------------End_footer-------------------------------->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.0.min.js"></script>
<script>
function set_language(){
	var language =jQuery('#language').val();
	window.location.href='http://localhost/aso/about.php?language='+language;
}


  </body>
</html>