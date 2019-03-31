<?php require('config/db.php');
 require('config/config.php');
    require('inc/header.php');


    if(isset($_POST['submit'])){
        $name= mysqli_real_escape_string($conn,$_POST['name']);
        $price=mysqli_real_escape_string($conn,$_POST['price']);
        $picture=mysqli_real_escape_string($conn,$_POST['picture']);


        $query= "INSERT INTO cars(picture,name,price) VALUES ('$picture','$name','$price')";

        if(mysqli_query($conn,$query)){
            header('Location:index.php');
        }else{
            echo 'Error: '.mysqli_error($conn);
        }
    }

?>


<div class="container">
    <h1>Add Car </h1>

    <form action="<?php $_SERVER['PHP_SELF']?>" method="POST">

        <div class="form-group">
            <label for="">Name</label>
            <input type="text" name="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Price</label>
            <input type="number" class="form-control" name="price">
        </div>
        <div class="form-group">
            <label for="">Picture URL</label>
            <input type="text" name="picture" class="form-control">
        </div>
        <input type="submit" name="submit" value="SUBMIT" class="btn btn-primary">

    </form>

</div>


<?php require('inc/footer.php'); ?>