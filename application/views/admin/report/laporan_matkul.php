<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>

  <link rel="stylesheet" href="<?= base_url('assets') ?>/dist/css/adminlte.min.css">

    <style>
        .table-bordered th,
        .table-bordered thead th,
        .table-bordered td {
            border: 1px solid #000;
        }
    </style>
</head>
<body>
    <div class="container">
        <h3>Yonsei Univercity</h3>
        <small>50 Yonsei-ro Seodaemun-gu</small>
        <hr>
        <h4 class="text-center">LAPORAN MATA KULIAH</h4>

        <table class="table table-bordered table-sm">
            <tr>
                <th class="text-center" width="80px">No</th>
                <th>Nama Mata Kuliah</th>
                <th>jumlah SKS</th>
                <th>Nama Dosen</th>
            </tr>
            <?php $no=1; foreach($matkul as $m) { ?>
            <tr>
                <td class="text-center"><?= $no; ?></td>
                <td><?= $m['nama_matkul'] ?></td>
                <td><?= $m['jml_sks'] ?></td>
                <td><?= $m['nama_dosen'] ?></td>
            </tr>
            <?php $no++; } ?>
        </table>
        <br>
        <table width="100%">
            <tr>
                <td></td>
                <td width="300px">
                    <p>
                        Seoul, <?= date('d-F-Y'); ?>
                        <br>
                        Manager,
                        <br><br><br><br>
                        <b>Shallum Shafhah A.</b>
                    </p>
                </td>
            </tr>
        </table>
    </div>
    <!-- jQuery -->
<script src="<?= base_url('assets') ?>/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('assets') ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="<?= base_url('assets') ?>/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets') ?>/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url('assets') ?>/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url('assets') ?>/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
</body>
</html>