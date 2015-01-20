<?php
/**
 * @var $this Cake\View\View
 */
?>
<div class="row alert alert-success row-black social-media-strip">
  <div class="container">
    <div class="col-xs-12 col-sm-6">
      <?php
      $fbLink = $this->Html->tag('i', '', array('class' => 'fa fa-facebook-square fa-2x small-padding-text'));
      echo $this->Html->link($fbLink, '#', array('escape' => false));

      $twitterLink = $this->Html->tag('i', '', array('class' => 'fa fa-twitter-square fa-2x small-padding-text'));
      echo $this->Html->link($twitterLink, '#', array('escape' => false));

      $googlePlusLink = $this->Html->tag('i', '', array('class' => 'fa fa-google-plus-square fa-2x small-padding-text'));
      echo $this->Html->link($googlePlusLink, '#', array('escape' => false));

      $youtubeLink = $this->Html->tag('i', '', array('class' => 'fa fa-youtube-square fa-2x small-padding-text'));
      echo $this->Html->link($youtubeLink, '#', array('escape' => false));
      ?>
    </div>
    <div class="col-xs-12 col-sm-6">
      <?php
      $contactLink = $this->Html->tag('i', '', array('class' => 'fa fa-envelope small-padding-text'));
      echo $this->Html->link($contactLink . 'Contact Us', '#', array('escape' => false, 'class' => 'medium-padding-text'));

      $emailLink = $this->Html->tag('i', '', array('class' => 'fa fa-at'));
      echo $this->Html->link($emailLink . ' ' . 'info@shesagermany.org', 'mailto:info@shesagermany.org', array('escape' => false));
      ?>
    </div>
  </div>
</div>