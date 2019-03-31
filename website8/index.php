<?php
    require ('config/db.php');


    //Create query 
    $query = 'SELECT * FROM posts';

    //get result 

    $result = mysqli_query($conn,$query);

    //fetch data

    $posts = mysqli_fetch_all($result,MYSQLI_ASSOC);

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
        <h1>Posts</h1>
        <?php foreach($posts as $post): ?>

            <div class="well">
                <h3><?php echo $post['title']; ?></h3>
                <small> Created on <?php echo $post['created_at']; ?> by <?php echo $post['author']; ?> </small>
                <p> <?php echo $post['body'] ?> </p>
                <a href="post.php?id=<?php echo $post['id']; ?>"> Read More</a>
            </div>
        <?php  endforeach; ?>
        </div>
    </body>
    </html>