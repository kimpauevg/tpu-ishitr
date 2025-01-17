<?php $prefix = 'pd';
?>
<section class="section-welcome">
    <div class="background"></div>
    <div class="section-content">
        <div class="pb-5 container">
            <h1> Дизайн</h1>
            <div class="container pill-container pb-4">
                <div class="badge-pill badge-secondary">
                    <div class="pill-text">
                        Магистерская образовательная программа
                    </div>
                </div>
                <div class="badge-pill badge-secondary pill-multirow">
                    <div class="pill-text">
                        54.04.01 - Дизайн
                    </div>
                </div>
            </div>
            <p>
                Промышленный дизайн, как профессия, в настоящее время становится все более интегрирующим: в работе со
                сложным, многоуровневым объектом можно объединить визуальную реальность, принципы и методы различных
                профессиональных дисциплин. Наравне с визуальным образом, текстом, пространством, промышленный дизайн
                осваивает такие реальности, как движение, время, интерактивность и оперирует все более разнообразными
                средствами экономических и культурных коммуникаций.
                Программа подготовки магистров по промышленному дизайну побуждает студентов искать, разрабатывать и
                применять новые подходы в области промышленного дизайна: предметов длительного пользования, средств
                производства, транспорта, упаковки, мебели для дома, офиса и общественных мест и т.д.
                Магистранты в процессе обучения имеют уникальную возможность заниматься исследованиями и разработкой в
                реальных условиях рыночной экономики, создавая для будущего потребителя неповторимый опыт общения с
                продуктом.
            </p>
        </div>

        <div class="container">
            <div class="row flex-column flex-sm-row">
                <div class="col-lg-4 col-12 course-item-holder">
                    <div class="col-auto1">
                        <div class=" course-item">

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
                            <div class="course-item__value">Очная</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12 course-item-holder">
                    <div class="col-auto1">
                        <div class="course-item ">

                            <div class="course-item__label">Места </div>
                            <div class="course-item__value">6 бюджетных мест</div>
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
                        Разработка и апробация инновационных подходов, технологий в дизайн-проектировании изделий
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
                    <div class="benefit-text">Присваивается степень магистра по направлению <br>Дизайн.</div>
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
                        в компаниях, специализирующихся на дизайне,
                        на производственных предприятиях и в научно-исследовательских организациях,
                        в IT-компаниях, а также иных организациях.<br/>
                        Наши выпускники работают в: ООО «Про М-Дизайн», ООО «ДИ-Групп», НПЦ «Полюс», ООО «ИНТЭК», ООО &quot;МайтиТех&quot;,
                        компания по разработке компьютерных игр «Avalanche Studios» (г. Стокгольм, Швеция)
                    </div>
                </div>
                <div class="col-auto right-block">
                    <div class="statistic-block">
                        <div class="stat-title">от 40 000</div>
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
                    'Дизайн-проектирование',
                    'Информационные технологии в дизайне',
                    'Современные средства визуальной коммуникации',
                    'История и методология дизайн-проектирования',
                    'Системное дизайн-проектирование',
                    'Рисунок в промышленном дизайне',
                    'Логика и методология исследований в дизайне',
                    'Современные материалы и технологии в эргономике дизайна',
                    'Инновации в технике и дизайне',
                    'Организация проектной деятельности',
                    'Компьютерные технологии в дизайне',
                    'Мультимедийные технологии',
                ])?>

            </div>
        </div>
    </div>
</section>

<?= \app\helpers\RenderHelper::masteryOpportunity()?>

<section class="section-competencies">

    <div class="white-holder">
        <div class="headline">
            Программа нацелена на компетенции
        </div>
        <div class="section-content">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="row">
                            <div class="benefit-item benefit-graph col-3"></div>
                            <div class="benefit-title col-8">Подготовка специалистов</div>
                        </div>
                        <div class="benefit-text">
                            владеющих технологиями разработки оригинальных проектов, промышленных образцов,
                            среди которых различные виды бытовой техники, производственные установки, наземный и воздушный транспорт,
                            высокотехнологичные, наукоемкие изделия
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="row">
                            <div class="benefit-item benefit-programming col-3"> </div>
                            <div class="benefit-title col-8">Использование</div>
                        </div>
                        <div class="benefit-text">
                            разнообразных ресурсов и средств для разработки и обоснования промышленного дизайна изделия и
                            основных этапов его реализации в качестве стартапа
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="row">
                            <div class="benefit-item benefit-task col-3">  </div>
                            <div class="benefit-title col-8">Применение </div>
                        </div>
                        <div class="benefit-text">
                            современных технологий 3D и 4D печати для разработки концептуальных, экспериментальных и
                            инновационных изделий на практике
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <?= \app\helpers\RenderHelper::renderInstructions()?>
</section>

<?= \app\helpers\RenderHelper::renderTeachers([
    [
        'image' => 'seryakov.jpg',
        'name' => 'Серяков Вадим Александрович',
        'desc' => '
                            кандидат технических наук, доцент отделения автоматизации и робототехники
        <br/>
                  Дисциплины: 
                  <br/>«Техническое конструирование»,
                  <br/>«Дизайн-проектирование»,
                  <br/>«Современные материалы и технологии в эргономике дизайна»

',
    ],
//    [
//        'image' => 'vekhter.jpg',
//        'name' => 'Вехтер Евгения Викторовна',
//        'desc' => '
//кандидат педагогических наук, доцент отделения автоматизации и робототехники
//        <br/>
//                  Дисциплины:
//                  <br/>«Системное дизайн-проектирование»
//
//',
//    ],
    [
        'image' => 'shklyar.jpg',
        'name' => 'Шкляр Алесей Викторович',
        'desc' => '
                            старший преподаватель отделения автоматизации и робототехники
        <br/>
                  Дисциплины: 
                  <br/>«Информационные технологии в дизайне»,
                  <br/>«Компьютерные технологии в дизайне»,
                  <br/>«Мультимедийные технологии»

',
    ],
    [
        'image' => 'kukhta.jpg',
        'name' => 'Кухта Мария Сергеевна',
        'desc' => '
                            доктор философских наук, профессор отделения автоматизации и робототехники
        <br/>
                  Дисциплины: 
                  <br/>«История и методология дизайн-проектирования»

',
    ],
    [
        'image' => 'mamontov.jpg',
        'name' => 'Мамонтов Геннадий Яковлевич',
        'desc' => '
доктор физико-математических наук, профессор отделения автоматизации и робототехники
        <br/>
                  Дисциплины: 
                  <br/>«Инновации в технике и дизайне»

',
    ],

], $prefix)?>


<section class="partners">
    <div class="white-holder">
        <div class="headline">
            Стратегические партнеры
        </div>
        <div class="partners-container">
            <?= \app\helpers\RenderHelper::renderPartners('pd', 4)?>
        </div>
    </div>
</section>


<?= \app\helpers\RenderHelper::renderInstructionsForm()?>

<?= \app\helpers\RenderHelper::renderMagisterProgramsAtBottom($prefix)?>
