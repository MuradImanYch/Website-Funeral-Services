$(document).ready(() => {
    let subMenuToggle = false;

    if($(window).width() < 1024) { // submenu toggle for mobile
        $('nav ul li:nth-child(2) span').on('click', () => {
            subMenuToggle = !subMenuToggle;
            subMenuToggle ? $('nav ul li:nth-child(2) span').text('▲') && $('nav .servicesSubMenu').slideDown() : $('nav ul li:nth-child(2) span').text('▼') && $('nav .servicesSubMenu').slideUp();
        });
    }

    if($(window).width() > 1024) { // submenu show/hide for desctop
        $('nav ul li:nth-child(2)').on('mouseover', () => {
            $('nav ul li:nth-child(2) span').text('▲') && $('nav .servicesSubMenu').show();
        });
        $('nav ul li:nth-child(2)').on('mouseleave', () => {
            $('nav ul li:nth-child(2) span').text('▼') && $('nav .servicesSubMenu').hide();
        });
    }

    const swiper = new Swiper('.swiper', { // swiper slider init
        pagination: {
          el: '.swiper-pagination',
          clickable: true
        },
      
        scrollbar: {
          el: '.swiper-scrollbar',
        },

        autoplay: {
            delay: 3000,
        }
      });

      $('#about .videoWrap .video .play').on('click', () => { // fade in video pop up
        $('.videoPopup').fadeIn().css({display: 'flex'});
      });

      $('.videoPopup .close').on('click', () => { // close video pop up
        $('.videoPopup').fadeOut();
      });

      // custom slider
      const slider = document.querySelector('#infoSlide .slider');
		const slides = slider.querySelectorAll('#infoSlide .slide');
		const controls = slider.querySelectorAll('#infoSlide .control');
		let currentSlide = 0;
		let slideInterval = setInterval(nextSlide, 5000);

		function nextSlide() {
			slides[currentSlide].classList.remove('active');
			controls[currentSlide].classList.remove('active');
			currentSlide = (currentSlide + 1) % slides.length;
			slides[currentSlide].classList.add('active');
			controls[currentSlide].classList.add('active');
		}

		controls.forEach((control, index) => {
			control.addEventListener('click', () => {
				slides[currentSlide].classList.remove('active');
				controls[currentSlide].classList.remove('active');
				currentSlide = index;
				slides[currentSlide].classList.add('active');
				controls[currentSlide].classList.add('active');
				clearInterval(slideInterval);
				slideInterval = setInterval(nextSlide, 5000);
			});
		});

    // nav fixing, while scrolling
    $(window).scroll(function() {
      let nav = $('nav');
      if ($(this).scrollTop() > nav.position().top && !nav.hasClass('fixed')) {
        nav.addClass('fixed');
      } else if ($(this).scrollTop() <= nav.position().top && nav.hasClass('fixed')) {
        nav.removeClass('fixed');
      }
    });

    // show/hide top btn
    $(window).scroll(() => {
      $(this).scrollTop() > 1000 ? $('#topBtn').fadeIn().css({display: 'flex'}) : $('#topBtn').fadeOut();
    });
});