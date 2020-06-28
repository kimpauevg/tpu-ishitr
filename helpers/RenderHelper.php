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
            'years' => '?',
            'learn' => '?',
            'href' => '/rip',
        ],
        'mst' => [
            'code' => '09.04.02',
            'name' => 'Телемедицина',
            'main_name' => 'Информационные системы и технологии',
            'seats' => 10,
            'years' => '?',
            'learn' => '?',
            'href' => '/mst',
        ],

        'urs' => [
            'code' => '09.04.02',
            'name' => 'Мехатроника и робототехника',
            'main_name' => 'Информационные системы и технологии',
            'seats' => 24,
            'years' => '?',
            'learn' => '?',
            'href' => '/urs',
        ],
        'pd' => [
            'code' => '54.04.01',
            'name' => 'Дизайн',
            'main_name' => 'Дизайн',
            'seats' => 6,
            'years' => '?',
            'learn' => '?',
            'href' => '/pd',
        ],
        'iim' => [
            'code' => '09.04.01',
            'name' => 'Искусственный интеллект и машинное обучение',
            'main_name' => 'Информатика и вычислительная техника',
            'seats' => 20,
            'years' => '?',
            'learn' => '?',
            'href' => '/iim',
        ],
        'mvr' => [
            'code' => '09.04.02',
            'name' => 'Мобильные приложения и виртуальная реальность',
            'main_name' => 'Информационные системы и технологии',
            'seats' => 40,
            'years' => '?',
            'learn' => '?',
            'href' => '/iim',
        ],

    ];
    public static function getInfo($name)
    {
        return self::$all_master_programs[$name];
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

                                <div class="program-text">%s года</div>
                            </div>
                            <div class="program-cond">
                                <div class="program-icon learn"></div>

                                <div class="program-text">%s года</div>
                            </div>

                        </div>
                    </a>
            ', $program['href'], $program['code'], $program['name'], $program['seats'], $program['years'], $program['learn'] );
        }
        $html .= '</div>';
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

    public static function renderSectionContactForm()
    {
        return '
<section class="contacts">
    <div class="section-content">
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
                            Мы отправим вам

                        </div>
                    </div>
                    <div class="contacts-table-subinfo">
                        <div class="row">
                            <div class="subinfo-cell">
                                ДЛЯ СВЯЗИ С НАМИ
                            </div>
                            <div class="subinfo-cell">
                                +7 (3822) 22-12-36
<!--                                <img src="/combined/new_landing/icons8-whatsapp-90.png" class="social-transparent">-->
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
                        <button class="contacts-button-documents">
                            Подать документы сейчас!
                        </button>
                    </div>
                </div>
                <div class="contacts-table-form">
                    <div class="contacts-form-field">
                        <input type="text" class="contacts-form-input" placeholder="Имя">
                    </div>
                    <div class="contacts-form-field">
                        <input type="text" class="contacts-form-input" placeholder="Фамилия">

                    </div>
                    <div class="contacts-form-field">
                        <input type="text" class="contacts-form-input" placeholder="Телефон">

                    </div>
                    <div class="contacts-form-field">
                        <input type="text" class="contacts-form-input" placeholder="Email">

                    </div>
                    <button class="contacts-button-submit">
                        Получить!
                    </button>
                </div>

            </div>
        </div>
    </div>
</section>
        ';
    }

    public static function renderInstructions()
    {
        return'
     <div class="section-content">
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
    <div class="section-content">
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
                                +7 (3822) 22-12-36
                                <img src="/combined/new_landing/icons8-vk-round-100.png" class="social-transparent">
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
                        <button class="contacts-button-documents">
                           Подать документы сейчас!
                        </button>
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
    </div>
</section>'
            , \Yii::$app->request->csrfParam, \Yii::$app->request->getCsrfToken());

    }

}