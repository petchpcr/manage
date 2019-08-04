<?php
    session_start();
    require '../connect/connect_db.php';

    function LoadDorm($conn, $DATA){
        $DormID = $DATA["DormID"];
        $boolean = false;

        $Sql = "SELECT DormID,Name,Detail,Picture,Date
                FROM tb_dorm
                WHERE DormID = '$DormID'";
        $return['Sql'] = $Sql;

        $meQuery = mysqli_query($conn, $Sql);
        while ($Result = mysqli_fetch_assoc($meQuery)) {
            $return['DormID'] = $Result['DormID'];
            $return['Name'] = $Result['Name'];
            $return['Detail'] = $Result['Detail'];
            $return['Picture'] = $Result['Picture'];
            $return['Date'] = $Result['Date'];
            $boolean = true;
        }

        if ($boolean) {
            $return['status'] = "success";
            $return['form'] = "LoadDorm";
            echo json_encode($return);
            mysqli_close($conn);
            die;
        } else {
            $return['DormID'] = $DormID;
            $return['status'] = "failed";
            $return['form'] = "LoadDorm";
            echo json_encode($return);
            mysqli_close($conn);
            die;
        }
    }

    function LoadFloor($conn, $DATA){
        $DormID = $DATA["DormID"];
        $count = 0;
        
        $Sql = "SELECT SUBSTRING(RoomID,5,1) AS Floor
                FROM tb_dorm_room
                WHERE DormID = '$DormID'
                GROUP BY Floor
                ORDER BY Floor ASC";

        $meQuery = mysqli_query($conn, $Sql);
        while ($Result = mysqli_fetch_assoc($meQuery)) {
            $return[$count]['Floor'] = $Result['Floor'];
            $count++;
        }
        $return['count'] = $count;

        if ($count > 0) {
            $return['status'] = "success";
            $return['form'] = "LoadFloor";
            echo json_encode($return);
            mysqli_close($conn);
            die;
        } else {
            $return['status'] = "failed";
            $return['form'] = "LoadFloor";
            echo json_encode($return);
            mysqli_close($conn);
            die;
        }
    }
    
    function LoadRoom($conn, $DATA){
        $DormID = $DATA["DormID"];
        $return['DormID'] = $DormID;
        $count = 0;
        $cnt_Floor = 0;

        $Sql = "SELECT RoomID,Detail,Picture,Status,Date
                FROM tb_dorm_room
                WHERE DormID = '$DormID'";
        $return['Sql'] = $Sql;

        $meQuery = mysqli_query($conn, $Sql);
        while ($Result = mysqli_fetch_assoc($meQuery)) {
            $return[$count]['RoomID'] = $Result['RoomID'];
            $return[$count]['Detail'] = $Result['Detail'];
            $return[$count]['Picture'] = $Result['Picture'];
            $return[$count]['Status'] = $Result['Status'];
            $return[$count]['Date'] = $Result['Date'];
            $count++;
        }
        $return['count'] = $count;

        if ($count > 0) {
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

    function EditDorm($conn, $DATA){
        $DormID = $DATA["DormID"];
        $Name = $DATA["Name"];
        $Detail = $DATA["Detail"];
        $boolean = false;
        
        if(isset($_FILES['file'])){
            $return['FileName'] = $_FILES['file']['name'];
            $Sql = "SELECT Picture FROM tb_dorm WHERE DormID = '$DormID'";

            $meQuery = mysqli_query($conn, $Sql);
            while ($Result = mysqli_fetch_assoc($meQuery)) {
                $Picture = $Result['Picture'];
            }
            $DeleteFile = unlink("../img/dorm/".$Picture);

            if ($DeleteFile) {
                $LastName = explode('.',$_FILES['file']['name']);
                $FileName = $DormID.'.'.$LastName[1];
                copy($_FILES['file']['tmp_name'],'../img/dorm/'.$FileName);

                $Sql = "UPDATE tb_dorm SET Name = '$Name',Detail = '$Detail' WHERE DormID = '$DormID'";
                $return['Sql'] = $Sql;
                mysqli_query($conn,$Sql);
                $boolean = true;
            }
        } else {
            $Sql = "UPDATE tb_dorm SET Name = '$Name',Detail = '$Detail' WHERE DormID = '$DormID'";
            $return['Sql'] = $Sql;
            mysqli_query($conn,$Sql);
            $boolean = true;
        }
        
        if ($boolean) {
            $return['status'] = "success";
            $return['form'] = "EditDorm";
            echo json_encode($return);
            mysqli_close($conn);
            die;
        } else {
            $return['status'] = "failed";
            $return['form'] = "EditDorm";
            echo json_encode($return);
            mysqli_close($conn);
            die;
        }
    }

    function DeleteDorm($conn, $DATA){
        $DormID = $DATA["DormID"];

        $Sql = "SELECT Picture FROM tb_dorm WHERE DormID = '$DormID'";
        $return['Sql 1'] = $Sql;

        $meQuery = mysqli_query($conn, $Sql);
        while ($Result = mysqli_fetch_assoc($meQuery)) {
            $Picture = $Result['Picture'];
        }
        $DeleteFile = unlink("../img/dorm/".$Picture);

        if ($DeleteFile) {
            $Sql = "DELETE FROM tb_dorm WHERE DormID = '$DormID'";
            $return['Sql 2'] = $Sql;
            mysqli_query($conn,$Sql);

            $return['status'] = "success";
            $return['form'] = "DeleteDorm";
            echo json_encode($return);
            mysqli_close($conn);
            die;
        } else {
            $return['DormID'] = $DormID;
            $return['status'] = "failed";
            $return['form'] = "DeleteDorm";
            echo json_encode($return);
            mysqli_close($conn);
            die;
        }
    }

    function AddRoom($conn, $DATA){
        $DormID = $DATA["DormID"];
        $RoomID = $DATA["RoomID"];
        $Detail = $DATA["Detail"];
        $RealID = $DormID."-".$RoomID;

        $LastName = explode('.',$_FILES['file']['name']);
        $FileName = $RealID.'.'.$LastName[1];
        copy($_FILES['file']['tmp_name'],'../img/dorm/room/'.$FileName);

        $Sql = "INSERT INTO	tb_dorm_room(RoomID,DormID,Detail,Picture,Status,Date) VALUES ('$RealID','$DormID','$Detail','$FileName',0,NOW())";
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
                FROM tb_dorm_room
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
        $DormID = $DATA["DormID"];
        $RealID = $DATA["RealID"];
        $RoomID = $DATA["RoomID"];
        $Name = $DATA["Name"];
        $Type = $DATA["Type"];
        $Detail = $DATA["Detail"];
        $NewID = $DormID."-".$RoomID;

        $Sql = "UPDATE tb_dorm_room 
                
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

        $Sql = "DELETE FROM tb_dorm_room WHERE RoomID = '$RoomID'";
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

        if ($DATA['STATUS'] == 'LoadDorm') {
            LoadDorm($conn, $DATA);
        }
        else if ($DATA['STATUS'] == 'LoadFloor') {
            LoadFloor($conn, $DATA);
        }
        else if ($DATA['STATUS'] == 'LoadRoom') {
            LoadRoom($conn, $DATA);
        }
        else if ($DATA['STATUS'] == 'EditDorm') {
            EditDorm($conn, $DATA);
        }
        else if ($DATA['STATUS'] == 'DeleteDorm') {
            DeleteDorm($conn, $DATA);
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