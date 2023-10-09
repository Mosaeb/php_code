<?php
function view($view, $data=[],$print=true){
    $output = "view not found";
    $filePath = "views/".$view.".php";
    if (file_exists($filePath)){
        extract($data);
        ob_start();
        include $filePath;
        $output =ob_get_clean();
    }
    if ($print){
        print $output;
    }
}