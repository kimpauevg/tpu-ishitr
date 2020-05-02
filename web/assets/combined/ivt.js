$(document).ready(function() {
    var reviews = $('.left-right-content');
    reviews.each((index, review) => {

        review = $(review);
        review.slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                dots: true,
                // autoplay:!0,
                // autoplaySpeed:5000,
                prevArrow: '<div class="arrow-left"></div>',
                nextArrow: '<div class="arrow-right"></div>',
                appendDots: review.parent().siblings(".dots")
            }
        )
        let track = review.children('.slick-list').children('.slick-track');
        track.height($('.left-right-container').height())

    })


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
        let answers = clicked.parents('.nav-container').children('.answers');
        let prev_answer = answers.children('.answer.visible');
        let new_answer = answers.children('[data-index='+id+']');
        prev_answer.removeClass('visible');
        new_answer.addClass('visible')
    })

    $('.arrow-down').click(function () {
        let prev_id = $(this).parent().siblings('.choice-wrap.chosen').attr('data-index');
        let new_id = prev_id+++1;
        let elem = $(this).parent().siblings('.choice-wrap[data-index="'+new_id+'"]');
        if (!elem.exists()) {
            elem = $(this).parent().siblings('.choice-wrap[data-index="1"]');
        }
        elem.click();
    })

})
