<?php
    session_start();
    require '../connect/connect_db.php';

    function LoadBuilding($conn){
        $count = 0;
        $boolean = false;

        $Sql = "SELECT BuildingID,Name,Picture
                FROM tb_building";
        $return['Sql'] = $Sql;

        $meQuery = mysqli_query($conn, $Sql);
        while ($Result = mysqli_fetch_assoc($meQuery)) {
            $return[$count]['BuildingID'] = $Result['BuildingID'];
            $return[$count]['Name'] = $Result['Name'];
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
        $return['OldID'] = $NewID;

        if ($NewID == null) {
            $NewID = "B01";
        }
        $return['NewID'] = $NewID;

        $Sql = "INSERT INTO	tb_building(BuildingID,Name,Detail,Date) VALUES ('$NewID','$Name','$Detail',NOW())";
        $return['Sql'] = $Sql;

        if (mysqli_query($conn,$Sql)) {
            $return['status'] = "success";
            $return['form'] = "AddBuilding";
            echo json_encode($return);
            mysqli_close($conn);
            die;
        } else {
            $return['Name'] = $Name;
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
        else if ($DATA['STATUS'] == 'Logout') {
            Logout($conn, $DATA);
        }
    }else {
        $return['status'] = "error";
        echo json_encode($return);
        mysqli_close($conn);
        die;
    }

?>