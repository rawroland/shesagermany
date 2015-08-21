<?php
/**
 * @var $this \Cake\View\View
 */
?>
<?php if($this->Paginator->hasPage(2)):?>
    <div class="row paginator">
        <ul class="pagination pagination-lg pull-right">
            <?php
            $options = [
                'disabledTitle' => false,
                'escape' => false,
            ];
            ?>
            <?= $this->Paginator->prev(__('{0}previous', '<i class="fa fa-angle-left"></i> '), $options) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next{0}', ' <i class="fa fa-angle-right"></i>'), $options) ?>
        </ul>
    </div>
<?php endif;?>