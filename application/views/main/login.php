<title>Eshop</title>
<script >
         addEventListener("load", function () { setTimeout(hideURLbar, 0); }, false); function hideURLbar() { window.scrollTo(0, 1); }
      </script>
      <!-- Meta tags -->
      <!--stylesheets-->
      <link href="<?php echo base_url(); ?>assets/css/style.css" rel='stylesheet' type='text/css' media="all">
      <!--//style sheet end here-->
      <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="https://bootswatch.com/4/flatly/bootstrap.css">

   </head>
   <body style="background-color: brown;">
      <div class="mid-class">
         <div class="art-right-w3ls">
            <h2>Sign In and Sign Up</h2>
            <?php echo $this->session->set_flashdata('msg1', 'Username or Password Incorrect!'); ?>
           <form action="<?php echo base_url();?>main/login_validation" method="post">
				
            <div class="form-left-to-w3l ">

					<input class="text email" type="text" name="username" placeholder="username" required="">
					<?php echo form_error('username'); ?>
               <div class="clear"></div>
            </div>
				  <div class="form-left-to-w3l ">
            	<input class="text" type="password" name="password" placeholder="Password" required="">
				 <div class="clear"></div>
            </div>
					<div class="wthree-text">
						
						<div class="clear"> </div>
					</div>

					<input class="btn btn-primary" type="submit" name="insert" value="SIGN IN">
					
				</form>




            <div class="w3layouts_more-buttn">
               <h3>Don't Have an account..?
                  <a href="#content1">Sign Up Here
                  </a>
               </h3>
            </div>
            <!-- popup-->
            <div id="content1" class="popup-effect">
               <div class="popup">
                  <!--login form-->
                  <div class="letter-w3ls">
                   <form action="<?php echo base_url();?>main/signup" method="post">
                        <div class="form-left-to-w3l">
                           <input type="text" name="username" placeholder="Username" required="">
                        </div>
                        <div class="form-left-to-w3l">
                           <input type="text" name="address" placeholder="Address" required="">
                        </div>
                        <div class="form-left-to-w3l">
                           <input type="email" name="email" placeholder="Email" required="">
                        </div>
                        <div class="form-left-to-w3l">
                           <input type="text" name="number" placeholder="Phone Number" required="">
                        </div>
                        <div class="form-left-to-w3l">
                           <input type="password" name="password" placeholder="Password" required="">
                        </div>
                        <div class="form-left-to-w3l margin-zero">
                           <input type="password" name="passwordv1" placeholder="Confirm Password" required="">
                        </div>
                        <div class="btnn">
                         <input class="btn btn-success" type="submit" name="insert" value="SIGN IN">
                           <br>
                        </div>
                     </form>
                     <div class="clear"></div>
                  </div>
                  <!--//login form-->
                  <a class="close" href="#">&times;</a>
               </div>
            </div>
            <!-- //popup -->
         </div>
         <div class="art-left-w3ls">
            <h1 class="header-w3ls">
               Eshop // Buy Now
            </h1>
         </div>
      </div>
      <footer class="bottem-wthree-footer">
       
      </footer>
   </body>
</html>