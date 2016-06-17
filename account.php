<?php
	include 'inc/header.php';
?>
	<script>
	jQuery(document).ready(function(){
	jQuery('.skillbar').each(function(){
		jQuery(this).find('.skillbar-bar').animate({
			width:jQuery(this).attr('data-percent')
			},2000);
		});
	});
	</script>
    <!-- Page Content -->
	<div class="back">
    <div class="container back">


        <!-- Pofile header image + info -->
        
		<div class="row" id="profile_header">
            <div class="col-md-">
					<figure class="snip1344"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/profile-sample1.jpg" alt="profile-sample1" class="background"/><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/profile-sample1.jpg" alt="profile-sample1" class="profile"/>
					  <figcaption>
						<h3>Besnik Hetemi<span>Programing</span></h3>
						<div class="icons"><a href="#"><i class="ion-social-reddit-outline"></i></a><a href="#"> <i class="ion-social-twitter-outline"></i></a><a href="#"> <i class="ion-social-vimeo-outline"></i></a></div>
					  </figcaption>
					</figure>
            </div>
		<div class="row info">
          <div class="col-sm-4">
            <div class="row mgbt-xs-0 margin-top">
              <label class="col-xs-5 control-label">First Name:</label>
              <div class="col-xs-7 controls">Mariah</div>
              <!-- col-sm-10 --> 
            </div>
          </div>
          <div class="col-sm-4">
            <div class="row mgbt-xs-0 margin-top">
              <label class="col-xs-5 control-label">Last Name:</label>
              <div class="col-xs-7 controls">Caraiban</div>
              <!-- col-sm-10 --> 
            </div>
          </div>
          <div class="col-sm-4">
            <div class="row mgbt-xs-0 margin-top">
              <label class="col-xs-5 control-label">User Name:</label>
              <div class="col-xs-7 controls">Mariah</div>
              <!-- col-sm-10 --> 
            </div>
          </div>
          <div class="col-sm-4">
            <div class="row mgbt-xs-0 margin-top">
              <label class="col-xs-5 control-label">Email:</label>
              <div class="col-xs-7 controls">mariah@Vendroid.com</div>
              <!-- col-sm-10 --> 
            </div>
          </div>
          <div class="col-sm-4">
            <div class="row mgbt-xs-0 margin-top">
              <label class="col-xs-5 control-label">City:</label>
              <div class="col-xs-7 controls">Los Angeles</div>
              <!-- col-sm-10 --> 
            </div>
          </div>
          <div class="col-sm-4">
            <div class="row mgbt-xs-0 margin-top">
              <label class="col-xs-5 control-label">Country:</label>
              <div class="col-xs-7 controls">United States</div>
              <!-- col-sm-10 --> 
            </div>
          </div>
          <div class="col-sm-4">
            <div class="row mgbt-xs-0 margin-top">
              <label class="col-xs-5 control-label">Birthday:</label>
              <div class="col-xs-7 controls">Jan 22, 1984</div>
              <!-- col-sm-10 --> 
            </div>
          </div>
          <div class="col-sm-4">
            <div class="row mgbt-xs-0 margin-top">
              <label class="col-xs-5 control-label">Interests:</label>
              <div class="col-xs-7 controls">Basketball, Web, Design, etc.</div>
              <!-- col-sm-10 --> 
            </div>
          </div>
          <div class="col-sm-4">
            <div class="row mgbt-xs-0 margin-top">
              <label class="col-xs-5 control-label">Website:</label>
              <div class="col-xs-7 controls"><a href="http://Vendroid.venmond.com">Vendroid.venmond.com</a></div>
              <!-- col-sm-10 --> 
            </div>
          </div>
          <div class="col-sm-4">
            <div class="row mgbt-xs-0 margin-top">
              <label class="col-xs-5 control-label">Phone:</label>
              <div class="col-xs-7 controls">+1-234-5678</div>
              <!-- col-sm-10 --> 
            </div>
          </div>
        </div>

          
            
	
			
			
			
            </div>
        
        
        <!-- /.row -->

        <!-- skill + education -->
        <div class="row">
            <div class="col-sm-5 portfolio-item" id="profile_sections">
                <h2>eduction info</h2>
                <h3>
                    <a href="#">Project Three</a>
                </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
			    <div class="col-sm-1 portfolio-item">

            </div>
            <div class="col-md-6 portfolio-item" id="profile_sections">
			<center><h3>Top skills</h3></center></br>
			<div class="skillbar clearfix " data-percent="60%">
				<div class="skillbar-title" style="background: #d35400;"><span>HTML5</span></div>
				<div class="skillbar-bar" style="background: #e67e22;"></div>
				<div class="skill-bar-percent">60%</div>
			</div> <!-- End Skill Bar -->

			<div class="skillbar clearfix " data-percent="70%">
				<div class="skillbar-title" style="background: #2980b9;"><span>CSS3</span></div>
				<div class="skillbar-bar" style="background: #3498db;"></div>
				<div class="skill-bar-percent">70%</div>
			</div> <!-- End Skill Bar -->

			<div class="skillbar clearfix " data-percent="50%">
				<div class="skillbar-title" style="background: #2c3e50;"><span>jQuery</span></div>
				<div class="skillbar-bar" style="background: #2c3e50;"></div>
				<div class="skill-bar-percent">50%</div>
			</div> <!-- End Skill Bar -->

			<div class="skillbar clearfix " data-percent="80%">
				<div class="skillbar-title" style="background: #46465e;"><span>PHP</span></div>
				<div class="skillbar-bar" style="background: #5a68a5;"></div>
				<div class="skill-bar-percent">80%</div>
			</div> <!-- End Skill Bar -->

			<div class="skillbar clearfix " data-percent="20%">
				<div class="skillbar-title" style="background: #333333;"><span>Wordpress</span></div>
				<div class="skillbar-bar" style="background: #525252;"></div>
				<div class="skill-bar-percent">20%</div>
			</div> <!-- End Skill Bar -->

			<div class="skillbar clearfix " data-percent="40%">
				<div class="skillbar-title" style="background: #27ae60;"><span>SEO</span></div>
				<div class="skillbar-bar" style="background: #2ecc71;"></div>
				<div class="skill-bar-percent">40%</div>
			</div> <!-- End Skill Bar -->

			<div class="skillbar clearfix " data-percent="70%">
				<div class="skillbar-title" style="background: #124e8c;"><span>Photoshop</span></div>
				<div class="skillbar-bar" style="background: #4288d0;"></div>
				<div class="skill-bar-percent">70%</div>
			</div> <!-- End Skill Bar -->
			
			
			
                
            </div>
        </div>
        <!-- /.row -->

    </div>
	</div>
    <!-- /.container -->




<?php
	include 'inc/footer.php';
?>
