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
		<legend><?= __('Add Event') ?></legend>
		<?php
			echo $this->Form->input('title');
			echo $this->Form->input('description');
			echo $this->Form->input('date');
        ?>
        <fieldset>
            <legend><?= __('Add Activity 1') ?></legend>
            <?php
                echo $this->Form->input('activities.0.title');
                echo $this->Form->input('activities.0.description');
                echo $this->Form->input('activities.0.date_time');
            ?>
        </fieldset>
        <fieldset>
            <legend><?= __('Add Participant 1') ?></legend>
            <?php
                echo $this->Form->input('activities.0.participants.0.type');
                echo $this->Form->input('activities.0.participants.0.role');
                echo $this->Form->input('activities.0.participants.0.description');
                echo $this->Form->input('activities.0.participants.0.people.title');
                echo $this->Form->input('activities.0.participants.0.people.surname');
                echo $this->Form->input('activities.0.participants.0.people.name');
            ?>
        </fieldset>
        <fieldset>
            <legend><?= __('Add Participant 2') ?></legend>
            <?php
                echo $this->Form->input('activities.0.participants.1.type');
                echo $this->Form->input('activities.0.participants.1.role');
                echo $this->Form->input('activities.0.participants.1.description');
            echo $this->Form->input('activities.0.participants.0.people.title');
            echo $this->Form->input('activities.0.participants.0.people.surname');
            echo $this->Form->input('activities.0.participants.0.people.name');
            ?>
        </fieldset>
	</fieldset>
	<?= $this->Form->button(__('Submit')) ?>
	<?= $this->Form->end() ?>
</div>
