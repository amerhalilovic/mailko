<?php 

    require('config/db.php');
    require('inc/header.php');
    require('config/config.php');

    $id=mysqli_real_escape_string($conn,$_GET['id']);

    $query= "SELECT * FROM cars WHERE id=".$id;

    $result = mysqli_query($conn,$query);

    $car = mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    mysqli_close($conn);

?>

<div class="container">
   <p style = "text-align:center"> <img src="<?php echo $car['picture']?>" style="margin:2rem; width: 450px; height:250px; border:3px solid green; border-radius:10px;" > </p>
    <h2 style="text-align:center;"> <?php echo $car['name'] ?> </h2>
    <h6 style="text-align:center">Cijena : <?php echo $car['price'] ?> $</h6> <br> <hr>
    <p style="text-align:center"><a href="index.php" class="btn btn-primary"> Back to catalog</a> 
    <a href="editcar.php"  class="btn btn-success"> Edit</a> </p>
    
</div>


<?php require('inc/footer.php'); ?>