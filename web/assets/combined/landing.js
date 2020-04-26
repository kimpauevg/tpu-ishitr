new WOW( {
        offset: 50, mobile: !1
    }

).init();
$(document).ready(function() {
        var specialistSlider=$('#specialists-slider .slider-inner');
        if(specialistSlider.exists()) {
            specialistSlider.slick( {
                    infinite:!0, slidesToShow:4, slidesToScroll:1, autoplay:!0, autoplaySpeed:5000, prevArrow:'<div class="slick-prev"><span class="icon"></span></div>', nextArrow:'<div class="slick-next"><span class="icon"></span></div>', responsive:[ {
                        breakpoint:1199, settings: {
                            slidesToShow: 3
                        }
                    }
                        , {
                            breakpoint:991, settings: {
                                slidesToShow: 2
                            }
                        }
                        , {
                            breakpoint:767, settings: {
                                slidesToShow: 1
                            }
                        }
                    ]
                }
            )
        }
    }

    )