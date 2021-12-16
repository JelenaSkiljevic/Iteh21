<?php
   $proizvodi = array(
    array(
        'id'=>1,
        'naziv'=>"Laptop",
        'cena'=>800
    ),
    array(
        'id'=>2,
        'naziv'=>"Miš",
        'cena'=>20
    ),
    array(
        'id'=>3,
        'naziv'=>"Slušalice",
        'cena'=>80
    )
    );


    
    session_start();
    if(!isset($_SESSION["korpa"])){
        $_SESSION["korpa"]=array();
        
    }

    if(isset($_POST["submit"]) && $_POST["submit"]=="Kupi"){
        $_SESSION["korpa"][]=$_POST["id"];
        header("Location: .");
        exit();
        
    }

    if(isset($_GET["vidi_korpu"])){
        $korpa= array();
        $ukupno = 0;
        foreach($_SESSION["korpa"] as $id){
            foreach($proizvodi as $pr){
                if($pr["id"]==$id){
                    $korpa[]=$pr;
                    $ukupno+=$pr["cena"];
                    break;
                }
            }
        }
        include("korpa.php");
        #exit();
    }

    if(isset($_POST["submit"]) && $_POST["submit"]=="Isprazni"){
        unset($_SESSION["korpa"]);
        header("Location: ?vidi_korpu");
        exit();
        
    }



    include("katalog1.php")

?>