<?php
    session_start();
    require '../connect/connect_db.php';

    function LoadBuilding($conn, $DATA){
        $BuildID = $DATA["BuildID"];
        $boolean = false;

        $Sql = "SELECT BuildingID,Name,Detail,Picture,Date
                FROM tb_building
                WHERE BuildingID = '$BuildID'";
        $return['Sql 1'] = $Sql;

        $meQuery = mysqli_query($conn, $Sql);
        while ($Result = mysqli_fetch_assoc($meQuery)) {
            $return['BuildingID'] = $Result['BuildingID'];
            $return['Name'] = $Result['Name'];
            $return['Detail'] = $Result['Detail'];
            $return['Picture'] = $Result['Picture'];
            $return['Date'] = $Result['Date'];
            $boolean = true;
        }

        if ($boolean) {
            $Sql = "SELECT BuildingID,Name,Detail,Picture,Date
                FROM tb_building
                WHERE BuildingID = '$BuildID'";
            $return['Sql 2'] = $Sql;

            $return['status'] = "success";
            $return['form'] = "LoadBuilding";
            echo json_encode($return);
            mysqli_close($conn);
            die;
        } else {
            $return['BuildID'] = $BuildID;
            $return['status'] = "failed";
            $return['form'] = "LoadBuilding";
            echo json_encode($return);
            mysqli_close($conn);
            die;
        }
    }

    function LoadRoom($conn, $DATA){
        $BuildID = $DATA["BuildID"];
        $count = 0;
        $boolean = false;

        $Sql = "SELECT RoomID,Name,Type,Date
                FROM tb_building_room
                WHERE BuildingID = '$BuildID'";
        $return['Sql'] = $Sql;

        $meQuery = mysqli_query($conn, $Sql);
        while ($Result = mysqli_fetch_assoc($meQuery)) {
            $return[$count]['RoomID'] = $Result['RoomID'];
            $return[$count]['Name'] = $Result['Name'];
            $return[$count]['Type'] = $Result['Type'];
            $return[$count]['Date'] = $Result['Date'];
            $count++;
            $boolean = true;
        }
        $return['count'] = $count;

        if ($boolean) {
            $return['status'] = "success";
            $return['form'] = "LoadRoom";
            echo json_encode($return);
            mysqli_close($conn);
            die;
        } else {
            $return['status'] = "failed";
            $return['form'] = "LoadRoom";
            echo json_encode($return);
            mysqli_close($conn);
            die;
        }
    }

    function EditBuild($conn, $DATA){
        $BuildID = $DATA["BuildID"];
        $Name = $DATA["Name"];
        $Detail = $DATA["Detail"];

        $Sql = "UPDATE tb_building 
                
                SET Name = '$Name',
                    Detail = '$Detail' 
                
                WHERE BuildingID = '$BuildID'";
        $return['Sql'] = $Sql;

        if (mysqli_query($conn,$Sql)) {
            $return['status'] = "success";
            $return['form'] = "EditBuild";
            echo json_encode($return);
            mysqli_close($conn);
            die;
        } else {
            $return['status'] = "failed";
            $return['form'] = "EditBuild";
            echo json_encode($return);
            mysqli_close($conn);
            die;
        }
    }

    function DeleteBuild($conn, $DATA){
        $BuildID = $DATA["BuildID"];

        $Sql = "SELECT Picture FROM tb_building WHERE BuildingID = '$BuildID'";
        $return['Sql 1'] = $Sql;

        $meQuery = mysqli_query($conn, $Sql);
        while ($Result = mysqli_fetch_assoc($meQuery)) {
            $Picture = $Result['Picture'];
        }
        $DeleteFile = unlink("../img/building/".$Picture);

        if ($DeleteFile) {
            $Sql = "DELETE FROM tb_building WHERE BuildingID = '$BuildID'";
            $return['Sql 2'] = $Sql;
            mysqli_query($conn,$Sql);

            $return['status'] = "success";
            $return['form'] = "DeleteBuild";
            echo json_encode($return);
            mysqli_close($conn);
            die;
        } else {
            $return['BuildID'] = $BuildID;
            $return['status'] = "failed";
            $return['form'] = "DeleteBuild";
            echo json_encode($return);
            mysqli_close($conn);
            die;
        }
    }

    function AddRoom($conn, $DATA){
        $BuildID = $DATA["BuildID"];
        $RoomID = $DATA["RoomID"];
        $Name = $DATA["Name"];
        $Type = $DATA["Type"];
        $Detail = $DATA["Detail"];
        $RealID = $BuildID."-".$RoomID;

        $Sql = "INSERT INTO	tb_building_room(RoomID,Name,Type,BuildingID,Detail,Date) VALUES ('$RealID','$Name','$Type','$BuildID','$Detail',NOW())";
        $return['Sql'] = $Sql;

        if (mysqli_query($conn,$Sql)) {
            $return['status'] = "success";
            $return['form'] = "AddRoom";
            echo json_encode($return);
            mysqli_close($conn);
            die;
        } else {
            $return['RoomID'] = $RoomID;
            $return['status'] = "failed";
            $return['form'] = "AddRoom";
            echo json_encode($return);
            mysqli_close($conn);
            die;
        }
    }

    function ShowEditRoom($conn, $DATA){
        $RoomID = $DATA["RoomID"];
        $return['RoomID'] = $RoomID;
        $boolean = false;
        
        $Sql = "SELECT Name,Type,Detail 
                FROM tb_building_room
                WHERE RoomID = '$RoomID'";
        $return['Sql'] = $Sql;

        $meQuery = mysqli_query($conn, $Sql);
        while ($Result = mysqli_fetch_assoc($meQuery)) {
            $return['Name'] = $Result['Name'];
            $return['Type'] = $Result['Type'];
            $return['Detail'] = $Result['Detail'];
            $boolean = true;
        }

        if ($boolean) {
            $return['status'] = "success";
            $return['form'] = "ShowEditRoom";
            echo json_encode($return);
            mysqli_close($conn);
            die;
        } else {
            $return['status'] = "failed";
            $return['form'] = "ShowEditRoom";
            echo json_encode($return);
            mysqli_close($conn);
            die;
        }
    }

    function EditRoom($conn, $DATA){
        $BuildID = $DATA["BuildID"];
        $RealID = $DATA["RealID"];
        $RoomID = $DATA["RoomID"];
        $Name = $DATA["Name"];
        $Type = $DATA["Type"];
        $Detail = $DATA["Detail"];
        $NewID = $BuildID."-".$RoomID;

        $Sql = "UPDATE tb_building_room 
                
                SET RoomID = '$NewID',
                    Name = '$Name',
                    Type = '$Type',
                    Detail = '$Detail' 
                
                WHERE RoomID = '$RealID'";
        $return['Sql'] = $Sql;

        if (mysqli_query($conn,$Sql)) {
            $return['status'] = "success";
            $return['form'] = "EditRoom";
            echo json_encode($return);
            mysqli_close($conn);
            die;
        } else {
            $return['RoomID'] = $RoomID;
            $return['status'] = "failed";
            $return['form'] = "EditRoom";
            echo json_encode($return);
            mysqli_close($conn);
            die;
        }

    }

    function DeleteRoom($conn, $DATA){
        $RoomID = $DATA["RoomID"];
        $SubID = $DATA["SubID"];

        $Sql = "DELETE FROM tb_building_room WHERE RoomID = '$RoomID'";
        $return['Sql'] = $Sql;

        if (mysqli_query($conn,$Sql)) {
            $return['status'] = "success";
            $return['form'] = "DeleteRoom";
            echo json_encode($return);
            mysqli_close($conn);
            die;
        } else {
            $return['SubID'] = $SubID;
            $return['status'] = "failed";
            $return['form'] = "DeleteRoom";
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
        else if ($DATA['STATUS'] == 'LoadRoom') {
            LoadRoom($conn, $DATA);
        }
        else if ($DATA['STATUS'] == 'EditBuild') {
            EditBuild($conn, $DATA);
        }
        else if ($DATA['STATUS'] == 'DeleteBuild') {
            DeleteBuild($conn, $DATA);
        }
        else if ($DATA['STATUS'] == 'AddRoom') {
            AddRoom($conn, $DATA);
        }
        else if ($DATA['STATUS'] == 'ShowEditRoom') {
            ShowEditRoom($conn, $DATA);
        }
        else if ($DATA['STATUS'] == 'EditRoom') {
            EditRoom($conn, $DATA);
        }
        else if ($DATA['STATUS'] == 'DeleteRoom') {
            DeleteRoom($conn, $DATA);
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