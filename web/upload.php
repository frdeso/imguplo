<?php
    $target = getcwd();
    $target = $target."../upload/";
    $newFileName = substr(md5(microtime()),rand(0,26),5);
    $newFileName = $newFileName . ".jpg";
    $target = $target . basename( $newFileName) ;
    echo $target.PHP_EOL;

    if(move_uploaded_file($_FILES['uploaded']['tmp_name'], $target))
    {
            echo $target;
            echo "Success".PHP_EOL;
    }
    else {
            echo "Failure".PHP_EOL;
    }
?> 
