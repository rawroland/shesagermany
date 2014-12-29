<?php
/**
 * @var $this Cake\View\View
 */
?>
<div class="row alert alert-success">
  <div class="col-xs-12 col-sm-6">
    <?php
    $fbLink = $this->Html->tag('i', '', array('class' => 'fa fa-facebook-square fa-2x'));
    echo $this->Html->link($fbLink, '#', array('escape' => false)).' ';

    $twitterLink = $this->Html->tag('i', '', array('class' => 'fa fa-twitter-square fa-2x'));
    echo $this->Html->link($twitterLink, '#', array('escape' => false)).' ';


    ?>
  </div>
  <div class="col-xs-12 col-sm-4">
    <?php
    $emailLink = $this->Html->tag('i', '', array('class' => 'fa fa-at'));
    echo $this->Html->link($emailLink.' '.'info@shesagermany.org', 'mailto:info@shesagermany.org', array('escape' => false));
    ?>
    <br>
    Shesa Germany (SG) e.V. <br>
    Postfach 6151 <br>
    58430 Witten <br>
  </div>
</div>