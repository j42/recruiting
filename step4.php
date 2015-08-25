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
				$('#tobaccouser').val(gdr)
            });
			
			
			$('.genderbtnsubmit').click(function() {
               var gndrhidden = $('#tobaccouser').val()
			   
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
    
    <title>Step 4</title>
<title>

</title></head>
<body>

<?php include 'includes/modal-popup.php';?>

    <div class="text-center logo"><a href="index.php"><img src="images/logo.png" alt=""></a></div>

    <div class="clearfix"></div>

<?php
 if (!empty($_POST["zipcode2"])) { ?>

    <div class="container">
        
            
		<div class="span6 center-this">
			<div class="form-box-inside text-center">
				<div class="progress progress-success">
				    <div class="bar" style="width: 38%;"></div>
				</div><!-- Progress Bar -->  
				 		
				 <div class="form-title-m">Get Your FREE Quote Now!</div>
				
				 <form id="form1" action="step5.php" method="post">
				    <input id="zipcode3" name="zipcode3" value="<?php echo $_POST["zipcode2"];?>" type="hidden">
				    <input id="gender2" name="gender2" value="<?php echo $_POST["gender1"];?>" type="hidden">
                    <input id="health1" name="health1" value="<?php echo $_POST["health"];?>" type="hidden">
                    
                    <input id="tobaccouser" name="tobaccouser" value="" type="hidden">			
				 	
                    <h4 class="text-center">Have you used tobacco products in the last 12 months?</h4>
					<div class="btn-group radioselect" data-toggle="buttons-radio">
						<button type="button" class="btn btn-warning genderbtn">Yes</button>
                    	<button type="button" class="btn btn-warning genderbtn">No</button>

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