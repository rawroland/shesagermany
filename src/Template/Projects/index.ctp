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
                __('Running Projects') => ['controller' => 'projects', 'action' => 'running'],
                __('Completed Projects') => ['controller' => 'projects', 'action' => 'completed'],
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