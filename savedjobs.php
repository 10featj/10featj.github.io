<?php
	include 'inc/header.php';
	include 'connect.php';
?>

<div class="container">
                <div class="row page-title text-center wow bounce"  data-wow-delay="1s">
                    <h5>Looking for (Web Devel jobs) in (Manchester)</h5>
                    <h2><span>27</span> Available jobs for you</h2>
                </div>
                <div class="row jobs">
                    <div class="col-md-12">
                        <div class="job-posts table-responsive">
                            <table class="table">
							<?php
								$i = 0;
								$sesh_email = $_SESSION['email'];
								$result = $conn->query("select * from posts inner join saved_jobs on posts.P_ID=saved_jobs.saved_job where saved_jobs.email ='$sesh_email' ");
								while ($row = $result->fetch_assoc()) { 
									$i++;?>
								    <tr class="odd" data-wow-delay="1s">
                                    <td class="tbl-logo"><img src="img/job-logo1.png" alt=""></td>
                                    <td class="tbl-title"><h4><?php echo $row['job_title']; ?><br><span class="job-type"><?php echo $row['hours']; ?></span></h4></td>
                                    <td><p>dribbble community</p></td>
                                    <td><p><i class="icon-location"></i><?php echo $row['location']; ?></p></td>
                                    <td><p>&dollar; <?php echo $row['salary']; ?></p></td>
                                    <td class="tbl-apply"><a href="#">Apply now</a>
										<button id="btnfollow" class="btn1 followButton tbl-apply" name="flwbtn<?php echo $i ?>" rel="2" value="<?php echo $row['P_ID']; ?>">Save</button>
									</td>
                                    </tr>	
									<?php
								}
							?>
                            </table>
                        </div>
                        <div class="more-jobs">
                            <a href=""> <i class="fa fa-refresh"></i>View more jobs</a>
                        </div>
                    </div>
                    <div class="col-md-3 hidden-sm">
                        <div class="job-add wow fadeInRight" data-wow-delay="1.5s">
                            <h2>Seeking a job?</h2>
                            <a href="#">Create a Account</a>
                        </div>
                    </div>
                </div>
            </div>
			
<script>
	var $email = "<?php echo $_SESSION['email'];?>";
	$("button").each(function(data){
		var btn=(this.name);
		if ($(this).is('#btnfollow')) {
			$.ajax({
				type: "POST",
				url: "test.php",
				dataType: 'html',
				data: {email: $email, job: $(this).attr("value") },
				success: function(job){
					if (job > 0) {
						$('button[name='+btn+']').addClass('following').text('Following');
					}
						
				}
			});   
		}	
	});
	
	// The rel attribute is the userID you would want to follow
	$('button.followButton').click(function(e){
		
		e.preventDefault();
		$button = $(this);
		$saved_job = $(this).attr("value");

		if($button.hasClass('following')){
			
			//$.ajax(); Do Unfollow
			$.ajax({
			type: "POST",
			url: "unsave.php",
			dataType: 'html',
			data: {email: $email, saved_job: $saved_job},
			success: function(){
						/* Remove the alert when you got it working they where just for tests */			
				}
			});

			$button.removeClass('following');
			$button.removeClass('unfollow');
			$button.text('Save');
		} else {
			
			// $.ajax(); Do Follow
			$.ajax({
			type: "POST",
			url: "save.php",
			dataType: 'html',
			data: {email: $email, saved_job: $saved_job},
			success: function(){
						/* Remove the alert when you got it working they where just for tests */
					
				}
			});
			
			$button.addClass('following');
			$button.text('Saved');
		}
	});

	$('button.followButton').hover(function(){
		 $button = $(this);
		if($button.hasClass('following')){
			$button.addClass('unfollow');
			$button.text('Un-Save');
		}
	}, function(){
		if($button.hasClass('following')){
			$button.removeClass('unfollow');
			$button.text('Saved');
		}
	});
</script>
			
			
<?php
	include 'inc/footer.php';
?>	