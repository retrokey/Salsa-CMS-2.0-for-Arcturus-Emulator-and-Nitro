<?php
$titulo = "".usuario.":  Active Promotions - ".nome."";
include 'header.php';
?>

    <div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="list-group" style="margin-bottom: 20px">
                <div class="list-group-item">
                    <h5 style="font-weight: bold">Active Promotions</h5>
                    <hr>



                     <?php
                            $sql = "SELECT * FROM cms_news order by id DESC LIMIT 20";
      $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
      while($row = $query->fetch_assoc())
      {
        ?>
        <?php if ($row['noticia_ativa'] == 1)
        {
            ?>
            <div class="col-md-5">
                <a href="<?php echo url ?>/noticia?=<?php echo $row['id'] ?>">
                    <div class="card" style="height: 84px;margin-bottom: 20px; background: url(<?php echo $row['image'] ?>) center left">
                        <div class="card-body" style="padding: 10px 8px;">
                            <span style="font-weight: bold;font-size: 14px; color: #fff; text-shadow: 2px 2px 10px rgba(0,0,0,.5)"><?php echo $row['title'] ?></span>
                            <br>
                            <span style="color: #fff; text-shadow: 2px 2px 10px rgba(0,0,0,.5); font-size: 12px"><?php echo $row['shortstory'] ?></span>
                        </div>
                    </div>
                    
                </a>
            </div>
        <?php } ?>

        <?php } ?>
                    
                    
                    
                   
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="list-group" style="margin-bottom: 20px">
                <div class="list-group-item list-header">About active promotions</div>
                <div class="list-group-item">
                    <p style="text-align: center">
                        <img src="https://3.bp.blogspot.com/-Q5w5sR74GxI/XIGQoQ2PxaI/AAAAAAABMY8/_vRgXm-s7EAB4aHFqWaHcRs8ZQyCBeNXgCKgBGAs/s1600/habbonados_construtores.png">
                    </p>
                    <p>
                    You can see all active promotions in this tab. The promotions are activities promoted by the administrators, you can participate whenever you want and you can also be a winner of the promotion receiving the reward defined by the author of the promotion.
                    </p>
                </div>
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

        </div>
    </div>

    </body>

    </html>