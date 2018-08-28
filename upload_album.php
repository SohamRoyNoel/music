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
            <h3 class="agileits_w3layouts_head">Come on  let's upload <span>Albums</span></h3>
            <div class="wthree_latest_albums_grids gallery">
                <div class="col-md-9 agile_mail_grid_left">
                    <?php
                    if (isset($_POST['submits'])){
                        $title = escape($_POST['name']);
                        $language = escape($_POST['cat1']);
                        $artist = escape($_POST['cat2']);

                        //thumbnail
                        $p_image = $_FILES['images']['name'];
                        $post_image_temp = $_FILES['images']['tmp_name'];
                        move_uploaded_file($post_image_temp, "into_all/album_image/$p_image");

                        if (!empty($title) && !empty($language) && !empty($p_image)){
                            $query = "insert into album (name, image, artist_id, language_id)";
                            $query .= "values('{$title}', '{$p_image}', $artist, $language)";
                            $sender = mysqli_query($connection, $query);
                            header("Location: upload_album.php");
                        }
                    }
                    ?>
                    <form action="" method="post" enctype="multipart/form-data">
                        <label for="name">Enter Album Name</label>
                        <input type="text" name="name" placeholder="Name" required=""><br>

                        <br><br>
                        <label for="cat2">Choose Artist Name</label>
                        <div class="btn-group">
                            <select id="country1" class="dropdown" name="cat2" required="">
                                <option class="dropdown-header" value="">Select Artist</option>
                                <?php
                                $querys = "select * from artist";
                                $sends = mysqli_query($connection, $querys);

                                while ($row = mysqli_fetch_assoc($sends)) {
                                    $id = $row['id'];
                                    $name = $row['name'];

                                    echo "<option class='dropdown-item' value='{$id}'>{$name}</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <br><br>

                        <label for="images">Upload Picture</label>
                        <input type="file" name="images" class="btn btn-default" required=""><br>

                        <label for="country1">Choose Language</label>
                        <div class="btn-group">
                            <select id="country1" class="dropdown" name="cat1" required="">
                                <option class="dropdown-header" value="">Select Language</option>
                                <?php
                                $querys = "select * from language";
                                $sends = mysqli_query($connection, $querys);

                                while ($row = mysqli_fetch_assoc($sends)) {
                                    $id = $row['id'];
                                    $language = $row['language'];

                                    echo "<option class='dropdown-item' value='{$id}'>{$language}</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <br><br>
                        <input type="submit" value="Post Your Album Now" name="submits">
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