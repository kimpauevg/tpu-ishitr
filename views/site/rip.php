<?php $prefix = 'rip';
$info = \app\helpers\RenderHelper::getInfo($prefix)
//Новые фотки
?>

<section class="section-welcome">
    <div class="background"></div>
    <div class="section-content">
        <div class="pb-3 container">
            <h1> Разработка<br/> интернет-приложений  </h1>
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
            <p>Профессия веб-разработчика – одна из самых востребованных на рынке IT сегодня, и эта тенденция из года в год возрастает. Основной идеей магистерской программы является подготовка высококвалифицированных специалистов в следующих областях: - разработка и дизайн (UI/UX) веб-приложений любого уровня сложности; - разработка клиентских (frontend) и серверных (backend) веб-приложений; - продвижение сайтов (SEO, SMO, SMM); управление проектами и др. на основе самых современных и востребованных технологий и фреймворков (программа реализуется в партнерстве с крупными IT-компаниями г. Томска).</p>
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
                            <div class="course-item__value">Очная (обучение в вечернее время)</div>
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
                        <div class="benefit-title col-8">Цель программы</div>
                    </div>
                    <div class="benefit-text">
                        Подготовка высококвалифицированных веб-разработчиков для создания и эффективного управления порталами, сайтами, а также
                        для продвижения продукции и услуг предприятий, связанных с производством или коммерцией.                    </div>
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
                    <div class="benefit-text">Присваивается степень магистра по направлению <br>Разработка интернет-приложений.</div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="section-why" style="background-color:#ebebeb">
    <div class="section-content">
        <div class="container" >
            <div class="row flex-column flex-lg-row justify-content-start justify-content-lg-between">
                <div class="col-auto left-block">
                    <div class="section-title">Выпускник может претендовать на вакансии</div>
                    <div class="section-text">
                        программистов, инженеров-программистов различных категорий, тестировщиков,
                        frontend- и backend-разработчиков различных категорий, системных аналитиков, UX/UI-дизайнеров<br/><br/>
                        Наши выпускники работают в: ОАО «ТомскНИПИнефть ВНК, АО «Информационные спутниковые системы» имени академика М.Ф. Решетнева,
                        ООО «Рубиус Групп», ООО «КвантумСофт», ООО «Элком+», ООО «ЮЭС-продакшн», «UbiSoft Entertainment» (г. Монреаль, Канада),
                        ОАО «Востокгазпром», ОАО «Роснефть», ООО «ГазпромТрансгазТомск», группа компаний «Лама» (г. Томск),
                        группа компаний «Центр финансовых технологий» (г. Томск, г. Новосибирск, г. Санкт-Петербург),
                        Томское отделение Центрального банка России, ООО «КДВ-групп» (г. Томск).
                    </div>
                </div>
                <div class="col-auto right-block">
                    <div class="statistic-block gap-block">
                        <div class="stat-title">≈ 110 000 - 180 000</div>
                        <div class="stat-text">рублей зарплата <br />Senior-разработчика<br />  в России <br /> (по данным hh.ru)</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="frequent-questions section-vacancy">
    <div class="white-holder">
        <div class="questions-container">
            <div class="headline">
                Дисциплины магистерской программы
            </div>
            <div class="nav-container">
                <?= \app\helpers\RenderHelper::renderPrograms([
                        'Интеллектуальные системы',
                    'Интеллектуальные системы',
                    'Машинное обучение',
                    'Современные платформы программирования',
                    'Параллельные и высокопроизводительные вычисления',
                    'Облачные технологии',
                    'Проектирование Интернет- приложений',
                    'Пользовательские интерфейсы в интернет приложениях',
                    'Системное и сетевое администрирование',
                    'Технологии и инструменты банков данных',
                    'Управление проектами',
                ])?>
            </div>
        </div>
    </div>
</section>
<?= \app\helpers\RenderHelper::masteryOpportunity()?>
<?= \app\helpers\RenderHelper::renderCompetences([
    [
        'Разрабатывать',
        'Internet и Web приложения, сетевые приложения и базы данных',
    ],
    [
        'Проектировать',
        'программные приложения и пользовательские интерфейсы, компьютерный дизайн приложений.',
    ],
    [
        'Сопровождать',
        'авторизированное ПО сторонних разработчиков',
    ],
], true)?>

<?= \app\helpers\RenderHelper::renderTeachers([
    [
        'image' => 'fadeev.jpg',
        'name' => 'Фадеев А.С.',
        'desc' => 'кандидат технических наук, доцент отделения информационных технологий инженерной школы информационных
технологий и робототехники, Проректор по информатизации<br/>
                   Дисциплины:
                    <br/>«Администрирование в информационных системах»
',
    ],
    [
        'image' => 'ponomarev.jpg',
        'name' => 'Пономарев А.А',
        'desc' => 'кандидат технических наук, доцент отделения информационных технологий инженерной школы
информационных технологий и робототехники<br/>
                   Дисциплины: 
                   <br/>«Технологии и инструменты банков данных»
',
    ],
//    [
//        'image' => 'sokolova.jpg',
//        'name' => 'Соколова В.В.',
//        'desc' => 'кандидат технических наук, доцент отделения информационных технологий инженерной школы
//информационных технологий и робототехники<br/>
//                   Дисциплины:
//                   <br/>«Проектирование интернет приложений»
//',
//    ],
    [
        'image' => 'savrasov.jpg',
        'name' => 'Саврасов Ф.В.',
        'desc' => 'кандидат технических наук, доцент отделения информационных технологий инженерной школы информационных
технологий и робототехники
<br/>
                   Дисциплины: 
                   <br/>«Пользовательские интерфейсы в интернет приложениях»
',
    ],
], $prefix)?>

<section class="partners">
    <div class="white-holder">
        <div class="headline">
            Стратегические партнеры
        </div>
        <div class="partners-container">
            <?= \app\helpers\RenderHelper::renderPartners('rip', 7)?>
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

                        <img src="/combined/rip/khusainova.jpg" class="photo-item" >


                    </div>
                    <div class="info">

                        <div class="info-name">
                            Хусаинова Олеся
                        </div>
                        <div class="info-text info-text__small">
                            Меня зовут Хусаинова Олеся и я окончила магистерскую программу ТПУ &quot;Разработка интернет-приложений&quot;. На мой взгляд эта программа охватывает
                            основные области компьютерных технологий, необходимые современному разработчику. Мне особенно нравится то, что программа включает не только
                            предметы, посвященные непосредственно разработке приложений, но и их администрированию (&quot;Администрирование в информационных системах&quot;) и
                            менеджменту (&quot;Управление проектами&quot;), охватывая полный цикл разработки приложений. К тому же программа включает такие современные и
                            востребованные сферы компьютерных наук, как облачные технологии и машинное обучение. Таким образом, я могу смело рекомендовать
                            образовательную программу Томского Политехнического Университета &quot;Разработка интернет-приложений&quot;.
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="photo">
                        <img src="/combined/rip/oblozhenko.jpg" class="photo-item" >
                    </div>
                    <div class="info">
                        <div class="info-name">
                            Обложенко Алена
                        </div>
                        <div class="info-text info-text__small">
                            В настоящий момент являюсь студентом-выпускником магистерского направления «Информатика и вычислительная техника». Два года назад, после
                            окончания бакалавриата, решался вопрос о дальнейшем обучении. Тогда только разрабатывалась и внедрялась совсем новая образовательная
                            программа «Разработка интернет-приложений». Представилась возможность разрабатывать Web-приложения; проектировать и программировать взаимодействие с базами, банками и другими хранилищами данных. Помимо этого, изучалось
                            проектирование дизайна приложений и несколько новых языков программирования, которых не было в бакалавриате. Для магистранта также можно
                            совмещать параллельно учебу и работу по специальности, особенно это удобно в период практик. Воспользовавшись такой возможностью, устроилась
                            в качестве стажера в компанию, которая занимается разработкой систем технологической связи и автоматизации. В данный момент работаю там
                            официально на позиции «Разработчик», Elcomplus
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="photo">
                        <img src="/combined/rip/kostina.jpg" class="photo-item" >
                    </div>
                    <div class="info">
                        <div class="info-name">
                            Анастасия Костина
                        </div>
                        <div class="info-text">
                            Выпускник 2016г., ООО Рубиус групп, разработчик<br/>
                            Эта программа позволяет подготовиться к работе в практически любой сфере, будь то разработка мобильных приложений, сайтов, игр или сложного
                            инженерного ПО. Полученные знания обеспечат хорошую базу для последующего роста в любом направлении отрасли. Работа над реальными
                            практическими задачами в рамках курсовых и дипломных работ позволит получить необходимые практические навыки, а результаты таких работ можно
                            включить в резюме.
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="dots">

        </div>
    </div>
</section>

<?=\app\helpers\RenderHelper::renderInstructionsForm()?>
<?= \app\helpers\RenderHelper::renderMagisterProgramsAtBottom($prefix)?>
