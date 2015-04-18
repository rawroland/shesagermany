<?php
/**
 * @var $this \Cake\View\View
 */
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <?= $this->Html->meta('icon') ?>
    <?= $this->fetch('meta') ?>
    <link type="text/css" rel="stylesheet"
          href="<?= $this->request->webroot ?>plugins/bootstrap/dist/css/bootstrap.css">
    <link type="text/css" rel="stylesheet"
          href="<?= $this->request->webroot ?>plugins/fontawesome/css/font-awesome.css">
    <!-- SG styles-->
    <?= $this->Html->css('sg-styles.css') ?>
    <?= $this->fetch('css') ?>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <title>
        SHESA Germany e.V. |
        <?= $this->fetch('title'); ?>
    </title>
</head>
<body>
<?= $this->element('social-media-strip'); ?>
<?= $this->element('header'); ?>
<div id="content">
    <?= $this->fetch('content'); ?>
    <div class="push"></div>
</div>
<?= $this->element('footer'); ?>

<script type="text/javascript"  src="<?= $this->request->webroot ?>plugins/jquery/dist/jquery.js"></script>
<script type="text/javascript"  src="<?= $this->request->webroot ?>plugins/bootstrap/dist/js/bootstrap.js"></script>
<?= $this->Html->script('sg'); ?>
<?= $this->fetch('script') ?>
</body>
</html>

