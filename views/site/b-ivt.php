<?php $name = 'des';
$info = \app\helpers\RenderHelper::getBachelorInfo($name) ?>
<section class="section-welcome">
    <div class="background"></div>
    <div class="section-content">
        <div class="container pb-5">
            <h1  >Информатика и вычислительная техника</h1>
            <div class="container pill-container pb-4 wow fadeInDown" >
                <div class="badge-pill badge-secondary">
                    <div class="pill-text">
                       Бакалавриат
                    </div>
                </div>
                <div class="badge-pill badge-secondary pill-multirow">
                    <div class="pill-text">
                        09.03.01 – информатика и <br/> вычислительная техника
                    </div>
                </div>
            </div>
            <p>  Изучение и освоение совокупности принципов, методов и способов человеческой деятельности, направленных на анализ, создание и применение автоматизированных систем обработки информации и управления, ЭВМ, систем и сетей, программного обеспечения вычислительной техники и автоматизированных систем.</p>
        </div>
        <?= \app\helpers\RenderHelper::renderBachelorAfterIntro($name)?>

    </div>
</section>
<!--форма подать заявку-->
<?= \app\helpers\RenderHelper::applyNow();?>
<!--цель-->
<section class="section-competencies">
    <div class="section-content">
        <div class="container">
            <div class="program-holder">
                <div class="program-target">
                    <div class="headline"> Цель программы </div>
                    <p class="text">Программа обучения направлена на подготовку программистов, системных архитекторов, аналитиков и системных администраторов, администраторов баз данных, специалистов по информационным системам и ресурсам, менеджеров по продажам решений и сложных технических систем, менеджеров информационных технологий.</p>
                </div>
            </div>
            <hr class="horizontal-line">
        </div>
    </div>
</section>

<!--компетанции-->

<?= \app\helpers\RenderHelper::renderCompetences([
    [
        'Знание',
        'современных методов и средств проектирования
программных и аппаратных средств вычислительной техники и
автоматизированных систем обработки информации и управления'
    ],
    [
        'Умение',
        'работать с аппаратными средствами, программными
продуктами и технологиями ведущих мировых производителей Intel, Microsoft,
Altera, Xilinx, Huawei, Atmel, и др.;'
    ],
    [
        'Владение',
        'языками программирования C++, C#, JavaScript, Python, использование в
работе пакетов Blender и MATLAB и сред разработки Unity, Visual Studio,
PyCharm, Android Studio.'
    ],
    [
        'Способность',
        'разрабатывать программные и аппаратные средства (системы,
устройства, блоки, программы, базы данных и т. п.) в соответствии с техническим
заданием и с использованием средств автоматизации проектирования;'
    ],
    [
        'Навыки',
        'проводить теоретические и эксперименты, готовность внедрять,
эксплуатировать и обслуживать современные программно-аппаратные комплексы'
    ],

])?>

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
                    'Технологии программирования',
                    'Программирование мобильных устройств',
                    'Базы данных',
                    'Web- программирование',
                    'Организация ЭВМ',
                    'Сети и телекоммуникации',
                    'Операционные системы',
                    'Защита информации',
                    'Микропроцессорные системы',
                    'Мультимедиа и компьютерная графика',
                    'Администрирование вычислительных сетей',
                    'Программирование искусственного интеллекта'
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
                    <div class="section-title "  style="color:#b87571">Выпускник может претендовать на вакансии </div>
                    <div class="section-text">

                        программиста, системного архитектора, аналитика и системного администратора,
                        администратора баз данных, специалиста по информационным системам и ресурсам,
                        менеджера по продажам решений и сложных технических систем, менеджера
                        информационных технологий.<br/><br/>
                        Компании:<br/>
                        Центробанк (г. Москва), ОАО «Томскнефть» ВНК, ООО «Томская электронная
                        компания», ОАО «Востокгазпром», Институт оптики атмосферы СО РАН, ТНЦ СО
                        РАН, ОАО «ТомскНИПИнефть ВНК», Томсктрансгаз, ОАО Томское пиво, ЗАО
                        «ЭлеСи» (г. Томск), группа компаний «ИНКОМ» (г. Томск), Dillinger Stahlbau,
                        Siemens (Германия), Samsung Electronics (Ю. Корея), BMW England, Hughes Corp
                        International, A&amp;AT и др.

                    </div>
                </div>
                <div class="col-auto right-block">
                    <div class="statistic-block">
                        <div class="stat-title">≈ ?</div>
                        <div class="stat-text">рублей средняя зарплата <br />набизнес-консультанта<br />  в России <br /> (по данным hh.ru)</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--TODO remove -->


<!--преподаватели-->
<section class="lecturers">
    <div class="light-grey-holder1">
        <div class="headline">
            Преподаватели и эксперты
        </div>
        <div class="left-right-container">
            <div class="left-right-content">
                <div class="item">
                    <div class="photo">
                        <img src="/combined/b-ivt/Pogrebnoy.jpg" class="photo-item" >
                    </div>
                    <div class="info">
                        <div class="info-name">
                          Погребной А.В.
                        </div>
                        <div class="info-text">
                             «Междисциплинарный проект», «МПС»
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="photo">
                        <img src="/combined/b-ivt/Demin.jpg" class="photo-item" >
                    </div>
                    <div class="info">

                        <div class="info-name">
                            Демин А.Ю. 
                        </div>
                        <div class="info-text">
                           «Мультимедиа и компьютерная графика»
                        </div>
                    </div> 
                </div>
                <div class="item">
                    <div class="photo">
                        <img src="/combined/b-ivt/Malchukov.jpg" class="photo-item" >
                    </div>
                    <div class="info">

                        <div class="info-name">
                          Мальчуков А.Н.
                        </div>
                        <div class="info-text">  
                            «Схемотехника вычислительных устройств», «Программирование на HDL»
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="photo">
                        <img src="/combined/b-ivt/Mytsko.jpg" class="photo-item" >
                    </div>
                    <div class="info">

                        <div class="info-name">
                          Мыцко Е.А.
                        </div>
                        <div class="info-text">
                            «Организация ЭВМ», «Технологии параллельных и распределенных вычислений»
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="photo">
                        <img src="/combined/b-ivt\Andreev.jpg" class="photo-item" >
                    </div>
                    <div class="info">

                        <div class="info-name">
                          Андреев С.А.
                        </div>
                        <div class="info-text">  
                            «Программирование микропроцессоров и микроконтроллеров»
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
                   'Разработка модуля управления автономной посадкой БПЛА на основе монокулярной визуальной одометрии.',
                   'Разработка приложения для имитационного моделирования поведения группы автономных необитаемых подводных аппаратов.',
                   'Разработка программно-аппаратных средств управления беспилотным летательным аппаратом вертолётного типа.',
                   'Разработка клиент- серверного приложения для обработки маршрутов движения мобильных устройств..',
                   'Разработка облачного сервиса для управления и организации рабочего процесса.'
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
        <div class="left-right-container">
            <div class="left-right-content">
                <div class="item">
                    <div class="photo">
                        <img src="/combined/b-ivt/Fedorova.jpg" class="photo-item" >
                    </div>
                    <div class="info">

                        <div class="info-name">
                            Федорова Ольга Евгеньевна
                        </div>
                        <div class="info-text">
                            Информатика и вычислительная техника, 2018<br>
                            Работает ООО Сегменто, Инженер по качеству<br><br>
                            4 года проведённые в ТПУ были лучшими в моей жизни. Я получила большой пласт знаний, который сейчас применяю в работе.
                        </div>
                    </div>
                </div> 
            </div>
        </div>
        <div class="dots">

        </div>

    </div>
</section>
<?=\app\helpers\RenderHelper::applyNow()?>
<!--другие программы-->
<?= \app\helpers\RenderHelper::renderBachelorProgramsAtBottom($name)?>