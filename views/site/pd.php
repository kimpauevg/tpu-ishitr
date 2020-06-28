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
                            <div class="course-item__value">?</div>
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
                        <div class="benefit-title col-9">Цель программы</div>
                    </div>
                    <div class="benefit-text">
                        Разработка и апробация инновационных подходов, технологий в дизайн-проектировании изделий
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
                    'Современные проблемы дизайна',
                    'Инновации в технике и дизайне',
                    'Организация проектной деятельности',
                    'Компьютерные технологии в дизайне',
                    'Мультимедийные технологии',
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
                            <div class="benefit-title col-9">Подготовка специалистов</div>
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
                            <div class="benefit-title col-9">Использование</div>
                        </div>
                        <div class="benefit-text">
                            разнообразных ресурсов и средств для разработки и обоснования промышленного дизайна изделия и
                            основных этапов его реализации в качестве стартапа
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="row">
                            <div class="benefit-item benefit-task col-3">  </div>
                            <div class="benefit-title col-9">Применение </div>
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

<section class="lecturers">
    <div class="light-grey-holder">
        <div class="headline">
            Преподаватели и эксперты
        </div>
        <div class="left-right-container">
            <div class="left-right-content">
                <div class="item">
                    <div class="photo">
                        <img src="/combined/pd/seryakov.jpg" class="photo-item" >
                    </div>
                    <div class="info">
                        <div class="info-name">
                            Серяков Вадим Александрович
                        </div>
                        <div class="info-text">
                            Дисциплины:
                            Техническое конструирование,
                            Дизайн-проектирование,
                            Современные материалы и технологии в эргономике дизайна
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="photo">
                        <img src="/combined/pd/vekhter.jpg" class="photo-item" >
                    </div>
                    <div class="info">
                        <div class="info-name">
                            Вехтер Евгения Викторовна
                        </div>
                        <div class="info-text">
                            Дисциплины:
                            Системное дизайн-проектирование
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="photo">
                        <img src="/combined/pd/shklyar.jpg" class="photo-item" >
                    </div>
                    <div class="info">
                        <div class="info-name">
                            Шкляр Алесей Викторович
                        </div>
                        <div class="info-text">
                            Дисциплины:
                            Информационные технологии в дизайне,
                            Компьютерные технологии в дизайне,
                            Мультимедийные технологии
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="photo">
                        <img src="/combined/pd/kukhta.jpg" class="photo-item" >
                    </div>
                    <div class="info">
                        <div class="info-name">
                            Кухта Мария Сергеевна
                        </div>
                        <div class="info-text">
                            Дисциплины:
                            История и методология дизайн-проектирования
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="photo">
                        <img src="/combined/pd/mamontov.jpg" class="photo-item" >
                    </div>
                    <div class="info">
                        <div class="info-name">
                            Мамонтов Геннадий Яковлевич
                        </div>
                        <div class="info-text">
                            Дисциплины:
                            Инновации в технике и дизайне
                        </div>
                    </div>
                </div>


            </div>
        </div>
        <div class="dots">
        </div>
    </div>
</section>

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


<section class="reviews">
    <div class="light-grey-holder">
        <div class="headline">
            Отзывы наших выпускников
        </div>
        Нет фотографий
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
                <?= \app\helpers\RenderHelper::renderMagisterProgramsAtBottom('pd')?>
            </div>
        </div>
    </div>
</section>