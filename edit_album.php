<?php include "include/uni_header.php"?>
<?php
if (isset($_GET['update'])){
    if ($_GET['update'] == null){
        header("Location: error/error.php");
    }else{
        $hlp = $_GET['update'];
        $max = "select * from album";
        $am = mysqli_query($connection, $max);
        while ($r=mysqli_fetch_assoc($am)){
            $max_id=$r['id'];
        }
        for ($i=1; $i<=$max_id; $i++){
            $c = crypt($i, '$2a$09$iusesomecrazystring111$');
            if ($c===$hlp){
                $decrypted_id = $i;
                break;
            }
        }
    }
}else{
    header("Location: error/error.php");
}
?>
    <!-- mail -->

    <div class="latest-albums">
        <div class="container">
            <h3 class="agileits_w3layouts_head"> <span>Update existing</span></h3>
            <div class="wthree_latest_albums_grids gallery">
                <div class="col-md-9 agile_mail_grid_left">
                    <?php
                    $sql = "select * from album where id=$i";
                    $getter = mysqli_query($connection, $sql);
                    while ($row=mysqli_fetch_assoc($getter)) {
                        $id = $row['id'];
                        $title = $row['name'];
                        $image = $row['image'];
                        $artist = $row['artist_id'];
                        $language = $row['language_id'];
                    }
                    ?>
                    <?php
                    if (isset($_POST['submits'])){
                        $title = escape($_POST['name']);
                        $language = escape($_POST['cat1']);
                        $art = escape($_POST['cat2']);

                        //thumbnail
                        $p_image = $_FILES['images']['name'];
                        $post_image_temp = $_FILES['images']['tmp_name'];
                        move_uploaded_file($post_image_temp, "into_all/album_image/$p_image");

                        $query = "update album set name='{$title}', image='{$p_image}', artist_id={$art}, language_id={$language} where id={$i}";
                        $sender = mysqli_query($connection, $query);
                        echo mysqli_error($connection);
                        header("Location: into_all/show_all_album.php");
                    }
                    ?>
                    <form action="" method="post" enctype="multipart/form-data">
                        <label for="name">Album Name</label>
                        <input type="text" name="name" placeholder="Name" value="<?php echo $title; ?>"><br>
                        <br><br>

                        <label for="country1">Choose Language</label>
                        <div class="btn-group">
                            <select id="country1" class="dropdown" name="cat1">
                                <?php
                                $sql1 = "select * from language where id=$language";
                                $can = $language;
                                $getter1 = mysqli_query($connection,$sql1);
                                while ($r=mysqli_fetch_assoc($getter1)){
                                    $language=$r['language'];
                                }
                                ?>
                                <option class="dropdown-header" value="<?php echo $can?>"><?php echo $language; ?></option>
                                <?php
                                $querys = "select * from language";
                                $sends = mysqli_query($connection, $querys);

                                while ($row = mysqli_fetch_assoc($sends)) {
                                    $ids = $row['id'];
                                    $language = $row['language'];

                                    echo "<option class='dropdown-item' value='{$ids}'>{$language}</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <br><br>
                        <label for="country2">Choose Artist</label>
                        <div class="btn-group">
                            <select id="country2" class="dropdown" name="cat2">
                                <?php
                                $sql1 = "select * from artist where id=$artist";
                                $getter1 = mysqli_query($connection,$sql1);
                                while ($r=mysqli_fetch_assoc($getter1)){
                                    $name=$r['name'];
                                }
                                ?>
                                <option class="dropdown-header" value="<?php echo $artist; ?>"><?php echo $name; ?></option>
                                <?php
                                $querys = "select * from artist";
                                $sends = mysqli_query($connection, $querys);

                                while ($row = mysqli_fetch_assoc($sends)) {
                                    $ids = $row['id'];
                                    $artist = $row['name'];

                                    echo "<option class='dropdown-item' value='{$ids}'>{$artist}</option>";
                                }
                                ?>
                            </select>
                        </div>

                        <br><br>
                        <label>Upload Artist's Image</label>
                        <input type="file" name="images" class="btn btn-default" value="<?php echo $image?>">
                        <br>

                        <input type="submit" value="Post Your Song Now" name="submits">
                    </form>
                </div>

                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //mail -->
<?php include "include/about_footer.php"?>