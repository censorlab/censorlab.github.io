<?php

define("ERR_CODE_NONE", 0);
define("ERR_CODE_SUB_NOT_FOUND", 1);
define("ERR_CODE_SUB_ALREADY_PARTICIPATED", 2);
define("ERR_CODE_SUB_RETIRED", 3);

//check if something is being sent to this script
if ($_POST)
{        
    if ( isset ($_POST["Action"]) )
    {            
        if($_POST["Action"] === "AddSubjectData")
        {            
            $dataFileName = "Data/" . $_POST["SubjectID"] . ".csv";
            $doesFileExist = file_exists($dataFileName);
            $dataFile = fopen($dataFileName, "a");
            foreach ($_POST as $field => $val) {                
                if (strcmp($field, "Action") !== 0 && strcmp($field, "SubjectID") !== 0) {
                    if (!$doesFileExist) {                                    
                        $headers[] = $field;
                    }
                    $data[] = $val;
                }
            }               
                  
            if (!$doesFileExist) {  
                // write BOM for UTF-8
                fwrite($dataFile, hex2bin("EFBBBF"));
                // write headers
                fputcsv($dataFile, $headers);
            }

            // write data
            fputcsv($dataFile, $data);

            fclose($dataFile);
        }       
        
        echo "";
    }    
}

?>