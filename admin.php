<!DOCTYPE html>
<html>
    <head>
        <title>Admin</title>
        <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
        <!--<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.js">-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </head>
    <body>

    <?php require_once 'process.php'; ?>

    <?php
    if(isset($_SESSION['message'])):?>
        
    <div class="alert alert-<?=$_SESSION['msg_type']?>">

    <?php
        echo $_SESSION['message'];
        unset ($_SESSION['message']);
    
    ?>
    </div>
    <?php endif ?>

    
    <div class="container">
    <?php
        $db = mysqli_connect('localhost', 'root', '', 'products') or die(mysqli_error($db));
        $result = $db->query("SELECT * from product") or die($db->error);

    ?>
        <div class="row justify-content-center">
            <table class="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Description</th>
                        <th>About</th>
                        <th>Info</th>
                        <th>Composition</th>
                        <th colspan="2">Action</th>
                    </tr>
                </thead>

                <?php
                    while($row = $result->fetch_assoc()):?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['product_name']; ?></td>
                        <td><?php echo $row['price']; ?></td>
                        <td><?php echo $row['product_description']; ?></td>
                        <td><?php echo $row['about']; ?></td>
                        <td><?php echo $row['using_inf']; ?></td>
                        <td><?php echo $row['composition']; ?></td>
                        <td>
                            <a href="admin.php?edit=<?php echo $row['id']; ?>" 
                                class="btn btn-info">Edit</a>
                            <a href="process.php?delete=<?php echo $row['id']; ?>" 
                                class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            
            </table>
        </div>


    <?php       
        function pre_re($array){
            echo '<pre>';
            print_r($array);
            echo'</pre>';
        }
    


    ?>

    <div class=" row justify-content-center">	
    <form action="process.php" method="POST">
            <div class="form-group">
                <label>ID:</label>
                <input type="text" name="id" class="form-control" placeholder="" 
                value="<?php echo $id;?>">
            </div>
            <div class="form-group">
                <label>Product Name:</label>
                <input type="text" name="product_name"  class="form-control" placeholder=""
                value="<?php echo $product_name;?>">
            </div>
            <div class="form-group">
                <label>Price</label>
                <input type="text" name="price"  class="form-control" placeholder="" 
                value="<?php echo $price;?>">
            </div>
            <div class="form-group">
                <label>Description:</label>
                <input type="text" name="product_description"  class="form-control" placeholder=""
                value="<?php echo $product_description;?>">
            </div>
            <div class="form-group">
                <label>About:</label>
                <input type="text" name="about"  class="form-control" placeholder=""
                 value="<?php echo $about;?>">
            </div>
            <div class="form-group">
                <label>Using_inf</label>
                <input type="text" name="using_inf"  class="form-control" placeholder=""
                value="<?php echo $using_inf;?>">
            </div>
            <div class="form-group">
                <label>Composition</label>
                <input type="text" name="composition"  class="form-control" placeholder=""
                 value="<?php echo $composition;?>">
            </div>
            <div class="form-group">
            <?php 
            if($update == true):
            ?>
                <button type="submit" class= "btn btn-info"name="update">Update</button>
            <?php else: ?>
                <button type="submit" class= "btn btn-primary"name="save">Save</button>
            <?php endif; ?>
            </div>
        </form>
        </div>
    </body>
</html>