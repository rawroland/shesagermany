<?php
/**
 * @var $this \Cake\View\View
 */
?>
<div class="wrap row">
    <div class="container">
        <?php
        $data = [
            'header' => __('Events'),
            'links' => [
                __('All Events') => ['controller' => 'events', 'action' => 'index'],
                __('Upcoming Events') => ['controller' => 'events', 'action' => 'upcoming'],
                __('Past Events') => ['controller' => 'events', 'action' => 'past'],
            ]
        ];
        echo $this->element('sidebar', $data);
        ?>

        <div class="col-md-9">
            <h2><?= $pageTitle ?></h2>
            <?php foreach ($events as $event): ?>
                <div class="row">
                    <div class="col-md-9 col-md-push-3">
                        <h3><?= $event->title ?></h3>
                        <div class="row">
                            <div class="col-md-12">
                                <i class="fa fa-calendar-o"></i>&nbsp;
                                <?=
                                $event->date->i18nFormat(__('d.M.Y'))
                                ?>
                            </div>
                            <div class="col-md-12">
                                <i class="fa fa-map-marker"></i>&nbsp;<?= $event->location ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-md-pull-9">
                        <?= $this->Html->image($event->getCoverImage(), ['class' => 'img-responsive img-thumbnail']);?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>