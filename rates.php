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
    
    
	<title>Rates</title>
	<title></title>
	</head>
	<body>
    <div class="text-center logo"><a href="index.php"><img src="images/logo.png" alt=""></a></div>
    <div class="clearfix"></div>
      
    <div class="container">
      <div class="span6 center-this" id="info">
        <div class="form-box-inside text-center">
            <div class="text-left small">Life insurance is often cost prohibitive for most Americans. Fortunately Quickquote411 has brought the best life insurance companies with the best rates right to you. Not only do our partners have the best rates but the most aggressive life insurance programs including: No Medical Test policies, Death Benefit policies, and Guaranteed Issue policies</div>
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
     
       
    
</body></html>