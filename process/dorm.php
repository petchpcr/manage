<?php
    session_start();
    require '../connect/connect_db.php';

    function LoadDorm($conn){
        $count = 0;
        $boolean = false;

        $Sql = "SELECT DormID,Name,Picture
                FROM tb_dorm";
        $return['Sql'] = $Sql;

        $meQuery = mysqli_query($conn, $Sql);
        while ($Result = mysqli_fetch_assoc($meQuery)) {
            $return[$count]['DormID'] = $Result['DormID'];
            $return[$count]['Name'] = $Result['Name'];
            $return[$count]['Picture'] = $Result['Picture'];
            $count++;
            $boolean = true;
        }
        $return['count'] = $count;

        if ($boolean) {
            $return['status'] = "success";
            $return['form'] = "LoadDorm";
            echo json_encode($return);
            mysqli_close($conn);
            die;
        } else {
            $return['status'] = "failed";
            $return['form'] = "LoadDorm";
            echo json_encode($return);
            mysqli_close($conn);
            die;
        }
    }

    function AddDorm($conn, $DATA){
        $Name = $DATA["Name"];
        $Detail = $DATA["Detail"];
        $Sql = "SELECT	CONCAT('D',LPAD(MAX(CONVERT(SUBSTRING(DormID,-2),UNSIGNED INTEGER))+1,2,0)) AS DormID
                FROM tb_dorm";

        $meQuery = mysqli_query($conn, $Sql);
        while ($Result = mysqli_fetch_assoc($meQuery)) {
            $NewID = $Result['DormID'];
        }
        $return['OldID'] = $NewID;

        if ($NewID == null) {
            $NewID = "D01";
        }
        $return['NewID'] = $NewID;

        $LastName = explode('.',$_FILES['file']['name']);
        $FileName = $NewID.'.'.$LastName[1];
        copy($_FILES['file']['tmp_name'],'../img/dorm/'.$FileName);

        $Sql = "INSERT INTO	tb_dorm(DormID,Name,Detail,Picture,Date) VALUES ('$NewID','$Name','$Detail','$FileName',NOW())";
        $return['Sql'] = $Sql;

        if (mysqli_query($conn,$Sql)) {
            $return['status'] = "success";
            $return['form'] = "AddDorm";
            echo json_encode($return);
            mysqli_close($conn);
            die;
        } else {
            $return['Name'] = $Name;
            $return['status'] = "failed";
            $return['form'] = "AddDorm";
            echo json_encode($return);
            mysqli_close($conn);
            die;
        }
    }

    if(isset($_POST['DATA'])){
        $data = $_POST['DATA'];
        $DATA = json_decode(str_replace('\"', '"', $data), true);

        if ($DATA['STATUS'] == 'LoadDorm') {
            LoadDorm($conn, $DATA);
        }
        else if ($DATA['STATUS'] == 'AddDorm') {
            AddDorm($conn, $DATA);
        }
        else if ($DATA['STATUS'] == 'Logout') {
            Logout($conn, $DATA);
        }  
    }
    
    else {
        $return['status'] = "error";
        echo json_encode($return);
        mysqli_close($conn);
        die;
    }
?>