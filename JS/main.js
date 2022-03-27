function open_animation(elements, element, animationUp) {
    $(elements).addClass("active");
    element.classList.add('animate__animated', animationUp);
}

function close_animation(elements, element, animationDown, animationUp) {
    element.classList.remove(animationUp); 
    element.classList.add(animationDown);
}

$(document).ready(function() {
    const element = document.querySelector('.header_menu');
    const active_elements = ".header_burger, .header_menu, body";

    var animationDown = 'animate__slideOutUp',
        animationUp = 'animate__slideInDown';

    $(".header_burger").click(function(event) {
        if (element.classList.contains(animationUp)) {
            close_animation(active_elements, element, animationDown, animationUp);
        } else {
            open_animation(active_elements, element, animationUp);
        }   

        element.addEventListener('animationend', () => {
            if (element.classList.contains(animationDown)) { 
                element.classList.remove('animate__animated', animationDown);
                $(active_elements).removeClass("active");
            }
        });
    });

    $(".header_link").click(function(event) {
        close_animation(active_elements, element, animationDown, animationUp);

        event.preventDefault();

        var target = $(this).attr("href"),
            offset = $(target).offset().top;
        
        $(document).scrollTop(offset);
    });
});

