<?php
?>
<?php

/* @var $this yii\web\View */

use yii\web\View;

$this->title = 'Школа инженерного предпринимательства | ТПУ';
?>
<section class="section-subscribe">
    <div class="fig"></div>
    <div class="section-content">
        <div class="container">
            <div class="section-title">Томский политехнический университет</div>
            <div class="section-text">Подпишитесь на рассылку</div>
            <div class="subscribe-blocks">
                <div class="subscribe-block subscribe-block--subjects">
                    <ul class="subscribe-subjects">
                        <li class="subscribe-subject">анонсы программ</li>
                        <li class="subscribe-subject">скидки</li>
                        <li class="subscribe-subject">подборка статей</li>
                    </ul>
                </div>
                <div class="subscribe-block subscribe-block--form">
                    <form class="form subscribe-form" id="subscribe-form" action="/" method="post">
                        <div class="field-row">
                            <input id="subscribe-name" class="field" placeholder="Имя" name="SubscribeForm[name]" type="text" maxlength="256" />                            <div class="error-message" id="subscribe-name_em_" style="display:none"></div>                        </div>
                        <div class="field-row">
                            <input id="subscribe-email" class="field" placeholder="Email" name="SubscribeForm[email]" type="email" />                            <div class="error-message" id="subscribe-email_em_" style="display:none"></div>                        </div>
                        <div class="field-row">
                            <div class="field-checkbox">
                                <label>
                                    <input id="ytsubscribe-personal-data" type="hidden" value="0" name="SubscribeForm[personal_data]" /><input id="subscribe-personal-data" name="SubscribeForm[personal_data]" value="1" type="checkbox" /><span></span>согласие на обработку персональных данных                                </label>
                            </div>
                            <div class="error-message" id="subscribe-personal-data_em_" style="display:none"></div>                        </div>
                        <div class="btn-box">
                            <button id="subscribe-submit-btn" class="btn btn-danger btn-lg" type="submit">подписаться</button>
                        </div>
                    </form>                    </div>
                <div class="subscribe-block subscribe-block--info">
                    <div class="course-item">
                        <div class="course-item__label">вопросы  по  телефону</div>
                        <div class="course-item__value">
                            <a href="tel:+73822563529">+7 (3822) 56-35-29</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="courses">
    <div class="section-content">
        <style>
            .light-grey-holder {
                background: #ebebeb;
            }
            .headline {
                text-align: center;
                font-size: 36px;
                padding: 150px;
                font-weight: bold;
            }
            .green-headline {
                color: #3e9983;
            }
        </style>
        <div class="light-grey-holder">
            <div class="green-headline headline">
                Другие магистерские программы
            </div>


            <div class="container">
                <div class="row dpo-courses-list">


                    <div class="col-12 col-lg-4">
                        <a href="/buh" class="course-item">
                            <div class="course-subject">
                                09.03.02
                            </div>
                            <div class="course-title">Информационные системы и технологии</div>
                            <div class="course-sep"></div>
                            <div class="row flex-column flex-sm-row course-row">
                                <div class="col-12 col-sm-4">
                                    <div class="course-cond">
                                        <div class="course-icon places">
                                        </div>
                                        <div class="course-cond__label">11 мест</div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="course-cond">
                                        <div class="course-icon years"></div>

                                        <div class="course-cond__label">2 года</div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="course-cond">
                                        <div class="course-icon learn"></div>

                                        <div class="course-cond__label">2 года</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-lg-4">
                        <a href="/buh" class="course-item">
                            <div class="course-subject">
                                09.03.02
                            </div>
                            <div class="course-title">Информационные системы и технологии</div>
                            <div class="course-sep"></div>
                            <div class="row flex-column flex-sm-row course-row">
                                <div class="col-12 col-sm-4">
                                    <div class="course-cond">
                                        <div class="course-icon places">
                                        </div>
                                        <div class="course-cond__label">11 мест</div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="course-cond">
                                        <div class="course-icon years"></div>

                                        <div class="course-cond__label">2 года</div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="course-cond">
                                        <div class="course-icon learn"></div>

                                        <div class="course-cond__label">2 года</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-lg-4">
                        <a href="/buh" class="course-item">
                            <div class="course-subject">
                                09.03.02
                            </div>
                            <div class="course-title">Информационные системы и технологии</div>
                            <div class="course-sep"></div>
                            <div class="row flex-column flex-sm-row course-row">
                                <div class="col-12 col-sm-4">
                                    <div class="course-cond">
                                        <div class="course-icon places">
                                        </div>
                                        <div class="course-cond__label">11 мест</div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="course-cond">
                                        <div class="course-icon years"></div>

                                        <div class="course-cond__label">2 года</div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="course-cond">
                                        <div class="course-icon learn"></div>

                                        <div class="course-cond__label">2 года</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-lg-4">
                        <a href="/buh" class="course-item">
                            <div class="course-subject">
                                09.03.02
                            </div>
                            <div class="course-title">Информационные системы и технологии</div>
                            <div class="course-sep"></div>
                            <div class="row flex-column flex-sm-row course-row">
                                <div class="col-12 col-sm-4">
                                    <div class="course-cond">
                                        <div class="course-icon places">
                                        </div>
                                        <div class="course-cond__label">11 мест</div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="course-cond">
                                        <div class="course-icon years"></div>

                                        <div class="course-cond__label">2 года</div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="course-cond">
                                        <div class="course-icon learn"></div>

                                        <div class="course-cond__label">2 года</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-lg-4">
                        <a href="/buh" class="course-item">
                            <div class="course-subject">
                                09.03.02
                            </div>
                            <div class="course-title">Информационные системы и технологии</div>
                            <div class="course-sep"></div>
                            <div class="row flex-column flex-sm-row course-row">
                                <div class="col-12 col-sm-4">
                                    <div class="course-cond">
                                        <div class="course-icon places">
                                        </div>
                                        <div class="course-cond__label">11 мест</div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="course-cond">
                                        <div class="course-icon years"></div>

                                        <div class="course-cond__label">2 года</div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="course-cond">
                                        <div class="course-icon learn"></div>

                                        <div class="course-cond__label">2 года</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-lg-4">
                        <a href="/buh" class="course-item">
                            <div class="course-subject">
                                09.03.02
                            </div>
                            <div class="course-title">Информационные системы и технологии</div>
                            <div class="course-sep"></div>
                            <div class="row flex-column flex-sm-row course-row">
                                <div class="col-12 col-sm-4">
                                    <div class="course-cond">
                                        <div class="course-icon places">
                                        </div>
                                        <div class="course-cond__label">11 мест</div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="course-cond">
                                        <div class="course-icon years"></div>

                                        <div class="course-cond__label">2 года</div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="course-cond">
                                        <div class="course-icon learn"></div>

                                        <div class="course-cond__label">2 года</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>


                </div>


            </div>
        </div>
    </div>
    </div>
</section>

<section class="d-none">
    <ul>
        <li><a href="/ip">Инженерное предпринимательство</a></li>
        <li><a href="/emp">Экономика и управление на предприятии</a></li>
        <li><a href="/nef">Экономика и управление на предприятии нефтегазовой отрасли</a></li>
        <li><a href="/tb">Технологическое брокерство</a></li>
        <li><a href="/cm">Цифровой маркетинг</a></li>
    </ul>
    <ul>
        <li><a href="/inv">Инноватика</a></li>
    </ul>
    <ul>
        <li><a href="/dpo">Нац. проекты</a></li>
    </ul>
</section>
</div>


