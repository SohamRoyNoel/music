<?php include "include/uni_header.php"?>
<?php
if (isset($_GET['update'])){
    if ($_GET['update'] == null){
        header("Location: error/error.php");
    }else{
        $hlp = $_GET['update'];
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
                            $sql = "select * from music where id=$hlp";
                            $getter = mysqli_query($connection, $sql);
                            while ($row=mysqli_fetch_assoc($getter)) {
                                $id = $row['id'];
                                $title = $row['title'];
                                $singer = $row['singer'];
                                $description = $row['description'];
                                $length = $row['length'];
                                $relese_date = $row['relese_date'];
                                $lyrics = $row['lyrics'];
                                $genere = $row['genere'];
                                $songs = $row['songs'];
                                $thumbnail = $row['thumbnail'];
                                $language = $row['language'];
                                $album_tag = $row['album_tag'];
                                $youtube_id = $row['youtube_id'];
                                $feature_tag = $row['feature_tag'];
                            }
                    ?>
                    <?php
                    if (isset($_POST['submits'])){
                        $title = escape($_POST['name']);
                        $singer = escape($_POST['singer']);
                        $description = escape($_POST['description']);
                        $length = escape($_POST['length']);
                        $date = escape($_POST['release_date']);
                        $lyrics = escape($_POST['lyrics']);
                        $category = escape($_POST['cat']);
                        $language = escape($_POST['cat1']);
                        // $youtube = escape(substr($_POST['youtube'], 17));
                        $album = escape($_POST['album']);

                        //thumbnail
                        $p_image = $_FILES['images']['name'];
                        $post_image_temp = $_FILES['images']['tmp_name'];
                        move_uploaded_file($post_image_temp, "thumbnail/$p_image");


                            $query = "update music set title='{$title}', singer='{$singer}', description='{$description}', length='{$length}', relese_date='{$date}', lyrics='{$lyrics}', genere={$category}, thumbnail='{$p_image}', language={$language}, album_tag='{$album}', youtube_id='{$youtube}' where id={$hlp}";
                            $sender = mysqli_query($connection, $query);
                            echo mysqli_error($connection);

                            header("Location: into_all/show_all_song.php");

                    }
                    ?>
                    <form action="" method="post" enctype="multipart/form-data">
                        <label for="name">Enter Song Title</label>
                        <input type="text" name="name" placeholder="Name" value="<?php echo $title; ?>"><br>

                        <label for="email">Singer</label>
                        <input type="text" name="singer" placeholder="Singer" value="<?php echo $singer; ?>"><br>

                        <label for="description">Description</label>
                        <input type="text" name="description" placeholder="Description" value="<?php echo $description; ?>"><br>

                        <label for="length">Run Time</label>
                        <input type="text" name="length" placeholder="Run Time" value="<?php echo $length; ?>"><br>

                        <label for="album">Album name</label>
                        <input type="text" name="album" placeholder="Album name" value="<?php echo $album_tag; ?>"><br>
<!---->
<!--                        <label for="youtube">Paste the Short URL only</label>-->
<!--                        <input type="text" name="youtube" placeholder="ex: https://youtu.be/xxxxx" value="--><?php //echo $youtube_id; ?><!--"><br>-->
<!--                        *This field only accepts SHORT URL <b>(open the song vid->share->copy link)</b>-->
<!--                        <br><br>-->

                        <label for="country1">Choose Language</label>
                        <div class="btn-group">
                            <select id="country1" class="dropdown" name="cat1">
                                <?php
                                $sql1 = "select * from language where id=$language";
                                $languageId = $language;

                                $getter1 = mysqli_query($connection,$sql1);
                                while ($r=mysqli_fetch_assoc($getter1)){
                                    $language=$r['language'];
                                }
                                ?>
                                <option class="dropdown-header" value="<?php echo $languageId; ?>"><?php echo $language; ?></option>
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

                        <label for="release_date">Release Date</label>
                        <input type="date" autocomplete="off" name="release_date" id="date" placeholder="Relese Date" value="<?php echo $relese_date; ?>"><br>

                        <br>
                        <label>Upload A Thumbnail Picture</label>
                        <input type="file" name="images" class="btn btn-default" value="<?php echo $thumbnail; ?>">
                        <br>

                        <label>Post the lyrics</label>
                        <textarea name="lyrics" placeholder="Description of the book"  id = "body"></textarea>
                        <br>

                        <label for="Genre">Choose Genre</label>
                        <div class="btn-group">
                            <?php
                                $spd = "select * from category where id=$genere";
                                $pp = mysqli_query($connection,$spd);
                                while ($rs = mysqli_fetch_assoc($pp)){
                                    $cats = $rs['title'];
                                }
                            ?>
                            <select id="country" class="dropdown" name="cat">
                                <option class="dropdown-header" value="<?php echo $genere; ?>"><?php echo $cats; ?></option>
                                <?php
                                $querys = "select * from category";
                                $sends = mysqli_query($connection, $querys);

                                while ($row = mysqli_fetch_assoc($sends)) {
                                    $id = $row['id'];
                                    $category = $row['title'];

                                    echo "<option class='dropdown-item' value='{$id}'>{$category}</option>";
                                }
                                ?>
                            </select>

                        </div>

                        <br><br>

                        <input type="submit" value="Post Your Song Now" name="submits">
                    </form>
                </div>

                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //mail -->
<?php include "include/about_footer.php"?>