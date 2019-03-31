<?php require('config/db.php');
    require('inc/header.php');
    require('config/config.php');



    $query = "SELECT * FROM cars ORDER BY price";
    $results = mysqli_query($conn,$query);
    $cars = mysqli_fetch_all($results,MYSQLI_ASSOC);
    mysqli_free_result($results);
    mysqli_close($conn);


?>


<div class="container">
<div class="row">
<?php foreach($cars as $car) : ?>
     
        <div class="col-sm-4" style=" margin:auto; padding:1px;">
           <p style="text:align:center; border:2px solid #007bff;border-radius:2px; padding:3px;"> <img src="<?php echo $car['picture']; ?>" style="width:100%; height:200px; margin:auto; padding:10px;" > </p>
            <p style="text-align:center; margin:auto;"> <strong> <?php echo $car['name'] ?> </strong> </p>
            <p style="text-align:center"> <a href="auto.php?id=<?php echo $car['id']?>" class="btn btn-primary">View More</a> </p>
        </div>
  
<?php endforeach; ?>
</div>
</div>


<?php require('inc/footer.php'); ?>