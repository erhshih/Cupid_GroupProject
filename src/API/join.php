<?php
    // include("../../Lib/Util.php");   
    
        function getPDO(){



            include("./cards_nation.php");

        return $pdo;
        
    }


        //---------------------------------------------------
    
    

    //建立SQL
    $sql = "INSERT INTO member(member_name, member_email, member_password, member_birthday, member_account, member_type, member_phone, member_address,member_accountstatus,member_accountreason,member_description,member_accountcreatedate)
     VALUES (?, ?, ?, ?, ?, 1, ?, ?, ?, ?, ?, ?);
     INSERT INTO `cardhistory` (`FKmember_ID`,cardhistory_templateID) 
     VALUES (2,?);";

    //執行
    $statement = getPDO()->prepare($sql);

    //給值
    $statement->bindValue(1, $_POST["new_username"]);
    $statement->bindValue(2, $_POST["mail"]);
    $statement->bindValue(3, $_POST["password1"]);
    $statement->bindValue(4, $_POST["date"]);
    $statement->bindValue(5, $_POST["account"]);
    $statement->bindValue(6, $_POST["phone"]);
    $statement->bindValue(7, '');
    $statement->bindValue(8, '');
    $statement->bindValue(9, '');
    $statement->bindValue(10, '');
    $statement->bindValue(11, date("Y-m-d H:i:s"));
    $statement->bindValue(12, $_POST["account"]);
    $statement->execute();

    echo "<script>alert('成功加入會員！請重新登入。'); location.href = '../login.html';</script>"; 
?>,