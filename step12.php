<!DOCTYPE html>
<html lang="en">
	<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta charset="UTF-8">
	<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/styles.css">
	<script src="js/jquery-1.js" type="text/javascript"></script>
	<script src="js/bootstrap.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			
			$('.genderbtnsubmit').click(function() {
            
			
			  var first = $('input[name="first"]').val();
			  var last = $('input[name="last"]').val();
			  var lead_birthdate = $('input[name="lead_birthdate"]').val();
			  var email = $('input[name="email"]').val();
			  var phone = $('input[name="phone"]').val();
			  var address = $('input[name="address"]').val();
   			 
			 
			 if (first == '')
				{
					$('#first').next().css({"display":"block"}); 
					return false;
				}
			 else{$('#first').next().css({"display":"none"})}
			 
			 
			 if (last == '')
				{
					$('#last').next().css({"display":"block"}); 
					return false;
				}
			 else{$('#last').next().css({"display":"none"})}
			 
			 
			 if (lead_birthdate == '')
				{
					$('#lead_birthdate').next().css({"display":"block"}); 
					return false;
				}
			 else{$('#lead_birthdate').next().css({"display":"none"})}
			 
			 
			  if (email == '' || email.indexOf("@") == -1 || email.indexOf(".") == -1)
				{
					$('#email').next().css({"display":"block"}); 
					return false;
				}
			 else{$('#email').next().css({"display":"none"})}
			 
			 
			 
			  if (phone == '')
				{
					$('#phone').next().css({"display":"block"}); 
					return false;
				}
			 else{$('#phone').next().css({"display":"none"})}
			 
			 
			 if (address == '')
				{
					$('#address').next().css({"display":"block"}); 
					return false;
				}
			 else{$('#address').next().css({"display":"none"})}
			 
			 
				
				
            });
			
		})
	</script>
	<title>Step 12</title>
	<title></title>
	</head>
	<body>
    <?php include 'includes/modal-popup.php';?>
    <div class="text-center logo"><a href="index.php"><img src="images/logo.png" alt=""></a></div>
    <div class="clearfix"></div>
    
    	    <?php
 if (!empty($_POST["zipcode10"])) { ?>
    
    <div class="container">
      <div class="span6 center-this">
        <div class="form-box-inside text-center">
          <div class="progress progress-success">
            <div class="bar" style="width: 97%;"></div>
          </div>
          <!-- Progress Bar -->
          
          <div class="form-title-m">You’re almost there!</div>
          <form id="form1" action="thankyou.php" method="post">
            <input id="zipcode11" name="zipcode11" value="<?php echo $_POST["zipcode10"];?>" type="hidden">
            <input id="gender10" name="gender10" value="<?php echo $_POST["gender9"];?>" type="hidden">
            <input id="health9" name="health9" value="<?php echo $_POST["health8"];?>" type="hidden">
            <input id="tobaccouser8" name="tobaccouser8" value="<?php echo $_POST["tobaccouser7"];?>" type="hidden">
            <input id="diabetes7" name="diabetes7" value="<?php echo $_POST["diabetes6"];?>" type="hidden">
            <input id="coverage7" name="coverage7" value="<?php echo $_POST["coverage6"];?>" type="hidden">
            <input id="coverageamnt6" name="coverageamnt6" value="<?php echo $_POST["coverageamnt5"];?>" type="hidden">
            <input id="heartd5" name="heartd5" value="<?php echo $_POST["heartd4"];?>" type="hidden">
            <input id="convicted4" name="convicted4" value="<?php echo $_POST["convicted3"];?>" type="hidden">
            <input id="heightft3" name="heightft3" value="<?php echo $_POST["heightft2"];?>" type="hidden">
            <input id="heightin3" name="heightin3" value="<?php echo $_POST["heightin2"];?>" type="hidden">
            <input id="weightlb3" name="weightlb3" value="<?php echo $_POST["weightlb2"];?>" type="hidden">
            <input id="education2" name="education2" value="<?php echo $_POST["education"];?>" type="hidden">
            
            <h4 class="text-center">Get Your Results Now!?</h4>
			<div style="margin-bottom: 10px;" class="span3 center-this text-left">
                    <label>First Name</label>
                    <input type="text" class="input-block-level" name="first" id="first">
                    <p class="error">Enter First Name</p>
                </div>

            <div style="margin-bottom: 10px;" class="span3 center-this text-left">
                <label>Last Name</label>
                <input type="text" class="input-block-level" name="last" id="last">
                <p class="error">Enter Last Name</p>
            </div>
            
            <div style="margin-bottom: 10px;" class="span3 center-this text-left">
                <label>Date of Birth</label>
                <input type="text" class="input-block-level" name="lead_birthdate" id="lead_birthdate">
                <p class="error">Enter Date of Birth</p>
            </div>
            
            <div style="margin-bottom: 10px;" class="span3 center-this text-left">
              <label>Email Address</label>
              <input name="email" type="text" class="input-block-level" id="email">
              <p class="error">Enter Valid Email Address</p>
            </div>
            
            <div style="margin-bottom: 10px;" class="span3 center-this text-left">
                <label>Phone Number</label>
                <input type="tel" class="input-block-level" name="phone" id="phone">
                <p class="error">Enter Valid Phone Number</p>
            </div>
  
            <div style="margin-bottom: 10px;" class="span3 center-this text-left">
                <label>Street Address</label>
                <input type="text" class="input-block-level" name="address" id="address">
                <p class="error">Enter Street Address</p>
            </div>
            
            
            <div class="span3 center-this text-center btn-group">
              <button class="btn btn-success input-block-level genderbtnsubmit fleft" type="submit">Submit</button>
            </div>
            
            <div class="span5 center-this text-left tcpa">
                    <br>
                    <label>By clicking Submit I consent by electronic signature to receive marketing messages from a live agent, artificial or prerecorded voice, and SMS text at my residential or cellular number (dialed manually or by autodialer) and by email from up to eight <a target="_blank" href="#">insurance companies or their agents, the owner of this website, and partner companies</a>. This consent is not required as a condition to purchase services. I also agree that the information I provide will be used to provide me with insurance quotes and as otherwise set forth in the <a target="_blank" href="privacy.php">Privacy Policy</a>. I have read the <a target="_blank" href="terms.php">Terms of Use</a> and agree to be bound by them.</label>
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