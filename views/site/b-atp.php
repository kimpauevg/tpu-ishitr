<?php $prefix = 'atp';
$info =  \app\helpers\RenderHelper::getBachelorInfo($prefix);?>
<section class="section-welcome">
    <div class="background"></div>
    <div class="section-content">
        <div class="container pb-5">
            <h1  >Автоматизация технологических<br/> процессов и производств</h1>
            <div class="container pill-container pb-4 wow fadeInDown" >
                <div class="badge-pill badge-secondary">
                    <div class="pill-text">
                        Бакалавриат
                    </div>
                </div>
                <div class="badge-pill badge-secondary pill-multirow">
                    <div class="pill-text">
                        15.03.04 – Автоматизация технологических<br/> процессов и производств
                    </div>
                </div>
            </div>
            <p>
                Особенностью образовательной программы по направлению 15.03.04 является
                обучение специалистов для разработки и эксплуатации современных автоматических и
                автоматизированных средств управления Hi-Tech производствами в нефтегазовой
                отрасли.<br/>
                Уникальность программы связана с возможностью для студентов:
                <br/>-участия в научных проектах регионального, национального и международного
                типов
                <br/>-освоение лучших практик (Schneider Electric, Siemens, Honeywell, ABB и др.)
                автоматизации технологических процессов
                <br/>-интенсивной профессионально-ориентированной языковой подготовки.
            </p>
        </div>
        <?= \app\helpers\RenderHelper::renderBachelorAfterIntro($prefix)?>

    </div>
</section>
<!--форма подать заявку-->
<?= \app\helpers\RenderHelper::applyNow()?>
<!--цель-->
<section class="section-competencies">
    <div class="section-content">
        <div class="container">
            <div class="program-holder">
                <div class="program-target">
                    <div class="headline"> Цель программы </div>
                    <p class="text">
                        Программа
                        обучения направлена на подготовку
                        инженерных кадров для нефтегазовой промышленности в области автоматизации
                        технологических процессов транспорта и переработки углеводородного сырья
                    </p>
                </div>
            </div>
            <hr class="horizontal-line">
        </div>
    </div>
</section>
<!---->
<!--компетанции-->
<?= \app\helpers\RenderHelper::renderCompetences([
    [
        'Применение',
        'полученных знаний для определения, формулирования и
        решения инженерных задач при разработке, производстве и эксплуатации
        современных систем автоматизации технологических процессов и производств'
    ],
    [
        'Планирование',
        'и проведение эксперимента, интерпретация данных и
        использование их для ведения инновационной инженерной деятельности в
        области автоматизации технологических процессов и производств;'
    ],
    [
        'Использование',
        'подходящего программного и технического
        оборудования, оснащения и инструментов для решения задач автоматизации
        технологических процессов и производств'
    ],
    [
        'Владение',
        'иностранным языком на уровне, позволяющем работать в
интернациональной среде с пониманием культурных, языковых и социально-
экономических различий'
    ],
    [
        'Способность',
        'эффективно работать индивидуально, в качестве члена и
руководителя группы с ответственностью за риски и работу коллектива при
решении инновационных инженерных задач в области автоматизации
технологических процессов и производств'
    ],
])?>

<?= \app\helpers\RenderHelper::renderBachelorScores([
    [
        'score' => 51,
        'subject'=> 'Физика'
    ],
    [
        'score' => 50,
        'subject'=> 'Математика'
    ],
    [
        'score' => 56,
        'subject'=> 'Русский язык'
    ],
])?>

<section class="frequent-questions">
    <div class="white-holder">
        <div class="questions-container">
            <div class="headline">
                Дисциплины бакалаврвской программы
            </div>
            <div class="nav-container">
                <?= \app\helpers\RenderHelper::renderPrograms([
                        'Программирование искусственного интеллекта',
                    'Администрирование вычислительных сетей',
                    'Мультимедиа и компьютерная графика',
                    'Микропроцессорные системы',
                    'Защита информации',
                    'Операционные системы',
                    'Сети и телекоммуникации',
                    'Базы данных',
                    'Программирование мобильных устройств',
                    'Вычислительные машины, системы и сети',
                    'Нефтегазовое дело',
                    'Автоматизация управления жизненным циклом продукции'
                ])?>
            </div>
        </div>
    </div>
</section>
<!--вакансии-->
<section class="section-vacancies">
    <div class="section-content">
        <div class="container" >
            <div class="row flex-column flex-lg-row justify-content-start justify-content-lg-between">
                <div class="col-auto left-block">
                    <div class="section-title "  style="color:#b87571">Выпускник может претендовать на вакансии</div>
                    <div class="section-text">
                        Компании:<br/>
                        ПАО «НК «Роснефть», ПАО «Лукойл»,
                        ПАО «Сибур», ПАО «Газпром», ПАО «НОВАТЭК»,
                        АО «Транснефть – Сибирь», АО «Томсктрансгаз»,
                        АО «ТомскНИПИнефть», ЗАО «ЭлеСи»,
                        ЗАО «Томская нефтегазовая компания».
                    </div>
                </div>
                <div class="col-auto right-block">
                    <div class="statistic-block">
                        <div class="stat-title">≈ 60-80 000</div>
                        <div class="stat-text">рублей средняя зарплата <br /> на вахте в России <br /></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--преподаватели-->

<section class="lecturers">
    <div class="light-grey-holder">
        <div class="headline">
            Преподаватели и эксперты
        </div>
        <div class="left-right-container">
            <div class="left-right-content">

                <div class="item">
                    <div class="photo">
                        <img src="/combined/b-atp/gromakov.jpg" class="photo-item" >
                    </div>
                    <div class="info">
                        <div class="info-name">
                            Громаков Е.И.
                        </div>
                        <div class="info-text">
                            доцент, к.т.н.<br/>
                            Проектирование Автоматизированных систем<br/>
                            Проектирование автоматизированных систем технологической безопасности.<br/>
                            Современные технологии
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="photo">
                        <img src="/combined/b-atp/kurganov.jpg" class="photo-item" >
                    </div>
                    <div class="info">

                        <div class="info-name">
                            Курганов В.В.
                        </div>
                        <div class="info-text">
                            доцент, к.т.н.<br/>
                            Микропроцессорная техника и средства автоматизации.<br/>
                            Проектирование систем управления.
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="photo">
                        <img src="/combined/b-atp/malyshenko.jpg" class="photo-item" >
                    </div>
                    <div class="info">

                        <div class="info-name">
                            Малышенко А.М.
                        </div>
                        <div class="info-text">
                            заслуженный профессор ТПУ, академик Международной академии наук высшей школы
                            и Академии электротехнических наук РФ, д.т.н., профессор Отделения автоматизации
                            и робототехники Инженерной школы информационных технологий и робототехники.
                        </div>
                    </div>
                </div>



            </div>
        </div>
        <div class="dots">

        </div>

    </div>
</section>
<!--темы работ-->
<section class="qualification-topics">
    <div class="white-holder">
        <div class="headline">
            Темы выпускных<br> квалификационных работ
        </div>
        <div class="section-content">
            <div class="container">
                <?= \app\helpers\RenderHelper::renderQualificationWorkThemes([
                        'Автоматизированная система управления насосным агрегатом установки измерения количества и контроля нефти.',
                    'Автоматизированная система диспетчерского управления установкой стабилизации нефти.',
                    'Автоматизированная система определения гидратных пробок в газопроводе Медвежьего месторождения.',
                    'Разработка и исследование автоматизированной системы управления давлением нефти в магистральной напорной трубе.',
                    'Система автоматизированного диспетчерского управления насосной станцией на установке подготовки нефти на месторождении.'
                ])?>
            </div>
        </div>
    </div>
</section>

<!--отзывы-->
<section class="reviews">
    <div class="light-grey-holder">
        <div class="headline">
            Отзывы наших выпускников
        </div>
        <div class="left-right-container">
            <div class="left-right-content">
                <div class="item">
                    <div class="photo">
                        <img src="/combined/b-atp/djitnikov.jpg" class="photo-item" >
                    </div>
                    <div class="info">

                        <div class="info-name">
                            Житников А. Д.
                        </div>
                        <div class="info-text info-text__small">
                            Закончил бакалавриат по направлению АТПП в 2018 году.<br/>
                            Первые два года обучения включают в себя общеобразовательные дисциплины,
                            способствующие расширению кругозора и заложению фундамента для освоения специфических
                            предметов. Старшие курсы обучения дают понимание будущей профессии, позволяют
                            «прощупать» на практике задачи, с которыми придется с толкнуться в рабочей обстановке. Все
                            практические дисциплины подкреплены теоретической базой, которая позволяет синтезировать
                            инженерные решения, а также производить их анализ еще на ранних этапах разработки и
                            внедрения.<br/>
                            По окончанию программы студент выходит с багажом знаний, достаточным для начала
                            профессиональной карьеры инженера.<br/>
                            Вне учебных корпусов университет организовывает активную студенческую жизнь,
                            включающую различные массовые спортивные мероприятия, форумы и концерты.<br/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="dots">

        </div>

    </div>
</section>

<?= \app\helpers\RenderHelper::applyNow()?>

<!--другие программы-->
<?= \app\helpers\RenderHelper::renderBachelorProgramsAtBottom($prefix)?>