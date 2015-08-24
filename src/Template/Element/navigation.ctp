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
            <a class="navbar-brand" href="<?= $this->Url->build('/') ?>">
                <?= $this->Html->image('logo-xl.png', array('alt' => "SHESA Germany", 'height' => '140px')); ?>
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <?php
            $homeActive = 'active';
            $aboutActive = $EventsActive = $ProjectsActive = $ExecutiveActive = $MediaActive = $PartnersActive = $ContactsActive = '';
            $controller = $this->request->param('controller');
            if ('Pages' == $controller && in_array($this->request->param('pass.0'), ['about_sg', 'about_saheco'])) {
                $aboutActive = 'active';
            }
            $activeVariable = "{$controller}Active";
            $$activeVariable = 'active';
            if ($aboutActive || $EventsActive || $ProjectsActive || $ExecutiveActive || $MediaActive || $PartnersActive || $ContactsActive) {
                $homeActive = '';
            }
            ?>
            <ul class="nav navbar-nav navbar-right text-center">
                <li class="<?= $homeActive ?> hidden-sm">
                    <?php
                    $icon = $this->Html->tag('i', '', array('class' => 'fa fa-home fa-2x'));
                    $br = $this->Html->tag('br');
                    $text = $this->Html->tag('strong', 'home', array('class' => 'text-uppercase'));
                    echo $this->Html->link($icon . $br . $text, '/', array('escape' => false));
                    ?>
                </li>
                <li class="<?= $aboutActive ?>">
                    <?php
                    $icon = $this->Html->tag('i', '', array('class' => 'fa fa-university fa-2x'));
                    $br = $this->Html->tag('br');
                    $text = $this->Html->tag('strong', 'about', array('class' => 'text-uppercase'));
                    $caret = $this->Html->tag('i', '', array('class' => 'fa fa-caret-down'));
                    echo $this->Html->link($icon . $br . $text . $br . $caret, '#', array(
                        'escape' => false,
                        'class' =>
                            'dropdown-toggle',
                        'data-toggle' => 'dropdown',
                        'role' => 'button',
                        'aria-expanded' => 'false'
                    ));
                    ?>
                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <?= $this->Html->link(__('SHESA Germany e.V'),
                                array('controller' => 'pages', 'action' => 'about_sg')) ?>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <?= $this->Html->link(__('Sacred Heart College Mankon'),
                                array('controller' => 'pages', 'action' => 'about_saheco')) ?>
                        </li>
                    </ul>
                </li>
                <li class="<?= $EventsActive ?>">
                    <?php
                    $icon = $this->Html->tag('i', '', array('class' => 'fa fa-calendar fa-2x'));
                    $br = $this->Html->tag('br');
                    $text = $this->Html->tag('strong', 'events', array('class' => 'text-uppercase'));
                    $caret = $this->Html->tag('i', '', array('class' => 'fa fa-caret-down'));
                    echo $this->Html->link($icon . $br . $text . $br . $caret, '#', array(
                        'escape' => false,
                        'class' =>
                            'dropdown-toggle',
                        'data-toggle' => 'dropdown',
                        'role' => 'button',
                        'aria-expanded' => 'false'
                    ));
                    ?>
                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <?= $this->Html->link(__('Events'), array('controller' => 'events')) ?>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <?= $this->Html->link(__('Upcoming Events'),
                                array('controller' => 'events', 'action' => 'upcoming')) ?>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <?= $this->Html->link(__('Past Events'),
                                array('controller' => 'events', 'action' => 'past')) ?>
                        </li>
                    </ul>
                </li>
                <li class="<?= $ProjectsActive ?>">
                    <?php
                    $icon = $this->Html->tag('i', '', array('class' => 'fa fa-lightbulb-o fa-2x'));
                    $br = $this->Html->tag('br');
                    $text = $this->Html->tag('strong', 'projects', array('class' => 'text-uppercase'));
                    $caret = $this->Html->tag('i', '', array('class' => 'fa fa-caret-down'));
                    echo $this->Html->link($icon . $br . $text . $br . $caret, '#', array(
                        'escape' => false,
                        'class' =>
                            'dropdown-toggle',
                        'data-toggle' => 'dropdown',
                        'role' => 'button',
                        'aria-expanded' => 'false'
                    ));
                    ?>
                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <?= $this->Html->link(__('Projects'), array('controller' => 'projects')) ?>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <?= $this->Html->link(__('Running Projects'),
                                array('controller' => 'projects', 'action' => 'running')) ?>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <?= $this->Html->link(__('Completed Projects'),
                                array('controller' => 'projects', 'action' => 'completed')) ?>
                        </li>
                    </ul>
                </li>
                <!--<li class="<? /*= $ExecutiveActive */ ?>">
                    <?php
                /*                    $icon = $this->Html->tag('i', '', array('class' => 'fa fa-users fa-2x'));
                                    $br = $this->Html->tag('br');
                                    $text = $this->Html->tag('strong', 'executive', array('class' => 'text-uppercase'));
                                    $caret = $this->Html->tag('i', '', array('class' => 'fa fa-caret-down'));
                                    echo $this->Html->link($icon . $br . $text . $br . $caret, '#', array(
                                        'escape' => false,
                                        'class' =>
                                            'dropdown-toggle',
                                        'data-toggle' => 'dropdown',
                                        'role' => 'button',
                                        'aria-expanded' => 'false'
                                    ));
                                    */ ?>
                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <? /*= $this->Html->link(__('Current Executive'), array('controller' => 'executive', 'action' => 'current'))*/ ?>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <? /*= $this->Html->link(__('Past Executive'), array('controller' => 'executive', 'action' => 'past'))*/ ?>
                        </li>
                    </ul>
                </li>-->
                <!--<li class="<? /*= $MediaActive */ ?>">
                    <?php
                /*                    $icon = $this->Html->tag('i', '', array('class' => 'fa fa-camera-retro fa-2x'));
                                    $br = $this->Html->tag('br');
                                    $text = $this->Html->tag('strong', __('media'), array('class' => 'text-uppercase'));
                                    $caret = $this->Html->tag('i', '', array('class' => 'fa fa-caret-down'));
                                    echo $this->Html->link($icon . $br . $text . $br . $caret, '#', array(
                                        'escape' => false,
                                        'class' =>
                                            'dropdown-toggle',
                                        'data-toggle' => 'dropdown',
                                        'role' => 'button',
                                        'aria-expanded' => 'false'
                                    ));
                                    */ ?>
                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <? /*= $this->Html->link(__('Photos'), array('controller' => 'media', 'action' => 'photos')) */ ?>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <? /*= $this->Html->link(__('Videos'), array('controller' => 'media', 'action' => 'videos')) */ ?>
                        </li>
                    </ul>
                </li>-->
                <!--<li class="<? /*= $PartnersActive */ ?> hidden-sm">
                    <?php
                /*                    $icon = $this->Html->tag('i', '', array('class' => 'fa fa-exchange fa-2x'));
                                    $br = $this->Html->tag('br');
                                    $text = $this->Html->tag('strong', __('partners'), array('class' => 'text-uppercase'));
                                    echo $this->Html->link($icon . $br . $text . $br, array('controller' => 'partners'), array('escape' => false));
                                    */ ?>
                </li>-->
                <li class="<?= $ContactsActive ?>">
                    <?php
                    $icon = $this->Html->tag('i', '', array('class' => 'fa fa-envelope-o fa-2x'));
                    $br = $this->Html->tag('br');
                    $text = $this->Html->tag('strong', __('contact'), array('class' => 'text-uppercase'));
                    echo $this->Html->link($icon . $br . $text . $br, array('controller' => 'contacts'), array('escape' => false));
                    ?>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>