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
				$('#education').val(gdr)
            });
			
			
			$('.genderbtnsubmit').click(function() {
               var gndrhidden = $('#education').val()
			   
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
    
    <title>Step 11</title>
<title>

</title></head>
<body>

<?php include 'includes/modal-popup.php';?>

    <div class="text-center logo"><a href="index.php"><img src="images/logo.png" alt=""></a></div>

    <div class="clearfix"></div>

	    <?php
 if (!empty($_POST["zipcode9"])) { ?>

    <div class="container">
        
            
		<div class="span6 center-this">
			<div class="form-box-inside text-center">
				<div class="progress progress-success">
				    <div class="bar" style="width: 87%;"></div>
				</div><!-- Progress Bar -->  
				 		
				 <div class="form-title-m">Get Your FREE Quote Now!</div>
				
				 <form id="form1" action="step12.php" method="post">
				   	<input id="zipcode10" name="zipcode10" value="<?php echo $_POST["zipcode9"];?>" type="hidden">
				    <input id="gender9" name="gender9" value="<?php echo $_POST["gender8"];?>" type="hidden">
                    <input id="health8" name="health8" value="<?php echo $_POST["health7"];?>" type="hidden">
                    <input id="tobaccouser7" name="tobaccouser7" value="<?php echo $_POST["tobaccouser6"];?>" type="hidden">
                    <input id="diabetes6" name="diabetes6" value="<?php echo $_POST["diabetes5"];?>" type="hidden">
                    <input id="coverage6" name="coverage6" value="<?php echo $_POST["coverage5"];?>" type="hidden">
                    <input id="coverageamnt5" name="coverageamnt5" value="<?php echo $_POST["coverageamnt4"];?>" type="hidden">
                    <input id="heartd4" name="heartd4" value="<?php echo $_POST["heartd3"];?>" type="hidden">
                    <input id="convicted3" name="convicted3" value="<?php echo $_POST["convicted2"];?>" type="hidden">
                    <input id="heightft2" name="heightft2" value="<?php echo $_POST["heightft"];?>" type="hidden">
                    <input id="heightin2" name="heightin2" value="<?php echo $_POST["heightin"];?>" type="hidden">
                    <input id="weightlb2" name="weightlb2" value="<?php echo $_POST["weightlb"];?>" type="hidden">
                    
                    <input id="education" name="education" value="" type="hidden">
                    
                    
				 	
                   <h4 class="text-center">What is your highest level of education completed?</h4>
					<div data-toggle="buttons-radio" class="btn-group btn-group-vertical radioselect">
                      <button type="button" class="btn btn-warning genderbtn">Some Or No HS</button>
                      <button type="button" class="btn btn-warning genderbtn">HS Diploma/GED</button>
                      <button type="button" class="btn btn-warning genderbtn">Some College</button>
                      <button type="button" class="btn btn-warning genderbtn">Associate Degree</button>
                      <button type="button" class="btn btn-warning genderbtn">Bachelors Degree</button>
                      <button type="button" class="btn btn-warning genderbtn">Masters Degree</button>
                      <button type="button" class="btn btn-warning genderbtn">Trade School</button>
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