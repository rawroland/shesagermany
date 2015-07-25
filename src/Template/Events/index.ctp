<?php
/**
 * @var $this \Cake\View\View
 */
$this->assign('title', __('Events'));
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
            <?= $this->element('Events/list', compact('events'));?>
        </div>
    </div>
</div>