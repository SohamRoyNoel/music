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
            <h3 class="tittle">ALL Artist <span class="new">Admin's Control Panel</span></h3>
        </div>
    </div>
    <br><br><br>

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
        <th>Name</th>
        <th>Image</th>
        <th>Language</th>
        </thead>
        <tbody>
        <?php
        $sql = "select * from artist";
        $getter = mysqli_query($connection, $sql);
        while ($row=mysqli_fetch_assoc($getter)){
        $id=$row['id'];
        $title=$row['name'];
        $image=$row['image'];
        $language=$row['language'];

        $sql1 = "select * from language where id=$language";
        $getter1 = mysqli_query($connection,$sql1);
        while ($r=mysqli_fetch_assoc($getter1)){
            $language=$r['language'];
        }

        $crypted_id_for_edit = crypt($id, '$2a$09$iusesomecrazystring111$');
        ?>
        <td><input class='checkbox' type='checkbox' name='checkBoxArray[]' value='<?php echo $id ?>'>
            <?php
            echo "<td>{$id}</td>";
            echo "<td>{$title}</td>";
            echo "<td><img src='./artist_image/$image' height='60' width='70'></td>";
            echo "<td>{$language}</td>";
            echo "<td><a href='../edit_artist.php?update=$crypted_id_for_edit' class='active' ui-toggle-class=''><i class='fa fa-edit' title='Edit'></i></a><br><br><a href='manipulate.php?deletes=$id' class='active' ui-toggle-class=''><i class='lnr lnr-trash' title='Delete'></i></a></td>";
            echo "</tr>";
            }
            ?>
        </tbody>
    </table>
    <?php include "includes/single_page_footer.php"?>

