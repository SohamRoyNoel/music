<?php ob_start(); ?>
<?php include "../db.php"?>
<?php include "../function.php"?>
<?php session_start(); ?>

<?php
// featured

if (isset($_GET['feature'])){
    $holder = $_GET['feature'];

    $q = "update music set feature_tag = 'featured' where id=$holder";
    $pass = mysqli_query($connection, $q);
    header("Location: show_all_song.php");

}


if (isset($_GET['general'])){
    $holder = $_GET['general'];

    $q = "update music set feature_tag = 'general' where id=$holder";
    $pass = mysqli_query($connection, $q);
    header("Location: show_all_song.php");

}

//delete music
if (isset($_GET['delete'])){
    $holder = $_GET['delete'];

    $q = "delete from music where id=$holder";
    $pass = mysqli_query($connection, $q);
    header("Location: show_all_song.php");

}

//delete artist

if (isset($_GET['deletes'])){
    $holder = $_GET['deletes'];

    $q = "delete from artist where id=$holder";
    $pass = mysqli_query($connection, $q);
    header("Location: show_all_artist.php");

}

// delete album

if (isset($_GET['deletek'])){
    $holder = $_GET['deletek'];

    $q = "delete from album where id=$holder";
    $pass = mysqli_query($connection, $q);
    header("Location: show_all_album.php");

}

//delete event deletesNK
if (isset($_GET['deletesNK'])){
    $holder = $_GET['deletesNK'];

    $q = "delete from event where id=$holder";
    $pass = mysqli_query($connection, $q);
    header("Location: show_all_events.php");

}