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
				$('#coverage').val(gdr)
            });
			
			
			$('.genderbtnsubmit').click(function() {
               var gndrhidden = $('#coverage').val()
			   
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
    
    <title>Step 6</title>
<title>

</title></head>
<body>

<?php include 'includes/modal-popup.php';?>

    <div class="text-center logo"><a href="index.php"><img src="images/logo.png" alt=""></a></div>

    <div class="clearfix"></div>
    
    
    <?php
 if (!empty($_POST["zipcode4"])) { ?>
    

    <div class="container">
        
            
		<div class="span6 center-this">
			<div class="form-box-inside text-center">
				<div class="progress progress-success">
				    <div class="bar" style="width: 60%;"></div>
				</div><!-- Progress Bar -->  
				 		
				 <div class="form-title-m">Get Your FREE Quote Now!</div>
				
				 <form id="form1" action="step7.php" method="post">
				    <input id="zipcode5" name="zipcode5" value="<?php echo $_POST["zipcode4"];?>" type="hidden">
				    <input id="gender4" name="gender4" value="<?php echo $_POST["gender3"];?>" type="hidden">
                    <input id="health3" name="health3" value="<?php echo $_POST["health2"];?>" type="hidden">
                    <input id="tobaccouser2" name="tobaccouser2" value="<?php echo $_POST["tobaccouser1"];?>" type="hidden">
                    <input id="diabetes1" name="diabetes1" value="<?php echo $_POST["diabetes"];?>" type="hidden">
                    
                    <input id="coverage" name="coverage" value="" type="hidden">			
				 	
                    <h4 class="text-center">What coverage term are you looking for?</h4>
					<div class="btn-group radioselect btn-group-vertical" data-toggle="buttons-radio">
						<button type="button" class="btn btn-warning genderbtn">10 years</button>
                    	<button type="button" class="btn btn-warning genderbtn">15 years</button>
						<button type="button" class="btn btn-warning genderbtn">20 years</button>
                        <button type="button" class="btn btn-warning genderbtn">30 years</button>
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