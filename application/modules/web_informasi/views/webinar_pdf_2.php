<!DOCTYPE html>
<html>

<head>
    <title><?= $webinar['nama_pendidik'] ?></title>
    <style type="text/css">
        img {
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
</head>

<body>
    <?php if ($webinar['webinar_2'] == '') { ?>
        Belum mengikuti webinar 2
    <?php } else { ?>
        <img src="<?= base_url() ?>panel/dist/upload/sertifikat_webinar/<?= $webinar['webinar_2'] ?>" alt="..."  style="width:100%;max-width:1000px">
    <?php } ?>
</body>

</html>