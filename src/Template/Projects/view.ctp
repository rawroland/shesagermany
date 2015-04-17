<?php
/**
 * @var $this \Cake\View\View
 */
?>
<div class="wrap row">
    <div class="container">
        <?php
        $data = [
            'header' => __('Projects'),
            'links' => [
                __('All Projects') => ['controller' => 'projects', 'action' => 'index'],
                __('Upcoming Projects') => ['controller' => 'projects', 'action' => 'upcoming'],
                __('Past Projects') => ['controller' => 'projects', 'action' => 'past'],
            ]
        ];
        echo $this->element('sidebar', $data);
        ?>

        <div class="col-md-9">
            <?= $this->element('page_title') ?>
            <?php
            $projectUrlArray = [
                'controller' => 'projects',
                'action' => 'view',
                $project->id,
            ];
            $projectUrl = $this->Url->build($projectUrlArray);
            ?>
            <div class="row">
                <div class="col-md-4 col-sm-4 text-muted">
                    <i class="fa fa-calendar-o fa-2x"></i>&nbsp;
                    <?= $this->Time->format($project->start, __('dd.MM.Y')) ?>
                    <i class="fa fa-arrow-right"></i>
                    <?= $this->Time->format($project->end, __('dd.MM.Y')) ?>
                </div>
            </div>
            <div class="row">
                <p class="col-md-12 top-md-offset blog-main">
                    <?= $this->Html->image($project->getCoverImage(),
                        ['class' => 'img-responsive pull-left', 'url' => $projectUrl]); ?>
                    <?= $project->description ?>
                </p>
                <?php if (!empty($project->activities)): ?>
                    <div class="col-md-12">
                        <?php foreach ($project->activities as $activity): ?>
                            <div class="panel panel-default">
                                <div class="panel-heading"><h4><?= $activity->title ?></h4></div>

                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-12 text-muted">
                                            <i class="fa fa-clock-o"></i>&nbsp;
                                            <?= $this->Time->format($activity->start_time, __('dd.MM.Y H:mm')) ?>
                                            <i class="fa fa-arrow-right"></i>
                                            <?= $this->Time->format($activity->end_time, __('dd.MM.Y H:mm')) ?>
                                        </div>
                                    </div>
                                    <br>

                                    <div class="row">
                                        <address class="col-md-3 col-sm-3">
                                            <?= $activity->address->street ?><br>
                                            <?= sprintf('%s, %s', $activity->address->postal_code,
                                                $activity->address->town) ?>
                                            <br>
                                            <?= sprintf('%s, %s', $activity->address->state,
                                                $activity->address->country) ?>
                                            <br>
                                        </address>
                                        <p class="col-md-9 col-sm-9 top-xs-offset">
                                            <?= $activity->description ?>
                                        </p>
                                    </div>
                                </div>
                                <?php if (!empty($activity->participants)): ?>
                                    <div class="col-md-12"><h3><?= __('Participants') ?></h3></div>
                                    <table class="table table-responsive table-striped table-hover">
                                                <thead>
                                                <tr>
                                                    <th width="30%"><?= __('Name') ?></th>
                                                    <th width="10%"><?= __('Role') ?></th>
                                                    <th width="60%"><?= __('Description') ?></th>
                                                </tr>
                                                </thead>
                                                <?php foreach ($activity->participants as $participant): ?>
                                                    <tr>
                                                        <td><?= $participant->getName() ?></td>
                                                        <td><?= $participant->role ?></td>
                                                        <td><?= $participant->description ?></td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </table>
                                <?php endif; ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>