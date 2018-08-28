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
            <h3 class="tittle">ALL Event <span class="new">Admin's Control Panel</span></h3>
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
        <th>Date</th>
        <th>Description</th>
        <th>Image</th>
        </thead>
        <tbody>
        <?php
        $sql = "select * from event";
        $getter = mysqli_query($connection, $sql);
        while ($row=mysqli_fetch_assoc($getter)){
        $id=$row['id'];
        $title=$row['name'];
        $date=$row['date'];
        $description=$row['description'];
        $image=$row['image'];

        ?>
        <td><input class='checkbox' type='checkbox' name='checkBoxArray[]' value='<?php echo $id ?>'>
            <?php
            echo "<td>{$id}</td>";
            echo "<td>{$title}</td>";
            echo "<td>{$date}</td>";
            echo "<td>{$description}</td>";
            echo "<td><img src='album_image/$image' height='60' width='70'></td>";
            echo "<td><a href='../edit_event.php?update=$id' class='active' ui-toggle-class=''><i class='fa fa-edit' title='Edit'></i></a><br><br><a href='manipulate.php?deletesNK=$id' class='active' ui-toggle-class=''><i class='lnr lnr-trash' title='Delete'></i></a></td>";
            echo "</tr>";
            }
            ?>
        </tbody>
    </table>
    <?php include "includes/single_page_footer.php"?>

