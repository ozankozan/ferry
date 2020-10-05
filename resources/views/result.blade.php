@include('partial.head')
    <!-- START #page-header -->

    <style type="text/css">
        .recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}
        /* Custom Header Style */
        #main-header{background-color: #000000;}
        .main-nav .menu > li > a{padding-top: 38px;padding-right: 25px;padding-bottom: 38px;padding-left: 25px;}
        .exc-infobar, .exc-infobar a{color: #ffffff;}
        .exc-infobar{background-color: rgba(255, 255, 255, 1);}
        /* Top Banner */
        .header-banner{ background-image: url("{{URL::to('/img/bg.jpg')}}"); background-position: center; }
        .featured-btm{
            font-family: "Karla", Helvetica, Arial, sans-serif;
            font-weight: 700;
            line-height: 1.1;
            color: inherit;
            }
        @media (max-width: 1200px){
            .featured-btm {
                text-align: center;
            }
        }
    </style>
    <noscript><style> .wpb_animate_when_almost_visible { opacity: 1; }</style></noscript>

    <div class="header-banner">
        <div class="banner-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">

                        <h1 class="text-upper">{{$from}} - {{$to}} </h1>
                    </div>

                    <!-- breadcrumbs -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb">
                            <li class="home"><a href="{{URL::to('/')}}">Yeni arama yap</a></li>
                           </ol>							</div>
                </div>
            </div>
        </div>
    </div>
    <!-- END #page-header -->

    <!-- main content -->
    <main id="main" class="main-contents">


        <div class="container">
            <div class="row">


    <div class="col-lg-12 main-content">
    <div class="exc-media-container" data-masonry="" data-autoload="" data-pk="ae0feaef320af2eb82efa7a1c5f52dae" data-counter="16" data-security=" f3251eb8be "><div class="exc-media-content">
            <div class="row exc-media-list">

                <div class="mason-item col-md-2"></div>
        <div class="mason-item col-md-8">
            <div class="ft-item">


                @foreach($timeslots as $slot)
                    @if($slot->via == 'IDO')
                    <div class="featured-btm text-upper">
                        {{$slot->time}}  - {{$slot->via}} @if(strlen($slot->note) > 2) - {{$slot->note}} @endif


                        @else
                    <div class="ft-foot">

                        <h4 class="ft-title text-upper">
                            {{$slot->time}}  - {{$slot->via}} @if(strlen($slot->note) > 2) - {{$slot->note}} @endif

                        </h4>

                        @endif
                    </div>
                @endforeach


            </div>
        </div>


    </div>

                </div></div>			</div>


        </div>
            </div></div>

        <div data-vc-full-width="true" data-vc-full-width-init="true" data-vc-parallax="1.5" data-vc-parallax-image="http://vapur.local/img/bg.jpg" class="vc_row wpb_row vc_row-fluid ft-footer vc_general vc_parallax vc_parallax-content-moving" style=" padding-left: 40px; padding-right: 40px;"><div class="wpb_column vc_column_container vc_col-sm-6"><div class="wpb_wrapper"><div class="exc-media-container" data-masonry="" data-autoload="" data-pk="05f13461bacd97f8a80687ab8125c0dd" data-counter="3" data-security=" f3251eb8be ">
                        <div class="exc-media-content">
                            <div class="testimonials">
                                <h3 class="ft-heading">Burası</h3>

                                <div class="testimonial-body">
                                    <p>Tam kalkıp gidecekken <b>"bi' sonraki vapura/motora mı binsem"</b> cevabı arayan İstanbul'luların sitesi. Saatler İDO ve Turyol'un sayfalarından alınmıştır. Onun dışında bence herşey çok açık!</p>
                                    <div class="tl-author">
				<span class="tl-author-img">

						<img src="http://extracoding.com/demo/wp/travelhub/wp-content/uploads/2015/08/tl-author-photo.jpg" alt="Finibus Bonorum et Malorum" class="img-responsive">

				</span>

                                        <span class="tl-author-title">ozan</span>
                                        <span class="tl-author-desc">saatleri ayarlama enstitüsü gençlik kolları</span>
                                    </div>
                                </div>

                            </div></div>

                        <div class="exc-media-loader loader" "="" style="display: none;"><div class="double-bounce1"></div><div class="double-bounce2"></div></div></div></div></div><div class="vc_parallax-inner skrollable skrollable-before" data-bottom-top="top: -50%;" data-top-bottom="top: 0%;" style="height: 150%; background-image: url(&quot;http://extracoding.com/demo/wp/travelhub/wp-content/uploads/2015/08/budapest-655216_12801.jpg&quot;); top: -50%;"></div></div>
        <div class="vc_row-full-width"></div>
        </div>
</main>



<!-- Footer -->


    @include('partial.foot')