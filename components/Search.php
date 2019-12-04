<?php
$db = mysqli_connect("localhost", "root", "", "db_coffee","3308") or die("Нет соединения с БД");
mysqli_set_charset($db, "utf8") or die("Не установлена кодировка соединения");
function search_autocomplete(){
    global $db;
    $search = trim(mysqli_real_escape_string($db, $_GET['term']));
    $query = "SELECT name FROM product WHERE name LIKE '%{$search}%' LIMIT 10";
    $res = mysqli_query($db, $query);
    $result_search = array();
    while($row = mysqli_fetch_assoc($res)){
    $result_search[] = array('label' => $row['name']);
    }
    return $result_search;
   }
    
   if(!empty($_GET['term'])){
    $search = search_autocomplete();
    exit( json_encode($search));
   }