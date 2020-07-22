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


<!--дисциплины-->
<section class="frequent-questions">
    <div class="white-holder">
        <div class="questions-container">
            <div class="headline">
                Дисциплины бакалаврской программы
            </div>
            <div class="nav-container">
                <?= \app\helpers\RenderHelper::renderPrograms([
                    'Программные средства математических расчетов',
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
<?= \app\helpers\RenderHelper::renderCarousel('Преподаватели и эксперты', [
    [
        'image' => 'malyshenko.jpg',
        'name' => 'Малышенко Александр Максимович',
        'desc' => 'доктор технических наук, профессор
отделения автоматизации и робототехники<br/>
Дисциплины:<br/>
Теория автоматического управления<br/>
',
    ],
    [
        'image' => 'mamontova.jpg',
        'name' => 'Мамонова Татьяна Егоровна',
        'desc' => 'кандидат технических наук, доцент отделения
автоматизации и робототехники<br/>
Дисциплины:<br/>
Программные средства математических расчетов,<br/> 
Современные технологии,<br/>
Искусственный интеллект и нейросетевое управление,<br/>
Учебно-исследовательская работа студентов
',
    ],

    [
        'image' => 'tyryshkin.jpg',
        'name' => 'Тырышкин Александр Васильевич',
        'desc' => 'кандидат технических наук, доцент отделения
автоматизации и робототехники<br/>
Дисциплины:<br/>
Основы разработки компонентов мехатроники и робототехники,<br/> Детали
мехатронных модулей, их конструирование, диагностика и надежность,<br/> Учебно-
исследовательская работа студентов
',
    ],

], 'b-mir')?>

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
<?= \app\helpers\RenderHelper::applyNow()?>
    <!--другие программы-->
<?= \app\helpers\RenderHelper::renderBachelorProgramsAtBottom($name)?>