<?php include "includes/head.php" ?>
<?php
if (isset($_GET['holderp'])){
    $hp=$_GET['holderp'];
} else {
    header("Location: ../error/error.php");
}
?>
<div class="browse container">
    <div class="tittle-head two">
        <?php
        $holds = $hp;
        $sql = "select * from category where id=$holds";
        $pass = mysqli_query($connection, $sql);
        while ($r=mysqli_fetch_assoc($pass)){
            $pam=$r['title'];
        }
        ?>
        <h3 class="tittle">All Songs <span class="new"><?php echo $pam; ?></span></h3>
        <div class="clearfix"> </div>
    </div>
    <?php
    $sql1 = "select * from music where genere=$holds";
    $pass1 = mysqli_query($connection, $sql1);
    while ($row=mysqli_fetch_assoc($pass1)) {
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
            <a href="single_page.php?id=$id"><i class="glyphicon glyphicon-play-circle"></i></a>
            <a class="sing" href="single_page.php?id=<?php echo $id ?>"><?php echo substr($title, 0, 20); ?></a>
        </div>
        <?php
    }
    ?>
</div>

<div class="review-slider">
    <div class="tittle-head">
        <h3 class="tittle">Featured Songs <span class="new"> New</span></h3>
        <div class="clearfix"> </div>
    </div>
    <ul id="flexiselDemo1">
        <?php
        if ($hp == 1 || $hp == 2 || $hp == 8 || $hp == 9 || $hp == 14 || $hp == 16 || $hp == 17){
            $lag = 1;
        } elseif ($hp == 6 || $hp == 7 || $hp == 12 || $hp == 13){
            $lag = 3;
        } elseif ($hp == 3 || $hp == 4 || $hp == 10 || $hp == 11){
            $lag = 2;
        } elseif ($hp == 5 || $hp == 7){
            $lag = 0;
        }

        $sql3 = "select * from music where language=$lag limit 15";
        $getter = mysqli_query($connection, $sql3);
        while ($g = mysqli_fetch_assoc($getter)){
            $id = $g['id'];
            $title = $g['title'];
            $singer = $g['singer'];
            $description = $g['description'];
            $length = $g['length'];
            $relese_date = $g['relese_date'];
            $likes = $g['likes'];
            $lyrics = $g['lyrics'];
            $genere = $g['genere'];
            $songs = $g['songs'];
            $thumbnail = $g['thumbnail'];
            $language = $g['language'];

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
            <li>
                <a href="single_page.php?id=<?php echo $id ?>"><img height='210' width='300' src="../thumbnail/<?php echo $thumbnail; ?>" alt=""/></a>
                <div class="slide-title"><h4><?php echo $title; ?> </div>
                <div class="date-city">
                    <h5><?php echo $relese_date; ?></h5>
                    <div class="buy-tickets">
                        <a href="single_page.php?id=<?php echo $id ?>">READ MORE</a>
                    </div>
                </div>
            </li>
        <?php } ?>
    </ul>
    <?php include "includes/show_songs_footer.php" ?>
