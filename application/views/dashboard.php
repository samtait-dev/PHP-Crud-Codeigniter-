<?php include('header.php'); ?>




<div class="row"> 
<div class="small-12 medium-6 large-3 columns">

	<?php $username = $this->session->userdata('username');    ?>	
	<h3> Welcome <?php echo $username; ?> </h3>

	<li><?php echo anchor("dashboard/addPost", 'Add Blog Post'); ?></li>


</div>

<h2>Read our blogs</h2>
 </div>
</div>






<?php include('footer.php'); ?>