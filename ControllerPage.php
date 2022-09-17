<?php
    $mod = $_REQUEST['page']; 
    if($mod == "home"){
        include_once "Page.Home.php";
    }
    elseif($mod == "hubungi"){
        include_once "Page.Hubungi.php";
    }
    else{
        echo "<div style='box-shadow: 0px 20px 5px 0px rgba(0,0,0,0.5); -webkit-box-shadow: 0px 10px 5px 0px rgba(0,0,0,0.5); -moz-box-shadow: 0px 20px 5px 0px rgba(0,0,0,0.5); text-align: center; width: 30% !important; background-color: #F9F9F9; padding: 20px; border: 1px solid #DDD; margin-top: 10%; margin-left: 35%; border-radius: 5px; font-size: 14pt;'>
                <i class='fa fa-warning' style='color: red;'></i> 404: Page (<b>". $mod ."</b>) not found<hr />
                <button class='btn btn-sm btn-outline-success' onClick=\"getPage('home', '')\"><i class='la la-home'></i> Kembali Ke Home</button>
              </div>";
    }
?>
