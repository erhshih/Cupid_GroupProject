<?php
    
    include("./cards_nation.php");
    // $connect = new PDO("mysql:host = localhost; dbname = Cupid_db", "root", "password");

    $received_data = json_decode(file_get_contents("php://input")
      );

    $data = array();

    if($received_data -> action == "fetchall"){
      $sql = "SELECT * FROM questionnaire";
      
      $statement = $pdo -> prepare($sql);
      $statement -> execute();

      while($row = $statement -> fetch(PDO::FETCH_ASSOC)){
            $data[] = $row;
            }
      }
      echo json_encode($data);

?>