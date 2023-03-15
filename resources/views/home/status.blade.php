<div class="status">
    <!-- Slider main container -->
    <div class="swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide statu">
            <div class="image">
                <img src="{{ asset('assets/images/Flag_of_Jordan.svg.png') }}" alt="">
            </div>
            <p>Persom Name</p>
        </div>
        <div class="swiper-slide statu">
            <div class="image">
                <img src="{{ asset('assets/images/Flag_of_Jordan.svg.png') }}" alt="">
            </div>
            <p>Persom Name</p>
        </div>
        <div class="swiper-slide statu">
            <div class="image">
                <img src="{{ asset('assets/images/Flag_of_Jordan.svg.png') }}" alt="">
            </div>
            <p>Persom Name</p>
        </div>
        <div class="swiper-slide statu">
            <div class="image">
                <img src="{{ asset('assets/images/Flag_of_Jordan.svg.png') }}" alt="">
            </div>
            <p>Persom Name</p>
        </div>
        <div class="swiper-slide statu">
            <div class="image">
                <img src="{{ asset('assets/images/Flag_of_Jordan.svg.png') }}" alt="">
            </div>
            <p>Persom Name</p>
        </div>
        <div class="swiper-slide statu">
            <div class="image">
                <img src="{{ asset('assets/images/Flag_of_Jordan.svg.png') }}" alt="">
            </div>
            <p>Persom Name</p>
        </div>
        <div class="swiper-slide statu">
            <div class="image">
                <img src="{{ asset('assets/images/Flag_of_Jordan.svg.png') }}" alt="">
            </div>
            <p>Persom Name</p>
        </div>
        <div class="swiper-slide statu">
            <div class="image">
                <img src="{{ asset('assets/images/Flag_of_Jordan.svg.png') }}" alt="">
            </div>
            <p>Persom Name</p>
        </div>
        <div class="swiper-slide statu">
            <div class="image">
                <img src="{{ asset('assets/images/Flag_of_Jordan.svg.png') }}" alt="">
            </div>
            <p>Persom Name</p>
        </div>
        <div class="swiper-slide statu">
            <div class="image">
                <img src="{{ asset('assets/images/Flag_of_Jordan.svg.png') }}" alt="">
            </div>
            <p>Persom Name</p>
        </div>
        <div class="swiper-slide statu">
            <div class="image">
                <img src="{{ asset('assets/images/Flag_of_Jordan.svg.png') }}" alt="">
            </div>
            <p>Persom Name</p>
        </div>
        <div class="swiper-slide statu">
            <div class="image">
                <img src="{{ asset('assets/images/Flag_of_Jordan.svg.png') }}" alt="">
            </div>
            <p>Persom Name</p>
        </div>
        <div class="swiper-slide statu">
            <div class="image">
                <img src="{{ asset('assets/images/Flag_of_Jordan.svg.png') }}" alt="">
            </div>
            <p>Persom Name</p>
        </div>
        <div class="swiper-slide statu">
            <div class="image">
                <img src="{{ asset('assets/images/Flag_of_Jordan.svg.png') }}" alt="">
            </div>
            <p>Persom Name</p>
        </div>
        <div class="swiper-slide statu">
            <div class="image">
                <img src="{{ asset('assets/images/Flag_of_Jordan.svg.png') }}" alt="">
            </div>
            <p>Persom Name</p>
        </div>
        <div class="swiper-slide statu">
            <div class="image">
                <img src="{{ asset('assets/images/Flag_of_Jordan.svg.png') }}" alt="">
            </div>
            <p>Persom Name</p>
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
    autoplay: {
        delay: 5000,
    },
    centeredSlides: false,
    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    breakpoints: {
        // when window width is >= 320px
        768: {
        slidesPerView: 5,
        spaceBetween: 15
        },
        // when window width is >= 480px
        1024: {
        slidesPerView: 9,
        spaceBetween: 15
        },
        // when window width is >= 640px
        1280: {
        slidesPerView: 12,
        spaceBetween: 15
        }
    }
    });
</script>