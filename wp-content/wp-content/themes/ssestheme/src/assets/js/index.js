import objectFitImages from 'object-fit-images';
import AOS from 'aos';

//support object-fit to IE
let someImages = document.querySelectorAll('.fit-image');
objectFitImages(someImages);

//init menu
let menu = {
    nav: $('.main-nav'),
    openMenuBtn: $('.menu-action'),
    flag: true,

    menuAction() {
        this.openMenuBtn.on('click', function H() {
            if(menu.flag) {
                menu.flag = false;

                menu.nav.slideToggle();
                menu.openMenuBtn.toggleClass('menu-action_init');
                $('body').toggleClass('disabled-scroll');

                setTimeout(function() {
                    menu.flag = true;
                }, 300);
            }
        });
    },
    init: function H() {
        this.menuAction();
    },
    destroy: function H() {
        this.nav.removeAttr('style');
        $('body').removeClass('disabled-scroll');
        this.openMenuBtn.removeClass('menu-action_init');
    }
};


//init on load
menu.init();

$(window).resize(function H() {
    if(window.innerWidth >= 768) {
        menu.destroy();
    }
});

//FAQs page toogle
$('.faqs-section__icon').on('click', function H() {
    $(this).removeAttr('style');
    $(this).toggleClass('faqs-section__icon-active');

    let descr = $(this).parents('.faqs-section__headline').parents('.faqs-section__item').find('.faqs-section__description');
    descr.slideToggle();
});


//contact form
$('.checkbox-label').on('change', function H() {
    $(this).toggleClass('checkbox-label_active');
});


//modal actions
$('#modal-btn').on('click', function H(e) {
    e.preventDefault();
    $('#modal').fadeIn();
    $('body').addClass('disabled-scroll');
});


$('#modal-inner__close').on('click', function H() {
    $('#modal').fadeOut();
    $('body').removeClass('disabled-scroll');
});

//init animation on scroll
AOS.init({
    disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
    startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
    initClassName: 'aos-init', // class applied after initialization
    animatedClassName: 'aos-animate', // class applied on animation
    useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
    disableMutationObserver: false, // disables automatic mutations' detections (advanced)
    debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
    throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)
    // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
    offset: 120, // offset (in px) from the original trigger point
    delay: 0, // values from 0 to 3000, with step 50ms
    duration: 400, // values from 0 to 3000, with step 50ms
    easing: 'ease', // default easing for AOS animations
    once: false, // whether animation should happen only once - while scrolling down
    mirror: false, // whether elements should animate out while scrolling past them
    anchorPlacement: 'top-bottom' // defines which position of the element regarding to window should trigger the animation

});