<?php
    if($_SERVER['REQUEST_METHOD'] === "POST"):
        require_once("dictionary.php");
        $randomIndex = rand(0,count($words));
        $selectedWord = $words[$randomIndex];
        echo json_encode(["code" => $selectedWord]);
    else:
        echo "This page is not designed for browsing";
        exit;
    endif;
?>