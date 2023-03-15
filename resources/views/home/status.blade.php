    <div class="status container" id="status">
        <!-- Slider main container -->
        <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide statu">
                <div class="image">
                    <img src="{{ asset('assets/images/Mask_Group_7_gr.png') }}" alt="">
                </div>
                <p>Persom Name</p>
            </div>
            <div class="swiper-slide statu">
                <div class="image">
                    <img src="{{ asset('assets/images/Mask_Group_7_gr.png') }}" alt="">
                </div>
                <p>Persom Name</p>
            </div>
            <div class="swiper-slide statu">
                <div class="image">
                    <img src="{{ asset('assets/images/Mask_Group_7_gr.png') }}" alt="">
                </div>
                <p>Persom Name</p>
            </div>
            <div class="swiper-slide statu">
                <div class="image">
                    <img src="{{ asset('assets/images/Mask_Group_7_gr.png') }}" alt="">
                </div>
                <p>Persom Name</p>
            </div>
            <div class="swiper-slide statu">
                <div class="image">
                    <img src="{{ asset('assets/images/Mask_Group_7_gr.png') }}" alt="">
                </div>
                <p>Persom Name</p>
            </div>
            <div class="swiper-slide statu">
                <div class="image">
                    <img src="{{ asset('assets/images/Mask_Group_7_gr.png') }}" alt="">
                </div>
                <p>Persom Name</p>
            </div>
            <div class="swiper-slide statu">
                <div class="image">
                    <img src="{{ asset('assets/images/Mask_Group_7_gr.png') }}" alt="">
                </div>
                <p>Persom Name</p>
            </div>
            <div class="swiper-slide statu">
                <div class="image">
                    <img src="{{ asset('assets/images/Mask_Group_7_gr.png') }}" alt="">
                </div>
                <p>Persom Name</p>
            </div>
            <div class="swiper-slide statu">
                <div class="image">
                    <img src="{{ asset('assets/images/Mask_Group_7_gr.png') }}" alt="">
                </div>
                <p>Persom Name</p>
            </div>
            <div class="swiper-slide statu">
                <div class="image">
                    <img src="{{ asset('assets/images/Mask_Group_7_gr.png') }}" alt="">
                </div>
                <p>Persom Name</p>
            </div>
            <div class="swiper-slide statu">
                <div class="image">
                    <img src="{{ asset('assets/images/Mask_Group_7_gr.png') }}" alt="">
                </div>
                <p>Persom Name</p>
            </div>
            <div class="swiper-slide statu">
                <div class="image">
                    <img src="{{ asset('assets/images/Mask_Group_7_gr.png') }}" alt="">
                </div>
                <p>Persom Name</p>
            </div>
            <div class="swiper-slide statu">
                <div class="image">
                    <img src="{{ asset('assets/images/Mask_Group_7_gr.png') }}" alt="">
                </div>
                <p>Persom Name</p>
            </div>
            <div class="swiper-slide statu">
                <div class="image">
                    <img src="{{ asset('assets/images/Mask_Group_7_gr.png') }}" alt="">
                </div>
                <p>Persom Name</p>
            </div>
            <div class="swiper-slide statu">
                <div class="image">
                    <img src="{{ asset('assets/images/Mask_Group_7_gr.png') }}" alt="">
                </div>
                <p>Persom Name</p>
            </div>
            <div class="swiper-slide statu">
                <div class="image">
                    <img src="{{ asset('assets/images/Mask_Group_7_gr.png') }}" alt="">
                </div>
                <p>Persom Name</p>
            </div>
    
            </div>
        
    
        </div>
                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
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
        0: {
        slidesPerView: 3,
        spaceBetween: 1
        },
  
        550: {
        slidesPerView: 4,
        spaceBetween: 15
        },
        // when window width is >= 320px
        768: {
        slidesPerView: 5,
        spaceBetween: 15
        },
        900: {
        slidesPerView: 6,
        spaceBetween: 15
        },
        // when window width is >= 480px
        1024: {
        slidesPerView: 7,
        /* spaceBetween: 15 */
        },
        1200: {
        slidesPerView: 8,
       /*  spaceBetween: 10 */
        },
        // when window width is >= 640px
        1295: {
        slidesPerView: 10,
        /* spaceBetween: 5 */
        }
        
    }
    });
</script>