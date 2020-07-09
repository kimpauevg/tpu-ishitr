<?php $prefix = 'pri'?>
<section class="section-welcome">
    <div class="background"></div>
    <div class="section-content">
        <div class="container pb-5">
            <h1  >Программная инженерия</h1>
            <div class="container pill-container pb-4 wow fadeInDown">
                <div class="badge-pill badge-secondary">
                    <div class="pill-text">
                        Бакалавриат
                    </div>
                </div>
                <div class="badge-pill badge-secondary pill-multirow">
                    <div class="pill-text">
                        09.03.04 – Программная инженерия
                    </div>
                </div>
            </div>
            <p>
                Программная инженерия является одним из новых направлений подготовки IT-
                специалистов в России. Выпускники направления владеют методами и
                инструментальными средствами управления программными проектами,
                проектирования, разработки, тестирования и внедрения программных систем,
                свободно владеют знаниями и навыками предпринимательства и ведения бизнеса.<br/>
                Благодаря уникальному сочетанию знаний в области компьютерных технологий,
                программирования и проектирования информационных систем, управления
                программными проектами, выпускники становятся самыми востребованными
                специалистами на рынке труда не только в России, но и за рубежом.
            </p>
        </div>
        <div class="container">
            <div class="row flex-column flex-sm-row">
                <div class="col-lg-4 col-12 course-item-holder">
                    <div class="col-auto1">
                        <div class=" course-item  ">

                            <div class="course-item__label">Места</div>
                            <div class="course-item__value">? бюджетных мест<br><p></p></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12 course-item-holder">
                    <div class="col-auto1">
                        <div class="course-item ">

                            <div class="course-item__label">форма обучения</div>
                            <div class="course-item__value">? </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12 course-item-holder">
                    <div class="col-auto1">
                        <div class="course-item  ">

                            <div class="course-item__label">Проходной балл </div>
                            <div class="course-item__value">2019 год – ?<br>2018 год – ?</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row flex-column flex-sm-row ">
                <div class="course-item  col-lg-4 col-12 course-item-holder">
                    <div class="course-item-benefit">
                        <div class="img-tick"></div>
                        <div>Общежитие</div>
                    </div>
                </div>
                <div class="course-item  col-lg-4 col-12 course-item-holder"  >
                    <div class="course-item-benefit">
                        <div class="img-tick"></div> Военная кафедра
                    </div>
                </div>
                <div class="course-item  col-lg-4 col-12 course-item-holder"  >
                    <div class="course-item-benefit">
                        <div class="img-tick"></div>  Электронное обучение
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--форма подать заявку-->
<section class="section-request">
    <div class="section-content">
        <div class="container">
            <div class="grid-container">
                <div class="grid-instruction-row">
                    <div class="grid-container-item grid-instruction-bold">
                        Вы можете подать заявление на обучение у нас уже сейчас
                    </div>
                    <div class="grid-container-item">
                        <a href="https://apply.tpu.ru/" class="btn btn-danger btn-lg">Подать заявление!</a>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>
<!--цель-->
<section class="section-competencies">
    <div class="section-content">
        <div class="container">
            <div class="program-holder">
                <div class="program-target">
                    <div class="headline"> Цель программы </div>
                    <p class="text">
                        Программа обучения направлена на подготовку специалистов в области полного цикла
                        производства программного обеспечения – от начальных стадий проектирования
                        до внедрения и сопровождения готовых программных и информационных систем.
                    </p>
                </div>
            </div>
            <hr class="horizontal-line">
        </div>
    </div>
</section>

<!--компетанции-->
<section class="section-benefits ">
    <div class="white-holder">
        <div class="headline">
            Программа нацелена на компетенции
        </div>
        <div class="section-content">
            <div class="container">
                <div class="row">
                    <div class=" col-sm-4"">
                    <div class="row">
                        <div class="benefit-item benefit-graph col-3"></div>
                        <div class="benefit-title col-8">Цель программы</div>
                    </div>
                    <div class="benefit-text">Практико-ориентированная подготовка специалистов, профессионально владеющих технологиями.</div>
                </div>
                <div class=" col-sm-4">
                    <div class="row">
                        <div class="benefit-item benefit-programming col-3"> </div>
                        <div class="benefit-title col-8">Формат обучения</div>
                    </div>
                    <div class="benefit-text">Использование разнообразных ресурсов и стилей обучения, учитывающих постоянно изменяющуюся среду для ведения.</div>
                </div>
                <div class=" col-sm-4">
                    <div class="row">
                        <div class="benefit-item benefit-task col-3" >  </div>
                        <div class="benefit-title col-8">Диплом </div>
                    </div>
                    <div class="benefit-text">Присваивается степень магистра по направлению Информатика и вычислительная техника.</div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

<!--баллы егэ-->
<?= \app\helpers\RenderHelper::renderBachelorScores([
    [
        'score' => 53,
        'subject'=> 'Информатика'
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
                Дисциплины бакалаврвской программы
            </div>
            <div class="nav-container">
                <?= \app\helpers\RenderHelper::renderPrograms([
                    'Архитектура вычислительных систем',
                    'Операционные системы и сети',
                    'Базы данных',
                    'Конструирование программного обеспечения',
                    'Проектирование и архитектура программных систем',
                    'Тестирование программного обеспечения',
                    'Проектирование Интернет-приложений',
                    'Технология командной разработки программного обеспечения',
                    'Проектирование информационных систем',
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
                    <div class="section-title "  style="color:#b87571">Выпускник может претендовать на вакансии </div>
                    <div class="section-text">
                        программиста,
                        инженера-программиста,
                        программного инженера,
                        младшего инженера по анализу данных,
                        главного инженера по анализу данных,
                        cтаршего инженера.
                        <br/><br/>
                        Компании:<br/>
                        ООО Sibedge (Сибэдж),
                        трансформации бизнеса.
                        ООО &quot;Эко-Томск&quot;
                        ООО &quot;МЦЦ Томск&quot;
                        ООО &quot;ТомскСофт&quot;
                        ООО &quot;Бэтроник&quot;
                        ООО Нанотехнологический центр &quot;СИГМА. Новосибирск&quot;
                        Nigmatic Limited                    </div>
                </div>
                <div class="col-auto right-block">
                    <div class="statistic-block">
                        <div class="stat-title">≈70 000</div>
                        <div class="stat-text">рублей средняя зарплата <br /> в России <br /> (по данным hh.ru)</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?= \app\helpers\RenderHelper::renderCarousel('Преподаватели и эксперты', [
    [
        'image' => 'saveljev.jpg',
        'name' => 'Савельев Алексей Олегович',
        'desc' => 'кандидат технических наук, доцент отделения информационных технологий<br/>
Дисциплины:<br/>
Базы данных,<br/>
Проектирование и архитектура программных систем',
    ],

    [
        'image' => 'cherdyntsev.jpg',
        'name' => 'Чердынцев Евгений Сергеевич',
        'desc' => 'кандидат технических наук, доцент отделения информационных технологий<br/>
Дисциплины:<br/>
Архитектура вычислительных систем,<br/>
Операционные системы и сети',
    ],
    [
        'image' => 'fofanov.jpg',
        'name' => 'Фофанов Олег Борисович',
        'desc' => 'кандидат технических наук, доцент отделения информационных технологий<br/>
Дисциплины:<br/>
Конструирование программного обеспечения',
    ],
    [
        'image' => 'sokolova.jpg',
        'name' => 'Соколова Вероника Сергеевна',
        'desc' => 'кандидат технических наук, доцент отделения информационных технологий<br/>
Дисциплины:<br/>
Технология командной разработки программного обеспечения,<br/>
Проектирование информационных систем',
    ],

], 'b-pri')?>
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

<?= \app\helpers\RenderHelper::applyNow()?>
<!--другие программы-->
<?= \app\helpers\RenderHelper::renderBachelorProgramsAtBottom($prefix)?>