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
                    <i class="fa fa-calendar-o fa-2x text-primary"></i>&nbsp;
                    <?= $this->Time->format($project->start, __('dd.MM.Y')) ?>
                    <i class="fa fa-arrow-right text-primary"></i>
                    <?= $this->Time->format($project->end, __('dd.MM.Y')) ?>
                </div>
            </div>
            <div class="row">
                <p class="col-md-12 top-md-offset blog-main">
                    <?= $this->Html->image($project->getCoverImage(),
                        ['class' => 'img-responsive pull-left', 'url' => $projectUrl]); ?>
                    <?= $project->description ?>
                </p>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>
                                <i class="fa fa-users text-primary"></i>
                                <?= __('Participants') ?>
                            </h4>
                        </div>

                        <div class="panel-body">
                            <?php if (!empty($project->participants)): ?>
                                <table class="table table-responsive table-striped table-hover">
                                    <thead>
                                    <tr>
                                        <th width="30%"><?= __('Name') ?></th>
                                        <th width="10%"><?= __('Role') ?></th>
                                        <th width="60%"><?= __('Description') ?></th>
                                    </tr>
                                    </thead>
                                    <?php foreach ($project->participants as $participant): ?>
                                        <tr>
                                            <td><?= $participant->getName() ?></td>
                                            <td><?= $participant->role ?></td>
                                            <td><?= $participant->_joinData['description'] ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </table>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>