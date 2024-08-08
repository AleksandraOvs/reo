jQuery(document).ready(function($)  {
    let width = $(window).width();
    let body = $('body');
    let menu = $('.mobile__menu__inner');
    let programmItem = $('.entry-post__programm');
    let programmMore = $('.entry-post__programm__more')

    $(document).on('click', '.js-toggle-menu', function () {
      $(this).toggleClass('_open');
      menu.toggleClass('_open');
      body.toggleClass('_fixed');
        
    });

    //контент для программ

    $(document).on('click', '.entry-post__programm', function (e) {
      //$(this).toggleClass('_open');
      $(this).toggleClass('_open');
      $(this).find('.entry-post__programm__content').toggleClass('_open');
      e.preventDefault();
      $(programmMore).toggleClass('_active');
    });

    const headerFront = document.querySelector('.header__top');

  // Вверх и показ верхнего меню
    const headerChange = () => {
      const
        mainBlock = document.querySelector('body');

  
       window.addEventListener('scroll', () => {
         if (-mainBlock.getBoundingClientRect().top > 10) {
            headerFront.classList.add('header-scroll');
        
         } else {
            headerFront.classList.remove('header-scroll');
         }
       })
  
    }
    headerChange();


    function scrollTo(to, duration = 700) {
      const
        element = document.scrollingElement || document.documentElement,
        start = element.scrollTop,
        change = to - start,
        startDate = +new Date(),
        // t = current time
        // b = start value
        // c = change in value
        // d = duration
        easeInOutQuad = function (t, b, c, d) {
          t /= d / 2;
          if (t < 1) return c / 2 * t * t + b;
          t--;
          return -c / 2 * (t * (t - 2) - 1) + b;
        },
        animateScroll = function () {
          const currentDate = +new Date();
          const currentTime = currentDate - startDate;
          element.scrollTop = parseInt(easeInOutQuad(currentTime, start, change, duration));
          if (currentTime < duration) {
            requestAnimationFrame(animateScroll);
          }
          else {
            element.scrollTop = to;
          }
        };
      animateScroll();
    }

    const upArrow = document.querySelector('.arrow-up');
    
      
    upArrow.addEventListener('click', (e) => {
       e.preventDefault();
      // Вызываем функцию, первый аргумент - отступ, второй - скорость скролла, чем больше значение, тем медленнее скорость прокрутки
      scrollTo(0, 800);
    }); 

    
    // galleryIds.forEach(el=>el.click()){
    //   alert ('click');
    // };

  //   const galleryIds = document.querySelectorAll('.gallery-id');
  //   galleryIds.forEach(function (el) {
  //     el.addEventListener("click", function () {
  //       //alert('CLICKED');
  //       el.preventDefault();
  //       scrollTo(0, 800);
  //   });
  // });

// const galleryIds = document.querySelectorAll('.gallery-id');
//   for(var i=0; i < galleryIds.length; i++){
//     galleryIds[i].addEventListener("click", function (e) {
//       e.preventDefault();
//       scrollTo(0, 800);
        
//     });
// };


  //   galleryId.addEventListener('click', (e) => {
  //     alert('click');
  //     e.preventDefault();
  //    // Вызываем функцию, первый аргумент - отступ, второй - скорость скролла, чем больше значение, тем медленнее скорость прокрутки
  //    scrollTo(0, 800);
  //  }); 
    
    // Вверх и показ верхнего меню
    const arrowUp = () => {
      const
        //fixedHeader = document.querySelector('.fixed-header'),
        mainBlock = document.querySelector('.site-container'),
        arrow = document.querySelector('.arrow-up');
    
      window.addEventListener('scroll', () => {
        if (-mainBlock.getBoundingClientRect().top > 300) {
          arrow.classList.add('show');
          //fixedHeader.classList.add('show')
    
        } else {
          arrow.classList.remove('show');
          //fixedHeader.classList.remove('show')
    
        }
      })
    
    }
    arrowUp();

    function onEntry(entry) {
      entry.forEach(change => {
        if (change.isIntersecting) {
          change.target.classList.add('element-show');
        }
      });
    }
    let options = { threshold: [0.5] };
    let observer = new IntersectionObserver(onEntry, options);
    let elements = document.querySelectorAll('.toright, .toleft, .destr-img, .toopacity, .animateBlur, .animateScale, .tobottom');
    for (let elm of elements) {
      observer.observe(elm);
    }
})