<?php $info = \app\helpers\RenderHelper::getInfo('iim') ?>
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
                            <div class="course-item__value">?</div>
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
                        Подготовка высококвалифицированных специалистов в области искусственного интеллекта, способных решать научные и проектные задачи,
                        включая разработку новых методов, алгоритмов и программ нейросетевого анализа электроэнцефалограмм с применением интерфейсов “Мозг-
                        компьютер”, прогнозирования временных рядов, детектирования и распознавания объектов различной природы на изображениях и видео,
                        распознавания и синтеза человеческой речи, понимания текстов на естественных языках.
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
                        инженера, инженера-конструктора, инженера-исследователя, специалиста по
                        автоматизации, специалиста по мехатронным системам в аэрокосмических, автомобилестроительных, приборостроительных, машиностроительных
                        предприятиях, проектно-конструкторских и пуско-наладочных организациях.
                    </div>
                </div>
                <div class="col-auto right-block">
                    <div class="statistic-block">
                        <div class="stat-title">60 000-70 000</div>
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
                    'Методы искусственного интеллекта в мехатронике и робототехнике',
                    'Программное обеспечение мехатронных и робототехнических систем',
                    'Информационные системы в мехатронике и робототехнике',
                    'Технологии решения изобретательских задач',
                    'Адаптивные системы управления',
                    'Прецизионные электромеханические системы',
                    'Проектирование систем управления',
                    'Мобильные роботы',
                    'Системы автоматизированного проектирования и производства',
                    'Идентификация, фильтрация и наблюдение в системах управления',
                ])?>

            </div>
        </div>
    </div>
</section>



<section class="section-why" style="background-color:#ebebeb">
    <div class="section-content">
        <div class="container" >
            <div class="row flex-column flex-lg-row justify-content-start justify-content-lg-between">
                <div class="col-auto left-block">
                    <div class="section-title">Магистратура дает возможность за два года </div>
                    <div class="section-text">
                        За два года получить второе высшее образование или повысить свою квалификацию в интересующей области. Студенты, проходящие обучение в магистратуре ИШИТР, получают углубленную теоретическую и практическую подготовку в научно-исследовательской и профессиональной деятельности.  Степень магистра открывает более широкие перспективы для карьерного роста и возможности трудоустройства по всему миру.
                    </div>
                </div>
                <div class="col-auto right-block">
                    <div class="statistic-block">
                        <div class="stat-title">Диплом ТПУ</div>
                        <div class="stat-text">Котируется среди <br>работодателей большинства<br> стан мира</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


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
                            <div class="benefit-title col-9">Применять</div>
                        </div>
                        <div class="benefit-text">
                            полученные знания по современным методам и алгоритмам вычислительного интеллекта для анализа данных
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="row">
                            <div class="benefit-item benefit-programming col-3"> </div>
                            <div class="benefit-title col-9">Разрабатывать</div>
                        </div>
                        <div class="benefit-text">
                            методы детектирования и распознавания объектов на изображениях и
                            видеопоследовательностях
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="row">
                            <div class="benefit-item benefit-task col-3">  </div>
                            <div class="benefit-title col-9">Применять и разрабатывать</div>
                        </div>
                        <div class="benefit-text">
                            методы нейросетевого распознавания и понимания текстов на изображениях и видеозаписях.
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <?= \app\helpers\RenderHelper::renderInstructions()?>
</section>

<section class="lecturers">
    <div class="light-grey-holder">
        <div class="headline">
            Преподаватели и эксперты
        </div>
        Отсутствуют фото
    </div>
</section>

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


<section class="reviews">
    <div class="light-grey-holder">
        <div class="headline">
            Отзывы наших выпускников
        </div>
        <div class="left-right-container">
            <div class="left-right-content">

                <div class="item">
                    <div class="photo">
                        <img src="/combined/iim/igumnov.jpeg" class="photo-item" >
                    </div>
                    <div class="info">
                        <div class="info-name">
                            Игумнов Артём Олегович
                        </div>
                        <div class="info-text">
                            год выпуска: 2011<br/>
                            работает в: ООО &quot;ИНКОМ&quot;, должность: Инженер-программист<br/>
                            «Необходимый опыт для формирования общего представления о структуре направления. Даже если подробные детали знаний со временем
                            забываются, в итоге всегда можно сориентироваться если в процессе работы они понадобятся. Я, конечно, не учился в других университетах,
                            чтобы иметь более объективное представление об образовательном процессе, но полученный тут опыт, определённо пригодился.»
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="photo">
                        <img src="/combined/iim/fedorova.jpg" class="photo-item" >
                    </div>
                    <div class="info">
                        <div class="info-name">
                            Федорова Ольга Евгеньевна
                        </div>
                        <div class="info-text">
                            год выпуска: 2018<br/>
                            работает в: ООО «Сегменто», Санкт-Петербург, должность: Инженер по качеству<br/>
                            «4 года проведённые в ТПУ были лучшими в моей жизни. Я получила большой пласт знаний, который сейчас применяю в работе.»
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="photo">
                        <img src="/combined/iim/minaeva.jpg" class="photo-item" >
                    </div>
                    <div class="info">
                        <div class="info-name">
                            Минаева Ольга Игоревна
                        </div>
                        <div class="info-text">
                            работает в Центре финансовых технологий в должности Data Scientists.<br/>
                            Я считаю, что сделала правильный выбор, поступив в 2016 году в магистратуру по программе &quot;Компьютерный анализ и
                            интерпретация данных&quot;.
                            Эта программа помогла мне достаточно глубоко понять и изучить принципы работы алгоритмов компьютерного зрения, в том числе и
                            нейронных сетей.
                            С одной стороны, это было просто интересно, а с другой - помогло найти работу, которая действительно нравится.
                        </div>
                    </div>
                </div>


            </div>
        </div>
        <div class="dots">

        </div>

    </div>
</section>

<?= \app\helpers\RenderHelper::renderInstructionsForm()?>

<section class="courses">
    <div class="section-content">
        <div class="light-grey-holder">
            <div class="headline">
                Другие магистерские программы
            </div>


            <div class="container-wide">
                <?= \app\helpers\RenderHelper::renderMagisterProgramsAtBottom('urs')?>
            </div>
        </div>
    </div>
</section>