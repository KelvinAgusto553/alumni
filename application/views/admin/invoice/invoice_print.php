<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Invoice</title>
    <link rel="stylesheet" href="<?= base_url('assets') ?>/invoice/style.css" media="all" />
  </head>
  <body>
    <header class="clearfix">
      <div id="logo">
      <img src="<?= base_url('assets') ?>/custom/yonsei.png" width="70px" alt="yonsei">
      </div>
      <div id="company">
        <h2 class="name">Yonsei Univercity</h2>
        <div>50 Yonsei-ro Seodaemun-gu, Seoul, 03722, Republic of Korea</div>
        <div>0857-8289-1679</div>
        <div><a href="www.yonsei.ac.kr">www.yonsei.ac.kr</a></div>
      </div>
      </div>
    </header>
    <main>
      <div id="details" class="clearfix">
        <div id="client">
          <div class="to">INVOICE TO:</div>
          <h2 class="name"><?= $a['nama_alumni']; ?></h2>
          <div class="address"><?= $a['alamat']; ?>, Kec. <?= $a['kecamatan']; ?>, <?= $a['kota']; ?> <?= $a['kode_pos']; ?></div>
          <div><?= $a['telepon'] ?></div>
        </div>
        <div id="invoice">
          <h1>INVOICE</h1>
          <div class="date">Date of Invoice: <?= date('d/m/Y'); ?></div>
          <div class="date">Due Date: 31/12/2024</div>
        </div>
      </div>
      <table border="0" cellspacing="0" cellpadding="0">
        <thead>
          <tr>
            <th class="no">#</th>
            <th class="desc">DESCRIPTION</th>
            <th class="unit">UNIT PRICE</th>
            <th class="qty">QUANTITY</th>
            <th class="total">TOTAL</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="no">01</td>
            <td class="desc"><h3>Pembayaran Reuni</h3>Pembayaran untuk menghadiri acara reuni.</td>
            <td class="unit">Rp. 250.000,-</td>
            <td class="qty">1</td>
            <td class="total">Rp. 250.000,-</td>
          </tr>
        </tbody>
        <tfoot>
          <tr>
            <td colspan="2"></td>
            <td colspan="2">GRAND TOTAL</td>
            <td>Rp. 250.000,-</td>
          </tr>
        </tfoot>
      </table>
      <div id="thanks">Thank you!</div>
      <div id="notices">
        <div>NOTICE:</div>
        <div class="notice"></div>
      </div>
    </main>
    <footer>
      Invoice was created on a computer and is valid without the signature and seal.
    </footer>

    <script type="text/javascript"> 
  window.addEventListener("load", window.print());
</script>
  </body>
</html>