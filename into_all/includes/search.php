<?php include "../db.php"?>
<?php
$searchTerm = $_GET['term'];
$query = $connection->query("select * from music where title like '%".$searchTerm."%' order by id asc");

$skillData = array();
if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        $data['id'] = $row['id'];
        $data['value'] = $row['title'];
        array_push($skillData, $data);
    }
}

echo json_encode($skillData);
?>