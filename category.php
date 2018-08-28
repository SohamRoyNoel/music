<?php include "include/uni_header.php"?>

    <!-- mail -->

    <div class="latest-albums">
        <div class="container">
            <h3 class="agileits_w3layouts_head">Add Or See <span>Category</span></h3>
            <br>
            <table class="table col-xs-push-12 right">
                <tr>
                    <td>
                        <div class="wthree_latest_albums_grids gallery">
                            <div class="col-lg-10 agile_mail_grid_left">
                                <?php
                                if (isset($_POST['adds'])){
                                    $category = escape($_POST['cat_title']);
                                    $p_image = $_FILES['images']['name'];
                                    $post_image_temp = $_FILES['images']['tmp_name'];

                                    move_uploaded_file($post_image_temp, "thumbnail_image/$p_image");

                                    if ($category != "" && $p_image != "" && !empty($category) && !empty($p_image)){
                                        $querys = "insert into category (title, image) values ('{$category}', '{$p_image}')";
                                        $send = mysqli_query($connection, $querys);
                                        header("Location: category.php");
                                    } else {
                                        echo  "Nothing to add";
                                    }
                                    // confirm($send);
                                }
                                ?>
                                <form action="" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="cat-title">Add category</label>
                                        <input autocomplete="off" class="form-control" type="text" name="cat_title">
                                    </div>
                                    <div class="form-group">
                                        <label for="cat-title">Add image</label>
                                        <input class="btn btn-default" type="file" name="images">
                                    </div>
                                    <div class="form-group">
                                        <input class="btn btn-success" type="submit" name="adds" value="Add To Category">
                                    </div>
                                </form>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </td>
                    <td>
                        <div class="wthree_latest_albums_grids gallery">
                            <div class="col-lg-10 agile_mail_grid_left">
                                <h3 class="agileits_w3layouts_head"> <span>Categories</span></h3>
                                <table class="table table-responsive table-hover tab-container text-center">
                                    <?php
                                    $querys = "select * from category";
                                    $sends = mysqli_query($connection, $querys);

                                    while ($row = mysqli_fetch_assoc($sends)) {
                                        $id = $row['id'];
                                        $category = $row['title'];
                                        $img = $row['image'];

                                        if ($id != null && $category != null && $img != null){
                                            echo "<tr>";
                                            echo "<td>{$id}</td>";
                                            echo "<td>{$category}</td>";
                                            echo "<td><img width='100' height='50' src='thumbnail_image/{$img}'></td>";
                                            echo "</tr>";
                                        }
                                    }
                                    ?>
                                </table>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </td>
                </tr>

            </table>
        </div>
    </div>
    <!-- //mail -->
<?php include "include/about_footer.php"?>