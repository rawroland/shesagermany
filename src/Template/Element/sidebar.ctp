<?php
/**
 * @var $this \Cake\View\View
 */
?>
<!-- Start side menu -->
<div class="col-md-3 hidden-sm hidden-xs">
    <div class="panel panel-default">
        <div class="panel-heading"><strong><?= $header;?></strong></div>

        <div class="list-group">
            <?php
            foreach($links as $title => $url) {
                echo $this->Html->link($title, $url, ['class' => 'list-group-item']);
            }
            ?>
        </div>
    </div>
</div>
<!-- End side menu -->