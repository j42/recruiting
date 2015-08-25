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
        $(window).load(function(){
			setTimeout(function(){ 
			$('.loading').fadeOut('fast');
			$('#clickwall').fadeIn('fast');
			 
			
			}, 
			2000);
		});
	</script>
    
    
	<title>Submission Sucessfull</title>
	<title></title>
	</head>
	<body>
    
    <?php include 'includes/modal-popup.php';?>
    <div class="text-center logo"><a href="index.php"><img src="images/logo.png" alt=""></a></div>
    <div class="clearfix"></div>
    
        	    <?php
 if (!empty($_POST["zipcode11"])) { ?>
 
<?php $zipcode =  $_POST["zipcode11"]; ?>
<?php $gender =  $_POST["gender10"]; ?>
<?php $health =  $_POST["health9"]; ?>
<?php $tobaccouser =  $_POST["tobaccouser8"]; ?>
<?php $diabetes =  $_POST["diabetes7"]; ?>

<?php $coverage =  $_POST["coverage7"]; ?>
<?php $coverageamnt =  $_POST["coverageamnt6"]; ?>
<?php $heartd =  $_POST["heartd5"]; ?>
<?php $convicted =  $_POST["convicted4"]; ?>
<?php $heightft =  $_POST["heightft3"]; ?>
<?php $heightin =  $_POST["heightin3"]; ?>
<?php $weightlb =  $_POST["weightlb3"]; ?>
<?php $education =  $_POST["education2"]; ?>

<?php $first =  $_POST["first"]; ?>
<?php $last =  $_POST["last"]; ?>
<?php $lead_birthdate =  $_POST["lead_birthdate"]; ?>
<?php $email =  $_POST["email"]; ?>
<?php $phone =  $_POST["phone"]; ?>
<?php $address =  $_POST["address"]; ?>
 

   
   <?php
   
   $headers  = "From: <". $email.">\r\n";
   
$to = "brendan@leadlogiq.com";
$subject = "Free Quote - Policy Maverick";

$txt = "ZipCode: ". $zipcode."\r\n\r\n";
$txt .= "Gender: ". $gender."\r\n\r\n";
$txt .= "How healthy would you consider yourself?: ".  $health."\r\n\r\n";
$txt .= "Have you used tobacco products in the last 12 months?: ".  $tobaccouser."\r\n\r\n";
$txt .= "Do you or anybody in your family been diagnosed with diabetes?: ". $diabetes."\r\n\r\n";
$txt .= "What coverage term are you looking for?: ". $coverage."\r\n\r\n";
$txt .= "How much coverage would you like?: ". $coverageamnt."\r\n\r\n";
$txt .= "Have you or any of your immediate relatives had heart disease or cancer?: ". $heartd."\r\n\r\n";
$txt .= "Have you been convicted of drunk driving in the past 7 years?: ". $convicted."\r\n\r\n";
$txt .= "What is your approx Height?: ". $heightft."ft ".$heightin."in"."\r\n\r\n";
$txt .= "What is your approx Weight?: ". $weightlb." lbs"."\r\n\r\n";
$txt .= "What is your highest level of education completed?: ". $education."\r\n\r\n";
$txt .= "First Name: ".$first."\r\n\r\n";
$txt .= "Last Name: ". $last."\r\n\r\n";
$txt .= "Date of Birth: ".$lead_birthdate."\r\n\r\n";
$txt .= "Email Address: ". $email."\r\n\r\n";
$txt .= "Phone: ".  $phone."\r\n\r\n";
$txt .= "Street Address: ".$address."\r\n\r\n";


mail($to,$subject,$txt,$headers);
?> 
 
 
 
    
    <div class="container">
      <div class="span6 center-this" id="info">
        <div class="form-box-inside text-center" id="msg">
          <h4 class="text-center">Thank you for submitting your information and taking the first step to preparing yourself and your family! We will be reaching out to your shortly.</h4>
        </div>
      </div>
      <div id="sh">
      
        <h3 class="text-center">Today's Top Insurance Partners</h3>
      
      	<p class="loading"><img src="images/loader.gif" alt="Loading..."></p>
        
        <div class="text-center" id="clickwall">
          <div class="span10 center-this rates-table">
            <div class="span1 alpha circle text-center">#1</div>
            <div class="span8 info">
              <div class="pointer"></div>
              <div class="span2 alpha logo"><img alt="" src="images/11174834.jpg"></div>
              <div class="span3 text-left descrip"><strong>1* Buys $50,000 Life Insurance: New York</strong><br>
                <ul>
                  <li>Monthly Rates as low as: Adults: $3.49 - Children: $2.17</li>
                  <li>Choose $5,000, $10,000, $20,000 or $50,000 Coverage.</li>
                  <li>No Medical Exam. Just a Few Y/N Health Questions.</li>
                  <li>Free Info. No Phone Required. You Buy Direct.</li>
                </ul>
              </div>
              <div class="span2 cta">
                <button class="btn btn-success input-block-level" type="submit">GET QUOTE</button>
              </div>
              <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
          </div>
          <div class="span10 center-this rates-table">
            <div class="span1 alpha circle text-center">#2</div>
            <div class="span8 info">
              <div class="pointer"></div>
              <div class="span2 alpha logo"><img alt="" src="images/11428165.gif"></div>
              <div class="span3 text-left descrip"><strong>Discuss Your Needs with a Financial Professional</strong><br>
                <ul>
                  <li>A free, no-obligation meeting with a trained, New York Life agent</li>
                  <li>Provide your family with insurance protection that can last a lifetime</li>
                  <li>A variety of life insurance policies, and retirement income products</li>
                </ul>
              </div>
              <div class="span2 cta">
                <button class="btn btn-success input-block-level" type="submit">GET QUOTE</button>
              </div>
              <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
          </div>
          <div class="span10 center-this rates-table">
            <div class="span1 alpha circle text-center">#3</div>
            <div class="span8 info">
              <div class="pointer"></div>
              <div class="span2 alpha logo"><img alt="" src="images/11327239.png"></div>
              <div class="span3 text-left descrip"><strong>Cheap New York Life Insurance</strong><br>
                <ul>
                  <li>Find The Cheapest Life Insurance Rates Available</li>
                  <li>Compare Plans From All of the Major Providers</li>
                  <li>Term, Whole, Variable, Universal and Final Expense Insurance</li>
                  <li>Get Your Free Quote Now! Sign Up Online</li>
                </ul>
              </div>
              <div class="span2 cta">
                <button class="btn btn-success input-block-level" type="submit">GET QUOTE</button>
              </div>
              <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
          </div>
        </div>
        
        
      </div>
      <div class="clearfix"></div>
      <?php include 'includes/footer.php';?>
      
    </div>
    
    <?php } 
    
    
    else { 
    
    include 'includes/nodirectaccess.php'; } ?> 
    
    
       
    
</body></html>