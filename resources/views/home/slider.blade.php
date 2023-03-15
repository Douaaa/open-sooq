<style>
    .slider .slider-first,
    .slider .slider-second{
        overflow: hidden;
    }
    .slider .swiper-container {
	 width: 100%;
     position: relative;
}
 .slider .swiper-slide {
	 background-size: cover;
	 background-position: 50%;
	 min-height: 20vh;
	 display: flex;
	 align-items: center;
	 justify-content: center;
	 flex-direction: column;
}
 .slider .swiper-slide img{
    width:100%; 
    padding:15px;
    height: 200px;
}
 .swiper-pagination-bullet {
	 background-color: transparent;
	 border: 2px solid #bbbbbb;
	 border-radius: 50%;
	 width: 12px;
	 height: 12px;
	 opacity: 1;
}
 .swiper-pagination-bullet-active {
	 background-color: #bbbbbb;
}
 .swiper-button-container {
	 background-color: rgba(0, 0, 0, 0.25);
}
.swiper-horizontal>.swiper-pagination-bullets, 
.swiper-pagination-bullets.swiper-pagination-horizontal, 
.swiper-pagination-custom, 
.swiper-pagination-fraction {
    bottom: -7px;
}


 </style>
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