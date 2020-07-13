<?php

namespace app\helpers;

class RenderHelper
{
    public static $all_master_programs = [
        'rip' => [
            'code' => '09.04.01',
            'name' => 'Разработка интернет-приложений',
            'main_name' => 'Информатика и вычислительная техника',
            'seats' => 40,
            'learn' => '?',
            'href' => '/rip',
        ],
        'iim' => [
            'code' => '09.04.01',
            'name' => 'Искусственный интеллект и машинное обучение',
            'main_name' => 'Информатика и вычислительная техника',
            'seats' => 20,
            'learn' => '?',
            'href' => '/iim',
        ],
        'mst' => [
            'code' => '09.04.02',
            'name' => 'Телемедицина',
            'main_name' => 'Информационные системы и технологии',
            'seats' => 10,
            'learn' => '?',
            'href' => '/mst',
        ],
        'urs' => [
            'code' => '09.04.02',
            'name' => 'Мехатроника и робототехника',
            'main_name' => 'Информационные системы и технологии',
            'seats' => 24,
            'learn' => '?',
            'href' => '/urs',
        ],
        'mvr' => [
            'code' => '09.04.02',
            'name' => 'Мобильные приложения и виртуальная реальность',
            'main_name' => 'Информационные системы и технологии',
            'seats' => 40,
            'learn' => '?',
            'href' => '/mvr',
        ],
        'bds' => [
            'code' => '09.04.04 ',
            'name' => 'Технологии больших данных',
            'main_name' => 'Программная инженерия',
            'seats' => 25,
            'learn' => '?',
            'href' => '/bds',
        ],
        'ivc' => [
            'code' => '15.04.04 ',
            'name' => 'Интернет вещей и цифровое производство',
            'main_name' => 'Автоматизация технологических процессов и производств',
            'seats' => 23,
            'learn' => '?',
            'href' => '/ivc',
        ],
        'aik' => [
            'code' => '27.04.01',
            'name' => 'Автоматизация измерений и контроля',
            'main_name' => 'Стандартизация и метрология',
            'seats' => '?',
            'learn' => '?',
            'href' => '/aik',
        ],
        'pd' => [
            'code' => '54.04.01',
            'name' => 'Дизайн',
            'main_name' => 'Дизайн',
            'seats' => 6,
            'learn' => '?',
            'href' => '/pd',
        ],
    ];

    public static $all_bachelor_programs = [
        'atp' => [
            'code' => '15.03.04',
            'name' => 'Автоматизация технологических процессов и производств',
            'href' => '/batp',
            'average' => 73,
            'seats' => 40,
            'minimal' => 203,
            'ed_forms' => 'Очная, очно-заочная, заочная',
        ],
        'des' => [
            'code' => '09.03.01',
            'name' => 'Информатика и вычислительная техника',
            'href' => '/bdes',
            'average' => 82,
            'seats' => 64,
            'minimal' => 231,
            'ed_forms' => 'Очная',

        ],
        'ivt' => [
            'code' => '54.03.01',
            'name' => 'Дизайн',
            'href' => '/bivt',
            'average' => 84,
            'seats' => 9,
            'minimal' => 237,
            'ed_forms' => 'Очная',

        ],
        'pri' => [
            'code' => '09.03.04',
            'name' => 'Программная инженерия',
            'href' => '/bpri',
            'average' => 86,
            'seats' => 86,
            'minimal' => 249,
            'ed_forms' => 'Очная, очно-заочная, заочная',
        ],
        'mir' => [
            'code' => '15.03.06',
            'name' => 'Мехатроника и робототехника',
            'href' => '/bmir',
            'average' => 78,
            'seats' => 40,
            'minimal' => 219,
            'ed_forms' => 'Очная',
        ],
    ];
    public static function getInfo($name)
    {
        return self::$all_master_programs[$name];
    }
    public static function getBachelorInfo($name)
    {
        return self::$all_bachelor_programs[$name];
    }

    public static function getHref($name)
    {
        return self::$all_master_programs[$name]['href'];
    }

    public static function renderPrograms($program_name_array = [])
    {
        $initial_html = '<div class="navbar-bakalavriat gradient-navbar-table">';
        $even = true;
        foreach ($program_name_array as $program_name){
            if ($even) {
                $initial_html.= '<div class="choice-row">';
            }
            $initial_html.= sprintf('
                        <div class="choice-wrap">
                            <div class="choice">
                                %s
                            </div>
                        </div>', $program_name);

            if ($even) {
                $initial_html.= '
                        <div class="choice-wrap-after after-invisible"></div>';
            } else {
                $initial_html.= '
                    </div>
                    <div class="choice-wrap-after"></div>
';
            }
            $even = !$even;

        }
        if (!$even) {
          $initial_html.='</div>';
        }
        $initial_html.='</div>';
        return $initial_html;
    }

    public static function renderQualificationWorkThemes($themes_array = [])
    {
        $html = '
            <div class="container">
                <div class="row">
                    <div class="li-text">
                        <div class="qualification-list" >';
        foreach ($themes_array as $theme) {
            $html.= sprintf('
                            <div class="li_style">
                                <div class="li__text">
                                    %s
                                </div>
                            </div>', $theme);
        }
        $html .= '
                        </div>
                    </div>
                </div>
            </div>';
        return $html;
    }

    public static function renderMagisterProgramsAtBottom($except)
    {
        unset(self::$all_master_programs[$except]);

        $html = '
<section class="courses">
        <div class="light-grey-holder">
            <div class="headline">
                Другие магистерские программы
            </div>
                <div class="programs-list row">';
        foreach (self::$all_master_programs as $key => $program) {
            $html.= sprintf('
                    <a href="%s" class="program-item">
                        <div class="program-subject">
                            %s
                        </div>
                        <div class="program-title">%s</div>
                        <div class="program-sep"></div>
                        <div class="program-row">
                            <div class="program-cond">
                                <div class="program-icon places">
                                </div>
                                <div class="program-text">%s мест</div>
                            </div>
                            <div class="program-cond">
                                <div class="program-icon years"></div>

                                <div class="program-text">2 года</div>
                            </div>
                            <div class="program-cond">
                                <div class="program-icon learn"></div>

                                <div class="program-text">очно</div>
                            </div>

                        </div>
                    </a>
            ', $program['href'], $program['code'], $program['name'], $program['seats']);
        }
        $html .= '</div>
    </div>
</section>
';
        return $html;
    }

    public static function renderBachelorProgramsAtBottom($except)
    {

        unset(self::$all_bachelor_programs[$except]);
        $html =
        '<section class="courses">
                <div class="light-grey-holder">
                    <div class="headline">
                        Другие направления бакалавриата
                    </div>
        
        
                    <div class="container-wide">
                        <div class="programs-list row">';

        foreach (self::$all_bachelor_programs as $program) {
            $html.= sprintf('
                    <a href="%s" class="program-item">
                        <div class="program-subject">
                            %s
                        </div>
                        <div class="program-title">%s</div>
                    </a>
            ', $program['href'], $program['code'], $program['name']);
        }

        $html .= '     </div>
                    </div>
                </div>
        </section>';
        return $html;

    }


    public static function renderPartners($suffix, $total)
    {
        $html = '
            <div class="partners">';
        foreach( range(1, $total) as $number) {
            $html.= sprintf('
                <div class="partners-style">
                    <img src="/combined/%s/partners/%d.png">
                </div>', $suffix, $number);
        }
        $html .= '
            </div>';
        return $html;
    }

    public static function renderInstructions()
    {
        return'
</section>
<section class="section-instructions">
     <div>
        <div class="container">
            <div class="grid-container">
                <div class="grid-instruction-row">
                    <div class="grid-container-item grid-instruction-bold">
                        Получите подробную инструкцию и все материалы для поступления
                    </div>
                    <div class="grid-container-item">
                        Заполните анкету, и после обработки мы вышлем ссылку для скачивания Вам на электронную почту
                    </div>
                </div>
                <div class="grid-instruction-row">
                    <div class="grid-container-item">
                        Мы отправим Вам все необходимые материалы, а так же ссылки на полезные ресурсы
                    </div>
                    <div class="grid-container-item">
                        <a href="https://apply.tpu.ru/" class="btn btn-danger btn-lg">получить!</a>
                    </div>

                </div>
            </div>

        </div>
    </div>';
    }
    public static function renderInstructionsForm()
    {
        return sprintf('<section class="contacts">
        <div class="green-gradient-holder">
            <div class="contacts-table">
                <div class="contacts-table-info">
                    <div class="row">
                        <div class="contacts-white-headline">
                             Получите подробную инструкцию и все материалы для поступления
                        </div>
                    </div>
                    <div class="row">
                        <div class="contacts-white-text">
                            Мы отправим Вам все необходимые материалы, а так же ссылки на полезные ресурсы 
                        </div>
                    </div>
                    <div class="contacts-table-subinfo">
                        <div class="row">
                            <div class="subinfo-cell">
                                ДЛЯ СВЯЗИ С НАМИ
                            </div>
                            <div class="subinfo-cell">
                                +7 952 800 26-01
                                <img src="/combined/new_landing/icons8-vk-round-100.png" class="social-transparent social-vk">
                            </div>
                        </div>
                        <div class="row">
                            <div class="subinfo-cell">
                                ПОДАЧА ДОКУМЕНТОВ
                            </div>
                            <div class="subinfo-cell">
                                С 01 декабря 2019 по 14 августа 2020
                           </div>
                        </div>
                        <a>
                            <button class="contacts-button-documents">
                               Подать документы сейчас!
                            </button>
                        </a>
                    </div>
                </div>
                <form class="contacts-table-form">
                    <div class="contacts-form-field">
                        <input type="text" class="contacts-form-input" name="name" placeholder="Имя">
                    </div>
                    <div class="contacts-form-field">
                        <input type="text" class="contacts-form-input" name="surname" placeholder="Фамилия">

                    </div>
                    <div class="contacts-form-field">
                        <input type="tel" class="contacts-form-input" name="phone" placeholder="Телефон">

                    </div>
                    <div class="contacts-form-field">
                        <input type="text" class="contacts-form-input" name="email" placeholder="Email">

                    </div>
                    <input type="hidden" name="%s" value="%s"/>
                    <button class="contacts-button-submit" type="button">
                               Получить!
                    </button>
                </form>

            </div>
        </div>
</section>', \Yii::$app->request->csrfParam, \Yii::$app->request->getCsrfToken());
    }
    public static function renderBachelorAfterIntro($suffix)
    {
        $info = self::getBachelorInfo($suffix);
        return sprintf( '        
        <div class="container">
            <div class="row flex-column flex-sm-row">
                <div class="col-lg-4 col-12 course-item-holder">
                    <div class="col-auto1">
                        <div class="course-item" >

                            <div class="course-item__label">Места</div>
                            <div class="course-item__value">%s бюджетных мест</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12 course-item-holder">
                    <div class="col-auto1">
                        <div class="course-item">

                            <div class="course-item__label">форма обучения</div>
                            <div class="course-item__value">%s</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12 course-item-holder">
                    <div class="col-auto1">
                        <div class="course-item">

                            <div class="course-item__label">Средний проходной балл </div>
                            <div class="course-item__value">2017-2019 гг. – %s</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row flex-column flex-sm-row ">
                <div class="course-item  col-lg-4 col-12 course-item-holder"  >
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
', $info['seats'], $info['ed_forms'], $info['minimal']);
    }

    public static function applyNow()
    {
        return '
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
</section>';
    }
    public static function renderCompetences($all_competences, $insert_instructions = false)
    {
        $possible_benefits = [
            'benefit-graph',
            'benefit-programming',
            'benefit-task',
            'benefit-target',
            'benefit-suitcase',
        ];
        $html = '
<section class="section-benefits">
    <div class="white-holder">
        <div class="headline">
            Программа нацелена на компетенции
        </div>
        <div class="section-content">
            <div class="container">
        ';
        $competence_rows = array_chunk($all_competences, 3);
        foreach ($competence_rows as $row_elems){
            $html .= '
                <div class="row">            
            ';
            foreach ($row_elems as $competence) {
                $html .= sprintf('
                    <div class=" col-md-4" >
                        <div class="row">
                            <div class="benefit-item %s col-3"></div>
                            <div class="benefit-title col-8">%s</div>
                        </div>
                        <div class="benefit-text">%s</div>
                    </div>
                ', array_shift($possible_benefits),$competence[0], $competence[1]);
            }

            $html .= '
                </div>
            ';
        }

        $html .= '
            </div>
        </div>
    </div>';
        if ($insert_instructions) {
            $html .= self::renderInstructions();
        }
        $html .=
            '</section>
        ';
        return $html;
    }

    public static function masteryOpportunity()
    {
        return '
<section class="section-why" style="background-color:#ebebeb">
    <div class="section-content">
        <div class="container" >
            <div class="row flex-column flex-lg-row justify-content-start justify-content-lg-between">
                <div class="col-auto left-block">
                    <div class="section-title">Магистратура дает возможность за два года </div>
                    <div class="section-text">
                        За два года получить второе высшее образование
                        или повысить свою квалификацию в интересующей
                        области. Студенты, проходящие обучение в
                        магистратуре ИШИТР, получают углубленную
                        теоретическую и практическую подготовку 
                        в научно-исследовательской и профессиональной деятельности.
                        Степень магистра открывает более широкие перспективы для
                        карьерного роста и возможности трудоустройства по всему миру.
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
';
    }

    public static function renderBachelorScores($array)
    {
        $html = '
        <section class="scores">
            <div class="section-content">
                <div class="container" >
                    <div class="row flex-column flex-lg-row justify-content-start justify-content-lg-between">
                        <div class="section-title"  style="color:#776c7e;" >Минимальный проходной балл ЕГЭ </div>
                            <div class="section-text row">
        ';
        foreach ($array as $subject_score) {
            $html .= sprintf('
                                <div class="col-sm-4 col-12">
                                    <div class="circle " >
                                        <div class="circle-title">%s</div>
                                        <div class="circle-text">%s</div>
                                    </div>
                                </div>

            ', $subject_score['score'], $subject_score['subject']);
        }

        $html.='
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>';
        return $html;
    }
    public static function renderCarousel($title, $slides_array, $prefix)
    {

        $html = sprintf('
<section class="lecturers">
    <div class="light-grey-holder">
        <div class="headline">
            %s
        </div>
        <div class="left-right-container">
            <div class="left-right-content">
        ', $title);
        foreach ($slides_array as $slide) {
            $additional_class = '';
            if (isset($slide['long']) && $slide['long']) {
                $additional_class = 'info-text__small';
            }
            $html .= sprintf('
                <div class="item">
                    <div class="photo">
                        <img src="/combined/%s/%s" class="photo-item" >
                    </div>
                    <div class="info">
                        <div class="info-name">
                            %s
                        </div>
                        <div class="info-text %s">
                            %s
                        </div>
                    </div>
                </div>

            ', $prefix, $slide['image'], $slide['name'], $additional_class, $slide['desc']);
        }

        $html .='
            </div>
        </div>
        <div class="dots">
        </div>
    </div>
</section>
        ';
        return $html;
    }
    public static function renderTeachers($slides_array, $prefix)
    {
        $title = 'Преподаватели и эксперты';
        return self::renderCarousel($title, $slides_array, $prefix);
    }

    public static function renderReviews($slides_array, $prefix)
    {
        $title = 'Отзывы выпускников';
        return self::renderCarousel($title, $slides_array, $prefix);
    }
}