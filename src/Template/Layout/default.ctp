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
    <!-- Bootstrap core CSS -->
    <?= $this->Html->css('bootstrap-3.3.1/dist/css/bootstrap.css') ?>
    <!-- Font awesome core CSS -->
    <?= $this->Html->css('font-awesome-4.2.0/font-awesome-4.2.0/css/font-awesome.css') ?>
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

    <?= $this->fetch('content'); ?>
    <?= $this->element('footer'); ?>

    <?= $this->Html->script('jquery-1.11.2') ?>
    <?= $this->fetch('script') ?>
  </body>
</html>

