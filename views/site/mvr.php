<?php $prefix = 'mvr';
$info = \app\helpers\RenderHelper::getInfo($prefix) ?>
<section class="section-welcome">
    <div class="background"></div>
    <div class="section-content">
        <div class="pb-5 container">
            <h1>Мобильные приложения и<br/>
                виртуальная реальность</h1>
            <div class="container pill-container pb-4">
                <div class="badge-pill badge-secondary">
                    <div class="pill-text">
                        Магистерская образовательная программа
                    </div>
                </div>
                <div class="badge-pill badge-secondary pill-multirow">
                    <div class="pill-text">
                        <?=$info['code']?> –  <?=$info['main_name']?>
                    </div>
                </div>
            </div>
            <p>
                Одной из основных тенденций современности является все более тесная интеграция высокотехнологичных IT-решений
                в повседневные процессы труда и быта. Как следствие распространения мобильных устройств и снижения стоимости
                услуг связи, вновь актуализируются вопросы эффективной доставки приложений до пользователей и снижения «порога»
                для их повсеместного использования. Наиболее динамичными в настоящее время являются рынки мобильных приложений,
                в т.ч. корпоративных, и виртуальной реальности. В рамках настоящей магистерской программы обучающиеся смогут на
                профессиональном уровне овладеть современными подходами, техниками и инструментарием проектирования, создания и
                сопровождения мобильных решений и приложений виртуальной реальности.
            </p>
        </div>

        <div class="container">
            <div class="row flex-column flex-sm-row">
                <div class="col-lg-4 col-12 course-item-holder">
                    <div class="col-auto1">
                        <div class="course-item">

                            <div class="course-item__label">
                                подача документов

                            </div>
                            <div class="course-item__value">С 01 декабря 2019 года по 14 августа 2020 года</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12 course-item-holder">
                    <div class="col-auto1">
                        <div class="course-item">

                            <div class="course-item__label">форма обучения</div>
                            <div class="course-item__value">Очная (обучение в вечернее время)</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12 course-item-holder">
                    <div class="col-auto1">
                        <div class="course-item ">

                            <div class="course-item__label">Места </div>
                            <div class="course-item__value"><?= $info['seats']?> бюджетных мест</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?= \app\helpers\RenderHelper::renderInstructions()?>

</section>

<section class="section-benefits">
    <div class="section-content">
        <div class="container">
            <div class="row">
                <div class=" col-sm-4">
                    <div class="row">
                        <div class="benefit-item benefit-target col-3"></div>
                        <div class="benefit-title col-8">Цель программы</div>
                    </div>
                    <div class="benefit-text">
                        Подготовка специалистов в области проектирования, разработки и сопровождения мобильных решений и приложений виртуальной реальности.
                    </div>
                </div>
                <div class=" col-sm-4">
                    <div class="row">
                        <div class="benefit-item benefit-suitcase col-3"> </div>
                        <div class="benefit-title col-8">Формат обучения</div>
                    </div>
                    <div class="benefit-text">Образовательный процесс построен как на общении студентов с одними из лучших преподавателей ТПУ, так и на живом обмене опытом с действующими специалистами крупных предприятий.
                    </div>
                </div>
                <div class=" col-sm-4">
                    <div class="row">
                        <div class="benefit-item benefit-hat col-3" >  </div>
                        <div class="benefit-title col-8">Диплом </div>
                    </div>
                    <div class="benefit-text">Присваивается степень магистра по направлению <br><?= $info['main_name']?></div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section-why">
    <div class="section-content">
        <div class="container">
            <div class="row flex-column flex-lg-row justify-content-start justify-content-lg-between">
                <div class="col-auto left-block">
                    <div class="section-title">Выпускник может претендовать на вакансии</div>
                    <div class="section-text">
                        г. Томск: ОАО «Востокгазпром»,
                        ОАО «ТомскНИПИнефть ВНК»,
                        ООО «Центр нефтегазовых технологий»,
                        Группа компаний «ИНКОМ»,
                        Группа компаний «РУБИУС».<br/>
                        г. Сургут: ОАО «Сургутнефтегаз»<br/>
                        г. Новосибирск: «Новотел»<br/>
                        г. Железногорск Красноярского края:<br/>
                        АО «Информационные спутниковые системы» имени академика М.Ф. Решетнева

                    </div>
                </div>
                <div class="col-auto right-block">
                    <div class="statistic-block">
                        <div class="stat-title">≈ 70 000</div>
                        <div class="stat-text">рублей средняя<br/> заработная плата</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="frequent-questions">
    <div class="white-holder">
        <div class="questions-container">
            <div class="headline">
                Дисциплины магистерской программы
            </div>
            <div class="nav-container">
                <?= \app\helpers\RenderHelper::renderPrograms([
                    'Инструментарий технологий программирования информационных систем',
                    'Управление проектами командной разработки информационных систем',
                    'Системная инженерия информационных систем',
                    'Технологии виртуальной и дополненной реальности',
                    'Разработка мобильных приложений',
                    'Разработка приложений виртуальной реальности',
                    'Внедрение сервисов мобильных платформ',
                    '3D-моделирование',
                    'Проектирование кроссплатформенных приложений',
                    'Компьютерное зрение и распознавание образов',
                    'Технологии виртуальной и дополненной реальности в мобильных приложениях',
                    'Разработка приложений дополненной реальности',

                ])?>

            </div>
        </div>
    </div>
</section>
<?= \app\helpers\RenderHelper::masteryOpportunity()?>

<?= \app\helpers\RenderHelper::renderCompetences([
    [
        'Разрабатывать',
        'программное обеспечение для мобильных, корпоративных и интернет-ориентированных информационных систем'
    ],        [
        'Проектировать и реализовывать',
        'приложения виртуальной и дополненной реальности, в т.ч. для решения задач направления «Умный город»'
    ],
    [
        'Работать',
        'с современными методами, технологиями и средствами интеграции информационных и программных систем'
    ],

], true)?>
<?= \app\helpers\RenderHelper::renderTeachers([

            [
                'image' => 'saveljev.jpg',
                'name' => 'Савельев Алексей Олегович',
                'desc' => '
        Кандидат технических наук, доцент отделения информационных технологий
        <br/>
                   Дисциплины: 
                   <br/>«Инструментарий технологий программирования информационных систем»

',
            ],
            [
                'image' => 'Pogrebnoy.jpg',
                'name' => 'Погребной Андрей Владимирович',
                'desc' => '
                   Дисциплины: 
                   <br/>«Инструментарий технологий программирования информационных систем»

',
            ],
            [
                'image' => 'kopnov.jpg',
                'name' => 'Копнов Максим Валериевич',
                'desc' => '
                   Дисциплины: 
                   <br/>«Управление проектами командной разработки информационных систем»

',
            ],


],$prefix)?>

<section class="partners">
    <div class="white-holder">
        <div class="headline">
            Стратегические партнеры
        </div>
        <div class="partners-container">
            <?= \app\helpers\RenderHelper::renderPartners('mvr', 6)?>
        </div>
    </div>
</section>
<?= \app\helpers\RenderHelper::renderInstructionsForm()?>

<?= \app\helpers\RenderHelper::renderMagisterProgramsAtBottom($prefix)?>
