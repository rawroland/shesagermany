<?php
/**
 * @var $this \Cake\View\View
 */
$this->start('marketing');
?>
  <div class="strip-dark-grey">
    <div class="container">
      <div id="myCarousel" class="carousel slide top-bottom-medium-padding" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators hidden-xs">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1" class=""></li>
          <li data-target="#myCarousel" data-slide-to="2" class=""></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <?= $this->Html->image('carousel.gif', array('alt' => __('First Slide'))); ?>
            <div class="carousel-caption">
              <h3>
                <?= $this->Html->link(__('Continuing the pursuit of Excellence'), array('controller' => 'pages',
                  'action' => 'home'));?>
              </h3>

              <p class="hidden-xs">
                SHESA Germany e.V is continuing lessons learnt from SAHECO by contributing to the African committee
                in Germany while advocating for growth.<br>
                <a class="btn btn-md btn-primary hidden-sm" href="#" role="button">SHESA Germany e.V</a>
              </p>
            </div>
          </div>
          <div class="item">
            <?= $this->Html->image('carousel.gif', array('alt' => __('First Slide'))); ?>
            <div class="carousel-caption">
              <h3>
                <?= $this->Html->link(__('Continuing the pursuit of Excellence'), array('controller' => 'pages',
                  'action' => 'home'));?>
              </h3>

              <p class="hidden-xs">
                SHESA Germany e.V is continuing lessons learnt from SAHECO by contributing to the African committee
                in Germany while advocating for growth.<br>
                <a class="btn btn-md btn-primary hidden-sm" href="#" role="button">SHESA Germany e.V</a>
              </p>
            </div>
          </div>
          <div class="item">
            <?= $this->Html->image('carousel.gif', array('alt' => __('First Slide'))); ?>
            <div class="carousel-caption">
              <h3>
                <?= $this->Html->link(__('Continuing the pursuit of Excellence'), array('controller' => 'pages',
                  'action' => 'home'));?>
              </h3>

              <p class="hidden-xs">
                SHESA Germany e.V is continuing lessons learnt from SAHECO by contributing to the African committee
                in Germany while advocating for growth.<br>
                <a class="btn btn-md btn-primary hidden-sm" href="#" role="button">SHESA Germany e.V</a>
              </p>
            </div>
          </div>
        </div>
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
          <i class="fa fa-chevron-circle-left fa-3x"></i>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
          <i class="fa fa-chevron-circle-right fa-3x"></i>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </div>
<?php $this->end(); ?>