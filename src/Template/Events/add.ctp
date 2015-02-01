<?php
/**
 * @var $this \Cake\View\View
 */
?>
<div class="actions columns large-2 medium-3">
	<h3><?= __('Actions') ?></h3>
	<ul class="side-nav">
		<li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
	</ul>
</div>
<div class="users form large-10 medium-9 columns">
	<?= $this->Form->create($event); ?>
	<fieldset>
		<legend><?= __('Add User') ?></legend>
		<?php
			echo $this->Form->input('title', ['required' => false]);
			echo $this->Form->input('description');
			echo $this->Form->input('date');
		?>
	</fieldset>
	<?= $this->Form->button(__('Submit')) ?>
	<?= $this->Form->end() ?>
</div>
