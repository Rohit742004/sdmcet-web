<?php
    $filename = file_get_contents(books.json);
    $decodeObj = json_decode($filename, true);
    foreach(($decodeObj) as $book){
        echo $books['title']."<br/>".$books['Author']."<br/>".$books['price'];
    }
?>
