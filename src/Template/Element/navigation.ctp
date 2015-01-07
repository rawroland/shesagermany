<?php
/**
 * @var $this \Cake\View\View
 */
?>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
              data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">
        <?= $this->Html->image('logo.png', array('alt' => "SHESA Germany", 'class' => 'brand-image'));?>
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="#">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Events</a></li>
        <li><a href="#">Projects</a></li>
        <li><a href="#">Link</a></li>
        <li><a href="#">Link</a></li>
        <li><a href="#">Link</a></li>
        <li><a href="#">Media</a></li>
        <li><a href="#">Sponsors</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </div>
    <!-- /.navbar-collapse -->
  </div>
  <!-- /.container-fluid -->
</nav>