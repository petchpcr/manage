<?php
    session_start();
    require '../connect/connect_db.php';

    function LoadBuilding($conn){
        $count = 0;
        $boolean = true;

        $Sql = "SELECT BuildingID,BuildingName,Picture
                FROM tb_building";

        $meQuery = mysqli_query($conn, $Sql);
        while ($Result = mysqli_fetch_assoc($meQuery)) {
            $return[$count]['BuildingID'] = $Result['BuildingID'];
            $return[$count]['BuildingName'] = $Result['BuildingName'];
            $return[$count]['Picture'] = $Result['Picture'];
            $count++;
            $boolean = true;
        }
        $return['count'] = $count;

        if ($boolean) {
            $return['status'] = "success";
            $return['form'] = "LoadBuilding";
            echo json_encode($return);
            mysqli_close($conn);
            die;
        } else {
            $return['status'] = "failed";
            $return['form'] = "LoadBuilding";
            echo json_encode($return);
            mysqli_close($conn);
            die;
        }
    }

    function AddBuilding($conn, $DATA){
        $Name = $DATA["Name"];
        $Detail = $DATA["Detail"];

        $Sql = "SELECT	CONCAT('B',LPAD(MAX(CONVERT(SUBSTRING(BuildingID,-2),UNSIGNED INTEGER))+1,2,0)) AS BuildingID
                FROM tb_building";

        $meQuery = mysqli_query($conn, $Sql);
        while ($Result = mysqli_fetch_assoc($meQuery)) {
            $NewID = $Result['BuildingID'];
        }
        $return['NewID 1'] = $NewID;

        if ($NewID == null) {
            $NewID = "B01";
        }
        $return['NewID 2'] = $NewID;

        $Sql = "INSERT INTO	tb_building(BuildingID,BuildingName,Detail) VALUES ('$NewID','$Name','$Detail')";
        $return['Sql'] = $Sql;

        if (mysqli_query($conn,$Sql)) {
            $return['status'] = "success";
            $return['form'] = "AddBuilding";
            echo json_encode($return);
            mysqli_close($conn);
            die;
        } else {
            $return['status'] = "failed";
            $return['form'] = "AddBuilding";
            echo json_encode($return);
            mysqli_close($conn);
            die;
        }
    }

    if(isset($_POST['DATA'])){
        $data = $_POST['DATA'];
        $DATA = json_decode(str_replace('\"', '"', $data), true);

        if ($DATA['STATUS'] == 'LoadBuilding') {
            LoadBuilding($conn, $DATA);
        }
        else if ($DATA['STATUS'] == 'AddBuilding') {
            AddBuilding($conn, $DATA);
        }
        else if ($DATA['STATUS'] == 'logout') {
            logout($conn, $DATA);
        }
    }else {
        $return['status'] = "error";
        echo json_encode($return);
        mysqli_close($conn);
        die;
    }
?>