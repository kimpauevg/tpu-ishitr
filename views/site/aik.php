<?php $info = \app\helpers\RenderHelper::getInfo('aik') ?>
<section class="section-welcome">
    <div class="background"></div>
    <div class="section-content">
        <div class="pb-5 container">
            <h1> Автоматизация измерений<br/> и контроля</h1>
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
                Подготовка магистров по программе «Автоматизация измерений и контроля» ведется в области информатизации, моделирования и управления
                измерительными технологиями; создания компьютерных систем измерения и контроля на стадиях проектирования, разработки, выпуска, а
                также в области эксплуатации и ремонта продукции. Цель подготовки – формирование элиты для продвижения передовых компьютерных
                технологий: сбора, обработки и представления измерительных данных; осуществления функций контроля и диагностики; распознавания и
                идентификации данных в различных прикладных областях.
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
                        Подготовка высококвалифицированных специалистов способных применять современные информационные измерительные технологии в
                        области стандартизации и метрологии, разрабатывать и внедрять нормативно-техническую документацию на производстве.
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
                        в нефтегазовых компаниях: ПАО «Газпром», ОАО «Роснефть»<br/>
                        на производственных предприятиях: АО «ЭлеСи», НПП «Томская электронная компания»<br/>
                        в научно-исследовательских и научно-производственных организациях: ОАО «ТомскНИПИНефть ВНК», НПЦ «Полюс»<br/>
                        в государственных организациях: территориальные Центры стандартизации и метрологии, межрегиональные территориальные управления

                        государственного надзора и контроля Росстандарта, Администрация г.Томска и Томской области, Федеральная налоговая служба<br/>
                        в иных организациях: ОАО «Томская домостроительная компания», органы по сертификации, аккредитованные испытательные лаборатории,
                        органы товарной экспертизы и др.
                    </div>
                </div>
                <div class="col-auto right-block">
                    <div class="statistic-block">
                        <div class="stat-title">≈ 55 000</div>
                        <div class="stat-text">рублей средняя<br/> заработная плата<br/>в Томской области</div>
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
                    'Теория измерений и метрология:',
                    'Стандартизация',
                    'Сенсорные сети',
                    'Квалиметрия и управления качеством',
                    'Сертификация',
                    'Информационно-измерительные системы',
                    'Статистические методы в измерениях',
                    'Программное обеспечение измерительных процессов',
                    'Цифровая обработка измерительных сигналов',
                    'Микроконтроллеры в измерительных устройствах',
                    'Автоматизированное проектирование электронных приборов',

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
                            <div class="benefit-title col-9">Обеспечивать</div>
                        </div>
                        <div class="benefit-text">
                            выполнение заданий по разработке новых, пересмотру и гармонизации действующих технических регламентов, стандартов и других документов по техническому
                            регулированию, стандартизации, сертификации, метрологическому обеспечению и управлению качеством
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="row">
                            <div class="benefit-item benefit-programming col-3"> </div>
                            <div class="benefit-title col-9">Автоматизировать</div>
                        </div>
                        <div class="benefit-text">
                            процессы измерений, контроля и испытаний в производстве и при научных исследованиях.
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="row">
                            <div class="benefit-item benefit-task col-3">  </div>
                            <div class="benefit-title col-9">Анализировать</div>
                        </div>
                        <div class="benefit-text">
                            состояние и динамику метрологического и нормативного обеспечения производства, стандартизации и сертификации на основе
                            использования прогрессивных методов и средств.
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
                        <img src="/combined/aik/muravjov.jpg" class="photo-item" >
                    </div>
                    <div class="info">
                        <div class="info-name">
                            Муравьев Сергей Васильевич
                        </div>
                        <div class="info-text">
                            профессор, д.т.н. – Квалиметрия и управление качеством
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="photo">
                        <img src="/combined/aik/kazakov.jpg" class="photo-item" >
                    </div>
                    <div class="info">
                        <div class="info-name">
                            Казаков Вениамин Юрьевич
                        </div>
                        <div class="info-text">
                            доцент, к.ф-м.н. – Статистические методы в измерениях
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="photo">
                        <img src="/combined/aik/hudonogova.jpg" class="photo-item" >
                    </div>
                    <div class="info">
                        <div class="info-name">
                            Худоногова Людмила Игоревна
                        </div>
                        <div class="info-text">
                            к.т.н., доцент – Профессиональная подготовка на английском языке
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
            <?= \app\helpers\RenderHelper::renderPartners('aik', 5)?>
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
                        <img src="/combined/aik/ephremova.jpg" class="photo-item" >
                    </div>
                    <div class="info">
                        <div class="info-name">
                            Ефремова Елена Константиновна
                        </div>
                        <div class="info-text">
                            год выпуска: 2008, работает в ФБУ «Томский ЦСМ», должность: инженер по метрологии<br/>
                            «Постоянный труд»
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="photo">
                        <img src="/combined/aik/kashina.jpg" class="photo-item" >
                    </div>
                    <div class="info">
                        <div class="info-name">
                            Кашина Ольга Викторовна
                        </div>
                        <div class="info-text">
                            год выпуска: 2008, работает в АО &quot; Производственное объединение Физтех&quot;, должность: Директор производства<br/>
                            «Ученье – свет»
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="photo">
                        <img src="/combined/aik/gariph.jpg" class="photo-item" >
                    </div>
                    <div class="info">
                        <div class="info-name">
                            Гариф Дайана Дамировна
                        </div>
                        <div class="info-text info-text__small">
                            год выпуска: 2017, работает в Федеральное бюджетное учреждение Государственный региональный центр
                            стандартизации, метрологии и испытаний в Томской области (ФБУ &quot;Томский ЦСМ&quot;), должность: Инженер по метрологии 2 категории
                            «Я очень благодарна Политеху. В 2011 году, только поступая в университет, я и подумать не могла, что выйду отсюда грамотным специалистом
                            с большим багажом знаний и профессиональных навыков. Здесь я узнала, каково это - решить (как изначально кажется) нерешаемое. Здесь я
                            обрела четкую уверенность в том, каким специалистом я хочу быть в дальнейшем. Здесь я нашла лучших друзей. Но особенно я благодарна
                            своей кафедре. Своей родной КИСМ! Мы - одна дружная семья, где каждый готов прийти друг другу на помощь. Было нелегко - у нас на
                            кафедре преподавателям было важно, чтобы ты понимал, а не просто зубрил. Строгие, но справедливые - они дали нам, студентам, такую базу
                            знаний! Отдельное огромное спасибо моему научному руководителю - Сергею Васильевичу Муравьеву!
                            Вспоминаю свои 6 лет обучения только с теплотой. А когда прохожу мимо своих учебных корпусов, так и хочется заглянуть и хотя бы на немного
                            вернуться в то прекрасное время! :)»
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="dots">

        </div>

    </div>
</section>

<?= \app\helpers\RenderHelper::renderSectionContactForm()?>

<section class="courses">
    <div class="section-content">
        <div class="light-grey-holder">
            <div class="headline">
                Другие магистерские программы
            </div>


            <div class="container-wide">
                <?= \app\helpers\RenderHelper::renderMagisterProgramsAtBottom('aik')?>
            </div>
        </div>
    </div>
</section>