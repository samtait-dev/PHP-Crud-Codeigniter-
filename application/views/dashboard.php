<?php include('header.php'); ?>




<div class="row"> 
<div class="small-12 medium-6 large-3 columns">
	<u class="side-nav">
	<?php $username = $this->session->userdata('username');    ?>
	<li><h3> Welcome <?php echo $username; ?> </h3></li>
	<hr>
	<li><?php echo anchor("dashboard/addPost, 'Add Blog Post'"); ?></li>
	</u>

</div>



</div>






<?php include('footer.php'); ?>