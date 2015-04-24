<?php
/**
 * @var $this Cake\View\View
 */
?>
<div class="row alert alert-success row-black social-media-strip">
    <div class="container">
        <div class="col-sm-6 col-md-8">
            <div class="btn-toolbar">
                <?php
                $fbLink = $this->Html->tag('i', '', array('class' => 'fa fa-facebook-square fa-2x'));
                echo $this->Html->link($fbLink, '#', array('escape' => false));
                ?>

                <?php
                $twitterLink = $this->Html->tag('i', '', array('class' => 'fa fa-twitter-square fa-2x'));
                echo $this->Html->link($twitterLink, '#', array('escape' => false));
                ?>

                <?php
                $youtubeLink = $this->Html->tag('i', '', array('class' => 'fa fa-youtube-square fa-2x'));
                echo $this->Html->link($youtubeLink, '#', array('escape' => false));
                ?>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="btn-toolbar">
                <?php
                $contactLink = $this->Html->tag('i', '', array('class' => 'fa fa-envelope fa-2x'));
                echo $this->Html->link($contactLink . ' ' . __('Contact Us'), '#', array('escape' => false, 'class' => ''));
                ?>

                <?php
                $emailLink = $this->Html->tag('i', '', array('class' => 'fa fa-at  fa-2x'));
                echo $this->Html->link($emailLink . ' ' . 'info@shesagermany.org', 'mailto:info@shesagermany.org', array('escape' => false));
                ?>
            </div>
        </div>
    </div>
</div>