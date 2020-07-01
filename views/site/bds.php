<?php
$prefix = 'bds';
$info = \app\helpers\RenderHelper::getInfo($prefix) ?>
<section class="section-welcome">
    <div class="background"></div>
    <div class="section-content">
        <div class="pb-5 container">
            <h1> Технологии больших данных</h1>
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
                Магистерская программа направлена на подготовку специалистов, владеющих технологиями хранения распределенных данных,
                преобразования данных и быстрый доступ к ним, а также аналитиков Big Data Scientist, владеющих технологиями анализа больших данных,
                выявление их взаимосвязей и построение моделей. Преподавание программы ведется на английском языке. В учебном плане обязательной
                компонентой является научно-исследовательская практика в ведущих компаниях – лидерах IT-индустрии региона, где студенты имеют возможность
                получить опыт работы в командах по разработке и эксплуатации программного обеспечения больших данных, а также по анализу и интерпретации
                больших объемов данных. Планируется проводить практику в коммерческих и государственных фирмах, промышленно разрабатывающих
                программное обеспечение для хранения и анализа больших данных.
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
                        Подготовка высококвалифицированных специалистов в разработке новых и улучшения существующих методов и алгоритмов обработки больших
                        данных.
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
                    <div class="section-title">Выпускники могут претендовать на вакансии</div>
                    <div class="section-text">
                        в нефтегазовых компаниях: ОАО «Томскнефть ВНК»<br/>
                        в научно-исследовательских организациях: ОАО «ТомскНИПИнефть», «Томский НИМЦ РАН», ООО «Полюс»<br/>
                        на производственных предприятиях: ООО «Нефтехим», ООО «Элеси»<br/>
                        в IT-организациях: ООО «Эко-Томск», ООО «Элекард», ООО «САС Институт» (г. Москва)<br/>
                        в иных организациях: Томский филиал ОАО «Телеком», ПАО «Сбербанк» (г. Москва), Центральный Банк России (г. Томск).
                    </div>
                </div>
                <div class="col-auto right-block">
                    <div class="statistic-block gap-block">
                        <div class="stat-title">≈ 70 000 - 150 000</div>
                        <div class="stat-text">рублей средняя<br/> заработная плата<br/>выпускников магистратуры</div>
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
                    'Введение в большие данные',
                    'Методы анализа данных',
                    'Большие базы данных',
                    'Системы управления знаниями',
                    'Визуализация данных',
                    'Машинное обучение',
                    'Инструментарий для работы с большими данными',
                    'Анализ и обработка больших объемов данных (Map Reduce)',
                    'Интеллектуальный анализ Web-данных',
                    'Специальные разделы больших данных',

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
                            <div class="benefit-title col-9">Исследовать</div>
                        </div>
                        <div class="benefit-text">
                            и анализировать большие данные, создавать
                            их модели и интерпретировать структуры данных в
                            таких моделях
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="row">
                            <div class="benefit-item benefit-programming col-3"> </div>
                            <div class="benefit-title col-9">Понимать</div>
                        </div>
                        <div class="benefit-text">
                            принципы создания, хранения, управления,
                            передачи и анализа больших данных с использованием
                            новейших технологий, инструментов и систем обработки
                            данных в высокопроизводительных сетях
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="row">
                            <div class="benefit-item benefit-task col-3">  </div>
                            <div class="benefit-title col-9">Применять</div>
                        </div>
                        <div class="benefit-text">
                            теорию распределенной системы управления
                            базами данных к традиционным распределенным
                            системам реляционных баз данных, облачным базам
                            данных, крупномасштабным системам машинного
                            обучения и хранилищам данных
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
        Нет фотографий
    </div>
</section>

<section class="partners">
    <div class="white-holder">
        <div class="headline">
            Стратегические партнеры
        </div>
        <div class="partners-container">
            <?= \app\helpers\RenderHelper::renderPartners($prefix, 8)?>
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
                        <img src="/combined/bds/kulnevich.jpg" class="photo-item" >
                    </div>
                    <div class="info">
                        <div class="info-name">
                            Кульневич Алексей Дмитриевич
                        </div>
                        <div class="info-text">
                            год выпуска: 2019, работает в Econophysica,<br/> должность: Руководитель отдела исследований и разработок<br/>
                            «Очень положительное впечатление оставил. Есть с чем сравнить - учился и в других вузах, в других городах»
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="photo">
                        <img src="/combined/bds/kayda.jpg" class="photo-item" >
                    </div>
                    <div class="info">
                        <div class="info-name">
                            Кайда Анастасия Юрьевна
                        </div>
                        <div class="info-text info-text__small">
                            год выпуска: 2019, работает в: ТПУ<br/> должность: Программист ОИТ ИШИТР<br/>
                            «Это была отличная возможность проявить и испытать себя. Магистратура ТПУ в области Big Data - множество
                            новых знакомств, деловых поездок, мероприятий и конкурсов, грантов и стипендий; отличные курсы и
                            понимающие преподаватели, демонстрирующие высокий уровень профессионализма - все это является
                            отличной платформой для современного выпускника-магистра вне зависимости от того, какую сферу - научную
                            или производственную - он выберет.»
                        </div>
                    </div>
                </div>

                , ,

                <div class="item">
                    <div class="photo">
                        <img src="/combined/bds/shkabara.jpg" class="photo-item" >
                    </div>
                    <div class="info">
                        <div class="info-name">
                            Шкабара Анастасия Игоревна
                        </div>
                        <div class="info-text">
                            год выпуска: 2019, работает в: Элекард, <br/>должность: Менеджер по развитию азиатско-тихоокенского региона<br/>
                            «Один из лучших вузов не только по уровню образования, но и по инфраструктуре, внеучебной деятельности,
                            поддержке студентов и возможностям для развития.»

                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="photo">
                        <img src="/combined/bds/radishevskiy.jpg" class="photo-item" >
                    </div>
                    <div class="info">
                        <div class="info-name">
                            Радишевский Владислав Леонидович
                        </div>
                        <div class="info-text">
                            год выпуска: 2019, работает в ПАО Сбербанк (Москва), <br/>должность: Data Scientist<br/>
                            «ТПУ дал возможность развить свои компетенции и найти хорошую работу»
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

<?= \app\helpers\RenderHelper::renderMagisterProgramsAtBottom($prefix)?>
