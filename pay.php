<?php
include("header.php");
$tid = $_REQUEST["t_id"];
 ?>

<main role="main" class="flex-shrink-0" style="padding-top: 60px;">
  <div class="container">
    <h1 class="mt-5">กรุณาชำระเงิน</h1>
    <p class="lead">จำนวน 120 บาท</p>
    <a href="http://192.168.1.2/on<?php echo $tid; ?>"><button class="btn btn-primary" type="button" name="button">ชำระเงิน</button></a>
  </div>
</main>

<?php
include("footer.php");
 ?>
