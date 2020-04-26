$(document).ready(function() {
    var reviews=$('#reviews ');
    if(reviews.exists()) {
        reviews.slick( {
            slidesToShow:1,
            slidesToScroll:1,
            dots: true,
            // autoplay:!0,
            // autoplaySpeed:5000,
            prevArrow:'<div class="arrow-left"></div>',
            nextArrow:'<div class="arrow-right"></div>',
            appendDots: reviews.parent().siblings(".dots")
            }
        )
        $('.slick-track').height($('.slick-list').height())
    }
    $('.choice-wrap').click(function () {
        let clicked = $(this);
        let previous = $(this).siblings('.choice-wrap.chosen');
        if (!previous.exists()) {
            console.log('already clicked');
            return false;
        }
        previous.removeClass('chosen');
        clicked.addClass('chosen');
        let id = clicked.attr('data-index');
        let prev_id = previous.attr('data-index');
        let answers = clicked.parents('.nav-container').children('.answers');
        let prev_answer = answers.children('.answer.visible');
        console.log(prev_answer)
        let new_answer = answers.children('[data-index='+id+']');
        console.log(new_answer)


        if (new_answer && prev_answer) {
            prev_answer.removeClass('visible');
            new_answer.addClass('visible')
        }
    })

})
