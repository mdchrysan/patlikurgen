<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?= base_url() ?>/logo24.jpg" type="image/x-icon">
    <link rel="stylesheet" href="/style.css">
    <title><?= $title; ?></title>
</head>

<body>

    <!-- navbar here -->
    <?= $this->include('layout/navbar'); ?>

    <!-- content here -->
    <?= $this->renderSection('content'); ?>

</body>

</html>