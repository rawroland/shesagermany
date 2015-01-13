<?php
/**
 * @var $this \Cake\View\View
 */
?>
<nav class="navbar navbar-default">
  <div class="container container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
              data-target="#navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">
        <?= $this->Html->image('logo.png', array('alt' => "SHESA Germany"));?>
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="navbar-collapse">
      <ul class="nav navbar-nav navbar-right text-center text-uppercase">
        <li class="active hidden-sm">
          <a href="#">
            <i class="fa fa-home fa-2x"></i><br>
            <strong>Home <span class="sr-only">(current)</span></strong>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-university fa-2x"></i><br>
            <strong>About</strong>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-calendar fa-2x"></i><br>
            <strong>Events</strong>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-lightbulb-o fa-2x"></i><br>
            <strong>Projects</strong>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-users fa-2x"></i><br>
            <strong>Executive</strong>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-home fa-2x"></i><br>
            <strong>Media</strong>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-home fa-2x"></i><br>
            <strong>Sponsors</strong>
          </a>
        </li>
        <li class="hidden-sm">
          <a href="#">
            <i class="fa fa-envelope-o fa-2x"></i><br>
            <strong>Contact</strong>
          </a>
        </li>
      </ul>
    </div>
    <!-- /.navbar-collapse -->
  </div>
  <!-- /.container-fluid -->
</nav>