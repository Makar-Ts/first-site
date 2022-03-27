<?php
    require_once "../config/config.php";

    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $mail = $_POST["mail"];
    $problem = $_POST["problem"];

    $minLenName = strlen($name);
    $minLenPhone = strlen($phone);
    $minLenMail = strlen($mail);

    if ((preg_match('/^[А-яёЁA-z ]*$/u', $name) === 1) && 
        (preg_match('/^[+]?[1-9][0-9]{0,2}[ ]?[(]?[1-9][0-9]{0,2}[)]?[ ]?\d{3}([ -_]?\d{2}){2}$/', $phone) === 1) &&
        (preg_match('/^[A-z 0-9.]+[@]{1}[A-z]+[.]{1}[a-z]+$/', $mail) === 1) &&
        ($problem !== null && $problem !== "")) {
            mysqli_query($connect, 
                 "INSERT INTO `data`(`ID`, `full_name`, `phone`, `mail`, `comment`) VALUES (NULL,'$name','$phone','$mail','$problem')");
            header("Location: ../index.html");
    } else {
        echo '<link rel="stylesheet" href="../CSS/style.css">
              <link rel="stylesheet" href="../CSS/reset.css">
              
              <div id="about" class="about">
                <div class="container">
                    <div class="about_body">
                        <div class="main_about">
                            <h1>Неправильное заполнение формы!</h1>
                        </div>

                        <div class="another_about">
                            <p>Uncorrect form</p>
                        </div>

                        <div class="button"><a href="../index.html" class="about_button">Вернуться обратно</a></div>
                    </div>
                </div>
            </div>';
    }
?>