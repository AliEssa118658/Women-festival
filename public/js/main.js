window.onload = function() {
    function truncateText(text, maxLength) {
        if (text.length > maxLength) {
            return text.slice(0, maxLength) + '...';
        } else {
            return text;
        }
    }
    const elements = document.querySelectorAll('.subtitle');

// Iterate over the selected elements and truncate their text
elements.forEach(element => {
    const originalText = element.textContent;
    element.textContent = truncateText(originalText, 45);
});


        const swiper = new Swiper('.swiper1', {
            // Optional parameters
            loop: true,
        speed:1000,
        direction: 'horizontal',
        effect: 'slide',
        autoplay: {
            delay:5000,
        },
            // If we need pagination
            pagination: {
                el: '.swiper-pagination',
                clickable: true,

            },
            // Navigation arrows
            navigation: {
                nextEl: '.swiper1 .swiper-button-next',
                prevEl: '.swiper1 .swiper-button-prev',
            },
            allowTouchMove:true,
            on:{
                slideChangeTransitionStart:function(){
                    $(".swiper-slide .slide-img").removeClass("animation");
                    $(".swiper-slide-active .slide-img .h-full").removeClass("animation2");
                    $(".swiper-slide-active .slide-img").addClass("animation");
                    $(".swiper-slide-active .slide-img .h-full").addClass("animation2");

                }
            }

        });
        var swiper2 = new Swiper('.swipper2', {
            direction: 'horizontal',
            slidesPerView:  1,
            spaceBetween: 0,
            initialSlide: 0,
            speed:1000,
            autoplay: {
                delay:1000,
            },
            // watchOverflow: true,
            // centeredSlides: true,
            grabCursor: true,
            breakpoints: {
                320: {
                    slidesPerView: 1
                },
                640: {
                    slidesPerView: 2
                },
                960: {
                    slidesPerView: 3
                },
                1280: {
                    slidesPerView: 4
                },

            },

            // Navigation arrows
            navigation: {
                nextEl: '.swipper2 .swiper-button-next',
                prevEl: '.swipper2 .swiper-button-prev',
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,

            },

        })

        $("#contact-form").on('submit', function(e) {
            e.preventDefault();
            $.ajax({
                headers: {
                    'X-CSRF-Token': $('meta[name="_token"]').attr('content')
                },
                type: "POST",

                data: {
                    name: $("#contact-form #name").val(),
                    phone: $("#contact-form #phone").val(),
                    email: $("#contact-form #email").val(),
                    msg: $("#contact-form #msg").val(),
                    subject: $('#contact-form input[name="subject"]:checked').val(),
                },
                beforeSend: function() {
                    $("#email-response-popup").fadeIn();
                },
                success: function(data) {
                    ajaxSuccess();
                    $("#alert-message").text("Thank you for submitting the form!");
                    $("#contact-form").trigger("reset");

                },

                error: function(data) {

                    ajaxError();

                },
            });
        });

        $(".close-response-popup").on('click', function() {
            $("#email-response-popup").fadeOut();
            $(".response-popup-corect").hide();
            $(".response-popup-error").hide();
            $(".response-popup-loader").show();
        });

        function ajaxSuccess() {
            $(".response-popup-loader").hide();
            $(".response-popup-corect").slideDown();

        }

        function ajaxError() {
            $(".response-popup-loader").hide();
            $(".response-popup-error").slideDown();
        }



window.tabLinks = function tabLinks(e) {
	if (!$(e).hasClass('active-link')) {
		$('.tab-contents').removeClass('active-tab');
		$('.tab-links').removeClass('active-link');
		$('.tab-links').removeClass('active-border');
		$(e).addClass('active-link');
		$(e).addClass('active-border');
		$('.tab-contents').fadeOut(0);
		$('#'+$(e).attr('id')+'-item').fadeIn(0);
	}
}

        }

