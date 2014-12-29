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
  <!-- Bootstrap core CSS -->
  <?= $this->Html->css('bootstrap-3.3.1/dist/css/bootstrap.css') ?>
  <!-- SG styles-->
  <?= $this->Html->css('sg-styles.css') ?>


  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <title>
    SHESA Germany e.V. |
    <?= $title ?>
  </title>
</head>
<?= $this->element('social-media-strip'); ?>
<body>

</body>
</html>
