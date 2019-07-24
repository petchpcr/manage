<?php
    session_start();
    require '../connect/connect_db.php';

    function LoadBuilding($conn, $DATA){
        $BuildID = $DATA["BuildID"];
        $return['BuildID'] = $BuildID;
        $boolean = false;

        $Sql = "SELECT BuildingID,BuildingName,Detail,Picture,Date
                FROM tb_building
                WHERE BuildingID = '$BuildID'";

        $meQuery = mysqli_query($conn, $Sql);
        while ($Result = mysqli_fetch_assoc($meQuery)) {
            $return['BuildingID'] = $Result['BuildingID'];
            $return['BuildingName'] = $Result['BuildingName'];
            $return['Detail'] = $Result['Detail'];
            $return['Picture'] = $Result['Picture'];
            $return['Date'] = $Result['Date'];
            $boolean = true;
        }

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

    if(isset($_POST['DATA'])){
        $data = $_POST['DATA'];
        $DATA = json_decode(str_replace('\"', '"', $data), true);

        if ($DATA['STATUS'] == 'LoadBuilding') {
            LoadBuilding($conn, $DATA);
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