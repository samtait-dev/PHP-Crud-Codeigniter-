<!DOCTYPE html>
<html lang="en">
 <head>
  <title>Display Records From Database Using Codeigniter</title>
  <link href="<?= base_url();?>css/bootstrap.css" rel="stylesheet">
 </head>
 <body>
  <div class="row">
   <div style="width:500px;margin:50px;">
    <h4>Display Records From Database Using Codeigniter</h4>
    <table class="table table-striped table-bordered">
     <tr><td><strong>Email</strong></td></tr> 
     <?php foreach($USERS as $row){?>
     <tr><td><?=$row->Email;?></td></tr>     
        <?php }?>  
    </table>
   </div> 
  </div> 
 </body>
</html>