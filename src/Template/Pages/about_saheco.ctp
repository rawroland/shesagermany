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
            <?= $this->element('page_title', ['pageTitle' => __('Sacred Heart College, Mankon Cameroon')]) ?>

            <p>
                Sacred Heart College, Mankon is a boarding secondary school for boys located in Bamenda, in the North
                West
                Region
                in Cameroon. It was founded in 1961 by the Mill Hill missionaries. The first class of 30-odd students
                was
                started
                by Rev. Fr. Thomas Mulligan, at the campus of R.C.M Big Mankon due to the lack of appropriate
                infrastructure.
                This was to cater for boys from Bamenda who passed the entrance examination into Sasse College Buea.
            </p>

            <p>
                <?= $this->Html->image('about/saheco_entrance.png', array('class' => 'img-responsive')); ?>
                <span class="text-muted text-center">Sacred Heart College Mankon Bamenda, Cameroon</span>
            </p>

            <p>
                The first batch of students graduated in 1966, the same year when the Mill Hill missionaries handed over
                administration of the school to the Marist brothers. On the 8th of July in the same year, the college
                was
                officially inaugurated by Hon. Augustine Ngong Jua, the late former Prime Minister of West Cameroon. The
                high
                school science section was opened in 1978, with the arts department following suit a year later.
            </p>

            <p>
                <?= $this->Html->image('about/saheco_first_batch.png', array('class' => 'img-responsive')); ?>
                <span class="text-muted text-center">Inaugural batch during the Golden Jubilee of Sacred Heart College Mankon Bamenda, Cameroon</span>
            </p>

            <p>
                On the 2nd of May, 1972, the current principal of the time, Rev. Brother John Phillips summoned a
                meeting of the
                alumni. Due to the regrettable absence of the ex-students at the 10 years anniversary, he aimed to
                organize an
                alumni association. A second meeting was quickly arranged on the 12th of June in the same year. The
                first
                executive was formed, with Mr Ebot Ntui as the National President, and Mr. Ngwambe Fuh Gabriel as the
                Vice
                National President. This marked the birth of the official SHESA (Sacred Heart Ex-Students Association).
                The
                constitution was consequently drawn, with the main aim being promoting the teachings of the Alma matter,
                i.e.
                the pursuit of excellence in all fields, academics, morals, sports, brotherhood and civic
                responsibility.
            </p>

            <p>
                <?= $this->Html->image('about/saheco_mass.png', array('class' => 'img-responsive')); ?>
                <span class="text-muted text-center">Students during celebration of holy mass</span>
            </p>

            <p>
                SaHeCo, as it is fondly called by all, has repeatedly performed exceptionally in all fields of human
                development, very often scoring a perfect score in both the G.C.E Ordinary and Advanced level. Due to
                astute
                moral training, students and ex-students have both developed a God-fearing and morally upright attitude.
                The
                college is also very renowned for its singing, visitors coming from near and far to enjoy the singing
                during the
                holy mass celebration on Sundays. Sports and Athletics are additional fields of pride of the college,
                regularly
                participating with glaring Performances in sporting competitions. Young boys have grown into mature men,
                being
                successful in all walks of life and in every part of the world.
            </p>

            <p>
                The college currently has 6,300 students enrolled. There have been 11 principals, the longest serving
                being
                Brother John Phillips (1970 - 1993). The current principal is Father Michael Kintang.
            </p>
        </div>
        <!-- End actual content -->
    </div>
</div>