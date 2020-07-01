<?php $name = 'mir';
$info = \app\helpers\RenderHelper::getBachelorInfo($name) ?>
<section class="section-welcome">
    <div class="background"></div>
    <div class="section-content">
        <div class="container pb-5">
            <h1  >Мехатроника и робототехника</h1>
            <div class="container pill-container pb-4 wow fadeInDown">
                <div class="badge-pill badge-secondary">
                    <div class="pill-text">
                        Бакалавриат
                    </div>
                </div>
                <div class="badge-pill badge-secondary pill-multirow">
                    <div class="pill-text">
                        15.03.06 – Мехатроника и робототехника
                    </div>
                </div>
            </div>
            <p>
                Область профессиональной деятельности выпускников, освоивших программу
                бакалавриата по направлению 15.03.06 Мехатроника и робототехника, включает
                проектирование, исследование, производство и эксплуатацию мехатронных и
                робототехнических систем для применения в автоматизированном производстве, в
                оборонной отрасли, Министерстве внутренних дел Российской Федерации, Министерстве
                Российской Федерации по делам гражданской обороны, чрезвычайным ситуациям и
                ликвидации последствий стихийных бедствий, на транспорте, в сельском хозяйстве, в
                медицине и в других областях.<br/>
                Спецификой программы является её направленность на разработку, исследование и
                модернизацию систем управления робототехническими системами, основанных на
                применении методов искусственного интеллекта и машинного обучения. Приоритетными
                разработки направлены на реализацию автономных мобильных мехатронных систем.
            </p>
        </div>
        <?= \app\helpers\RenderHelper::renderBachelorAfterIntro($name)?>
    </div>
</section>
<?= \app\helpers\RenderHelper::applyNow()?>

<!--цель-->
<section class="section-competencies">
    <div class="section-content">
        <div class="container">
            <div class="program-holder">
                <div class="program-target">
                    <div class="headline"> Цель программы </div>
                    <p class="text">
                        Программа обучения направлена на подготовку высококвалифицированных
                        специалистов мирового уровня в области мехатроники и робототехники.
                        Программа позволит выпускникам проектировать и вводить в эксплуатацию
                        роботов и робототехнические системы общего и специального назначения для
                        научных и технических направлений в машиностроении, приборостроении и
                        военно-космической технике. Выпускник будет успешно работать в данных
                        сферах деятельности, в частности, в научно-исследовательских и проектных
                        организациях, занимающихся автоматизацией различных технологических и
                        производственных процессов, в производственных подразделениях, занимающихся
                        внедрением современных средств автоматизации этих процессов.
                    </p>
                </div>
            </div>
            <hr class="horizontal-line">
        </div>
    </div>
</section>

<!--компетанции-->
<?= \app\helpers\RenderHelper::renderCompetences([
    [
        'Участие',
        'в подготовке технико-экономического обоснования проектов мехатронных и робототехнических систем, их отдельных подсистем и модулей'
    ],
    [
        'Расчет',
        'предварительных испытаний составных частей опытного образца
        изделия по заданным программам и методикам'
    ],
    [
        'Проведение',
        'специального программного обеспечения для решения задач
        проектирования систем, конструирования механических и мехатронных модулей,
        управления и обработки информации'
    ],
    [
        'Анализ',
        'технологической части проекта с обоснованием его технологической
        реализуемости'
    ],
    [
        'Обоснование',
        'предлагаемых мер по обеспечению безопасности эксплуатации
        разрабатываемой системы'
    ],

])?>

<!--баллы егэ-->
<section class="scores"">
    <div class="section-content">
        <div class="container" >
            <div class="row flex-column flex-lg-row justify-content-start justify-content-lg-between">
                <div class="col-auto left-block">
                    <div class="section-title "  style="color:#776c7e;" >Минимальный проходной балл ЕГЭ </div>
                    <div class="section-text row">
                        <div class="col-sm-4 col-12">
                            <div class="circle " >
                                <div class="circle-title">51</div>
                                <div class="">Физика</div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-12">
                            <div class="circle">
                                <div class="circle-title">50</div>
                                <div class="">Математика </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-12">
                            <div class="circle">
                                <div class="circle-title">56</div>
                                <div class="">Русский язык </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-auto right-block">
                    <div class="statistic-block" >
                        <div class="stat-title"><?=$info['average']?></div>
                        <div class="stat-text">средний балл <br>поступивших на<br> бюджетную форму<br> в 2019 году
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--дисциплины-->
<section class="frequent-questions">
    <div class="white-holder">
        <div class="questions-container">
            <div class="headline">
                Дисциплины бакалаврвской программы
            </div>
            <div class="nav-container">
                <?= \app\helpers\RenderHelper::renderPrograms([
                    'Программные средства математических расчетов',
                    'Теория автоматического управления',
                    'Теория автоматического управления',
                    'Основы разработки компонентов мехатроники и робототехники',
                    'Микропроцессорная техника',
                    'Детали мехатронных модулей, их конструирование, диагностика и надежность',
                    'Моделирование мехатронных, робототехнических систем',
                    'Искусственный интеллект и нейросетевое управление',
                    'Мобильные роботы',
                    'Сенсорика и измерительные комплексы',
                    'Цифровое управление робототехническими комплексами',
                    'Цифровизация технологических процессов',
                ])?>
            </div>

        </div>
    </div>
</section>
<!--вакансии-->
<section class="section-why" style="background-color:#f5f5f5">
    <div class="section-content">
        <div class="container" >
            <div class="row flex-column flex-lg-row justify-content-start justify-content-lg-between">
                <div class="col-auto left-block">
                    <div class="section-title">Выпускник может претендовать на вакансии</div>
                    <div class="section-text">
                        инженера-конструктора,
                        инженера,
                        инженера-проектировщика<br/><br/>
                        Компании:<br/>
                        ООО Sibedge (Сибэдж) — международная IT-компания, специализирующаяся на
                        разработке программного обеспечения для автоматизации и цифровой
                        трансформации бизнеса,
                        ООО &quot;Эко-Томск&quot;,
                        ООО &quot;МЦЦ Томск&quot;,
                        ООО &quot;ТомскСофт&quot;,
                        ООО &quot;Бэтроник&quot;,
                        ООО Нанотехнологический центр &quot;СИГМА. Новосибирск&quot;,
                        Nigmatic Limited<br/>
                    </div>
                </div>
                <div class="col-auto right-block">
                    <div class="statistic-block">
                        <div class="stat-title">от 50 000</div>
                        <div class="stat-text">рублей средняя зарплата <br /> в России <br /> (по данным hh.ru)</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--преподаватели-->
<section class="lecturers">
    <div class="light-grey-holder1">
        <div class="headline">
            Преподаватели и эксперты
        </div>
        Отсутствуют фотографии и описание

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
                        'Проектирование и разработка мобильного android-приложения для оценки навыков соискателя на должность тестировщика программного обеспечения.',
                    'Разработка веб-приложения для оптимизации процесса командной разработки ПО.',
                    'Разработка автоматизированных тестов ИПС Центрального банка РФ.',
                    'Разработка компонентов мобильной ГИС.',
                    'Разработка платформы психологического тестирования для корпоративных клиентов.',
                ])?>



            </div>
        </div>
    </div>
</section>

<!--отзывы-->
<section class="reviews">
    <div class="light-grey-holder1">
        <div class="headline">
            Отзывы наших выпускников
        </div>
        Отсутствуют
    </div>
</section>
<?= \app\helpers\RenderHelper::applyNow()?>
    <!--другие программы-->
<?= \app\helpers\RenderHelper::renderBachelorProgramsAtBottom($prefix)?>