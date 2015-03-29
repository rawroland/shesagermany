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
            <?= $this->element('page_title') ?>
            <?php
            $eventUrlArray = [
                'controller' => 'events',
                'action' => 'view',
                $event->id,
            ];
            $eventUrl = $this->Url->build($eventUrlArray);
            ?>
            <div class="row">
                <div class="col-md-4 col-sm-4 text-muted">
                    <i class="fa fa-calendar-o fa-2x"></i>&nbsp;
                    <?= $this->Time->format($event->start, __('dd.MM.Y')) ?>
                    <i class="fa fa-arrow-right"></i>
                    <?= $this->Time->format($event->end, __('dd.MM.Y')) ?>
                </div>
                <div class="col-md-8 col-sm-8 text-muted">
                    <i class="fa fa-map-marker fa-2x"></i>&nbsp;
                    <?= $event->location ?>
                </div>
            </div>
            <div class="row">
                <p class="col-md-12 top-md-offset blog-main">
                    <?= $this->Html->image($event->getCoverImage(), ['class' => 'img-responsive pull-left', 'url' => $eventUrl]);?>
                    <?= $event->description ?>
                </p>
                <?php if (!empty($event->activities)): ?>
                    <div class="col-md-12">
                        <h2><?= __('Activities') ?></h2>
                        <?php foreach ($event->activities as $activity):?>
                            <h3><?= $activity->title?></h3>
                            <div class="row">
                                <div class="col-md-12 text-muted">
                                    <i class="fa fa-clock-o"></i>&nbsp;
                                    <?= $this->Time->format($activity->start_time, __('dd.MM.Y H:mm')) ?>
                                    <i class="fa fa-arrow-right"></i>
                                    <?= $this->Time->format($activity->end_time, __('dd.MM.Y H:mm')) ?>
                                </div>
                            </div>
                        <?php endforeach;?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>