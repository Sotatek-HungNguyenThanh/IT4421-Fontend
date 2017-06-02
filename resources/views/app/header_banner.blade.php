<div class="homepage-slider">
    <section id="homepage-slider" class="slider theme--color--white">
        <div class="container">
            <div class="bg-slider">
                <div id="slider" class="theme-default">
                    <a href="">
                        <img src="//bizweb.dktcdn.net/100/141/731/themes/183776/assets/home-slider-1.jpg?1493953410461"
                             alt="Bảo hành 1 năm 1 đổi 1 với iPhone & iPad"/>
                    </a>

                    <a href="">
                        <img src="//bizweb.dktcdn.net/100/141/731/themes/183776/assets/home-slider-2.jpg?1493953410461"
                             alt="Amobile"/>
                    </a>


                </div>
            </div>
        </div>
    </section>
    <script src='//bizweb.dktcdn.net/100/141/731/themes/183776/assets/jquery.nivo.slider.pack.js?1493953410461'
            type='text/javascript'></script>
    <link href='//bizweb.dktcdn.net/100/141/731/themes/183776/assets/nivo-slider.scss.css?1493953410461'
          rel='stylesheet' type='text/css'/>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            $('#slider').nivoSlider({
                effect: 'random', // Specify sets like: 'fold,fade,sliceDown'
                slices: 15, // For slice animations
                boxCols: 8, // For box animations
                boxRows: 4, // For box animations
                animSpeed: 500, // Slide transition speed
                pauseTime: 3000, // How long each slide will show
                startSlide: 3, // Set starting Slide (0 index)
                directionNav: true, // Next & Prev navigation
                directionNavHide: true, // Only show on hover
                controlNav: false, // 1,2,3... navigation
                controlNavThumbs: false, // Use thumbnails for Control Nav
                controlNavThumbsFromRel: false, // Use image rel for thumbs
                controlNavThumbsSearch: '', // Replace this with...
                controlNavThumbsReplace: '', // ...this in thumb Image src
                keyboardNav: true, // Use left & right arrows
                pauseOnHover: true, // Stop animation while hovering
                manualAdvance: false, // Force manual transitions
                captionOpacity: 0.8, // Universal caption opacity
                prevText: 'Prev', // Prev directionNav text
                nextText: 'Next', // Next directionNav text
                beforeChange: function () {
                }, // Triggers before a slide transition
                afterChange: function () {
                }, // Triggers after a slide transition
                slideshowEnd: function () {
                }, // Triggers after all slides have been shown
                lastSlide: function () {
                }, // Triggers when last slide is shown
                afterLoad: function () {
                } // Triggers when slider has loaded
            });
        });
    </script>
</div>