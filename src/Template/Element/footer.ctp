<?php
/**
 * @var $this Cake\View\View
 */
?>
<footer class="footer row row-black">
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-md-3">
        <dl>
          <dt class="">Shesa Germany</dt>
          <dt class="">Home</dt>
          <dt class="">SHESA Germany e.V</dt>
          <dt class="">Sacred Heart College Mankon</dt>
        </dl>
      </div>
      <div class="col-sm-6 col-md-3">
        <dl>
          <dt class="">Important Links</dt>
          <dt class="">Events</dt>
          <dt class="">Projects</dt>
          <dt class="">Partners</dt>
        </dl>
      </div>
      <div class="col-sm-6 col-md-3">
        <dl>
          <dt class="">Other Links</dt>
          <dt class="">Media</dt>
          <dt class="">Executive</dt>
        </dl>
      </div>
      <div class="col-sm-6 col-md-3">
        <address>
          <strong>SHESA GERMANY e.V</strong> <br>
          Postfach 10 11 10 <br>
          47011 Duisburg <br>
          <?php
          $contactLink = $this->Html->tag('i', '', array('class' => 'fa fa-envelope small-spaced-icon'));
          echo $this->Html->link($contactLink.'Contact Us', '#', array('escape' => false));
          ?>
          <br>
          <?php
          $emailLink = $this->Html->tag('i', '', array('class' => 'fa fa-at small-spaced-icon'));
          echo $this->Html->link($emailLink.' '.'info@shesagermany.org', 'mailto:info@shesagermany.org', array('escape' => false));
          ?>
          <br>
          <?php
          $websiteLink = $this->Html->tag('i', '', array('class' => 'fa fa-globe small-spaced-icon'));
          echo $this->Html->link($emailLink.'www.shesagermany.org', '/', array('escape' => false));
          ?>
        </address>
      </div>
    </div>
  </div>
</footer>