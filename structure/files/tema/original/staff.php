<?php
$titulo = "".usuario.":  Equipe - ".nome."";
include 'header.php';
?>

    <div class="container">
    <div class="row justify-content-md-center">
        
    <div class="col-md-3">
            <div class="list-group">
                <div class="list-group-item list-header">Equipes</div>
                <a class="list-group-item" href="/staff" style="color: #212529; cursor: pointer; font-weight: bold">Staff</a>
                <a class="list-group-item" href="/teams" style="color: #212529; cursor: pointer; ">Colaboradores</a>
            </div>
    </div>

        <div class="col-md-9">
                        <div style="overflow: auto;">
                <div style="width: 40px; height: 40px; float: left; margin-right: 10px">
                    <img src="https://www.habborator.org/badges/badges/ADM.gif" style="float:left">
                </div>
                <div style="width: calc(100% - 50px); float: right">
                    <h5 id="CEO" style="color:#1e262c;font-weight: bold;margin-top:0px; margin-bottom: 0px">CEO</h5>
                    <div style="color: #8f9396;font-weight: normal; font-size: 15px; margin-bottom: 10px">Responsável pela gestão geral do Hotel.</div>
                </div>
            </div>
            <div class="row">
                                
                                <?php
                                $sql3 = "SELECT * FROM users WHERE rank=7";
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
                                                                    <span class="badge badge-secondary" style="float: right; margin-right: 10px; font-size: 11px"><?php echo date('d/m/Y', $row2['last_online']) . ' às ' . date('H:i:s', $row2['last_online']) ?></span>

                                                                <?php } elseif ($row2['online'] == 1) {

                                                                    ?>

                                                                    <span class="badge badge-success" style="float: right; margin-right: 10px; font-size: 11px">Online</span>
                                                                    
                                                                <?php } ?>


                                                            </div>
                            <div><b>Missão: </b><?php echo fs($row2['motto']) ?></div>
                            <div><b>Discord: </b><?php echo fs($row2['discord']) ?></div>
                        </div>
                    </div>
                </div>
            <?php } ?>



                            </div>
            <hr>            <div style="overflow: auto;">
                <div style="width: 40px; height: 40px; float: left; margin-right: 10px">
                    <img src="https://www.habborator.org/badges/badges/ADM.gif" style="float:left">
                </div>
                <div style="width: calc(100% - 50px); float: right">
                    <h5 id="Gerência" style="color:#1e262c;font-weight: bold;margin-top:0px; margin-bottom: 0px">Gerência</h5>
                    <div style="color: #8f9396;font-weight: normal; font-size: 15px; margin-bottom: 10px">Responsável pela organização do Hotel.</div>
                </div>
            </div>
            <div class="row">
                                <?php
                                $sql3 = "SELECT * FROM users WHERE rank=6";
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
                                                                    <span class="badge badge-secondary" style="float: right; margin-right: 10px; font-size: 11px"><?php echo date('d/m/Y', $row2['last_online']) . ' às ' . date('H:i:s', $row2['last_online']) ?></span>

                                                                <?php } elseif ($row2['online'] == 1) {

                                                                    ?>

                                                                    <span class="badge badge-success" style="float: right; margin-right: 10px; font-size: 11px">Online</span>
                                                                    
                                                                <?php } ?>


                                                            </div>
                           <div><b>Missão: </b><?php echo fs($row2['motto']) ?></div>
                            <div><b>Discord: </b><?php echo fs($row2['discord']) ?></div>
                        </div>
                    </div>
                </div>
            <?php } ?>
                            </div>
            <hr>            <div style="overflow: auto;">
                <div style="width: 40px; height: 40px; float: left; margin-right: 10px">
                    <img src="https://www.habborator.org/badges/badges/ADM.gif" style="float:left">
                </div>
                <div style="width: calc(100% - 50px); float: right">
                    <h5 id="Administração" style="color:#1e262c;font-weight: bold;margin-top:0px; margin-bottom: 0px">Administração</h5>
                    <div style="color: #8f9396;font-weight: normal; font-size: 15px; margin-bottom: 10px">Responsável pelo entretenimento do Hotel.</div>
                </div>
            </div>
            <div class="row">
                                
                            <?php
                                $sql3 = "SELECT * FROM users WHERE rank=5";
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
                                                                    <span class="badge badge-secondary" style="float: right; margin-right: 10px; font-size: 11px"><?php echo date('d/m/Y', $row2['last_online']) . ' às ' . date('H:i:s', $row2['last_online']) ?></span>

                                                                <?php } elseif ($row2['online'] == 1) {

                                                                    ?>

                                                                    <span class="badge badge-success" style="float: right; margin-right: 10px; font-size: 11px">Online</span>
                                                                    
                                                                <?php } ?>


                                                            </div>
                               <div><b>Missão: </b><?php echo fs($row2['motto']) ?></div>
                            <div><b>Discord: </b><?php echo fs($row2['discord']) ?></div>
                        </div>
                    </div>
                </div>
            <?php } ?>   
                             
                               
                              
                            </div>
            <hr>            <div style="overflow: auto;">
                <div style="width: 40px; height: 40px; float: left; margin-right: 10px">
                    <img src="https://www.habborator.org/badges/badges/ADM.gif" style="float:left">
                </div>
                <div style="width: calc(100% - 50px); float: right">
                    <h5 id="Moderação" style="color:#1e262c;font-weight: bold;margin-top:0px; margin-bottom: 0px">Moderação</h5>
                    <div style="color: #8f9396;font-weight: normal; font-size: 15px; margin-bottom: 10px">Responsável pelos eventos diários e segurança do Hotel.</div>
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
                                                                    <span class="badge badge-secondary" style="float: right; margin-right: 10px; font-size: 11px"><?php echo date('d/m/Y', $row2['last_online']) . ' às ' . date('H:i:s', $row2['last_online']) ?></span>

                                                                <?php } elseif ($row2['online'] == 1) {

                                                                    ?>

                                                                    <span class="badge badge-success" style="float: right; margin-right: 10px; font-size: 11px">Online</span>
                                                                    
                                                                <?php } ?>


                                                            </div>
                               <div><b>Missão: </b><?php echo fs($row2['motto']) ?></div>
                            <div><b>Discord: </b><?php echo fs($row2['discord']) ?></div>
                        </div>
                    </div>
                </div>
            <?php } ?>
                               
                                
                            </div>
                    </div>
    </div>
</div>

<br>
<br>
<br>
<br>
<br>
<br>
    <style type="text/css">
        .salsa {
            height: 300px;
        }
    </style>
    <div class="salsa"></div>
    <div style="font-weight: 14px;background: #1e262c; padding: 10px;border-top: 4px solid #1b2228;margin-top: 30px">
        <div class="container">

            <span style="color:#a7a7a7">
            © 2019 - <?php echo ano ?> Rede <?php echo nome ?> Corporation Ltd. Todos os direitos reservados.
               
                                                    </span>
        </div>
    </div>

    </body>

    </html>