<?php $name = 'des';
$info = \app\helpers\RenderHelper::getBachelorInfo($name) ?>
<section class="section-welcome">
    <div class="background"></div>
    <div class="section-content">
        <div class="container pb-5">
            <h1  >Дизайн</h1>
            <div class="container pill-container pb-4">
                <div class="badge-pill badge-secondary">
                    <div class="pill-text">
                        Бакалавриат
                    </div>
                </div>
                <div class="badge-pill badge-secondary pill-multirow">
                    <div class="pill-text">
                        54.03.01 – Дизайн
                    </div>
                </div>
            </div>
            <p>
                Объекты профессиональной деятельности бакалавров-дизайнеров – образцы
                промышленной продукции, средства транспорта и предметы культурно-бытового
                назначения, различные виды полиграфических изданий. В процессе дизайн-
                проектирования создаются новые образцы промышленной продукции,
                конкурентоспособность которых обеспечивается повышением эстетических и
                эргономических качеств, выявленных в результате анализа основных
                закономерностей развития дизайна в теоретических, исторических, культурных,
                инженерно-технических, творческих и других аспектах.
            </p>
        </div>
        <?= \app\helpers\RenderHelper::renderBachelorAfterIntro($name)?>
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
                        обучения направлена на подготовку специалистов широкого профиля, владеющих
                        навыками выполнения реальных дизайн-проектов, с использованием
                        компьютерных технологий и научных методов исследований. В курс обучения
                        включены программные пакеты: Autodesk 3Ds Max, Autodesk Inventor, Adobe
                        Photoshop, Corel Draw, Houdini, Blender 3D и т. д. Диплом бакалавра-дизайнера
                        позволит применять полученные знания при разработке фирменного стиля,
                        создавать дизайн современных промышленных изделий при помощи современных
                        моделирующих 3D-технологий и анимации.
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
        'Анализ',
        'и определению требований к дизайн-проекту'
    ],
    [
        'Владение',
        'рисунком, умение использовать рисунки в практике составления композиции и переработка их в направлении проектирования любого объекта'
    ],
    [
        'Навык',
        'разработки проектной идеи, основанной на концептуальном, творческом подходе к решению дизайнерской задачи'
    ],
    [
        'Конструирование',
        'товаров, промышленных образцов и объектов'
    ],
    [
        'Подготовка',
        'полного набора документации по дизайн-проекту для его реализации, осуществление основных экономических расчетов для реализации проекта.'
    ],

])?>

<!--баллы егэ-->
<section class="scores">
    <div class="section-content">
        <div class="container" >
            <div class="row flex-column flex-lg-row justify-content-start justify-content-lg-between">
                <div class="col-auto left-block">
                    <div class="section-title "  style="color:#776c7e;" >Минимальный проходной балл ЕГЭ </div>
                    <div class="section-text row">
                        <div class="col-sm-4 col-12">
                            <div class="circle " >
                                <div class="circle-title">54</div>
                                <div class="">Обществознание</div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-12">
                            <div class="circle">
                                <div class="circle-title">53</div>
                                <div class="">Творческий конкурс </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-12">
                            <div class="circle">
                                <div class="circle-title">56</div>
                                <div class="">Русский язык</div>
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
                        'Дизайн-проектирование',
                    'Специальный рисунок',
                    'Основы проектной графики в промышленном дизайне',
                    'Компьютерная графика в промышленном дизайне',
                    'Компьютерное моделирование',
                    'Техническое конструирование',
                    'Эргономика и антропометрия',
                ]);
                ?>
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

                        ООО &quot;Титан-media&quot; г. Нижневартовск,<br/>
                        ООО &quot;Технопоиск&quot; REDMOND, г. Санкт-Петербург,<br/>
                        ООО &quot;ВИТЕКС&quot;, ООО &quot;ИНТЭК&quot;, г. Томск<br/>
                        FilmDirectionFX VFX Studio, Mighty Buildings Inc., г. Москва<br/>
                        Avalanche studios, Швеция<br/>
                    </div>
                </div>
                <div class="col-auto right-block">
                    <div class="statistic-block">
                        <div class="stat-title">≈ Не указано</div>
                        <div class="stat-text">рублей средняя зарплата <br />бизнес-консультанта<br />  в России <br /> (по данным hh.ru)</div>
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
        Отсутствуют фотографии
    </div>
</section>
<!--темы работ-->
<section class="qualification-topics">
    <div class="white-holder">
        <div class="headline">
            Темы выпускных<br> квалификационных работ
        </div>
        <div class="section-content">
            <?= \app\helpers\RenderHelper::renderQualificationWorkThemes([
                'Дизайн-проект модульного комплекта элементов, представляющих сенсорную стимуляцию.',
                'Комбинаторный подход в дизайне и разработке высокоэффективной аудиосистемы рупорного типа.',
                'Дизайн-проект оболочки портативного многофункционального медицинского устройства.',
                'Дизайн комбинаторного комплекта мебели для детей.',
                'Дизайн корпуса лампы для светотерапии.',
            ])?>
        </div>
    </div>
</section>

<!--отзывы-->
<section class="reviews">
    <div class="light-grey-holder1">
        <div class="headline">
            Отзывы наших выпускников
        </div>
            Отсутствуют вообще
    </div>
</section>

<?= \app\helpers\RenderHelper::applyNow()?>
<!--другие программы-->
<?=\app\helpers\RenderHelper::renderBachelorProgramsAtBottom('des')?>