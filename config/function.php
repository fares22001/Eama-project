<?php
session_start();
require 'dbcon.php';

function validate($inputdata)
{
    global $con;
    $validateddata = mysqli_real_escape_string($con, $inputdata);
    return trim($validateddata);
}

function redirect($url, $status)
{
    $_SESSION['status'] = $status;
    header('location:' . $url);
    exit(0);
}

function alertmessage()
{
    if (isset($_SESSION['status'])) {
        echo '<div class="alert alert-sccuess">
        <h4>' . $_SESSION['status'] . '
        </h4></div>';
        unset($_SESSION['status']);
    }
}

function getall($tablename)
{
    global $con;
    $table = validate($tablename);
    $query = "select * from $table";
    $result = mysqli_query($con, $query);
    return $result;
}

function checkparamid($paramtype)
{
    if (isset($_GET[$paramtype])) {
        if ($_GET[$paramtype] != NULL) {
            return $_GET[$paramtype];
        } else {
            return 'no id found';
        }
    } else {
        return 'no id givin';
    }
}

function getbyid($tablename, $id)
{
    global $con;
    $table = validate($tablename);
    $id = validate($id);
    $query = "SELECT * FROM $table WHERE id='$id' LIMIT 1";
    $result = mysqli_query($con, $query);
    if ($result) {
        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
            $response = [
                'status' => 200,
                'message' => 'successed',
                'data' => $row
            ];
            return $response;
        }
    } else {
        $response = [
            'status' => 500,
            'message' => 'something went wrong '
        ];
        return $response;
    }
}

function deleteQuery($tablename, $id)
{
    global $con;
    $table = validate($tablename);
    $id = validate($id);


    $query = "delete from $table where id='$id' limit 1 ";
    $result = mysqli_query($con, $query);
    return $result;
}
