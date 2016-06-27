<?php
	include 'inc/header.php';
	include 'inc/functions.php';
	include 'connect.php';
?>
	<script>
	jQuery(document).ready(function(){
	jQuery('.skillbar').each(function(){
		jQuery(this).find('.skillbar-bar').animate({
			width:jQuery(this).attr('data-percent')
			},2000);
		});
	});
	$(document).ready(function () {
	                $(document).on('mouseenter', '#profile_header', function () {
	                    $(this).find(":button").show();
	                }).on('mouseleave', '#profile_header', function () {
	                    $(this).find(":button").hide();
	                });
	            });
	</script>
    <!-- Page Content -->
	<div class="back">
    <div class="container back">
		<?php
		if ($_GET['id'] == $_SESSION['userid']){
			$ownAccount = 'True';
		}
		$result = $conn->query("select * from users where user_id = ".$_GET['id']."");
			while ($row = $result->fetch_assoc()) { ?>

        <!-- Pofile header image + info -->

		<div class="row" id="profile_header">

   <button type="button" class="editbutton" style="display: none;"></button>

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
              <label class="col-xs-5 control-label">Title:</label>
              <div class="col-xs-7 controls"><?php echo $row['title'];?></div>
              <!-- col-sm-10 -->
            </div>
          </div>
          <div class="col-sm-4">
            <div class="row mgbt-xs-0 margin-top">
              <label class="col-xs-5 control-label">First Name:</label>
              <div class="col-xs-7 controls"><?php echo $row['FirstName'];?></div>
              <!-- col-sm-10 -->
            </div>
          </div>
          <div class="col-sm-4">
            <div class="row mgbt-xs-0 margin-top">
              <label class="col-xs-5 control-label">Last Name:</label>
              <div class="col-xs-7 controls"><?php echo $row['LastName'];?></div>
              <!-- col-sm-10 -->
            </div>
          </div>
          <div class="col-sm-4">
            <div class="row mgbt-xs-0 margin-top">
              <label class="col-xs-5 control-label">Email:</label>
              <div class="col-xs-7 controls"><?php echo $row['Email'];?></div>
              <!-- col-sm-10 -->
            </div>
          </div>
					<?php  if (!$row['location'] == ''){?>
					<div class="col-sm-4">
            <div class="row mgbt-xs-0 margin-top">
              <label class="col-xs-5 control-label">location: </label>
              <div class="col-xs-7 controls"><?php echo $row['location'];?></div>
              <!-- col-sm-10 -->
            </div>
          </div>
					<?php }
					if (!$row['DOB'] == ''){?>
								<div class="col-sm-4">
					        <div class="row mgbt-xs-0 margin-top">
					          <label class="col-xs-5 control-label">DOB: </label>
					          <div class="col-xs-7 controls"><?php echo $row['DOB'];?></div>
					        </div>
					      </div>
					<?php }
					if (!$row['Interests'] == ''){?>
								<div class="col-sm-4">
									<div class="row mgbt-xs-0 margin-top">
										<label class="col-xs-5 control-label">Interests: </label>
										<div class="col-xs-7 controls"><?php echo $row['Interests'];?></div>
									</div>
								</div>
					<?php }
					if (!$row['portfolio_url'] == ''){?>
								<div class="col-sm-4">
									<div class="row mgbt-xs-0 margin-top">
										<label class="col-xs-5 control-label">Portfolio: </label>
										<div class="col-xs-7 controls"><?php echo $row['portfolio_url'];?></div>
									</div>
								</div>
					<?php } ?>


        </div>
			</div>


        <!-- /.row -->

        <!-- skill + education -->
        <div class="row">
            <div class="col-sm-5 portfolio-item" id="profile_sections">
							<button type="button" class="editbutton" style="display: none;"></button>
                <h3>
                    Education Information
                </h3>
							<?php if (!$row['CurrentPosition'] == 'NULL'){
								echo 'Click Here to add your education infomration';
							}?>







            </div>
			    <div class="col-sm-1 portfolio-item">

            </div>
            <div class="col-md-6 portfolio-item" id="profile_sections">
							<button type="button" class="editbutton" style="display: none;"></button>
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
    <?php }  ?>
    </div>
	</div>
    <!-- /.container -->




<?php
	include 'inc/footer.php';
?>
