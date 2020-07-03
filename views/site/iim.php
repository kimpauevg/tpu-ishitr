<?php $prefix = 'iim';
$info = \app\helpers\RenderHelper::getInfo($prefix) ?>
<section class="section-welcome">
    <div class="background"></div>
    <div class="section-content">
        <div class="pb-5 container">
            <h1> Искусственный интеллект<br/> и машинное обучение</h1>
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
                Программа «Информатика и вычислительная техника» предназначена для подготовки на степень магистра специалистов ведущего
                состава (executive staff) фирм малого и среднего бизнеса, работающих в области информационных технологий. Выпускники данного
                направления востребованы в качестве технических директоров предприятий, руководителей проектов по созданию и применению
                информационных технологий, менеджеров в области IT-бизнеса и т.д.
                Современный выпускник программы «Информатика и вычислительная техника» умеет выполнять сложные задачи в области
                информатизации крупных предприятий на основе современных IT-технологий и доводить инновационные идеи до коммерческого
                использования, в том числе и в области научно-исследовательских работ.
                Наши выпускники широко востребованы в ведущих компаниях-производителях программного обеспечения, в области создания
                искусственного интеллекта и разработки web-приложений.
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
                        <div class="benefit-title col-9">Цель программы</div>
                    </div>
                    <div class="benefit-text">
                        Подготовка специалистов в области искусственного интеллекта, способных разрабатывать новые методы, алгоритмы и программы нейросетевого
                        анализа.
                    </div>
                </div>
                <div class=" col-sm-4">
                    <div class="row">
                        <div class="benefit-item benefit-suitcase col-3"> </div>
                        <div class="benefit-title col-9">Формат обучения</div>
                    </div>
                    <div class="benefit-text">Образовательный процесс построен как на общении студентов с одними из лучших преподавателей ТПУ, так и на живом обмене опытом с действующими специалистами крупных предприятий.
                    </div>
                </div>
                <div class=" col-sm-4">
                    <div class="row">
                        <div class="benefit-item benefit-hat col-3" >  </div>
                        <div class="benefit-title col-9">Диплом </div>
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
                    <div class="section-title">Выпускник может претендовать на должности </div>
                    <div class="section-text">
                        <br/><br/>
                        Компании:
                        <br/>ООО «НПК Техника дела», ОАО «ТомскНИПИНефть ВНК»
                        ООО «Рубиус Групп», ООО «ДРОМ», ООО «Экстент5»,
                        ООО «Центр Речевых Технологий» (г. Санкт-Петербург),
                        ИООО «ЭПАМ Системз» (г. Минск, Белоруссия), ООО «СибДор»,
                        Центр финансовых технологий (г. Томск).
                    </div>
                </div>
                <div class="col-auto right-block">
                    <div class="statistic-block">
                        <div class="stat-title">70 000 - 120 000</div>
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
                Дисциплины магистерской программы программы
            </div>
            <div class="nav-container">
                <?= \app\helpers\RenderHelper::renderPrograms([
                    'Интеллектуальные системы',
                    'Машинное обучение',
                    'Нейроэволюционные вычисления',
                    'Методы распознавания образов',
                    'Алгоритмы нейросетевой обработки данных',
                    'Методы интеллектуальной обработки и анализа изображений',
                    'Технологии искусственного интеллекта',
                ])?>

            </div>
        </div>
    </div>
</section>

<?= \app\helpers\RenderHelper::masteryOpportunity()?>

<?= \app\helpers\RenderHelper::renderCompetences([
    [
        'Применять',
        'полученные знания по современным методам и алгоритмам вычислительного интеллекта для анализа данных'
    ],
    [
        'Разрабатывать',
        'и применять методы детектирования и распознавания объектов на изображениях и видеопоследовательностях'
    ],
    [
        'Создавать',
        'и использовать методы нейросетевого распознавания и понимания текстов на изображениях и видеозаписях.'
    ],
], true)?>

<?= \app\helpers\RenderHelper::renderTeachers([
    [
        'image' => 'spitsyn.png',
        'name' => 'Спицын Владимир Григорьевич',
        'desc' => 'доктор технических наук, профессор отделения информационных технологий<br/>
                   Дисциплины:
                    <br/>«Интеллектуальные системы»,
                    <br/>«Алгоритмы нейросетевой обработки данных»,
                    <br/>«Методы распознавания образов»,
                    <br/>«Искусственный интеллект и нейронные сети»,
                     <br/>«Нейроэволюционные вычисления»
',
    ],
    [
        'image' => 'ivanova.jpg',
        'name' => 'Иванова Юлия Александровна',
        'desc' => 'кандидат технических наук, доцент отделения информационных технологий<br/>
                   дисциплины: 
                   <br/>«Технологии искусственного интеллекта», 
                   <br/>«Алгоритмы нейросетевой обработки данных», 
                   <br/>«Методы интеллектуальной обработки и анализа изображений», 
                   <br/>«Методы вычислительного интеллекта»
',
    ],
    [
        'image' => 'druki.jpg',
        'name' => 'Друки Алексей Алексеевич',
        'desc' => 'кандидат технических наук, доцент отделения информационных технологий<br/>
                   дисциплины: 
                   <br/>«Машинное обучение», 
                   <br/>«Методы распознавания образов», 
                   <br/>«Искусственный интеллект и нейронные сети», 
                   <br/>«Интеллектуальные системы»',
    ],
//Нет картинок
//    [
//        'image' => 'igumnov.jpeg',
//        'name' => 'Григорьев Дмитрий Сергеевич',
//        'desc' => 'ассистент отделения информационных технологий<br/>
//                   дисциплины:
//                   <br/>«Искусственный интеллект и нейронные сети»,
//                   <br/>«Интеллектуальные системы и технологии»
//                   ',
//    ],
//    [
//        'image' => 'igumnov.jpeg',
//        'name' => 'Попова Екатерина Сергеевна',
//        'desc' => 'ассистент отделения информационных технологий<br/>
//                   дисциплины:
//                   <br/>«Методы вычислительного интеллекта»
//                   ',
//    ],
], $prefix)?>

<section class="partners">
    <div class="white-holder">
        <div class="headline">
            Стратегические партнеры
        </div>
        <div class="partners-container">
            <?= \app\helpers\RenderHelper::renderPartners('iim', 7)?>
        </div>
    </div>
</section>

<?= \app\helpers\RenderHelper::renderReviews([
    [
        'image' => 'igumnov.jpeg',
        'name' => 'Игумнов Артём Олегович',
        'desc' => '
                   год выпуска: 2011<br/>
                   работает в: ООО &quot;ИНКОМ&quot;, должность: Инженер-программист<br/>
                   «Необходимый опыт для формирования общего представления о структуре направления. Даже если подробные детали знаний со временем
                   забываются, в итоге всегда можно сориентироваться если в процессе работы они понадобятся. Я, конечно, не учился в других университетах,
                   чтобы иметь более объективное представление об образовательном процессе, но полученный тут опыт, определённо пригодился.»
',
    ],
    [
        'image' => 'fedorova.jpg',
        'name' => 'Федорова Ольга Евгеньевна',
        'desc' => '
                   год выпуска: 2018<br/>
                   работает в: ООО «Сегменто», Санкт-Петербург, должность: Инженер по качеству<br/>
                   «4 года проведённые в ТПУ были лучшими в моей жизни. Я получила большой пласт знаний, который сейчас применяю в работе.»
',
    ],
    [
        'image' => 'minaeva.jpg',
        'name' => 'Минаева Ольга Игоревна',
        'desc' => '
                   работает в Центре финансовых технологий в должности Data Scientists.<br/>
                   Я считаю, что сделала правильный выбор, поступив в 2016 году в магистратуру по программе &quot;Компьютерный анализ и
                   интерпретация данных&quot;.
                   Эта программа помогла мне достаточно глубоко понять и изучить принципы работы алгоритмов компьютерного зрения, в том числе и
                   нейронных сетей.
                   С одной стороны, это было просто интересно, а с другой - помогло найти работу, которая действительно нравится.
',
    ],
], 'iim')?>

<?= \app\helpers\RenderHelper::renderInstructionsForm()?>

<?= \app\helpers\RenderHelper::renderMagisterProgramsAtBottom($prefix)?>
