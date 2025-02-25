<?php

// Get terminal parameter
if($argc > 1){
    // Verify if the parameter is migrate to execute the migration
    if($argv[1] == "migrate")
    {
        require "./configuration.php";
        foreach ($models as $key => $value) {
            require './src/models/'.$value.'.php';
            $model = new $value;
            $model->execute();

            echo "Migration success";
        }
    }
    if($argv[1] == "createmodel")
    {
        $file = $argv[2].'.php';

        $handle = fopen($file, "w");

        
    }
}