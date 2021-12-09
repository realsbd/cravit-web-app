<!-- Our blog -->
<div id="blog">
        <div class="container p-t-70">
            <div class="blog-head txt-center">
                <h1 class="">Our Blog</h1>
                <p class="p-r-20 p-l-20">Lorem ipsum dolor amet consectetur adipisicing elit. Nobis, porro dolorem. Atque impedit repellendus deleniti? Officia nam quo asperiores minima voluptate maxime architecto nihil ipsam pariatur accusamus, cum doloribus</p>
            </div>
            <div class="blog-content row">
                <div class="col-12 col-md-6 col-lg-4 blog-inner">
                    <div class="blog-post">
                        <img src="{{{ $posts[0]['featured_image'] ?? 'assets/img/portfolio-2.png' }}}" alt="{{{ $posts[0]['featured_image_caption'] ?? 'no caption' }}}">
                        <div class="blog-text">
                            <h3>{{{ $posts[0]['title'] ?? 'No Title'}}}</h3>
                            <p>{{{ $posts[0]['excerpt'] ?? 'No excerpt for this post' }}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="brands-client justify-content-center row">
                <!-- start of client div -->
                <img class="col-4 col-lg-2" src="assets/img/brands/Logitech-logo-300x300.svg" alt="" srcset="">
                <img class="col-4 col-lg-2" src="assets/img/brands/digital-x-logo.svg" alt="" srcset="">
                <img class="col-4 col-lg-2" src="assets/img/brands/excel-brand-logo.svg" alt="" srcset="">
                <img class="col-4 col-lg-2" src="assets/img/brands/hikvison.svg" alt="" srcset="">
                <img class="col-4 col-lg-2" src="assets/img/brands/tp-link.svg" alt="" srcset="">
            </div>
            <!-- end of client section -->
        </div>

    </div>
    <!-- end of our blog -->