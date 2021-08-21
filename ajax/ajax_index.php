    <?php
    $Action = $_POST['Action'];
    if ($Action == "Main") {
        $Response = "<div class='bodycontent' style='display: flex;'><div style='width:10%;padding:20px 0'><div class='activity_icon'><a href=''><img src='./assets/img/avtivity_menu.svg' style='width:100%;height:100%;'></a></div><div class='activity_icon'> <a href=''><img src='./assets/img/activity1.png' style='width:100%;height:100%;'></a></div><div class='activity_icon'> <a href=''><img src='./assets/img/activity1.png' style='width:100%;height:100%;'></a></div><div class='activity_icon'> <a href=''><img src='./assets/img/activity1.png' style='width:100%;height:100%;'></a></div><div class='activity_icon'> <a href=''><img src='./assets/img/activity1.png' style='width:100%;height:100%;'></a></div><div class='activity_icon'> <a href=''><img src='./assets/img/activity1.png' style='width:100%;height:100%;'></a></div></div><div class='bodycontent_center' style='width:80%;height:400px;'><img src='./assets/img/property_img1.jpg' style='width:100%;height:100%;'></div><div style='width:10%;'>&nbsp;</div></div>";
        echo $Response;
    } else {
        $Response = "Failed";
    }
    ?>