<?php
/**
 * @var $this Cake\View\View
 */
?>
<footer class="footer row-black">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-3">
                <dl>
                    <dt class="text-uppercase heading"><?= __('Shesa Germany'); ?></dt>
                    <dt class="">
                        <?= $this->Html->link(__('Home'), '/'); ?>
                    </dt>
                    <dt class="">
                        <?= $this->Html->link(__('SHESA Germany e.V'), array('controller' => 'pages', 'action' => 'about_sg')); ?>
                    </dt>
                    <dt class="">
                        <?= $this->Html->link(__('Sacred Heart College Mankon'), array('controller' => 'pages', 'action' => 'about_saheco')); ?>
                    </dt>
                </dl>
            </div>
            <div class="col-sm-6 col-md-3">
                <dl>
                    <dt class="text-uppercase heading"><?= __('Important Links'); ?></dt>
                    <dt class="">
                        <?= $this->Html->link(__('Events'), array('controller' => 'events')); ?>
                    </dt>
                    <!--<dt class="">
                        <? /*= $this->Html->link(__('Projects'), array('controller' => 'projects')); */ ?>
                    </dt>
                    <dt class="">
                        <? /*= $this->Html->link(__('Partners'), '/'); */ ?>
                    </dt>-->
                </dl>
            </div>
            <div class="col-sm-6 col-md-3">
                <!--<dl>
                    <dt class="text-uppercase heading"><? /*= __('Other Links'); */ ?></dt>
                    <dt class="">
                        <? /*= $this->Html->link(__('Media'), '/'); */ ?>
                    </dt>
                    <dt class="">
                        <? /*= $this->Html->link(__('Executive'), '/'); */ ?>
                    </dt>
                </dl>-->
            </div>
            <div class="col-sm-6 col-md-3">
                <address>
                    <strong>SHESA GERMANY e.V</strong> <br>
                    Postfach 10 11 10 <br>
                    47011 Duisburg <br>
                    <?php
                    $contactLink = $this->Html->tag('i', '', array('class' => 'fa fa-envelope'));
                    echo $this->Html->link($contactLink . ' ' . __('Contact Us'), ['controller' => 'contacts'], array('escape' => false));
                    ?>
                    <br>
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
        <div class="row">
            <p class="col-md-12">&copy; SHESA Germany e.V. <?= '2011 - ' . date('Y') ?></p>
        </div>
    </div>
</footer>