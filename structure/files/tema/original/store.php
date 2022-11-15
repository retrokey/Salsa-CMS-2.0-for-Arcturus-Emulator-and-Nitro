<?php
$titulo = "".usuario.":  Shop - ".nome."";
include 'header.php';
?>

    <div class="container ng-scope" ng-controller="storeController">
    <div class="row">
        <div class="col-md-8">
            <div class="row">
                
                                <div class="col-md-6">
                                    <?php SalsaConta::comprarpontos($conn) ?>
                    <ul class="list-group" style="margin-bottom: 20px">
                        <li class="list-group-item" style="height: 100px; background: url(https://images.habbo.com/web_images/habbo-web-articles/lpromo_gen15_79.png) center no-repeat">
                                                    </li>
                        <li class="list-group-item" style="font-size: 18px">
                            <b>1,000 achievement scoreboard</b> <span style="color: #6c757d; float: right; font-size: 15px">500.000 créditos</span>
                        </li>
                        <li class="list-group-item" style="color: #6c757d; font-size: 13px; text-align: center">
                        You will increase your achievement score by adding 1,000 points                     </li>
                        <li class="list-group-item">
                                                        <a style="color: white;" data-toggle="modal" data-target="#exampleModal" class="btn btn-primary btn-block">Buy</a>
                                                    </li>
                    </ul>
                </div>
                                
                            </div>
        </div>








<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Would you like to continue the operation?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      You are about to buy: <b>1,000 achievement points</b> which will cost 500,000 coins, wishes to continue?
      </div>
      <div class="modal-footer">
        <form method="POST">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="comprar" class="btn btn-primary">Continue</button>
    </form>
      </div>
    </div>
  </div>
</div>










        <div class="col-md-4">
            <div class="list-group" style="margin-bottom: 20px">
                <div class="list-group-item list-header">About the Store</div>
                <div class="list-group-item payment-method pic open">
                The Store is a shop where you can <b>buy resources</b> with the coins of the Hotel. Stay tuned on this page, the products are available for a limited time.

                   <br><br>
                   <b>You can buy on this page:</b>
                   <br>
                   • Scoreboard of conquest <br>
                   • Badge Pack <br>
                   • Special effects <br>
                   • Temporary commands <br>
                   • Decorated bedrooms <br>

                   Among other products, stay tuned :)




            </div>
        </div>
    </div>
    <div class="modal fade" id="purchaseModal" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Choose Method</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="alerts" class="alert alert-danger">You don't have enough Duckets!</div>
                    <h5 style="text-align: center" id="price">800 Duckets</h5>
                    <div id="buttons"><button class="btn btn-block btn-lg btn-danger ng-scope" ng-click="buyProduct(7)">Shop with Duckets</button></div>
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