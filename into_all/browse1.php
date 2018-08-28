<?php include "includes/head.php" ?>
<?php
//if (!isset($_SESSION['role'])){
//    header("Location: error/error.php");
//}
//$x = $_SESSION['role'];
//if ($x != "admin"){
//    header("Location: error/error.php");
//}
//?>
<div class="browse container">
    <div class="tittle-head two">
        <h3 class="tittle">All Songs <span class="new">All Language</span></h3>
        <div class="clearfix"> </div>
    </div>
    <?php
    if (isset($_GET['para'])) {
        $xx = $_GET['para'];
        if ($xx === "all") {

            $sql1 = "select * from music";
            $pass1 = mysqli_query($connection, $sql1);
            while ($row = mysqli_fetch_assoc($pass1)) {
                $id = $row['id'];
                $title = $row['title'];
                $singer = $row['singer'];
                $description = $row['description'];
                $length = $row['length'];
                $relese_date = $row['relese_date'];
                $likes = $row['likes'];
                $lyrics = $row['lyrics'];
                $genere = $row['genere'];
                $songs = $row['songs'];
                $thumbnail = $row['thumbnail'];
                $language = $row['language'];

                $_SESSION['id'] = $id;
                $_SESSION['title'] = $title;
                $_SESSION['singer'] = $singer;
                $_SESSION['description'] = $description;
                $_SESSION['length'] = $length;
                $_SESSION['relese_date'] = $relese_date;
                $_SESSION['likes'] = $likes;
                $_SESSION['lyrics'] = $lyrics;
                $_SESSION['genere'] = $genere;
                $_SESSION['songs'] = $songs;
                $_SESSION['thumbnail'] = $thumbnail;
                $_SESSION['language'] = $language;

                ?>
                <div class="col-md-3 browse-grid">
                    <a href="single_page.php?id=<?php echo $id ?>"><img height='210' width='300' src='../thumbnail/<?php echo $thumbnail; ?>' title="allbum-name"></a>
                    <a href="single_page.php?id=<?php echo $id ?>"><i class="glyphicon glyphicon-play-circle"></i></a>
                    <a class="sing" href="single_page.php?id=<?php echo $id ?>"><?php echo substr($title, 0, 20) ?></a>
                </div>
                <?php
            }
        } else{
            header("Location: ../error/error.php");
        }
    } else{
        header("Location: ../error/error.php");
    }
    ?>
</div>
<?php include "includes/show_songs_footer.php" ?>
