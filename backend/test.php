<?php
 header("Access-Control-Allow-Origin: *");
$test = array(array(
                                "name"=> "joy",
                                "lastName" => ""
                            ),
                            array(
                                "name"=> "tim",
                                "lastName" => ""
                            )
    
            );

echo json_encode($test);

?>