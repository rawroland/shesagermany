<?php
/**
 * @var $this \Cake\View\View
 * @todo New array syntax
 * @todo Translation method for link titles
 */
?>
<nav class="navbar navbar-default sg-navigation">
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
        <?= $this->Html->image('logo-xl.png', array('alt' => "SHESA Germany", 'height' => '140px')); ?>
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="navbar-collapse">
      <ul class="nav navbar-nav navbar-right text-center">
        <li class="active hidden-sm">
          <?php
          $icon = $this->Html->tag('i', '', array('class' => 'fa fa-home fa-2x'));
          $br = $this->Html->tag('br');
          $text = $this->Html->tag('strong', 'home', array('class' => 'text-uppercase'));
          echo $this->Html->link($icon . $br . $text, '/', array('escape' => false));
          ?>
        </li>
        <li>
          <?php
          $icon = $this->Html->tag('i', '', array('class' => 'fa fa-university fa-2x'));
          $br = $this->Html->tag('br');
          $text = $this->Html->tag('strong', 'about', array('class' => 'text-uppercase'));
          $caret = $this->Html->tag('i', '', array('class' => 'fa fa-caret-down'));
          echo $this->Html->link($icon . $br . $text . $br . $caret, '#', array('escape' => false, 'class' =>
            'dropdown-toggle', 'data-toggle' => 'dropdown', 'role' => 'button', 'aria-expanded' => 'false'));
          ?>
          <ul class="dropdown-menu" role="menu">
            <li>
              <?= $this->Html->link('SHESA Germany e.V', array('controller' => 'pages', 'action' => 'about_sg')) ?>
            </li>
            <li class="divider"></li>
            <li>
              <?= $this->Html->link('Sacred Heart College Mankon', array('controller' => 'pages', 'action' =>
                'about_saheco')) ?>
            </li>
          </ul>
        </li>
        <li>
          <?php
          $icon = $this->Html->tag('i', '', array('class' => 'fa fa-calendar fa-2x'));
          $br = $this->Html->tag('br');
          $text = $this->Html->tag('strong', 'events', array('class' => 'text-uppercase'));
          $caret = $this->Html->tag('i', '', array('class' => 'fa fa-caret-down'));
          echo $this->Html->link($icon . $br . $text . $br . $caret, '#', array('escape' => false, 'class' =>
            'dropdown-toggle', 'data-toggle' => 'dropdown', 'role' => 'button', 'aria-expanded' => 'false'));
          ?>
          <ul class="dropdown-menu" role="menu">
            <li>
              <?= $this->Html->link('All Events', array('controller' => 'events', 'action' => 'index')) ?>
            </li>
            <li class="divider"></li>
            <li>
              <?= $this->Html->link('Upcoming Events', array('controller' => 'events', 'action' => 'upcoming')) ?>
            </li>
            <li class="divider"></li>
            <li>
              <?= $this->Html->link('Past Events', array('controller' => 'events', 'action' =>
                'past')) ?>
            </li>
          </ul>
        </li>
        <li>
          <?php
          $icon = $this->Html->tag('i', '', array('class' => 'fa fa-lightbulb-o fa-2x'));
          $br = $this->Html->tag('br');
          $text = $this->Html->tag('strong', 'projects', array('class' => 'text-uppercase'));
          $caret = $this->Html->tag('i', '', array('class' => 'fa fa-caret-down'));
          echo $this->Html->link($icon . $br . $text . $br . $caret, '#', array('escape' => false, 'class' =>
            'dropdown-toggle', 'data-toggle' => 'dropdown', 'role' => 'button', 'aria-expanded' => 'false'));
          ?>
          <ul class="dropdown-menu" role="menu">
            <li>
              <?= $this->Html->link('Running Projects', array('controller' => 'projects', 'action' => 'running')) ?>
            </li>
            <li class="divider"></li>
            <li>
              <?= $this->Html->link('Past Projects', array('controller' => 'projects', 'action' =>
                'past')) ?>
            </li>
          </ul>
        </li>
        <li>
          <?php
          $icon = $this->Html->tag('i', '', array('class' => 'fa fa-users fa-2x'));
          $br = $this->Html->tag('br');
          $text = $this->Html->tag('strong', 'executive', array('class' => 'text-uppercase'));
          $caret = $this->Html->tag('i', '', array('class' => 'fa fa-caret-down'));
          echo $this->Html->link($icon . $br . $text . $br . $caret, '#', array('escape' => false, 'class' =>
            'dropdown-toggle', 'data-toggle' => 'dropdown', 'role' => 'button', 'aria-expanded' => 'false'));
          ?>
          <ul class="dropdown-menu" role="menu">
            <li>
              <?= $this->Html->link('Current Executive', array('controller' => 'executive', 'action' => 'current')) ?>
            </li>
            <li class="divider"></li>
            <li>
              <?= $this->Html->link('Past Executive', array('controller' => 'executive', 'action' =>
                'past')) ?>
            </li>
          </ul>
        </li>
        <li>
          <?php
          $icon = $this->Html->tag('i', '', array('class' => 'fa fa-camera-retro fa-2x'));
          $br = $this->Html->tag('br');
          $text = $this->Html->tag('strong', 'media', array('class' => 'text-uppercase'));
          $caret = $this->Html->tag('i', '', array('class' => 'fa fa-caret-down'));
          echo $this->Html->link($icon . $br . $text . $br . $caret, '#', array('escape' => false, 'class' =>
            'dropdown-toggle', 'data-toggle' => 'dropdown', 'role' => 'button', 'aria-expanded' => 'false'));
          ?>
          <ul class="dropdown-menu" role="menu">
            <li>
              <?= $this->Html->link('Photos', array('controller' => 'media', 'action' => 'photos')) ?>
            </li>
            <li class="divider"></li>
            <li>
              <?= $this->Html->link('Videos', array('controller' => 'media', 'action' =>
                'videos')) ?>
            </li>
          </ul>
        </li>
        <li class="hidden-sm">
          <?php
          $icon = $this->Html->tag('i', '', array('class' => 'fa fa-exchange fa-2x'));
          $br = $this->Html->tag('br');
          $text = $this->Html->tag('strong', 'partners', array('class' => 'text-uppercase'));
          echo $this->Html->link($icon . $br . $text . $br, array('controller' => 'partners'), array('escape' => false));
          ?>
        </li>
        <li class="hidden-sm">
          <?php
          $icon = $this->Html->tag('i', '', array('class' => 'fa fa-envelope-o fa-2x'));
          $br = $this->Html->tag('br');
          $text = $this->Html->tag('strong', 'contact', array('class' => 'text-uppercase'));
          echo $this->Html->link($icon . $br . $text . $br, array('controller' => 'contacts'), array('escape' =>
            false));
          ?>
        </li>
      </ul>
    </div>
    <!-- /.navbar-collapse -->
  </div>
  <!-- /.container-fluid -->
</nav>