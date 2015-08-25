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
			
			$('.genderbtnsubmit').click(function() {
                
           var hft = $('#heightft').val();
		   var hin = $('#heightin').val();
		   var wlb = $('#weightlb').val(); 
		   
		   
		      intRegex = /[0-9 -()+]+$/;
			  if(!intRegex.test(hft) || hft == '' ||  !intRegex.test(hin) || hin =='')
			
				{
					// alert('Select at least one option'); return true;
					$('#heightft').parent().parent().next('.heighterror').children().css({"display":"block"}); 
					return false;
				 }
				 
		    else{$('#heightft').parent().parent().next('.heighterror').children().css({"display":"none"})}
			
			
			
			
			 if(!intRegex.test(wlb) || wlb == '')
			
				{
					// alert('Select at least one option'); return true;
					$('#weightlb').parent().next().next().css({"display":"block"}); 
					return false;
				 }
				 
		    else{$('#weightlb').parent().next().next().css({"display":"none"})}
			
			
				
					
				 
				 
			 });	 
				 
				 
				 
				 
			
		})
	</script>
    
    <title>Step 10</title>
<title>

</title></head>
<body>

<?php include 'includes/modal-popup.php';?>

    <div class="text-center logo"><a href="index.php"><img src="images/logo.png" alt=""></a></div>

    <div class="clearfix"></div>
	    <?php
 if (!empty($_POST["zipcode8"])) { ?>


    <div class="container">
		<div class="span6 center-this">
			<div class="form-box-inside text-center">
				<div class="progress progress-success">
				    <div class="bar" style="width: 80%;"></div>
				</div><!-- Progress Bar -->  
				 		
				 <div class="form-title-m">Get Your FREE Quote Now!</div>
				
				 <form id="form1" action="step11.php" method="post">
				    <input id="zipcode9" name="zipcode9" value="<?php echo $_POST["zipcode8"];?>" type="hidden">
				    <input id="gender8" name="gender8" value="<?php echo $_POST["gender7"];?>" type="hidden">
                    <input id="health7" name="health7" value="<?php echo $_POST["health6"];?>" type="hidden">
                    <input id="tobaccouser6" name="tobaccouser6" value="<?php echo $_POST["tobaccouser5"];?>" type="hidden">
                    <input id="diabetes5" name="diabetes5" value="<?php echo $_POST["diabetes4"];?>" type="hidden">
                    <input id="coverage5" name="coverage5" value="<?php echo $_POST["coverage4"];?>" type="hidden">
                    <input id="coverageamnt4" name="coverageamnt4" value="<?php echo $_POST["coverageamnt3"];?>" type="hidden">
                    <input id="heartd3" name="heartd3" value="<?php echo $_POST["heartd2"];?>" type="hidden">
                    <input id="convicted2" name="convicted2" value="<?php echo $_POST["convicted"];?>" type="hidden">
                    
                   		
				 	
                    <h4 class="text-center">What is your approx height and weight?</h4>
					
                    
                    
                    
                    <div class="span3 center-this">
                	<div class="row">
                		<div class="span1 text-left">
                			<strong>Height:</strong>
                		</div>
                    	
                    	<div class="span1">
							<input type="text" placeholder="ft." class="input-block-level" maxlength="1" name="heightft" id="heightft">
                    	</div>
                    	
                    	<div class="span1"> 
							<input type="text" placeholder="in." class="input-block-level" maxlength="2" name="heightin" id="heightin">
                    	</div>
                	</div>
                	<div class="row heighterror">
                    	<p class="error">Field shouldn't be empty</p>
                    </div>
                	<div class="row">
                    	<div class="span1 text-left">
                    		<strong>Weight:</strong>
                    	</div>
                    	<div class="span1">
							<input type="text" placeholder="lbs." class="input-block-level" maxlength="3" name="weightlb" id="weightlb">
                           
                    	</div>
                        	<div class="clearfix"></div>
                         <p class="error">Field shouldn't be empty</p>
                         <div class="clearfix"></div>
                	</div>
                </div>
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