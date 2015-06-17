<?php
/**
 * @var $this \Cake\View\View
 */
?>
<div class="wrap row">
    <div class="container">
        <?php
        $data = [
            'header' => __('About'),
            'links' => [
                __('SHESA Germany e.V') => ['controller' => 'pages', 'action' => 'about_sg'],
                __('Sacred Heart College Mankon') => ['controller' => 'pages', 'action' => 'about_saheco'],
            ]
        ];
        echo $this->element('sidebar', $data);
        ?>

        <!-- Start actual content-->
        <div class="col-md-9 long-text">
            <?= $this->element('page_title', ['pageTitle' => __('SHESA Germany e.V.')]) ?>

            <p>
                SHESA Germany e.V. is a non-profit organization of the alumni of Sacred Heart College (SaHeCo), Mankon,
                Bamenda,
                Cameroon based in Germany. It is a registered association (eingetragene Verein) in Germany, with about
                50
                regular members.
            </p>

            <p>
                <?= $this->Html->image('about/launching_toast.png', array('class' => 'img-responsive')); ?>
                <span class="text-muted text-center">Inaugural general assembly meeting of SHESA Germany e.V. in Erlangen Germany</span>
            </p>

            <p>
                It started as an online forum initiated by Kilian Asangana and friends. In April 2008, 25 ex-students of
                SaHeCo
                met in Erlangen, Germany for the first general assembly meeting, thus laying the foundation for SHESA
                Germany
                (SG). Annual meetings have subsequently been organized since then. These meetings culminated in the
                official
                launching of SHESA Germany e.V, which took place in Essen Germany, September 2009.
            </p>

            <p>
                <?= $this->Html->image('about/launching_bishop.png', array('class' => 'img-responsive')); ?>
                <span class="text-muted text-center">Launching of SHESA Germany e.V., with His Grace Bishop Nkuo in Essen, Germany</span>
            </p>

            <p>
                The outstanding academic achievements of the students in national and international examinations have
                earned the
                recognition of Sacred Heart College worldwide. SaHeCo has opened its doors to students worldwide
                including the
                United States, India, Nigeria, Central African Republic, Sierra Leone, and Sudan just to name a few.
                Alumni from
                the college have attended universities in Africa, Europe, and the Americas. Ex-students from Sacred
                Heart
                College hold prominent positions in Cameroon and corporations in other African, European and North
                American
                Countries.
            </p>

            <p>
                <?= $this->Html->image('about/launching_panelists.png', array('class' => 'img-responsive')); ?>
                <span class="text-muted text-center">Experts panelists during SHESA Germany's inaugural business empowerment seminar, "Be your own Boss"</span>
            </p>

            <p>
                With the stated mission <em>"Strive for excellence"</em>, SG aims to foster and encourage the
                principles and
                lessons learned from the Alma matter. The main goal is communal assistance to all SHESANS worldwide and
                especially in Germany, bringing them all together to relive the brotherhood that was experienced in
                SaHeCo. SG
                also aims to support secondary education on the basis of SaHeCo.
            </p>
        </div>
        <!-- End actual content -->
    </div>
</div>