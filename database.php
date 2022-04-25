<?php

    $isEmpty = FALSE;

    function connect(){
        $db = new mysqli("localhost", "root","", "Angelo");
        if($db->connect_error){
            die("<div class='conn-fail'>Error:</div> " .$db->connect_error);
        }
        return $db;
    }

    function createDB(){
        $conn= connect();
        $query="CREATE DATABASE IF NOT EXISTS Angelo";
        if($conn->query($query)===TRUE){
            echo "<div class='conn-good'>db created!</div>";
        }
        else{
            echo "<div class='conn-fail'>Err!</div>";
        }
    }

    function createUserTable(){
        $conn = connect();
        $query = "CREATE TABLE IF NOT EXISTS Users(
            userID INT(6) AUTO_INCREMENT PRIMARY KEY,
            firstname varchar(200) NOT NULL,
            lastname varchar(200) NOT NULL,
            email varchar(200) NOT NULL,
            dob date NOT NULL,
            gender varchar(200) NOT NULL
            )";

        if($conn->query($query)===TRUE){
            echo"<div class='conn-good'>User table created!</div>";
        }   
        else{
            echo "<div='<conn-fail>Error!</div>";
        }
    }

    function createDocumentTable(){
        $conn = connect();
        $query = "CREATE TABLE IF NOT EXISTS Certificates(
            cID INT(6) AUTO_INCREMENT PRIMARY KEY,
            about VARCHAR(200) NOT NULL,
            img VARCHAR(200) NOT NULL,

            )";
        if($conn->query($query)===TRUE){
            echo "<div class='conn-good'>Docs table created!</div>";
        }
        else{
            echo"<div class='conn-fail'>Error!</div>";
        }
    }

    function getData($query){
        $conn = connect();
        if($result= $conn->query($query)){
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    $rows[] = $row;
                }
                return $rows;
            }
            else{
                $GLOBALS['isEmpty'] = TRUE;
                return FALSE;
            }
        }
        else{
            return "<div class='conn-fail'>Error:</div> " . $conn->error;
        }
    }

    function setData($query){
        $conn = connect();
        if($conn->query($query)){
            return TRUE;
        }
        else{
            return "<div class='conn-fail'>Error:</div> " . $conn->error;
        }
    }

    function deleteData($query){
        $conn = connect();
        if($conn->query($query)){
            return TRUE;
        }
        else{
            return "<div class='conn-fail'>Error:</div> " . $conn->error;
        }
    }

?>