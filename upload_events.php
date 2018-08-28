<?php include "include/uni_header.php"?>
<?php
if (!isset($_SESSION['role'])){
    header("Location: error/error.php");
}
$x = $_SESSION['role'];
if ($x != "admin"){
    header("Location: error/error.php");
}
?>
    <!-- mail -->

    <div class="latest-albums">
        <div class="container">
            <h3 class="agileits_w3layouts_head">Come on  let's upload <span>Events</span></h3>
            <div class="wthree_latest_albums_grids gallery">
                <div class="col-md-9 agile_mail_grid_left">
                    <?php
                    if (isset($_POST['submits'])){
                        $title = escape($_POST['name']);
                        $date = escape($_POST['name1']);
                        $description = escape($_POST['name2']);

                        //thumbnail
                        $p_image = $_FILES['images']['name'];
                        $post_image_temp = $_FILES['images']['tmp_name'];
                        move_uploaded_file($post_image_temp, "into_all/album_image/$p_image");

                        if (!empty($title) && !empty($date) && !empty($description)){
                            $query = "insert into event (date, name, description, image)";
                            $query .= "values('{$date}', '{$title}', '{$description}', '{$p_image}')";
                            $sender = mysqli_query($connection, $query);
                            echo mysqli_error($connection);
                            header("Location: upload_events.php");
                        }
                    }
                    ?>
                    <form action="" method="post" enctype="multipart/form-data">
                        <label for="name">Event Name</label>
                        <input type="text" name="name" placeholder="Name" required=""><br>

                        <label for="name1">Event Date</label>
                        <input type="text" name="name1" placeholder="Name" required=""><br>

                        <label for="name2">Event Description</label>
                        <input type="text" name="name2" placeholder="Name" required=""><br>

                        <label for="images">Upload Event Image</label>
                        <input type="file" name="images" class="btn btn-default" required=""><br>

                        <br><br>
                        <input type="submit" value="Post Event Now" name="submits">
                        <br><br>
                        <h4><b>*REMEMBER : Upload albums carefully to see the best results.</b></h4>
                    </form>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //mail -->
<?php include "include/about_footer.php"?>