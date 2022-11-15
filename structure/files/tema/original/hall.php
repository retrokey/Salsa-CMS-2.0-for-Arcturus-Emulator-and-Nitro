<?php
$titulo = "".usuario.":  Hall of Fame - ".nome."";
include 'header.php';
?>

    <div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="list-group">

                <div class="list-group-item list-header">Promotions</div>
                
                <div class="list-group-item podium" style="background: url(https://i.imgur.com/rQR45xY.png) -420px -70px;">
                <?php
                                $sql3 = "SELECT * FROM users ORDER BY pontos_promocao DESC LIMIT 1";
    $query1 = mysqli_query($conn, $sql3) or die(mysqli_error($conn));
    while ($row2 = $query1->fetch_assoc()) {
        ?>
                                        <div class="podium-1" style="background-image: url(<?php echo avatarimage ?><?php echo $row2['look'] ?>&amp;size=l&amp;direction=2&amp;head_direction=2&amp;gesture=sml&amp;action=wav)">
                                        </div><?php } ?>
                                        <?php
                                $sql3 = "SELECT * FROM users ORDER BY pontos_promocao DESC LIMIT 1, 1";
    $query1 = mysqli_query($conn, $sql3) or die(mysqli_error($conn));
    while ($row2 = $query1->fetch_assoc()) {
        ?>
                                        <div class="podium-2" style="background-image: url(<?php echo avatarimage ?><?php echo $row2['look'] ?>&amp;size=l&amp;direction=2&amp;head_direction=2&amp;gesture=sml&amp;action=wav)"></div><?php } ?>
                                        <?php
                                        $sql3 = "SELECT * FROM users ORDER BY pontos_promocao DESC LIMIT 2, 1";
    $query1 = mysqli_query($conn, $sql3) or die(mysqli_error($conn));
    while ($row2 = $query1->fetch_assoc()) {
        ?>
                                        <div class="podium-3" style="background-image: url(<?php echo avatarimage ?><?php echo $row2['look'] ?>&amp;size=l&amp;direction=2&amp;head_direction=2&amp;gesture=sml&amp;action=wav)"></div><?php } ?>
                                    </div>
        
 <?php
                                $sql3 = "SELECT * FROM users order by pontos_promocao DESC LIMIT 6";
    $query1 = mysqli_query($conn, $sql3) or die(mysqli_error($conn));
    while ($row2 = $query1->fetch_assoc()) {
        ?>

                                    <div class="list-group-item feed-item" style="padding-bottom: 0px">
                        <div class="feed-item-image" style="height: 60px; background-image: url(<?php echo avatarimage ?><?php echo $row2['look'] ?>&size=m&amp;head_direction=2&amp;gesture=sml)"></div>
                        <div class="feed-item-body">
                            <div class="feed-item-title"><a href="/perfil?=<?php echo $row2['username'] ?>"><?php echo $row2['username'] ?></a></div>
                             <?php

                            if ($row2['pontos_promocao'] == 1)
                            {

                                ?>
                            He won <b><?php echo $row2['pontos_promocao'] ?></b> promotion.


                        <?php }elseif ($row2['pontos_promocao'] > 1) {
                          ?>
  Ganhou <b><?php echo $row2['pontos_promocao'] ?></b> promotions.
                          <?php
                        } ?>
                        </div>
                    </div>


                <?php } ?>





                            </div>
        </div>
        <div class="col-md-4">
            <div class="list-group">
                <div class="list-group-item list-header">Events</div>
                <div class="list-group-item podium" style="background: url(https://i.imgur.com/Fk1LArz.png) right top;">
                <?php
                                $sql3 = "SELECT * FROM users ORDER BY pontos_evento DESC LIMIT 1";
    $query1 = mysqli_query($conn, $sql3) or die(mysqli_error($conn));
    while ($row2 = $query1->fetch_assoc()) {
        ?>
                                        <div class="podium-1" style="background-image: url(<?php echo avatarimage ?><?php echo $row2['look'] ?>&amp;size=l&amp;direction=2&amp;head_direction=2&amp;gesture=sml&amp;action=wav)">
                                        </div><?php } ?>
                                        <?php
                                $sql3 = "SELECT * FROM users ORDER BY pontos_evento DESC LIMIT 1, 1";
    $query1 = mysqli_query($conn, $sql3) or die(mysqli_error($conn));
    while ($row2 = $query1->fetch_assoc()) {
        ?>
                                        <div class="podium-2" style="background-image: url(<?php echo avatarimage ?><?php echo $row2['look'] ?>&amp;size=l&amp;direction=2&amp;head_direction=2&amp;gesture=sml&amp;action=wav)"></div><?php } ?>
                                        <?php
                                        $sql3 = "SELECT * FROM users ORDER BY pontos_evento DESC LIMIT 2, 1";
    $query1 = mysqli_query($conn, $sql3) or die(mysqli_error($conn));
    while ($row2 = $query1->fetch_assoc()) {
        ?>
                                        <div class="podium-3" style="background-image: url(<?php echo avatarimage ?><?php echo $row2['look'] ?>&amp;size=l&amp;direction=2&amp;head_direction=2&amp;gesture=sml&amp;action=wav)"></div><?php } ?>
                                    </div>
              <?php
                                $sql3 = "SELECT * FROM users order by pontos_evento DESC LIMIT 6";
    $query1 = mysqli_query($conn, $sql3) or die(mysqli_error($conn));
    while ($row2 = $query1->fetch_assoc()) {
        ?>

                                    <div class="list-group-item feed-item" style="padding-bottom: 0px">
                        <div class="feed-item-image" style="height: 60px; background-image: url(<?php echo avatarimage ?><?php echo $row2['look'] ?>&size=m&amp;head_direction=2&amp;gesture=sml)"></div>
                        <div class="feed-item-body">
                            <div class="feed-item-title"><a href="/perfil?=<?php echo $row2['username'] ?>"><?php echo $row2['username'] ?></a></div>
                            <?php

                            if ($row2['pontos_evento'] == 1)
                            {

                                ?>
                            He won <b><?php echo $row2['pontos_evento'] ?></b> events.


                        <?php }elseif ($row2['pontos_evento'] > 1) {
                          ?>
  Ganhou <b><?php echo $row2['pontos_evento'] ?></b> event.
                          <?php
                        } ?>



                        </div>
                    </div>


                <?php } ?>
                                  
                                </div>
        </div>
        <div class="col-md-4">
            <div class="list-group">
                <div class="list-group-item list-header">Credits</div>
                <div class="list-group-item podium" style="background: url(https://i.imgur.com/4r7hVFB.png) right center;">
                <?php
                                $sql3 = "SELECT * FROM users ORDER BY credits DESC LIMIT 1";
    $query1 = mysqli_query($conn, $sql3) or die(mysqli_error($conn));
    while ($row2 = $query1->fetch_assoc()) {
        ?>
                                        <div class="podium-1" style="background-image: url(<?php echo avatarimage ?><?php echo $row2['look'] ?>&amp;size=l&amp;direction=2&amp;head_direction=2&amp;gesture=sml&amp;action=wav)">
                                        </div><?php } ?>
                                        <?php
                                $sql3 = "SELECT * FROM users ORDER BY credits DESC LIMIT 1, 1";
    $query1 = mysqli_query($conn, $sql3) or die(mysqli_error($conn));
    while ($row2 = $query1->fetch_assoc()) {
        ?>
                                        <div class="podium-2" style="background-image: url(<?php echo avatarimage ?><?php echo $row2['look'] ?>&amp;size=l&amp;direction=2&amp;head_direction=2&amp;gesture=sml&amp;action=wav)"></div><?php } ?>
                                        <?php
                                        $sql3 = "SELECT * FROM users ORDER BY credits DESC LIMIT 2, 1";
    $query1 = mysqli_query($conn, $sql3) or die(mysqli_error($conn));
    while ($row2 = $query1->fetch_assoc()) {
        ?>
                                        <div class="podium-3" style="background-image: url(<?php echo avatarimage ?><?php echo $row2['look'] ?>&amp;size=l&amp;direction=2&amp;head_direction=2&amp;gesture=sml&amp;action=wav)"></div><?php } ?>
                                    </div>
                
                                    <?php
                                $sql3 = "SELECT * FROM users order by credits DESC LIMIT 6";
    $query1 = mysqli_query($conn, $sql3) or die(mysqli_error($conn));
    while ($row2 = $query1->fetch_assoc()) {
        ?>

                                    <div class="list-group-item feed-item" style="padding-bottom: 0px">
                        <div class="feed-item-image" style="height: 60px; background-image: url(<?php echo avatarimage ?><?php echo $row2['look'] ?>&size=m&amp;head_direction=2&amp;gesture=sml)"></div>
                        <div class="feed-item-body">
                            <div class="feed-item-title"><a href="/perfil?=<?php echo $row2['username'] ?>"><?php echo $row2['username'] ?></a></div>
                             <?php

                            if ($row2['credits'] == 1)
                            {

                                ?>
                            It have <b><?php echo $row2['credits'] ?></b> credits.


                        <?php }elseif ($row2['credits'] > 1) {
                          ?>
  It have <b><?php echo $row2['credits'] ?></b> credits.
                          <?php
                        } ?>
                        </div>
                    </div>


                <?php } ?>
                                </div>
        </div>

   
    
        <div class="col-md-4"><br>
            <div class="list-group">
                <div class="list-group-item list-header">Referrals</div>
                <div class="list-group-item podium" style="background: url(https://2.bp.blogspot.com/-R6cz67_kMUA/VvDawXZCHWI/AAAAAAAAlzw/Aqgvb2JywjIdt6qOAe_wfQ0H1ERjdgGAw/s1600/habboios.png) right top;">
                <?php
                                $sql3 = "SELECT * FROM users ORDER BY referidos DESC LIMIT 1";
    $query1 = mysqli_query($conn, $sql3) or die(mysqli_error($conn));
    while ($row2 = $query1->fetch_assoc()) {
        ?>
                                        <div class="podium-1" style="background-image: url(<?php echo avatarimage ?><?php echo $row2['look'] ?>&amp;size=l&amp;direction=2&amp;head_direction=2&amp;gesture=sml&amp;action=wav)">
                                        </div><?php } ?>
                                        <?php
                                $sql3 = "SELECT * FROM users ORDER BY referidos DESC LIMIT 1, 1";
    $query1 = mysqli_query($conn, $sql3) or die(mysqli_error($conn));
    while ($row2 = $query1->fetch_assoc()) {
        ?>
                                        <div class="podium-2" style="background-image: url(<?php echo avatarimage ?><?php echo $row2['look'] ?>&amp;size=l&amp;direction=2&amp;head_direction=2&amp;gesture=sml&amp;action=wav)"></div><?php } ?>
                                        <?php
                                        $sql3 = "SELECT * FROM users ORDER BY referidos DESC LIMIT 2, 1";
    $query1 = mysqli_query($conn, $sql3) or die(mysqli_error($conn));
    while ($row2 = $query1->fetch_assoc()) {
        ?>
                                        <div class="podium-3" style="background-image: url(<?php echo avatarimage ?><?php echo $row2['look'] ?>&amp;size=l&amp;direction=2&amp;head_direction=2&amp;gesture=sml&amp;action=wav)"></div><?php } ?>
                                    </div>
        
 <?php
                                $sql3 = "SELECT * FROM users order by referidos DESC LIMIT 6";
    $query1 = mysqli_query($conn, $sql3) or die(mysqli_error($conn));
    while ($row2 = $query1->fetch_assoc()) {
        ?>

                                    <div class="list-group-item feed-item" style="padding-bottom: 0px">
                        <div class="feed-item-image" style="height: 60px; background-image: url(<?php echo avatarimage ?><?php echo $row2['look'] ?>&size=m&amp;head_direction=2&amp;gesture=sml)"></div>
                        <div class="feed-item-body">
                            <div class="feed-item-title"><a href="/perfil?=<?php echo $row2['username'] ?>"><?php echo $row2['username'] ?></a></div>
                             <?php

                            if ($row2['referidos'] == 1)
                            {

                                ?>
                            He have <b><?php echo $row2['referidos'] ?></b> Referrals.


                        <?php }elseif ($row2['referidos'] > 1) {
                          ?>
  Collected <b><?php echo $row2['referidos'] ?></b> referrerals.
                          <?php
                        } ?>
                        </div>
                    </div>


                <?php } ?>





                            </div>
        </div>






       <div class="col-md-4"><br>
            <div class="list-group">
                <div style="background-image: url();" class="list-group-item list-header">Duckets</div>
                <div class="list-group-item podium" style="background: url(https://i0.wp.com/dehabbo.com/wp-content/uploads/2021/06/duckets-habbo.jpg?fit=640%2C320&ssl=1) center;">
                <?php
                                $sql3 = "SELECT * FROM users ORDER BY pixels DESC LIMIT 1";
    $query1 = mysqli_query($conn, $sql3) or die(mysqli_error($conn));
    while ($row2 = $query1->fetch_assoc()) {
        ?>
                                        <div class="podium-1" style="background-image: url(<?php echo avatarimage ?><?php echo $row2['look'] ?>&amp;size=l&amp;direction=2&amp;head_direction=2&amp;gesture=sml&amp;action=wav)">
                                        </div><?php } ?>
                                        <?php
                                $sql3 = "SELECT * FROM users ORDER BY pixels DESC LIMIT 1, 1";
    $query1 = mysqli_query($conn, $sql3) or die(mysqli_error($conn));
    while ($row2 = $query1->fetch_assoc()) {
        ?>
                                        <div class="podium-2" style="background-image: url(<?php echo avatarimage ?><?php echo $row2['look'] ?>&amp;size=l&amp;direction=2&amp;head_direction=2&amp;gesture=sml&amp;action=wav)"></div><?php } ?>
                                        <?php
                                        $sql3 = "SELECT * FROM users ORDER BY pixels DESC LIMIT 2, 1";
    $query1 = mysqli_query($conn, $sql3) or die(mysqli_error($conn));
    while ($row2 = $query1->fetch_assoc()) {
        ?>
                                        <div class="podium-3" style="background-image: url(<?php echo avatarimage ?><?php echo $row2['look'] ?>&amp;size=l&amp;direction=2&amp;head_direction=2&amp;gesture=sml&amp;action=wav)"></div><?php } ?>
                                    </div>
        
 <?php
                                $sql3 = "SELECT * FROM users order by pixels DESC LIMIT 6";
    $query1 = mysqli_query($conn, $sql3) or die(mysqli_error($conn));
    while ($row2 = $query1->fetch_assoc()) {
        ?>

                                    <div class="list-group-item feed-item" style="padding-bottom: 0px">
                        <div class="feed-item-image" style="height: 60px; background-image: url(<?php echo avatarimage ?><?php echo $row2['look'] ?>&size=m&amp;head_direction=2&amp;gesture=sml)"></div>
                        <div class="feed-item-body">
                            <div class="feed-item-title"><a href="/perfil?=<?php echo $row2['username'] ?>"><?php echo $row2['username'] ?></a></div>
                             <?php

                            if ($row2['pixels'] == 1)
                            {

                                ?>
                            Have <b><?php echo $row2['pixels'] ?></b> ducket.


                        <?php }elseif ($row2['pixels'] > 1) {
                          ?>
  He have <b><?php echo $row2['pixels'] ?></b> duckets.
                          <?php
                        } ?>
                        </div>
                    </div>


                <?php } ?>





                            </div>
        </div>
















<div class="col-md-4"><br>
            <div class="list-group">
                <div class="list-group-item list-header">Placar de conquistas</div>
                <div class="list-group-item podium" style="background: url(https://habbofever.be/wp-content/uploads/2017/05/lpromo_gen15_12.png) right;">
                <?php
                                $sql3 = "SELECT * FROM users_settings ORDER BY achievement_score DESC LIMIT 1";
    $query1 = mysqli_query($conn, $sql3) or die(mysqli_error($conn));
    while ($row2 = $query1->fetch_assoc()) {
        ?>
                                        <div class="podium-1" style="background-image: url(<?php echo avatarimage ?><?php echo $row2['look'] ?>&amp;size=l&amp;direction=2&amp;head_direction=2&amp;gesture=sml&amp;action=wav)">
                                        </div><?php } ?>
                                        <?php
                                $sql3 = "SELECT * FROM users_settings ORDER BY achievement_score DESC LIMIT 1, 1";
    $query1 = mysqli_query($conn, $sql3) or die(mysqli_error($conn));
    while ($row2 = $query1->fetch_assoc()) {
        ?>
                                        <div class="podium-2" style="background-image: url(<?php echo avatarimage ?><?php echo $row2['look'] ?>&amp;size=l&amp;direction=2&amp;head_direction=2&amp;gesture=sml&amp;action=wav)"></div><?php } ?>
                                        <?php
                                        $sql3 = "SELECT * FROM users_settings ORDER BY achievement_score DESC LIMIT 2, 1";
    $query1 = mysqli_query($conn, $sql3) or die(mysqli_error($conn));
    while ($row2 = $query1->fetch_assoc()) {
        ?>
                                        <div class="podium-3" style="background-image: url(<?php echo avatarimage ?><?php echo $row2['look'] ?>&amp;size=l&amp;direction=2&amp;head_direction=2&amp;gesture=sml&amp;action=wav)"></div><?php } ?>
                                    </div>
        
 <?php
                                $sql3 = "SELECT * FROM users_settings order by achievement_score DESC LIMIT 6";
    $query1 = mysqli_query($conn, $sql3) or die(mysqli_error($conn));
    while ($row2 = $query1->fetch_assoc()) {

        $ikndiu = "SELECT * FROM users WHERE id='".$row2['user_id']."'";
    $awknmdjkan = mysqli_query($conn, $ikndiu) or die(mysqli_error($conn));
    while ($h4 = $awknmdjkan->fetch_assoc()) {
        ?>

                                    <div class="list-group-item feed-item" style="padding-bottom: 0px">
                        <div class="feed-item-image" style="height: 60px; background-image: url(<?php echo avatarimage ?><?php echo $h4['look'] ?>&size=m&amp;head_direction=2&amp;gesture=sml)"></div>
                        <div class="feed-item-body">
                            <div class="feed-item-title"><a href="/perfil?=<?php echo $h4['username'] ?>"><?php echo $h4['username'] ?></a></div>
                            
                            <?php echo $row2['achievement_score'] ?>


                        </div>
                    </div>


                <?php }  } ?>





                            </div>
        </div>





































    </div>
</div>   
          
    </div>
</div>
    <style type="text/css">
        .salsa {
            height: 380px;
        }
        .salsa2 {
            height: 20px;
        }
    </style>
    <div class="salsa"></div>
    <div style="font-weight: 14px;background: #1e262c; padding: 10px;border-top: 4px solid #1b2228;margin-top: 30px">
        <div class="container">

            <span style="color:#a7a7a7">
            © 2019 - <?php echo ano ?> Rede <?php echo nome ?> Corporation Ltd. Todos os direitos reservados.
               Powered by <a style="color: white;" target="_blank" href="https://github.com/victorlbs/Salsa-CMS---CMS-for-Arcturus-Emulator"><b>Salsa CMS</b></a>
                                                    </span>
        </div>
    </div>

    </body>

    </html>