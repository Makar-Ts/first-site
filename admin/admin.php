<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/reset.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js">    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/main.js"></script>
    <script src="https://atuin.ru/demo/wow/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
</head>
<body>
    <div class="aplication">
        <?php 
            include "../config/config.php";
            mysqli_set_charset($connect, "utf8mb4");

            $base = mysqli_query($connect, "SELECT * FROM `data`");
            while($strSQL = mysqli_fetch_assoc($base)) { 
                echo '<div class="request"> <table>'
                ?>             
                    <tr><td>ID:     </td>   <td><?php echo $strSQL['ID']; ?>       </td></tr>
                    <tr><td>NAME:   </td>   <td><?php echo $strSQL['full_name']; ?></td></tr>
                    <tr><td>PHONE:  </td>   <td><?php echo $strSQL['phone']; ?>    </td></tr>
                    <tr><td>MAIL:   </td>   <td><?php echo $strSQL['mail']; ?>     </td></tr>
                    <tr><td>COMMENT:</td>   <td><?php echo $strSQL['comment']; ?>  </td></tr>
                <?php
                echo    '</table> <div class="button_body"> 
                            <button type="button" onclick="Delete(event)" class="delete_button">DELETE REQUEST</button>
                        </div>';
                echo '</div>';
            } 
        ?>
    </div>
</body>
</html>