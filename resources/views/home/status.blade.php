<div class="status">
    <!-- Slider main container -->
    <div class="swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide">
            <img src="{{ asset('assets/images/Flag_of_Jordan.svg.png') }}" alt="">
        </div>
        <div class="swiper-slide">
            <img src="{{ asset('assets/images/Flag_of_Jordan.svg.png') }}" alt="">
        </div>
        <div class="swiper-slide">
            <img src="{{ asset('assets/images/Flag_of_Jordan.svg.png') }}" alt="">
        </div>
        <div class="swiper-slide">
            <img src="{{ asset('assets/images/Flag_of_Jordan.svg.png') }}" alt="">
        </div>
        <div class="swiper-slide">
            <img src="{{ asset('assets/images/Flag_of_Jordan.svg.png') }}" alt="">
        </div>
        <div class="swiper-slide">
            <img src="{{ asset('assets/images/Flag_of_Jordan.svg.png') }}" alt="">
        </div>
        <div class="swiper-slide">
            <img src="{{ asset('assets/images/Flag_of_Jordan.svg.png') }}" alt="">
        </div>
        <div class="swiper-slide">
            <img src="{{ asset('assets/images/Flag_of_Jordan.svg.png') }}" alt="">
        </div>
        <div class="swiper-slide">
            <img src="{{ asset('assets/images/Flag_of_Jordan.svg.png') }}" alt="">
        </div>

        </div>
    
        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
</div>

<script>
    const swiper = new Swiper('.swiper', {
  // Optional parameters
  loop: true,
  centeredSlides: true,
  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  breakpoints: {
    // when window width is >= 320px
    768: {
      slidesPerView: 3,
      spaceBetween: 30
    },
    // when window width is >= 480px
    1024: {
      slidesPerView: 4,
      spaceBetween: 40
    },
    // when window width is >= 640px
    1280: {
      slidesPerView: 5,
      spaceBetween: 50
    }
  }
});
</script>