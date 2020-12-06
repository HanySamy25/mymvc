
<?php include(VIEWS.'inc/header.php')?>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
      <?php 
    
    foreach($allemps as $key => $emp){?>
            <tr>
       <th scope="row"><?=$key++?></th>
       <th ><?=$emp['NikeName']?></th>
       <th><a class="btn btn-primary">Edit</a></th>
       <th><a class="btn btn-danger">Delete</a></th>
    </tr>
            <?php }?>
    
  </tbody>
</table>

<?php include(VIEWS.'inc/footer.php')?> 