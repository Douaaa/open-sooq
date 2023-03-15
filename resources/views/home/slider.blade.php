<style>
    .slider-first,
    .slider-second{
        overflow: hidden;
    }
    .swiper-container {
	 width: 100%;
}
 .swiper-slide {
	 background-size: cover;
	 background-position: 50%;
	 min-height: 20vh;
	 display: flex;
	 align-items: center;
	 justify-content: center;
	 flex-direction: column;
}
 .swiper-pagination-bullet {
	 background-color: transparent;
	 border: 2px solid #fff;
	 border-radius: 50%;
	 width: 12px;
	 height: 12px;
	 opacity: 1;
}
 .swiper-pagination-bullet-active {
	 background-color: #fff;
}
 .swiper-button-container {
	 background-color: rgba(0, 0, 0, 0.25);
}
 .swiper-button-prev {
	 background-image: url("data:image/svg+xml;
	charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M0%2C22L22%2C0l2.1%2C2.1L4.2%2C22l19.9%2C19.9L22%2C44L0%2C22L0%2C22L0%2C22z'%20fill%3D'%23ffffff'%2F%3E%3C%2Fsvg%3E");
}
 .swiper-button-next {
	 background-image: url("data:image/svg+xml;
	charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M27%2C22L27%2C22L5%2C44l-2.1-2.1L22.8%2C22L2.9%2C2.1L5%2C0L27%2C22L27%2C22z'%20fill%3D'%23ffffff'%2F%3E%3C%2Fsvg%3E");
}
 body {
	 display: flex;
	 height: 100vh;
	 width: 100%;
	 font-family: "San Francisco Display Semibold";
}
 .swiper-slide:before {
	 content: "";
	 position: absolute;
	 left: 0;
	 top: 0;
	 width: 100%;
	 height: 100%;
	 background: black;
	 opacity: 0.4;
}
 .swiper-slide h2 {
	 pointer-events: none;
	 opacity: 0;
	 color: #fff;
	 font-size: calc(5vw);
	 letter-spacing: -1px;
	 transform: translateY(-5%) scale(0.8);
	 transition: 1s ease;
	 text-transform: uppercase;
	 text-shadow: 0 5px 5px rgba(0, 0, 0, 0.01);
}
 .swiper-slide-active h2 {
	 opacity: 1;
	 transform: translateY(0%) scale(1);
	 transition: 1s ease;
}
 
 </style>
 <section id="slider">
   <div class="container py-5">
        <div class="row">
            <div class="slider-first col-12 col-lg-6 py-2">
                <div class="swiper-container">
                    <!-- swiper slides -->
                    <div class="swiper-wrapper">
                        <div class="swiper-slide" >
                            <img src="{{ asset('assets/images/Mask_Group_2@2x.png') }}" style="width:100%" alt="">

                        </div>
                        <div class="swiper-slide" >
                            <img src="{{ asset('assets/images/Mask_Group_2@2x.png') }}" style="width:100%" alt="">

                        </div>
                        <div class="swiper-slide" >
                            <img src="{{ asset('assets/images/Mask_Group_2@2x.png') }}" style="width:100%" alt="">

                        </div>
                        <div class="swiper-slide" >
                            <img src="{{ asset('assets/images/Mask_Group_2@2x.png') }}" style="width:100%" alt="">

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
                            <img src="{{ asset('assets/images/Mask_Group_1@2x.png') }}" style="width:100%" alt="">

                        </div>
                        <div class="swiper-slide" >
                            <img src="{{ asset('assets/images/Mask_Group_1@2x.png') }}" style="width:100%" alt="">

                        </div>
                        <div class="swiper-slide" >
                            <img src="{{ asset('assets/images/Mask_Group_1@2x.png') }}" style="width:100%" alt="">

                        </div>
                        <div class="swiper-slide" >
                            <img src="{{ asset('assets/images/Mask_Group_1@2x.png') }}" style="width:100%" alt="">

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
   </div>
</section>

<script>
    var Swipes = new Swiper('.swiper-container', {
    loop: true,

    pagination: {
        el: '.swiper-pagination',
    },
});
</script>