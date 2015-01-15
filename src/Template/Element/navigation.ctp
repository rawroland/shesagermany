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
      <ul class="nav navbar-nav navbar-right text-center">
        <li class="active hidden-sm">
          <a href="#">
            <i class="fa fa-home fa-2x"></i><br>
            <strong>HOME <span class="sr-only">(current)</span></strong>
          </a>
        </li>
        <li>
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
            <i class="fa fa-university fa-2x"></i><br>
            <strong>
              ABOUT<br>
              <i class="fa fa-caret-down"></i>
            </strong>
          </a>
          <ul class="dropdown-menu text-" role="menu">
            <li>
              <?= $this->Html->link('SHESA Germany e.V', array('controller' => 'pages', 'action' => 'about_sg'))?>
            </li>
            <li class="divider"></li>
            <li>
              <?= $this->Html->link('Sacred Heart College Mankon', array('controller' => 'pages', 'action' => 'about_sg'))?>
            </li>
          </ul>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-calendar fa-2x"></i><br>
            <strong>EVENTS</strong>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-lightbulb-o fa-2x"></i><br>
            <strong>PROJECTS</strong>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-users fa-2x"></i><br>
            <strong>EXECUTIVE</strong>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-camera-retro fa-2x"></i><br>
            <strong>MEDIA</strong>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-home fa-2x"></i><br>
            <strong>SPONSORS</strong>
          </a>
        </li>
        <li class="hidden-sm">
          <a href="#">
            <i class="fa fa-envelope-o fa-2x"></i><br>
            <strong>CONTACT</strong>
          </a>
        </li>
      </ul>
    </div>
    <!-- /.navbar-collapse -->
  </div>
  <!-- /.container-fluid -->
</nav>