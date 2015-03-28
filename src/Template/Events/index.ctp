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
            <?= $this->element('page_title')?>
            <?php
            foreach ($events as $event):
                $eventUrlArray = [
                    'controller' => 'events',
                    'action' => 'view',
                    $event->id,
                ];
                $eventUrl = $this->Url->build( $eventUrlArray);
            ?>
                <div class="row bottom-md-offset pagination-element">
                    <div class="col-md-4 col-sm-4">
                        <?=
                        $this->Html->image($event->getCoverImage(),
                            ['class' => 'img-responsive img-thumbnail', 'url' => $eventUrl]
                        );
                        ?>
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <div class="row">
                            <div class="col-md-12">
                                <?php
                                $header = $this->Html->tag('h3', $event->title, ['class' => 'top-zero-offset']);
                                echo $this->Html->link($header, $eventUrl, ['escape' => false]);
                                ?>
                            </div>
                            <div class="col-md-6 col-sm-12 text-muted">
                                <i class="fa fa-calendar-o"></i>&nbsp;
                                <?= $this->Time->format($event->start, __('dd.MM.Y')) ?>
                                <i class="fa fa-arrow-right"></i>
                                <?= $this->Time->format($event->end, __('dd.MM.Y'))?>
                            </div>
                            <div class="col-md-6 col-sm-12 text-muted">
                                <i class="fa fa-map-marker"></i>&nbsp;
                                <?= $event->location ?>
                            </div>
                            <p class="col-md-12 text-justify top-md-offset">
                                <?= $this->Text->truncate($event->description, 200)?>
                            </p>
                            <?php if(!empty($event->activities)):?>
                                <div class="col-md-12">
                                    <h4><?= __('Activities');?></h4>
                                    <?php
                                    $activities = [];
                                    foreach($event->activities as $activity) {
                                        $activityUrlArray = array_merge($eventUrlArray, ['#' => $activity->id]);
                                        $activityUrl = $this->Url->build( $activityUrlArray);
                                        $mark = $this->Html->tag('mark', $activity->title);
                                        $activities[] = $this->Html->link($mark, $activityUrl, ['escape' => false]);
                                    }
                                    $activitiesText = implode('  ', $activities);
                                    echo $activitiesText;
                                    ?>
                                </div>
                            <?php endif;?>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <?= $this->Html->link(__('View details'), $eventUrl, ['class' => 'btn btn-primary top-sm-offset pull-right'])?>
                    </div>
                </div>
            <?php endforeach; ?>
            <div class="clearfix"></div>
            <div class="row paginator">
                <ul class="pagination pagination-lg pull-right">
                    <?= $this->Paginator->prev('< ' . __('previous')) ?>
                    <?= $this->Paginator->numbers() ?>
                    <?= $this->Paginator->next(__('next') . ' >') ?>
                </ul>
            </div>
        </div>
    </div>
</div>