$(document).ready(function () {

    //  Header functions
    var headerWrap = '.header';

    $(document).scroll(function () {

        var topOffset = $(this).scrollTop();

        if (topOffset >= 85) {
            $(headerWrap).removeClass('white');
            $(this).on(function () {
               $(this).fadeIn(500, function () {

                   console.log(headerWrap);
               });
            });

        } else {
            $(headerWrap).addClass('white');

        }

        $('span').on(function () {
            $(this).toggleClass('black');
            $(this).toggle("src", "../img/logo_icon.svg");
        });

    });



    //  SANDBOX

    // for (var mainIteration = 0; mainIteration <= 4; mainIteration++) {
    //
    //     console.log('main iteration:', mainIteration);
    //
    // }


    // var integerVariable = parseInt($(headerWrap).data('variable'));
    // var stringVariable = 'Hello world!';
    // var arrayVariable = [1, 2, 3, 4, 'hello!'];
    //
    // var productCardsContainer = $('.products-store');
    // var productCards = $('.products-item');
    //
    // for (var i = 0; i < 9; i++) {
    //
    //     productCardsContainer.append($('.products-item').get(i).outerHTML);
    //
    // }

//    console.log(arrayVariable);


});