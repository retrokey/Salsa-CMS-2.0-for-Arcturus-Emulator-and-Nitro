<?php
$titulo = "".usuario.":  Collaborators - ".nome."";
include 'header.php';
?>

    <div class="container">
    <div class="row justify-content-md-center">
        <div class="col-md-3">
            <div class="list-group">
                <div class="list-group-item list-header">Teams</div>
                <a class="list-group-item" href="/staff" style="color: #212529; cursor: pointer;">Staff</a>
                <a class="list-group-item" href="/teams" style="color: #212529; cursor: pointer;  font-weight: bold">Collaborators</a>
            </div>
         </div>
        <div class="col-md-9">
                       <div style="overflow: auto;">
                    <div style="width: 40px; height: 40px; float: left; margin-right: 10px">
                        <img src="https://images.habbo.com/c_images/album1584/AMB.png" style="float:left">
                    </div>
                    <div style="width: calc(100% - 50px); float: right">
                        <h5 id="Embaixadores" style="color:#1e262c;font-weight: bold;margin-top:0px; margin-bottom: 0px">Ambassadors</h5>
                        <div style="color: #8f9396;font-weight: normal; font-size: 15px; margin-bottom: 10px">Responsible for supervising staff and promoting events.</div>
                    </div>
                </div>
            <div class="row">
                                
                                <?php
                                $sql3 = "SELECT * FROM users WHERE rank=5";
    $query1 = mysqli_query($conn, $sql3) or die(mysqli_error($conn));
    while ($row2 = $query1->fetch_assoc()) {
        ?>
                                <div class="col-md-6">
                    <div class="card"  style="flex-direction: row; margin-bottom: 10px;">
                        <img src="x" style="display: none" onload="setCardColor(this)" crossorigin="">

                        <div class="user-profile-image" style="background: url(<?php echo avatarimage ?><?php echo $row2['look'] ?>&size=m&amp;head_direction=2&amp;gesture=sml) 0px -5px, url(x) center"></div>
                        <div class="user-profile-content">
                            <div style="font-weight: bold; font-size: 16px;margin-bottom: 5px" class="ng-binding">
                                <a href="/perfil?=<?php echo $row2['username'] ?>" class="card-title username"><?php echo $row2['username'] ?></a>

                                <?php

                                if ($row2['online'] == 0)
                                {
                                    ?>
                                                                    <span class="badge badge-secondary" style="float: right; margin-right: 10px; font-size: 11px"><?php echo date('d/m/Y', $row2['last_online']) . ' at ' . date('H:i:s', $row2['last_online']) ?></span>

                                                                <?php } elseif ($row2['online'] == 1) {

                                                                    ?>

                                                                    <span class="badge badge-success" style="float: right; margin-right: 10px; font-size: 11px">Online</span>
                                                                    
                                                                <?php } ?>


                                                            </div>
                            <div><b>Mission: </b><?php echo $row2['motto'] ?></div>
                            <div><b>Discord: </b><?php echo $row2['discord'] ?></div>
                        </div>
                    </div>
                </div>
            <?php } ?>



                            </div>
            <hr>         <div style="overflow: auto;">
                    <div style="width: 40px; height: 40px; float: left; margin-right: 10px">
                        <img src="https://www.habborator.org/badges/badges/BOT.gif" style="float:left">
                    </div>
                    <div style="width: calc(100% - 50px); float: right">
                        <h5 id="Guardiões" style="color:#1e262c;font-weight: bold;margin-top:0px; margin-bottom: 0px">Guardians</h5>
                        <div style="color: #8f9396;font-weight: normal; font-size: 15px; margin-bottom: 10px">Responsible for user support, also looking after security inside the Hotel.</div>
                    </div>
                </div>
            <div class="row">
                                <?php
                                $sql3 = "SELECT * FROM users WHERE rank=4";
    $query1 = mysqli_query($conn, $sql3) or die(mysqli_error($conn));
    while ($row2 = $query1->fetch_assoc()) {
        ?>
                                <div class="col-md-6">
                    <div class="card" style="flex-direction: row; margin-bottom: 10px;">
                        <img src="x" style="display: none" onload="setCardColor(this)" crossorigin="">

                        <div class="user-profile-image" style="background: url(<?php echo avatarimage ?><?php echo $row2['look'] ?>&size=m&amp;head_direction=2&amp;gesture=sml) 0px -5px, url(x) center"></div>
                        <div class="user-profile-content">
                            <div style="font-weight: bold; font-size: 16px;margin-bottom: 5px" class="ng-binding">
                                <a href="/perfil?=<?php echo $row2['username'] ?>" class="card-title username"><?php echo $row2['username'] ?></a>

                                <?php

                                if ($row2['online'] == 0)
                                {
                                    ?>
                                                                    <span class="badge badge-secondary" style="float: right; margin-right: 10px; font-size: 11px"><?php echo date('d/m/Y', $row2['last_online']) . ' at ' . date('H:i:s', $row2['last_online']) ?></span>

                                                                <?php } elseif ($row2['online'] == 1) {

                                                                    ?>

                                                                    <span class="badge badge-success" style="float: right; margin-right: 10px; font-size: 11px">Online</span>
                                                                    
                                                                <?php } ?>


                                                            </div>
                            <div><b>Mission: </b><?php echo $row2['motto'] ?></div>
                            <div><b>Discord: </b><?php echo $row2['discord'] ?></div>
                        </div>
                    </div>
                </div>
            <?php } ?>
                            </div>
            <hr>           
            
             <div style="overflow: auto;">
                    <div style="width: 40px; height: 40px; float: left; margin-right: 10px">
                        <img src="https://images.habblive.com/c_imagenes/album1584/CTAFF.gif" style="float:left">
                    </div>
                    <div style="width: calc(100% - 50px); float: right">
                        <h5 id="Guardiões" style="color:#1e262c;font-weight: bold;margin-top:0px; margin-bottom: 0px">BaW</h5>
                        <div style="color: #8f9396;font-weight: normal; font-size: 15px; margin-bottom: 10px">Responsible for programming activities for general entertainment.</div>
                    </div>
                </div>
            
            
            <div class="row">
                                <?php
                                $sql3 = "SELECT * FROM users WHERE rank=3";
    $query1 = mysqli_query($conn, $sql3) or die(mysqli_error($conn));
    while ($row2 = $query1->fetch_assoc()) {
        ?>
                                <div class="col-md-6">
                    <div class="card" style="flex-direction: row; margin-bottom: 10px;">
                        <img src="x" style="display: none" onload="setCardColor(this)" crossorigin="">

                        <div class="user-profile-image" style="background: url(<?php echo avatarimage ?><?php echo $row2['look'] ?>&size=m&amp;head_direction=2&amp;gesture=sml) 0px -5px, url(x) center"></div>
                        <div class="user-profile-content">
                            <div style="font-weight: bold; font-size: 16px;margin-bottom: 5px" class="ng-binding">
                                <a href="/perfil?=<?php echo $row2['username'] ?>" class="card-title username"><?php echo $row2['username'] ?></a>

                                <?php

                                if ($row2['online'] == 0)
                                {
                                    ?>
                                                                    <span class="badge badge-secondary" style="float: right; margin-right: 10px; font-size: 11px"><?php echo date('d/m/Y', $row2['last_online']) . ' at ' . date('H:i:s', $row2['last_online']) ?></span>

                                                                <?php } elseif ($row2['online'] == 1) {

                                                                    ?>

                                                                    <span class="badge badge-success" style="float: right; margin-right: 10px; font-size: 11px">Online</span>
                                                                    
                                                                <?php } ?>


                                                            </div>
                            <div><b>Mission: </b><?php echo $row2['motto'] ?></div>
                            <div><b>Discord: </b><?php echo $row2['discord'] ?></div>
                        </div>
                    </div>
                </div>
            <?php } ?>
                            </div>
          
    </div>
</div>        </div>

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
<br>
<br>
<br>
<br>
<br>
<br><br>
    <style type="text/css">
        .salsa {
            height: 300px;
        }
    </style>
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

        </div>
    </div>

    </body>

    </html>