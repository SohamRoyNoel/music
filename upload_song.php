<?php include "include/uni_header.php"?>
<?php
if (!isset($_SESSION['role'])){
    header("Location: ./error/error.php");
}
$x = $_SESSION['role'];
if ($x != "admin"){
    header("Location: ./error/error.php");
}
?>
    <!-- mail -->

    <div class="latest-albums">
        <div class="container">
            <h3 class="agileits_w3layouts_head">Come on  let's <span>Upload</span></h3>
            <div class="wthree_latest_albums_grids gallery">
                <div class="col-md-9 agile_mail_grid_left">
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
                            $youtube = escape(substr($_POST['youtube'], 17));
                            $album = escape($_POST['album']);

                            //thumbnail
                            $p_image = $_FILES['images']['name'];
                            $post_image_temp = $_FILES['images']['tmp_name'];
                            move_uploaded_file($post_image_temp, "thumbnail/$p_image");

                            //songs
                            $upload_file = $_FILES['files']['name'];
                            $temps = $_FILES['files']['tmp_name'];
                            move_uploaded_file($temps, "songs/$upload_file");

                            if (!empty($title) && !empty($singer) &&!empty($description) &&!empty($length) &&!empty($date) &&!empty($category)){

                                    $query = "insert into music (title, singer, description, length, relese_date, likes, lyrics, genere, songs, thumbnail, language, album_tag, youtube_id)";
                                    $query .= "values('{$title}', '{$singer}', '{$description}', '{$length}', '{$date}', 4,'{$lyrics}', '{$category}', '{$upload_file}', '{$p_image}', $language,'{$album}' , '{$youtube}')";
                                    $sender = mysqli_query($connection, $query);
                            }

                        }
                    ?>
                    <form action="" method="post" enctype="multipart/form-data">
                        <label for="name">Enter Song Title</label>
                        <input type="text" name="name" placeholder="Name" required=""><br>

                        <label for="email">Singer</label>
                        <input type="text" name="singer" placeholder="Singer" required=""><br>

                        <label for="description">Description</label>
                        <input type="text" name="description" placeholder="Description" required=""><br>

                        <label for="length">Run Time</label>
                        <input type="text" name="length" placeholder="Run Time" required=""><br>

                        <label for="images">Upload the song</label>
                        <input type="file" name="files" class="btn btn-default">

                        <label for="album">Album name</label>
                        <input type="text" name="album" placeholder="Run Time" required=""><br>

                        <label for="youtube">Paste the Short URL only</label>
                        <input type="text" name="youtube" placeholder="ex: https://youtu.be/xxxxx" required=""><br>
                        *This field only accepts SHORT URL <b>(open the song vid->share->copy link)</b>
                        <br><br>

                        <label for="country1">Choose Language</label>
                        <div class="btn-group">
                            <select id="country1" class="dropdown" name="cat1">
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

                        <label for="release_date">Release Date</label>
                        <input type="date" autocomplete="off" name="release_date" id="date" placeholder="Relese Date" required=""><br>

                        <br>
                        <label>Upload A Thumbnail Picture</label>
                        <input type="file" name="images" class="btn btn-default">
                        <br>

                        <label>Post the lyrics</label>
                        <textarea name="lyrics" placeholder="Description of the book"  id = "body"></textarea>
                        <br>

                        <label for="Genre">Choose Genre</label>
                        <div class="btn-group">
                            <select id="country" class="dropdown" name="cat">
                                <option class="dropdown-header" value="">Select Category</option>
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