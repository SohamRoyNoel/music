<?php include "includes/head.php"?>
<?php
if (!isset($_SESSION['role'])){
    header("Location: error/error.php");
}
$x = $_SESSION['role'];
if ($x != "admin"){
    header("Location: error/error.php");
}
?>
    <div id="page-wrapper">
    <div class="inner-content single">
        <!--/music-right-->
        <div class="tittle-head">
            <h3 class="tittle">ALL Songs <span class="new">Admin's Control Panel</span></h3>
        </div>
    </div>
        <br><br><br>
        <div class="col-sm-3 m-b-xs">
            <select class="input-sm form-control w-sm inline v-middle" name="bulk_options">
                <option value="">Choose Bulk action</option>
                <option value="delete">Delete Selected</option>
                <option value="publish">Feature Selected</option>
            </select>
        </div>
        <input type="submit" name="bulk" class="btn btn-success" value="Apply Action">


        <table class="table table-responsive table-hover">
            <thead>
                <th style="width:20px;"><input type="checkbox" id="selectAllBoxes"><i></i></th>
                <script>
                    $(document).ready(function () {

                        $('#selectAllBoxes').click(function (event) {
                            if (this.checked){
                                $('.checkbox').each(function () {
                                    this.checked = true;
                                });
                            } else {
                                $('.checkbox').each(function () {
                                    this.checked = false;
                                });
                            }
                        });

                    });
                </script>
                <th>Id</th>
                <th>Title</th>
                <th>Singer</th>
                <th>About</th>
                <th>Length</th>
                <th>Date</th>
                <th>Lyrics</th>
                <th>Genere</th>
                <th>Songs</th>
                <th>Cover</th>
                <th>Language</th>
                <th>Album</th>
                <th>Feature</th>
                <th>Edit</th>
            </thead>
            <tbody>
                <?php
                    $sql = "select * from music";
                    $getter = mysqli_query($connection, $sql);
                    while ($row=mysqli_fetch_assoc($getter)){
                        $id=$row['id'];
                        $title=$row['title'];
                        $singer=$row['singer'];
                        $description=$row['description'];
                        $length=$row['length'];
                        $relese_date=$row['relese_date'];
                        $lyrics=$row['lyrics'];
                        $genere=$row['genere'];
                        $songs=$row['songs'];
                        $thumbnail=$row['thumbnail'];
                        $language=$row['language'];
                        $album_tag=$row['album_tag'];
                        $youtube_id=$row['youtube_id'];
                        $feature_tag=$row['feature_tag'];

                        $lyrics = substr($lyrics, 0, 20);

                        $sql1 = "select * from language where id=$language";
                        $getter1 = mysqli_query($connection,$sql1);
                        while ($r=mysqli_fetch_assoc($getter1)){
                            $language=$r['language'];
                        }

                        $sql2 = "select * from category where id=$genere";
                        $getter2 = mysqli_query($connection,$sql2);
                        while ($r=mysqli_fetch_assoc($getter2)){
                            $genere=$r['title'];
                        }

                ?>
                <td><input class='checkbox' type='checkbox' name='checkBoxArray[]' value='<?php echo $id ?>'>
                <?php
                    echo "<td>{$id}</td>";
                    echo "<td>{$title}</td>";
                    echo "<td>{$singer}</td>";
                    echo "<td>{$description}</td>";
                    echo "<td>{$length}</td>";
                    echo "<td>{$relese_date}</td>";
                    echo "<td>{$lyrics}......</td>";
                    echo "<td>{$genere}</td>";
                    echo "<td>{$songs}</td>";
                    echo "<td><img src='../thumbnail/$thumbnail' height='60' width='70'></td>";
                    echo "<td>{$language}</td>";
                    echo "<td>{$album_tag}</td>";
                    echo "<td>{$feature_tag} <br> <a href='manipulate.php?feature=$id' class='active' ui-toggle-class=''><i class='fa fa-check text-success text-active' title='Make featured'></i></a> <a href='manipulate.php?general=$id' class='active' ui-toggle-class=''><i class='fa fa-times text-danger text' title='Make General'></i></a> </td>";
                    echo "<td><a href='../edit_music.php?update=$id' class='active' ui-toggle-class=''><i class='fa fa-edit' title='Edit'></i></a><br><br><a href='manipulate.php?delete=$id' class='active' ui-toggle-class=''><i class='lnr lnr-trash' title='Delete'></i></a></td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
<?php include "includes/single_page_footer.php"?>

