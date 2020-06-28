<section class="section-welcome">
    <div class="background"></div>
    <div class="section-content">
        <div class="pb-5 container">
            <h1> Мехатроника и<br/>робототехника</h1>
            <div class="container pill-container pb-4">
                <div class="badge-pill badge-secondary">
                    <div class="pill-text">
                        Магистерская образовательная программа
                    </div>
                </div>
                <div class="badge-pill badge-secondary pill-multirow">
                    <div class="pill-text">
                        15.04.06 – Мехатроника и робототехника
                    </div>
                </div>
            </div>
            <p>
                Нынешнее столетие уже называют веком практического освоения космоса, информационных технологий и гибких автоматизированных производств и
                роботизации во всех сферах производства и быта людей. Все эти прорывные направления
                в развитии человечества могут состояться только при наличии высококлассных специализирующихся в этих направлениях профессионалов своего дела,
                в том числе, и специалистов по мехатронике и робототехнике. Можно с уверенностью сказать, что востребованность
                в специалистах – мехатрониках и робототехниках будет возрастать с каждым годом, и потому получение профессиональной квалификации в этой
                области гарантирует дальнейшее трудоустройство.
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
                            <div class="course-item__value">24 бюджетных мест</div>
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
                        Подготовка высококвалифицированных специалистов международного уровня в области мехатроники и робототехники, способных решать задачи
                        разработки, исследования, производства и эксплуатации систем автоматического управления робототехническими и мехатронными системами,
                        включая гибкие автоматические производственные комплексы и производства, летательные и другие подвижные объекты, заниматься решением
                        проблем автоматизации производственных процессах в различных отраслях народного хозяйства.
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
                    <div class="benefit-text">Присваивается степень магистра по направлению <br>Мехатроника и робототехника.</div>
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
                    <div class="section-title">Выпускник может претендовать на должности </div>
                    <div class="section-text">
                        инженера, инженера-конструктора, инженера-исследователя, специалиста по
                        автоматизации, специалиста по мехатронным системам в аэрокосмических, автомобилестроительных, приборостроительных, машиностроительных
                        предприятиях, проектно-конструкторских и пуско-наладочных организациях.
                    </div>
                </div>
                <div class="col-auto right-block">
                    <div class="statistic-block">
                        <div class="stat-title">60 000-70 000</div>
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
                    'Методы искусственного интеллекта в мехатронике и робототехнике',
                    'Программное обеспечение мехатронных и робототехнических систем',
                    'Информационные системы в мехатронике и робототехнике',
                    'Технологии решения изобретательских задач',
                    'Адаптивные системы управления',
                    'Прецизионные электромеханические системы',
                    'Проектирование систем управления',
                    'Мобильные роботы',
                    'Системы автоматизированного проектирования и производства',
                    'Идентификация, фильтрация и наблюдение в системах управления',
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
                            <div class="benefit-title col-9">Получение опыта</div>
                        </div>
                        <div class="benefit-text">
                            разработки новых образцов и совершенствования существующих мехатронных и робототехнических систем, их модулей и подсистем, поиск новых способов управления
                            и обработки информации с применением методов искусственного интеллекта, нечеткой логики, искусственных нейронных и нейро-нечетких сетей
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="row">
                            <div class="benefit-item benefit-programming col-3"> </div>
                            <div class="benefit-title col-9">Разрабатывать и внедрять</div>
                        </div>
                        <div class="benefit-text">
                            мехатронные и робототехнические системы, управляющие, информационно-сенсорные
                            и исполнительные подсистемы с использованием методов математического моделирования
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="row">
                            <div class="benefit-item benefit-task col-3">  </div>
                            <div class="benefit-title col-9">Получить навыки </div>
                        </div>
                        <div class="benefit-text">
                            организации и проведения экспериментов на действующих мехатронных и робототехнических системах,
                            их подсистемах и отдельных модулях с целью определения их эффективности и определения путей совершенствования
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
                        <img src="/combined/urs/malyshenko.jpg" class="photo-item" >
                    </div>
                    <div class="info">
                        <div class="info-name">
                            Малышенко Александр Максимович
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

<section class="partners">
    <div class="white-holder">
        <div class="headline">
            Стратегические партнеры
        </div>
        <div class="partners-container">
            <?= \app\helpers\RenderHelper::renderPartners('urs', 5)?>
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
                        <img src="/combined/urs/kostin.jpg" class="photo-item" >
                    </div>
                    <div class="info">
                        <div class="info-name">
                            Костин Сергей Владимирович
                        </div>
                        <div class="info-text">
                            год выпуска: 2017<br/>
                            работает в: Аварийно-технический центр Росатома, Санкт-Птербург, должность: Инженер
                            аварийно спасательных работ отдел дистанционно управляемых систем<br/>
                            «Самое главное научился правильно учиться новому! Притягательна сама атмосфера не только ТПУ, но и города в целом. Отличное было
                            время!»
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="photo">
                        <img src="/combined/urs/chernykh.jpg" class="photo-item" >
                    </div>
                    <div class="info">
                        <div class="info-name">
                            Черных Алексей Андреевич
                        </div>
                        <div class="info-text">
                            год выпуска: 2016<br/>
                            работает в: МАОУ &quot;Планирование карьеры&quot;, ООО &quot;РИЧ&quot;, должность: Педагог дополнительного
                            образования по направлению &quot;Мехатроника и робототехника&quot;, по совместительству генеральный директор ООО &quot;РИЧ&quot;<br/>
                            «Отличный вуз с хорошей подготовкой и преподавательским составом. В последние года мощный прорыв материальной технической базы. Но в
                            наши года, когда мы учились, ещё успели поработать на древних пневматических роботах МПЦУ. После нашего выпуска уже начали обновлять
                            стенды и закупать роботов.»
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="photo">
                        <img src="/combined/urs/repin.jpg" class="photo-item" >
                    </div>
                    <div class="info">
                        <div class="info-name">
                            Репин Дмитрий Николаевич
                        </div>
                        <div class="info-text">
                            год выпуска: 2016<br/>
                            работает в: Муниципальное автономное образовательное учреждение &quot;Планирование карьеры&quot;
                            г.Томска, должность: Заместитель директора по техническому направлению<br/>
                            «Образовательная среда хорошо организована. Достаточное количество лекций, но недостаточное практических занятий. Слабое материальное
                            обеспечение по профильным дисциплинам на момент обучения. На сегодня положение исправили, открыв новые лаборатории.»
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="photo">
                        <img src="/combined/urs/maykov.jpg" class="photo-item" >
                    </div>
                    <div class="info">
                        <div class="info-name">
                            Майков Степан Александрович
                        </div>
                        <div class="info-text">
                            год выпуска: 2017<br/>
                            работает в: АО &quot;Информационные спутниковые системы&quot; им. академика М.Ф. Решетнёва&quot;,
                            должность: Инженер по наладке и испытаниям второй категории<br/>
                            «Не могу сказать, что у меня была самая сплочённая группа. Отчасти это объяснялось различными интересами направлений научной
                            деятельности. Но всё же, я с теплотой вспоминаю дни, проведённые в стенах ТПУ, в стенах 10 корпуса.»
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

<section class="courses">
    <div class="section-content">
        <div class="light-grey-holder">
            <div class="headline">
                Другие магистерские программы
            </div>


            <div class="container-wide">
                <?= \app\helpers\RenderHelper::renderMagisterProgramsAtBottom('urs')?>
            </div>
        </div>
    </div>
</section>