<script src="./asset/css/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>

<!-- Swiper JS -->
<script src="./asset/swiper/swiper-bundle.min.js"></script>


<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper(".mySwiper", {
        direction: "vertical",
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        autoplay: {
            delay: 1500,
        },
    });
</script>

<script>

    var swiper = new Swiper(".mySwiper2", {
        slidesPerView: 2,
        spaceBetween: 5,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        breakpoints: {
            640: {
                slidesPerView: 2,
                spaceBetween: 5,
            },
            768: {
                slidesPerView: 4,
                spaceBetween: 40,
            },
            1024: {
                slidesPerView: 4,
                spaceBetween: 50,
            },
        },
    });

    // breakpoints: {
    // 640: {
    // slidesPerView: 2,
    // spaceBetween: 20,
    // },
    // 768: {
    // slidesPerView: 4,
    // spaceBetween: 40,
    // },
    // 1024: {
    // slidesPerView: 5,
    // spaceBetween: 50,
    // },
    // },
    document.addEventListener("DOMContentLoaded", function () {
        window.addEventListener('scroll', function () {
            if (window.scrollY > 50) {
                document.getElementById('navbar_top').classList.add('fixed-top');
                // add padding top to show content behind navbar
                navbar_height = document.querySelector('.navbar').offsetHeight;
                document.body.style.paddingTop = navbar_height + 'px';
            } else {
                document.getElementById('navbar_top').classList.remove('fixed-top');
                // remove padding top from body
                document.body.style.paddingTop = '0';
            }
        });
    });


    document.querySelectorAll('.accordion-item .accoridan').forEach((accordionToggle) => { 
  accordionToggle.addEventListener('click', () => { 
  const accordionItem = accordionToggle.parentNode; 
  const accordionContent = accordionToggle.nextElementSibling; 

        // If this accordion item is already open, close it.
   if (accordionContent.style.maxHeight) { 
       accordionContent.style.maxHeight = null; 
       accordionItem.classList.remove('active'); 
      } else {
        accordionContent.style.maxHeight = accordionContent.scrollHeight + 'px'; 
            accordionItem.classList.add('active'); 
        }
    });
});
</script>