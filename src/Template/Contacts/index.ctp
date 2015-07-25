<?php
/**
 * @var $this \Cake\View\View
 */
$this->assign('title', __('Contact Us'));
?>
<div class="wrap row">
    <div class="container">
        <div class="col-md-12">
            <?= $this->element('page_title') ?>
            <div class="panel panel-default">
                <div class="panel-heading"><h4 class="text-primary"><i class="fa fa-info-circle fa-2x"></i> <strong>SHESA
                            Germany e.V. Convention 2015</strong></h4></div>
                <div class="panel-body">
                    <p>You are all cordially invited to SHESA Germany's convention for the year 2015. You can contact us
                        through one of the following means:</p>

                    <div class="row">
                        <strong>
                            <div class="col-md-2"><i class="fa fa-mobile text-primary"></i> 015218129920</div>
                            <div class="col-md-2"><i class="fa fa-mobile text-primary"></i> 015216995224</div>
                            <div class="col-md-2"><i class="fa fa-mobile text-primary"></i> 01799469539</div>
                            <div class="col-md-3"><i class="fa fa-at text-primary"></i> <?= $this->Html->link('info@shesagermany.org', 'mailto:info@shesagermany.org', array('escape' => false))?></div>
                        </strong>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p class="fa-2x">
                        Would you like to find out more about <span class="text-primary">SHESA Germany e.V.</span> or join us in being a positive influence on society?
                    </p>
                    <p class="fa-2x">Contact us:</p>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4><i class="fa fa-envelope text-primary"></i><strong> Contact</strong></h4>
                        </div>
                        <div class="panel-body">
                            <address>
                                <strong>SHESA GERMANY e.V</strong> <br>
                                <?php
                                $emailLink = $this->Html->tag('i', '', array('class' => 'fa fa-at'));
                                echo $this->Html->link($emailLink . ' info@shesagermany.org', 'mailto:info@shesagermany.org', array('escape' => false));
                                ?>
                                <br>
                                <?php
                                $websiteLink = $this->Html->tag('i', '', array('class' => 'fa fa-globe'));
                                echo $this->Html->link($websiteLink . ' www.shesagermany.org', '/', array('escape' => false));
                                ?>
                            </address>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4><i class="fa fa-map-marker text-primary"></i><strong> Social</strong></h4>
                        </div>
                        <div class="panel-body">
                            <address>
                                <strong>SHESA GERMANY e.V</strong> <br>
                                <?php
                                $fbLink = $this->Html->tag('i', '', array('class' => 'fa fa-facebook-square fa-3x'));
                                $fbUrl = $this->Url->build('https://www.facebook.com/shesa.germany');
                                echo $this->Html->link($fbLink, $fbUrl, array('escape' => false, 'target' => '_blank'));
                                ?>

                                <?php
                                $twitterLink = $this->Html->tag('i', '', array('class' => 'fa fa-twitter-square fa-3x'));
                                $twitterUrl = $this->Url->build('https://twitter.com/shesagermanyev');
                                echo $this->Html->link($twitterLink, $twitterUrl, array('escape' => false, 'target' => '_blank'));
                                ?>

                                <?php
                                $googlePlusLink = $this->Html->tag('i', '', array('class' => 'fa fa-google-plus-square fa-3x'));
                                $googlePlusUrl = $this->Url->build('https://www.google.com/+ShesaGermanyOrgEV');
                                echo $this->Html->link($googlePlusLink, $googlePlusUrl, array('escape' => false, 'target' => '_blank'));
                                ?>

                                <?php
                                $youtubeLink = $this->Html->tag('i', '', array('class' => 'fa fa-youtube-square fa-3x'));
                                $youtubeUrl = $this->Url->build('http://www.youtube.com/c/ShesaGermanyOrgEV');
                                echo $this->Html->link($youtubeLink, $youtubeUrl, array('escape' => false, 'target' => '_blank'));
                                ?>
                            </address>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4><i class="fa fa-map-marker text-primary"></i><strong> Location</strong></h4>
                        </div>
                        <div class="panel-body">
                            <address>
                                <strong>SHESA GERMANY e.V</strong> <br>
                                Postfach 10 11 10 <br>
                                47011 Duisburg <br>
                                </address>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>