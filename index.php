<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta charset="UTF-8">
	<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0">
	<title>Welcome to Policymaverick.com</title>
	<link rel="stylesheet" href="css/styles.css">
    
	<script src="js/jquery-1.js" type="text/javascript"></script>
	<script src="js/bootstrap.js" type="text/javascript"></script>




    
    <script type="text/javascript">	

		$(document).ready(function() {
            
			$('.zipcodesubmit').click(function () {
			  var zip = $('#zipcode').val();
			  
			if ((zip.length)< 5 || (zip.length)>5  || (zip == '')) {
			  
			 $('#zipcode').next().css({"display":"block"})
				return false;
			  }
			  
			  else{$('#zipcode').next().css({"display":"none"})}
			  
			});
			
        });
		
	</script>
</head>
<body>


<?php include 'includes/modal-popup.php';?>


<div class="container cage">
	<div class="row">

        <div class="span12">
        	<div class="row">
	   	     <div class="span7"><div class="logo npt"><a href="index.php"><img src="images/logo.png" alt=""></a></div></div>
	   	     <div class="span5 tfn text-center"></div>
        	</div>
        </div> <!-- logo and tfn -->

		<div class="span5 form-cage pull-right alpha">
			<div class="form-box text-center">
				<div class="form-title form-title-m">Get Your FREE Quote Now!</div>
				
				<h3 class="text-center">No exams or waiting periods!</h3>
				<form action="step2.php" method="post" name="step2">
				<div class="span3 center-this trans text-center">				
					<input id="zipcode" class="input-block-level text-center" name="zipcode" placeholder="Zip Code" type="number">
                    <p class="error">Enter Valid Zip Code</p>
				</div>
					
				<div class="clearfix"></div>
					
				<div class="span3 center-this text-center">
					<button type="submit" class="btn btn btn-success btn-gobig input-block-level zipcodesubmit">Start Now!</button>
				</div>
                </form>
				<div class="arrow"></div>
			</div>
			
		</div>

		<div class="span7 hero">
			
			<img src="images/hero.jpg" alt="hero" height="300" width="700"><br>
			<div class="brands text-center"><img src="images/brands.gif" alt="brands" height="55" width="604"></div>
			<h1>Get Your FREE Quote!</h1>
			<ul>
				<li>No Exams, No Waiting Periods, and No Annoying Salesmen.</li>
				<li>Buy Life Insurance Online By Answering A Short Health Questionnaire.</li>
				<li>Receive Your Policy Via E-Mail Within Minutes of Submitting Your Application.</li>
			</ul>
		</div>
		
		<div class="clearfix"></div>
		
		<?php include 'includes/footer.php';?>

	</div>
</div>
</body></html>