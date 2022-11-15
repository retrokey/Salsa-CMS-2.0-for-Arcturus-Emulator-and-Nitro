<?php
$titulo = "".usuario.":  Settings - ".nome."";
include 'header.php';
 $sql3 = "SELECT * FROM users WHERE username='" . usuario . "'";
    $query1 = mysqli_query($conn, $sql3) or die(mysqli_error($conn));
    while ($row2 = $query1->fetch_assoc()) {
       $missao = $row2['motto']; 
       $email = $row2['mail'];
       $dc = $row2['discord'];
       $capa = $row2['capa'];
    }
    ?>

    <div class="container ng-scope" ng-controller="configController">
        <div class="row justify-content-md-center">
            <div class="col-md-4">
                <div class="list-group" style="margin-bottom: 20px">
                    <div class="list-group-item list-header">Sobre</div>
                    <div class="list-group-item config-controller open" data-target="#config">
                        Hey
                        <?php echo usuario ?>, In this tab you can change your Profile settings. Your mission and your Discord will become public in your profile.
                    </div>

                </div>
            </div>
            <div class="col-md-7">
                <div id="alerts">
                    <div class="alert alert-primary" role="alert">[!] :
                    <?php 

                SalsaConta::configuracoes($conn);
                if (isset($_SESSION['erro']))
                        {
                            echo $_SESSION['erro'];
                            unset($_SESSION['erro']);
                        } ?>
                    </div>
                </div>
                <div id="config" class="config-tab list-group open" style="">
                    <div class="list-group-item list-header">Settings</div>
                    <div class="list-group-item">
                        <form method="post" class="ng-pristine ng-valid">
                            <div class="custom-control custom-switch">

                                <b>Mission:</b>
                                <br>
                                <input type="text" class="form-control" name="missao" value="<?php echo $missao ?>" aria-label="Username" aria-describedby="basic-addon1">
                                <br>
                                <b>E-mail:</b>
                                <br>
                                <input type="text" class="form-control" name="email" value="<?php echo $email ?>" aria-label="Username" aria-describedby="basic-addon1">
                                <br>
                                <b>Your discord:</b>
                                <br>
                                <input type="text" class="form-control" name="discord" value="<?php echo $dc ?>" aria-label="Username" aria-describedby="basic-addon1">
                                <br>
                                <b>Your profile cover (Only images with endings .png, .gif):</b>
                                <br>
                                <input type="text" class="form-control" name="capa" value="<?php echo $capa ?>" aria-label="Username" aria-describedby="basic-addon1">

                                <input type="text" class="form-control" hidden="" name="confirmacao" value="<?php echo $email ?>" aria-label="Username" aria-describedby="basic-addon1">
                                <br>

                            </div>
                            <hr>
                            <button type="submit" name="enviar" class="btn btn-success" style="float: right">Save</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <style type="text/css">
        .salsa {
            height: 300px;
        }
    </style>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div style="font-weight: 14px;background: #1e262c; color: #fff; padding: 10px;border-top: 4px solid #1b2228;margin-top: 30px">
    <div class="container d-flex flex-column justify-content-center align-items-center" style="gap: 10px">
        <div>
            <b><?php echo nome ?> Hotel 2022</b> powered by <b><a style="color: #fff; text-decoration: underline" href="https://github.com/retrokey/" target="_blank">SalsaCMS 2.0</a></b>
        </div>
        <div class="d-flex" style="gap: 10px; font-size: 12px">
            <a style="color: #a7a7a7; text-decoration: underline" href="/privacidade">Privacy Policy</a>
            <div style="color: #a7a7a7;">|</div>
            <a style="color: #a7a7a7; text-decoration: underline" href="/termos">Terms and Conditions of Use</a>
        </div>
    </div>
</div>

    <div style="visibility: hidden; position: absolute; width: 100%; top: -10000px; left: 0px; right: 0px; transition: visibility 0s linear 0.3s, opacity 0.3s linear 0s; opacity: 0;">
        <div style="width: 100%; height: 100%; position: fixed; top: 0px; left: 0px; z-index: 2000000000; background-color: rgb(255, 255, 255); opacity: 0.5;"></div>
        <div style="margin: 0px auto; top: 0px; left: 0px; right: 0px; position: absolute; border: 1px solid rgb(204, 204, 204); z-index: 2000000000; background-color: rgb(255, 255, 255); overflow: hidden;">

    </body>

    </html>