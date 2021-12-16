<?php
    $proizvodi = array(
        array(
            'id'=>1,
            'naziv'=>"Laptop",
            'cena'=>800
            
        ),
        array(
            'id'=>2,
            'naziv'=>"Mis",
            'cena'=>20
            
        ),
        array(
            'id'=>3,
            'naziv'=>"Slusalice",
            'cena'=>100
            
        )
        );

        session_start();
        if(!isset($_SESSION["korpa"])){
            $_SESSION["korpa"]=array();
        }
        if(isset($_POST["submit"]) && $_POST["submit"]=="Kupi"){
            $_SESSION["korpa"][]=$_POST["id"];
           
            header("Location: .");
        }
      

        include("katalog.php")
?>