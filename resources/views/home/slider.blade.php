 <section id="slider">
   <div class="slider container py-5">
        <div class="row">
            <div class="slider-first col-12 col-lg-6 py-2">
                <div class="swiper-container">
                    <!-- swiper slides -->
                    <div class="swiper-wrapper">
                        <div class="swiper-slide" >
                            <img src="{{ asset('assets/images/Mask_Group_2@2x.png') }}"   alt="">

                        </div>
                        <div class="swiper-slide" >
                            <img src="{{ asset('assets/images/Mask_Group_2@2x.png') }}"   alt="">

                        </div>
                        <div class="swiper-slide" >
                            <img src="{{ asset('assets/images/Mask_Group_2@2x.png') }}"   alt="">

                        </div>
                        <div class="swiper-slide" >
                            <img src="{{ asset('assets/images/Mask_Group_2@2x.png') }}"   alt="">

                        </div>
                        
                    </div>
                    <!-- !swiper slides -->
                    <!-- pagination dots -->
                    <div class="swiper-pagination"></div>
                    <!-- !pagination dots -->

                    

                </div>
            </div>
            <div class="slider-second col-12 col-lg-6 py-2">
                <div class="swiper-container">
                    <!-- swiper slides -->
                    <div class="swiper-wrapper">
                        <div class="swiper-slide" >
                            <img src="{{ asset('assets/images/Mask_Group_1@2x.png') }}"   alt="">

                        </div>
                        <div class="swiper-slide" >
                            <img src="{{ asset('assets/images/Mask_Group_1@2x.png') }}"   alt="">

                        </div>
                        <div class="swiper-slide" >
                            <img src="{{ asset('assets/images/Mask_Group_1@2x.png') }}"   alt="">

                        </div>
                        <div class="swiper-slide" >
                            <img src="{{ asset('assets/images/Mask_Group_1@2x.png') }}"   alt="">

                        </div>
                        
                    </div>
                    <!-- !swiper slides -->

                    <!-- pagination dots -->
                    <div class="swiper-pagination"></div>
                    <!-- !pagination dots -->

                </div>
            </div>
                    
            
        </div>
   </div>
</section>

<script>
    var Swipes = new Swiper('.swiper-container', {
        loop: true,
        autoplay: {
            delay: 5000,
        },
        centeredSlides: false,
        pagination: {
            el: '.swiper-pagination',
        },
    });
</script>