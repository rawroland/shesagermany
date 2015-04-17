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
            <?= $this->element('Projects/list', compact('projects'));?>
        </div>
    </div>
</div>