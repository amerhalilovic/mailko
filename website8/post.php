<?php
    require ('config/db.php');



    //get id
    $id= mysqli_real_escape_string($conn,$_GET['id']);

    //Create query 
    $query = 'SELECT * FROM posts WHERE id='.$id;

    //get result 

    $result = mysqli_query($conn,$query);

    //fetch data

    $post = mysqli_fetch_assoc($result);

    // var_dump($posts);

    // ASSOC ['name' => 'Brad']

    //Free Result
    mysqli_free_result($result);

    //close connection

    mysqli_close($conn);

    ?>


    <!DOCTYPE html>
    <html lang="en">
    <head>
        <title>PHP BLOG</title>
        <link rel="stylesheet" href ="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >

    </head>
    <body>
        <div class="container">
        
           <h1><?php echo $post['title'] ?> </h1> 
            <small>Created at <?php echo  $post['created_at'] ?></small> <br>
            <small> Author is <?php  echo $post['author'] ?></small>
            <p> The text he were write:</p>
            <p> <?php echo $post['body'] ?> </p>
        </div>
    </body>
    </html>