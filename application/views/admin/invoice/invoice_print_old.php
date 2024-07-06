<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Invoice Print</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap 4 -->

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url('assets') ?>/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('assets') ?>/dist/css/adminlte.min.css">

  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body>
<div class="wrapper">
  <!-- Main content -->
  <section class="invoice">
    <!-- title row -->
    <div class="row">
      <div class="col-12">
        <h2 class="page-header">
          <img src="<?= base_url('assets') ?>/custom/yonsei.png" width="70px" alt="yonsei"> Yonsei Univercity
          <small class="float-right">Date: 22/06/2024</small>
        </h2>
      </div>
      <!-- /.col -->
    </div>
    <!-- info row -->
    <div class="row invoice-info">
      <div class="col-sm-4 invoice-col">
        From
        <address>
          <strong>Admin</strong><br>
          50 Yonsei-ro Seodaemun-gu<br>
          Seoul, 03722, Republic of Korea<br>
          Phone: 0857-8289-1679<br>
          Web: www.yonsei.ac.kr
        </address>
      </div>
      <!-- /.col -->
      <div class="col-sm-4 invoice-col">
        To
        <address>
          <strong><?= $a['nama_alumni']; ?></strong><br>
          <?= $a['alamat']; ?>, Kec. <?= $a['kecamatan']; ?><br>
          <?= $a['kota']; ?> <?= $a['kode_pos']; ?><br>
          Phone : <?= $a['telepon'] ?>
        </address>
      </div>
      <!-- /.col -->
      <div class="col-sm-4 invoice-col">
        <b>Invoice #007612</b><br>
        <br>
        <b>Order ID:</b> 4F3S8J<br>
        <b>Payment Due:</b> 2/22/2024<br>
        <b>Account:</b> 968-34567
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <!-- Table row -->
    <div class="row">
      <div class="col-12 table-responsive">
        <table class="table table-striped">
          <thead>
          <tr>
            <th>Qty</th>
            <th>Product</th>
            <th>Serial #</th>
            <th>Description</th>
            <th>Subtotal</th>
          </tr>
          </thead>
          <tbody>
          <tr>
            <td>1</td>
            <td>Pembayaran Reuni</td>
            <td>01251016</td>
            <td>Pembayaran untuk menghadiri acara reuni.</td>
            <td>Rp. 250.000,-</td>
          </tr>
          </tbody>
        </table>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <div class="row">
      <!-- accepted payments column -->
      <div class="col-6">
        <p class="lead">Payment Methods:</p>
        <img src="<?= base_url('assets') ?>/dist/img/credit/visa.png" alt="Visa">
        <img src="<?= base_url('assets') ?>/dist/img/credit/mastercard.png" alt="Mastercard">
        <img src="<?= base_url('assets') ?>/custom/Dana_Logo.png" width="80px" alt="Dana">
        <img src="<?= base_url('assets') ?>/custom/shopee.png" width="80px" alt="Shopee">

      </div>
      <!-- /.col -->
      <div class="col-6">
        <p class="lead">Amount Due 22/06/2024</p>

        <div class="table-responsive">
          <table class="table">
            <tr>
              <th style="width:50%">Subtotal:</th>
              <td>Rp. 250.000,-</td>
            </tr>
            <tr>
              <th>Total:</th>
              <td>Rp. 250.000,-</td>
            </tr>
          </table>
        </div>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- ./wrapper -->

<script type="text/javascript"> 
  window.addEventListener("load", window.print());
</script>
</body>
</html>
