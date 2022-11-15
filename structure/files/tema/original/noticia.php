<?php
$vlsalsa = 0;
if (is_numeric($noticiafinal))
	$noticiafinal = $noticiafinal;
else
	$noticiafinal = 0;
$qra        = "SELECT * FROM cms_news WHERE id=".$noticiafinal." LIMIT 1";
if ($ra = mysqli_query($conn, $qra)) {
$existe = mysqli_num_rows($ra);
if ($existe == $vlsalsa) {
header("Location: /".$config['404page']."");
}
mysqli_free_result($ra);
}
$sql3 = "SELECT * FROM cms_news WHERE id=".$noticiafinal." LIMIT 1";
$query1 = mysqli_query($conn, $sql3) or die(mysqli_error($conn));
while ($row3 = $query1->fetch_assoc()) {
$fnsalsa = "UPDATE cms_news SET type = type+1 WHERE id = '" . $row3['id'] . "'";
$conn->query($fnsalsa); 
$titulo = "".$row3['title']." - ".nome."";
include 'header.php';
?>

    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-3">
                <div class="list-group">
                    <div class="list-group-item list-header">Latest News</div>

                    <?php

                $sql3 = "SELECT * FROM cms_news order by id DESC LIMIT 30";
$query1 = mysqli_query($conn, $sql3) or die(mysqli_error($conn));
while ($row2 = $query1->fetch_assoc()) {

    ?>

                        <a href="/noticia?=<?php echo $row2['id'] ?>" class="list-group-item list-group-item-action " style="color: #212529">

                            <?php 

                            if ($row2['noticia_ativa'] == 1)
                            {
                                ?>
                        <span class="fas fa-circle" title="<?php echo $row2['title'] ?>" style="font-size: 8px;color: #4CAF50;position:absolute;margin-left: -15px;margin-top: 5px;"></span>  
                    <?php } ?>


                                             <?php echo $row2['title'] ?> »
                    </a>

                        <?php } ?>

                </div>
            </div>
            <div class="col-md-8 ng-scope" ng-controller="articleController">
                <div class="card" style="width: 560px; margin-bottom: 10px">
                    <div id="articleTopImage" class="card-body" style="color: #fff; background-image: url(<?php echo $row3['image'] ?>);">
                        <img src="<?php echo $row2['image'] ?>" style="display: none" id="articleImageSrc" crossorigin="" onload="setTopImage()">
                        <?php echo $row3['title'] ?>
                    </div>
                    <div id="article-body" style="color: #000" class="card-body">

                        <p>

                            <?php echo html_entity_decode($row3['longstory']) ?>

                        </p>

                    </div>
                    <div id="article-footer" class="card-body">
                        <div class="row">
                            <div class="col-md-6">

                                <?php

                $sql34 = "SELECT * FROM users WHERE username='".$row3['author']."'";
$query12 = mysqli_query($conn, $sql34) or die(mysqli_error($conn));
while ($row22 = $query12->fetch_assoc()) {

    ?>
                                <div class="article-author-image" style="background-image: url(https://habbo.city/habbo-imaging/avatarimage?figure=<?php echo $row22['look'] ?>&size=m&amp;head_direction=2&amp;gesture=sml)">
                                    
                                </div>
                            <?php } ?>



                                <div class="article-author">
                                   <b>Autor:</b> <b><a href="/perfil?=<?php echo $row3['author'] ?>"><?php echo $row3['author'] ?> </a></b>
                                    <br>
                                    <b>Date:</b>
                                    <?php echo date('d/m/Y', $row3['date']) . ' at ' . date('H:i:s', $row3['date']) ?>
                                    <br>
                                    <b>Views:</b>
                                    <?php echo $row3['type'] ?>
                                </div>
                            </div>

                        </div>
                    </div>









                </div>

                <?php
if ($cur != null || $sessao != null || usuario != null)
{
    
    ?>

                <?php SalsaConta::comentar_noticia($conn) ?>

                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Comment on <?php echo $row3['title'] ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <form method="post">
      </div>
      <div class="modal-body">
        <textarea class="form-control" required="" name="mensagem" rows="3"></textarea>
        <input hidden="" type="text" value="<?php echo $row3['id'] ?>" name="id">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button style="cursor: pointer;" type="submit" name="comentar" class="btn btn-primary">Comment</button>
        </form>
      </div>
    </div>
  </div>
</div>

                <div class="card" style="width: 560px;">

                            <div class="list-group-item list-header">Comments
                            <span data-toggle="modal" data-target="#exampleModal" style="float: right;cursor: pointer;" class="badge badge-light">Comment</span>
                            </div>
                            <div class="card-body">
                                <?php
                        if (isset($_SESSION['erro']))
                        {
                            echo $_SESSION['erro'];
                            unset($_SESSION['erro']);
                        }
                        ?>
                                <?php
    $sql31 = "SELECT * FROM salsa_comentarios_noticia WHERE noticia='".$row3['id']."' order by id DESC LIMIT 20";
$aa = mysqli_query($conn, $sql31) or die(mysqli_error($conn));
while ($bss = $aa->fetch_assoc()) {
    ?>

                                    <ul class="list-group">

                                        <li class="list-group-item">
                                            <div class="feed-item-image" style="background-image: url(<?php echo avatarimage ?><?php echo $bss['look'] ?>&size=m&headonly=1&head_direction=2&gesture=sml)"></div>
                                            <a href="/perfil?=<?php echo $bss['usuario'] ?>"> <b><?php echo $bss['usuario'] ?></b> </a><i>diz:</i>
                                            <?php echo fs($bss['mensagem']) ?>

                                                <div id="salsdiv" style="float: right;">
                                                    <img src="https://3.bp.blogspot.com/-QiV0Aie6aMg/WV-zzO36oGI/AAAAAAAA6uo/u--AGzg3gKAHlV7YUlHB5tznf368sOQxgCKgBGAs/s1600/34df39e387de73745fd1dabcba970a6e.gif">
                                                    <?php echo date('d/m/Y', $bss['data'])  ?>
                                                </div>

                                        </li>

                                    </ul>

                                    <br>

                                    <?php } ?>
                            </div>
                        </div>

                    <?php } ?>


               

               
               
            </div>
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
<br>
<br>
<br>
<br><br>
<br>
<br><br>
<br>
<br><br>
<br>
<br><br>
<br>
<br><br>
<br>
    <style type="text/css">
        .salsa {
            height: 380px;
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

    <?php } ?>