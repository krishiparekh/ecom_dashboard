<?php
    include('includes/header.php');

?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Categories</h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                      <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Status</th>
                            <th>Edit</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php 
                        $category = getAll("categories");

                        if(mysqli_num_rows($category)>0){
                            foreach($category as $item{
                               ?>
                        <tr>
                            <td><?= $item['id']; ?></td>
                            <td><?= $item['name'];?></td>
                            <td><?= $item['status'] == '0'? "visible":"Hidden" ?></td>
                            <td>
                                <a href="#" class="btn btn-primary">Edit</a>
                                </td>
                        </tr>
                        <?php
                            })
                        }
                        else{
                            echo"No records found";
                        }
                        ?>
                       
                      </tbody>


  </div>
</div>
</div>
</div>


<?php include('includes/footer.php'); ?>