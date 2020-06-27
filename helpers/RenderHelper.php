<?php

namespace app\helpers;

class RenderHelper
{
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

}