<?php
/**
 * @var $this Cake\View\View
 */
?>
<div class="row alert alert-success row-black social-media-strip">
    <div class="container">
        <div class="col-sm-6 col-md-8">
            <div class="btn-toolbar">
                <div class="btn-group">
                    <?php
                    $fbLink = $this->Html->tag('i', '', array('class' => 'fa fa-facebook-square fa-2x'));
                    $fbUrl = $this->Url->build('https://www.facebook.com/shesa.germany');
                    echo $this->Html->link($fbLink, $fbUrl, array('escape' => false, 'target' => '_blank'));
                    ?>

                    <?php
                    $twitterLink = $this->Html->tag('i', '', array('class' => 'fa fa-twitter-square fa-2x'));
                    $twitterUrl = $this->Url->build('https://twitter.com/shesagermanyev');
                    echo $this->Html->link($twitterLink, $twitterUrl, array('escape' => false, 'target' => '_blank'));
                    ?>

                    <?php
                    $googlePlusLink = $this->Html->tag('i', '', array('class' => 'fa fa-google-plus-square fa-2x'));
                    $googlePlusUrl = $this->Url->build('https://www.google.com/+ShesaGermanyOrgEV');
                    echo $this->Html->link($googlePlusLink, $googlePlusUrl, array('escape' => false, 'target' => '_blank'));
                    ?>

                    <?php
                    $youtubeLink = $this->Html->tag('i', '', array('class' => 'fa fa-youtube-square fa-2x'));
                    $youtubeUrl = $this->Url->build('http://www.youtube.com/c/ShesaGermanyOrgEV');
                    echo $this->Html->link($youtubeLink, $youtubeUrl, array('escape' => false, 'target' => '_blank'));
                    ?>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="btn-toolbar row">
                <div class="btn-group">
                    <?php
                    $contactLink = $this->Html->tag('i', '', array('class' => 'fa fa-envelope fa-2x'));
                    echo $this->Html->link($contactLink . ' ' . __('Contact Us'), array('controller' => 'contacts'), array('escape' => false, 'class' => ''));
                    ?>
                </div>
                <div class="btn-group">
                    <?php
                    $emailLink = $this->Html->tag('i', '', array('class' => 'fa fa-at fa-2x'));
                    echo $this->Html->link($emailLink . ' ' . 'info@shesagermany.org', 'mailto:info@shesagermany.org', array('escape' => false));
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>