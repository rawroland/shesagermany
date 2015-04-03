<?php
/**
 * @var $this \Cake\View\View
 */
?>
<div class="row">
    <div class="col-md-12">
        <?= $this->Form->create($event); ?>
        <fieldset>
            <legend><?= __("Event") ?></legend>
            <?php
            echo $this->Form->input("id");
            echo $this->Form->input("title");
            echo $this->Form->input("description");
            echo $this->Form->input("location");
            echo $this->Form->input("date");
            ?>
        </fieldset>
        <?php foreach ($event->activities as $activitiesIndex => $activity): ?>
            <fieldset>
                <legend><?= __("Activity") ?></legend>
                <?php
                echo $this->Form->input("activities.{$activitiesIndex}.id");
                echo $this->Form->input("activities.{$activitiesIndex}.title");
                echo $this->Form->input("activities.{$activitiesIndex}.description");
                echo $this->Form->input("activities.{$activitiesIndex}.date_time");
                ?>
            </fieldset>
            <fieldset>
                <legend><?= __("Address") ?></legend>
                <?php
                echo $this->Form->input("activities.{$activitiesIndex}.address.id");
                echo $this->Form->input("activities.{$activitiesIndex}.address.street");
                echo $this->Form->input("activities.{$activitiesIndex}.address.postal_code");
                echo $this->Form->input("activities.{$activitiesIndex}.address.town");
                echo $this->Form->input("activities.{$activitiesIndex}.address.state");
                echo $this->Form->input("activities.{$activitiesIndex}.address.country");
                ?>
            </fieldset>
            <?php foreach ($activity->participants as $participantIndex => $participant): ?>
                <fieldset>
                    <legend><?= __("Add Participant 1") ?></legend>
                    <?php
                    echo $this->Form->input("activities.{$activitiesIndex}.participants.{$participantIndex}.id");
                    echo $this->Form->input("activities.{$activitiesIndex}.participants.{$participantIndex}.type");
                    echo $this->Form->input("activities.{$activitiesIndex}.participants.{$participantIndex}.role");
                    echo $this->Form->input("activities.{$activitiesIndex}.participants.{$participantIndex}.description");
                    echo $this->Form->input("activities.{$activitiesIndex}.participants.{$participantIndex}.{$participant->type}.id");
                    echo $this->Form->input("activities.{$activitiesIndex}.participants.{$participantIndex}.{$participant->type}.title");
                    echo $this->Form->input("activities.{$activitiesIndex}.participants.{$participantIndex}.{$participant->type}.surname");
                    echo $this->Form->input("activities.{$activitiesIndex}.participants.{$participantIndex}.{$participant->type}.name");
                    ?>
                </fieldset>
            <?php endforeach; ?>
        <?php endforeach; ?>
        <?= $this->Form->button(__("Submit"), ['class' => 'btn btn-default pull-right']) ?>
        <?= $this->Form->end() ?>
    </div>
</div>
