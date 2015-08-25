<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="UTF-8">
<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/styles.css">
    <script src="js/jquery-1.js" type="text/javascript"></script>
    <script src="js/bootstrap.js" type="text/javascript"></script>
	
    <script type="text/javascript">
		$(document).ready(function() {
			$('.genderbtn').click(function() {
				
				
                var gdr = $(this).html();
				$('#coverageamnt').val(gdr)
            });
			
			
			$('.genderbtnsubmit').click(function() {
               var gndrhidden = $('#coverageamnt').val()
			   
			   if( gndrhidden == '') {
				  
				  	$('.radioselect').next().css({"display":"block"})
				  	return false;
				  } 
				  
				  else {
					  	$('.radioselect').next().css({"display":"none"})
					}
				  
            });
			
		})
	</script>
    
    <title>Step 7</title>
<title>

</title></head>
<body>

<?php include 'includes/modal-popup.php';?>

    <div class="text-center logo"><a href="index.php"><img src="images/logo.png" alt=""></a></div>

    <div class="clearfix"></div>

    
    <?php
 if (!empty($_POST["zipcode5"])) { ?>

    <div class="container">
        
            
		<div class="span6 center-this">
			<div class="form-box-inside text-center">
				<div class="progress progress-success">
				    <div class="bar" style="width: 65%;"></div>
				</div><!-- Progress Bar -->  
				 		
				 <div class="form-title-m">Get Your FREE Quote Now!</div>
				
				 <form id="form1" action="step8.php" method="post">
				    <input id="zipcode6" name="zipcode6" value="<?php echo $_POST["zipcode5"];?>" type="hidden">
				    <input id="gender5" name="gender5" value="<?php echo $_POST["gender4"];?>" type="hidden">
                    <input id="health4" name="health4" value="<?php echo $_POST["health3"];?>" type="hidden">
                    <input id="tobaccouser3" name="tobaccouser3" value="<?php echo $_POST["tobaccouser2"];?>" type="hidden">
                    <input id="diabetes2" name="diabetes2" value="<?php echo $_POST["diabetes1"];?>" type="hidden">
                    <input id="coverage2" name="coverage2" value="<?php echo $_POST["coverage"];?>" type="hidden">
                    <input id="coverageamnt" name="coverageamnt" value="" type="hidden">			
				 	
                    <h4 class="text-center">How much coverage would you like?</h4>
					<div class="btn-group radioselect btn-group-vertical" data-toggle="buttons-radio">
						<button type="button" class="btn btn-warning genderbtn">$25,000 or Less</button>
                    	<button type="button" class="btn btn-warning genderbtn">$25,000 to $250,000</button>
						<button type="button" class="btn btn-warning genderbtn">$250,000 or greater</button>
					</div>
                    <p class="error">Select one option</p>
                    <div class="clearfix"></div>
                    <div class="btn-group mt15">
                    	<button type="submit" class="btn btn-success genderbtnsubmit">Proceed To Next Step</button>
                    </div>
				 </form>
                 
			</div>
		</div>


            <div class="clearfix"></div>

<?php include 'includes/footer.php';?>

        
    </div>
    <?php } 
    
    
    else { 
    
    include 'includes/nodirectaccess.php'; } ?> 
    
    
       
    
</body></html>