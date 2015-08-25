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
				$('#convicted').val(gdr)
            });
			
			
			$('.genderbtnsubmit').click(function() {
               var gndrhidden = $('#convicted').val()
			   
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
    
    <title>Step 9</title>
<title>

</title></head>
<body>

<?php include 'includes/modal-popup.php';?>

    <div class="text-center logo"><a href="index.php"><img src="images/logo.png" alt=""></a></div>

    <div class="clearfix"></div>
    <?php
 if (!empty($_POST["zipcode7"])) { ?>


    <div class="container">
        
            
		<div class="span6 center-this">
			<div class="form-box-inside text-center">
				<div class="progress progress-success">
				    <div class="bar" style="width: 75%;"></div>
				</div><!-- Progress Bar -->  
				 		
				 <div class="form-title-m">Get Your FREE Quote Now!</div>
				
				 <form id="form1" action="step10.php" method="post">
				    <input id="zipcode8" name="zipcode8" value="<?php echo $_POST["zipcode7"];?>" type="hidden">
				    <input id="gender7" name="gender7" value="<?php echo $_POST["gender6"];?>" type="hidden">
                    <input id="health6" name="health6" value="<?php echo $_POST["health5"];?>" type="hidden">
                    <input id="tobaccouser5" name="tobaccouser5" value="<?php echo $_POST["tobaccouser4"];?>" type="hidden">
                    <input id="diabetes4" name="diabetes4" value="<?php echo $_POST["diabetes3"];?>" type="hidden">
                    <input id="coverage4" name="coverage4" value="<?php echo $_POST["coverage3"];?>" type="hidden">
                    <input id="coverageamnt3" name="coverageamnt3" value="<?php echo $_POST["coverageamnt2"];?>" type="hidden">
                    <input id="heartd2" name="heartd2" value="<?php echo $_POST["heartd"];?>" type="hidden">
                    
                    <input id="convicted" name="convicted" value="" type="hidden">			
				 	
                    <h4 class="text-center">Have you been convicted of drunk driving in the past 7 years?</h4>
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