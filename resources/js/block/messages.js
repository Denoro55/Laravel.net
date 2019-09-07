function initMessages()
{
    $('.js-show-message').on('click', function() {
        let card = $(this).closest('.card');
        card.toggleClass('card-show-message');
        if (card.hasClass('card-show-message')) {
            $(this).html('Скрыть');
        } else {
            $(this).html('Читать полностью');
        }
    });

    $('.js-show-comments').on('click', function() {
        let card = $(this).closest('.card');
        card.toggleClass('card-show-comments');
    });

    $('.js-new-post').on('click', function() {
        let block = $('.home-posts__new');
        block.fadeToggle(0);
    });
}

module.exports = initMessages;