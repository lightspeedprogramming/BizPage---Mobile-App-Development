<!DOCTYPE html>
<html>
<head>
	<title>Estimate App Cost</title>
</head>
<body>

</body>
</html>

<!--==========================
    Header
  ============================-->
  
<?php
	include('header.php');
?>
<?php
	include("service-page-banner.php");
?>

    <!-- CONTACT AREA START HERE -->
    <section id="contact" class="section-bg wow fadeInUp" style=" none repeat scroll 0 0;">
      <div class="container">

        <div class="row" style="background-color: grey;">
            <div class="col-md-12">
            	<div class="contact-form">
                  <div class="form" style="margin-top: 26px;">
                    <div id="sendmessage">Your message has been sent. Thank you!</div>
                    <div id="errormessage"></div>
                    <form action="" method="post" role="form" class="contactForm">
                      
                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                          <div class="validation"></div>
                        </div>

                        <div class="form-group col-md-6">
                          <input type="text" class="form-control" name="mob" id="mob" placeholder="Phone" data-rule-minlength="10" data-msg="Please enter a valid number" />
                          <div class="validation"></div>
                        </div>

                        <div class="form-group col-md-6">
                          <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                          <div class="validation"></div>
                        </div>

                        <div class="form-group col-md-6">
                                <input type="text" class="form-control" placeholder="Size of your app(Small,Medium,Big)*" name="size" required>
                            </div>
							
							<div class="form-group col-md-6">
                                <input type="text" class="form-control" placeholder="Platform (Android,iOS,Web)*" name="platform" required>
                            </div>
							
							<div class="form-group col-md-6">
                                <input type="text" class="form-control" placeholder="Users & Accounts(Facebook,Twitter,Linkedin)*" name="accounts" required>
                            </div>
							
							<div class="form-group col-md-6">
                                <input type="text" class="form-control" placeholder="Level of UI(MVP,Basic,Polished)*" name="level" required>
                            </div>
							
							<div class="form-group col-md-6">
                                <input type="text" class="form-control" placeholder="Social & Engagement(Social Sharing,Push Messages)*" name="social" required>
                            </div>
							
							<div class="form-group col-md-6">
                                <input type="text" class="form-control" placeholder="Billing & eCommerce(Shopping Cart,Payment Gateway)*" name="billing" required>
                            </div>
						
							<div class="form-group col-md-6">
								<input type="text" name="admin" class="form-control"  placeholder="Admin, Feedback & Analytics(User Admin Pages,User Analytics)*" required>
							</div>
						
							<div class="form-group col-md-6">
								<input type="text" name="api"  class="form-control"  placeholder="External APIs and Integrations(API Integrate,SMS Messages)*" required>
							</div>
						
							<div class="form-group col-md-6">
								<input type="text" name="security" class="form-control"  placeholder="Security(Basic Security,SSL Certificate)*" required>
							</div>
                        
                        <div class="form-group col-md-12">
                          <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" class="form-control" placeholder="Message"></textarea>
                          <div class="validation"></div>
                        </div>
                        
                        <div class="text-center col-md-12" style="margin-top: 11px;"><button type="submit">Send Message</button></div>
                      </div>

                    </form>
                  </div>
            </div>
        	</div>
        </div>

     	</div>
    </section><!-- #contact -->
    <!-- CONTACT AREA END HERE -->



<?php
	include("footer.php");
?>