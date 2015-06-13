<?php
/**
 * @var $this \Cake\View\View
 */
echo $this->element('marketing');
?>
<div class="strip-light-grey">
    <div class="container">
        <div class="row top-bottom-medium-padding">
            <div class="col-md-12 text-center">
                <h2>Assisting in the pursuit of Excellence</h2>

                <p>We were taught to strive for the best. This means impacting the world in positive ways. We do this
                    by:</p>
            </div>
            <div class="col-md-3 col-sm-6">
                <h3>Striving for Excellence</h3>

                <p class="text-left">
                    Founded in 1961 by the Mill Hill Missionaries, Sacred Heart College Mankon is a Catholic College
                    known as one of the most renowned academic institutions in Cameroon. Aside academic excellence, the
                    institution is known for exceptional singing and glaring performances in sporting competitions.
                </p>

                <p><?= $this->Html->link(__('View details{0}', ' »'),
                        array('controller' => 'pages', 'action' => 'about_saheco'), array('roles' => 'button')); ?></p>
            </div>
            <div class="col-md-3 col-sm-6">
                <h3>Promoting brotherhood</h3>

                <p class="text-left">
                    In order to continue the legacy of brotherhood, the first come together of Shesans in Germany took
                    place in 2008 in Erlangen. Shesa Germany e.V. is a non-profit organization with the goal of staying
                    together in unity and investing in the community as much as the possibility prevails.
                </p>

                <p><?= $this->Html->link(__('View details{0}', ' »'),
                        array('controller' => 'pages', 'action' => 'about_sg'), array('roles' => 'button')); ?></p>
            </div>
            <div class="col-md-3 col-sm-6">
                <h3>Initiating innovation</h3>

                <p class="text-left">
                    As a way of investing in the community, a number of projects have been initiated along the years.
                    This would not have been possible without the series of events and yearly conventions held in
                    Germany in the cities of Erlangen, Berlin, Oldenburg, Essen, Mülheim, Stuttgart and Freiburg.
                </p>

                <p><?= $this->Html->link(__('View details{0}', ' »'), array('controller' => 'events'),
                        array('roles' => 'button')); ?></p>
            </div>
            <div class="col-md-3 col-sm-6">
                <h3> Implementing Innovation</h3>

                <p class="text-left">
                    Different projects are executed yearly as a way of investing in the community. Some examples include
                    “Consolidating Our Base”, “Strengthening Our External Relations Capabilities”, “Mentorship Program”,
                    “Yearly Award For A Project By A Shesan” and “Yearly Scholarship To Sacred Heart students”.
                </p>

                <p><?= $this->Html->link(__('View details{0}', ' »'), array('controller' => 'projects'),
                        array('roles' => 'button')); ?></p>
            </div>

            <div class="col-md-12 text-center top-md-offset">
                <?= $this->Html->link(__('More About SG e.V'), array('controller' => 'pages', 'action' => 'about_sg'),
                    array('roles' => 'button', 'class' => 'btn btn-primary btn-lg')); ?>
            </div>
        </div>
    </div>
</div>
<div>
    <div class="container">
        <div class="row  top-bottom-medium-padding">
            <div class="col-md-12 text-center">
                <h2>
                    <?php
                    $promotedType = $this->Time->isFuture($promoted->start) ? __('Upcoming') : __('Previous');
                    echo $promotedType . __(' {0}', 'Event');
                    ?>
                </h2>
            </div>
            <p>
                &nbsp;
            </p>

            <div class="col-md-8 col-sm-8 col-md-push-4 col-sm-push-4">
                <div class="row">
                    <div class="col-md-12">
                        <?php
                        $promotedUrlArray = [
                            'controller' => 'events',
                            'action' => 'view',
                            $promoted->id,
                        ];
                        $promotedUrl = $this->Url->build($promotedUrlArray);
                        $header = $this->Html->tag('h3', $promoted->title, ['class' => 'top-zero-offset']);
                        echo $this->Html->link($header, $promotedUrl, ['escape' => false]);
                        ?>
                    </div>
                    <div class="col-md-4 col-sm-12 text-muted">
                        <i class="fa fa-calendar-o"></i>&nbsp;
                        <?= $this->Time->format($promoted->start, __('dd.MM.Y')) ?>
                        <i class="fa fa-arrow-right"></i>
                        <?= $this->Time->format($promoted->end, __('dd.MM.Y')) ?>
                    </div>
                    <div class="col-md-8 col-sm-12 text-muted">
                        <i class="fa fa-map-marker"></i>&nbsp;
                        <?= $promoted->location ?>
                    </div>
                    <p class="col-md-12 text-justify top-md-offset">
                        <?= $this->Text->truncate($promoted->description, 400) ?>
                    </p>
                    <?php if (!empty($promoted->activities)): ?>
                        <div class="col-md-12">
                            <h4><?= __('Activities'); ?></h4>
                            <?php
                            $activities = [];
                            foreach ($promoted->activities as $activity) {
                                $activityUrlArray = array_merge($promotedUrlArray, ['#' => $activity->id]);
                                $activityUrl = $this->Url->build($activityUrlArray);
                                $mark = $this->Html->tag('mark', $activity->title);
                                $activities[] = $this->Html->link($mark, $activityUrl, ['escape' => false]);
                            }
                            $activitiesText = implode('  ', $activities);
                            echo $activitiesText;
                            ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12 col-md-pull-8 col-sm-pull-8">
                <?=
                $this->Html->image($promoted->getFeatureImage(), ['class' => 'img-responsive', 'url' => $promotedUrl]);
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center top-md-offset">
                <?= $this->Html->link(__('More Event details'), $promotedUrl,
                    ['class' => 'btn btn-primary btn-lg top-sm-offset']) ?>
            </div>
        </div>
    </div>
</div>