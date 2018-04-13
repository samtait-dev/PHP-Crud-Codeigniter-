<?php include('header.php'); ?>




<div class="row"> 
<div class="small-12 medium-6 large-3 columns">

    <?php $username = $this->session->userdata('username');    ?>   
    <h3> Welcome <?php echo $username; ?> </h3>

    <li><?php echo anchor("dashboard/addPost", 'Add Blog Post'); ?></li>


</div>

<h2>Add New Post</h2>

<div class="small-12 medium-12 large-12 columns">
<?php echo form_open_multipart('dashboard/publishPost', ['class' => 'form-horizontal']) ?>
<label> Title
<?php echo form_input(['name'=>'post_title', 'placeholder' => 'Title', 'value' => set_value('post_title')]); ?>
<?php echo form_error('post_title', '<div class = "text-danger">', '</div>'); ?>
</label>

<label> Description
<?php echo form_textarea(['name'=>'post_description', 'placeholder' => 'Description', 'value' => set_value('post_description')]); ?>
<?php echo form_error('post_description', '<div class = "text-danger">', '</div>'); ?>
</label>

<label>
<?php echo form_upload(['name'=>'userfile', 'value' => 'Save', 'class'=>'primary button']); ?>
<?php echo form_error('userfile', '<div class = "text-danger">', '</div>'); ?>
</label>


<label>
<?php echo form_submit(['name'=>'submit', 'value' => 'PUBLISH POST', 'class'=>'hollow button success']); ?>

</label>
<?php echo form_close(); ?>



 </div>
</div>






<?php include('footer.php'); ?>