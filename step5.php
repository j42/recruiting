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
				$('#diabetes').val(gdr)
            });
			
			
			$('.genderbtnsubmit').click(function() {
               var gndrhidden = $('#diabetes').val()
			   
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
    
    <title>Step 5</title>
<title>

</title></head>
<body>

<?php include 'includes/modal-popup.php';?>

    <div class="text-center logo"><a href="index.php"><img src="images/logo.png" alt=""></a></div>

    <div class="clearfix"></div>

<?php
 if (!empty($_POST["zipcode3"])) { ?>

    <div class="container">
        
            
		<div class="span6 center-this">
			<div class="form-box-inside text-center">
				<div class="progress progress-success">
				    <div class="bar" style="width: 50%;"></div>
				</div><!-- Progress Bar -->  
				 		
				 <div class="form-title-m">Get Your FREE Quote Now!</div>
				
				 <form id="form1" action="step6.php" method="post">
				    <input id="zipcode4" name="zipcode4" value="<?php echo $_POST["zipcode3"];?>" type="hidden">
				    <input id="gender3" name="gender3" value="<?php echo $_POST["gender2"];?>" type="hidden">
                    <input id="health2" name="health2" value="<?php echo $_POST["health1"];?>" type="hidden">
                    <input id="tobaccouser1" name="tobaccouser1" value="<?php echo $_POST["tobaccouser"];?>" type="hidden">
                    
                    <input id="diabetes" name="diabetes" value="" type="hidden">			
				 	
                    <h4 class="text-center">Do you or anybody in your family been diagnosed with diabetes?</h4>
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