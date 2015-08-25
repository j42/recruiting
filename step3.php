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
				$('#health').val(gdr)
            });
			
			
			$('.genderbtnsubmit').click(function() {
               var gndrhidden = $('#health').val()
			   
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
    
    <title>Step 3</title>
<title>

</title></head>
<body>

<?php include 'includes/modal-popup.php';?>

    <div class="text-center logo"><a href="index.php"><img src="images/logo.png" alt=""></a></div>

    <div class="clearfix"></div>

<?php
 if (!empty($_POST["zipcode1"])) { ?>


    <div class="container">
        
            
		<div class="span6 center-this">
			<div class="form-box-inside text-center">
				<div class="progress progress-success">
				    <div class="bar" style="width: 25%;"></div>
				</div><!-- Progress Bar -->  
				 		
				 <div class="form-title-m">Get Your FREE Quote Now!</div>
				
				 <form id="form1" action="step4.php" method="post">
				    <input id="zipcode2" name="zipcode2" value="<?php echo $_POST["zipcode1"];?>" type="hidden">
				    <input id="gender1" name="gender1" value="<?php echo $_POST["gender"];?>" type="hidden">
                    
                    <input id="health" name="health" value="" type="hidden">			
				 	
                    <h4 class="text-center">How healthy would you consider yourself?</h4>
					<div class="btn-group btn-group-vertical radioselect" data-toggle="buttons-radio">
						<button type="button" class="btn btn-warning genderbtn">Exceptionally healthy</button>
                    	<button type="button" class="btn btn-warning genderbtn">Very healthy</button>
                    	<button type="button" class="btn btn-warning genderbtn">Somewhat healthy</button>
                    	<button type="button" class="btn btn-warning genderbtn">Not as healthy</button>
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