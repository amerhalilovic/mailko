<?php require('config/db.php');
    require('inc/header.php');
    require('config/config.php');

    if(isset($_POST['submit'])){

        $update_id= mysqli_real_escape_string($conn,$_POST['update_id']);
        $name= mysqli_real_escape_string($conn,$_POST['name']);
        $price=mysqli_real_escape_string($conn,$_POST['price']);
        $picture=mysqli_real_escape_string($conn,$_POST['picture']);


        $query= "UPDATE cars SET 
                  name='$name',
                  price='$price',
                  picture='$picture' WHERE id=1";
        die($query);
        if(mysqli_query($conn,$query)){

            header('Location:index.php');
        }else{
            echo 'Error: '.mysqli_error($conn);
        }
    }
    $id= mysqli_real_escape_string($conn,$_GET['id']);    
    $query = "SELECT * FROM cars ORDER BY price";
    $results = mysqli_query($conn,$query);
    $cars = mysqli_fetch_all($results,MYSQLI_ASSOC);
    mysqli_free_result($results);
    mysqli_close($conn);


?>


<div class="container">
    <h1>Add Car </h1>

    <form action="<?php $_SERVER['PHP_SELF']?>" method="POST">

        <div class="form-group">
            <label for="">Name</label>
            <input type="text" name="name" class="form-control" value="<?php $cars['name'];?>">
        </div>
        <div class="form-group">
            <label for="">Price</label>
            <input type="number" class="form-control" name="price" value="<?php $cars['price'];?>">
        </div>
        <div class="form-group">
            <label for="">Picture URL</label>
            <input type="text" name="picture" class="form-control" value="<?php $cars['picture'];?>">
        </div>
        <input type="submit" name="submit" value="SUBMIT" class="btn btn-primary">
        <input type="hidden" name="update_id" value="<?php echo $cars['id']?>">
    </form>

</div>


<?php require('inc/footer.php'); ?>