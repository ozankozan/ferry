@include('partial.head')
<style type="text/css">
    .home-page {
        margin-top: -800px !important;
    }
    .exc-media-content {
        left: 5%;
    }
    .input-field {
        font-size: 20px;
    }
    .plan-banner {
      /*  height: 100%;*/
    }
    .input-field > input, .input-field > select {
        font-family: Helvetica;
        font-weight: 700;
        color: #292c2f;
    }
    .plan-banner > h4 {
        font-size: 44px;
        line-height: 33px;
        letter-spacing: 0px;
        font-family: Helvetica;
    }
    .plan-tour{
        -webkit-box-shadow:0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset;
        -moz-box-shadow:0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset;
        box-shadow:0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset;
    }


        @media only screen and (min-width:992px){
            .plan-banner {
                height: 100%;
            }
        }
    .vc_row-full-width{
        background-image: url(http://vapur.local/img/bg.jpg);
        background-size: cover;
        background-position: center;
        background-attachment: fixed;

    }
</style>
<script type="text/javascript">
    function kontrol(){
        if (document.form.to.value == document.form.from.value){
            alert ( "Aynı yerden aynı yere gitmek için çok bişey yapmaya gerek yok!" );
            return false;
        }
    }
</script>
    <!-- main content -->
    <main id="main" class="main-contents">
        <div class="container">
            <div data-vc-full-width="true" data-vc-full-width-init="true" class="vc_row wpb_row vc_row-fluid" style="position: relative; left: -40px; box-sizing: border-box; width: 1280px; padding-left: 40px; padding-right: 40px;"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="wpb_wrapper"><div class="wpb_revslider_element wpb_content_element">
                            <div class="forcefullwidth_wrapper_tp_banner" style="position:relative;width:100%;height:auto;margin-top:0px;margin-bottom:0px"><div id="rev_slider_1_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" style="margin: 0px auto; background-color: rgb(233, 233, 233); padding: 0px; height: 920px; position: absolute; overflow: visible; width: 1380px; left: -90px;">
                                    <!-- START REVOLUTION SLIDER 5.0.9 fullwidth mode -->
                                    <div class="tp-bgimg defaultimg" style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url(&quot;http://vapur.local/img/bg.jpg&quot;); background-size: cover; background-position: center top; width: 100%; height: 100%; opacity: 1; visibility: inherit; z-index: 20;" src="http://vapur.local/img/bg.jpg"></div></div>
                                <!-- LAYERS -->

                                    <script type="text/javascript">
                                        /******************************************
                                         -	PREPARE PLACEHOLDER FOR SLIDER	-
                                         ******************************************/

                                        var setREVStartSize=function(){
                                            try{var e=new Object,i=jQuery(window).width(),t=9999,r=0,n=0,l=0,f=0,s=0,h=0;
                                                e.c = jQuery('#rev_slider_1_1');
                                                e.gridwidth = [1170];
                                                e.gridheight = [920];

                                                e.sliderLayout = "fullwidth";
                                                if(e.responsiveLevels&&(jQuery.each(e.responsiveLevels,function(e,f){f>i&&(t=r=f,l=e),i>f&&f>r&&(r=f,n=e)}),t>r&&(l=n)),f=e.gridheight[l]||e.gridheight[0]||e.gridheight,s=e.gridwidth[l]||e.gridwidth[0]||e.gridwidth,h=i/s,h=h>1?1:h,f=Math.round(h*f),"fullscreen"==e.sliderLayout){var u=(e.c.width(),jQuery(window).height());if(void 0!=e.fullScreenOffsetContainer){var c=e.fullScreenOffsetContainer.split(",");if (c) jQuery.each(c,function(e,i){u=jQuery(i).length>0?u-jQuery(i).outerHeight(!0):u}),e.fullScreenOffset.split("%").length>1&&void 0!=e.fullScreenOffset&&e.fullScreenOffset.length>0?u-=jQuery(window).height()*parseInt(e.fullScreenOffset,0)/100:void 0!=e.fullScreenOffset&&e.fullScreenOffset.length>0&&(u-=parseInt(e.fullScreenOffset,0))}f=u}else void 0!=e.minHeight&&f<e.minHeight&&(f=e.minHeight);e.c.closest(".rev_slider_wrapper").css({height:f})
                                            }catch(d){console.log("Failure at Presize of Slider:"+d)}
                                        };


                                        setREVStartSize();
                                        function revslider_showDoubleJqueryError(sliderID) {
                                            var errorMessage = "Revolution Slider Error: You have some jquery.js library include that comes after the revolution files js include.";
                                            errorMessage += "<br> This includes make eliminates the revolution slider libraries, and make it not work.";
                                            errorMessage += "<br><br> To fix it you can:<br>&nbsp;&nbsp;&nbsp; 1. In the Slider Settings -> Troubleshooting set option:  <strong><b>Put JS Includes To Body</b></strong> option to true.";
                                            errorMessage += "<br>&nbsp;&nbsp;&nbsp; 2. Find the double jquery.js include and remove it.";
                                            errorMessage = "<span style='font-size:16px;color:#BC0C06;'>" + errorMessage + "</span>"
                                            jQuery(sliderID).show().html(errorMessage);
                                        }
                                        var tpj=jQuery;
                                        tpj.noConflict();
                                        var revapi1;
                                        tpj(document).ready(function() {
                                            if(tpj("#rev_slider_1_1").revolution == undefined){
                                                revslider_showDoubleJqueryError("#rev_slider_1_1");
                                            }else{
                                                revapi1 = tpj("#rev_slider_1_1").show().revolution({
                                                    sliderType:"standard",
                                                    jsFileLocation:"http://extracoding.com/demo/wp/travelhub/wp-content/plugins/revslider/public/assets/js/",
                                                    sliderLayout:"fullwidth",
                                                    dottedOverlay:"none",
                                                    delay:15000,
                                                    navigation: {
                                                        keyboardNavigation:"off",
                                                        keyboard_direction: "horizontal",
                                                        mouseScrollNavigation:"off",
                                                        onHoverStop:"on",
                                                        touch:{
                                                            touchenabled:"on",
                                                            swipe_threshold: 75,
                                                            swipe_min_touches: 1,
                                                            swipe_direction: "horizontal",
                                                            drag_block_vertical: false
                                                        }
                                                        ,
                                                        arrows: {
                                                            style:"hephaistos",
                                                            enable:true,
                                                            hide_onmobile:false,
                                                            hide_onleave:false,
                                                            tmp:'',
                                                            left: {
                                                                h_align:"left",
                                                                v_align:"center",
                                                                h_offset:20,
                                                                v_offset:0
                                                            },
                                                            right: {
                                                                h_align:"right",
                                                                v_align:"center",
                                                                h_offset:20,
                                                                v_offset:0
                                                            }
                                                        }
                                                    },
                                                    gridwidth:1170,
                                                    gridheight:920,
                                                    lazyType:"none",
                                                    shadow:0,
                                                    spinner:"spinner0",
                                                    stopLoop:"off",
                                                    stopAfterLoops:-1,
                                                    stopAtSlide:-1,
                                                    shuffle:"off",
                                                    autoHeight:"off",
                                                    hideThumbsOnMobile:"off",
                                                    hideSliderAtLimit:0,
                                                    hideCaptionAtLimit:0,
                                                    hideAllCaptionAtLilmit:0,
                                                    debugMode:false,
                                                    fallbacks: {
                                                        simplifyAll:"off",
                                                        nextSlideOnWindowFocus:"off",
                                                        disableFocusListener:false,
                                                    }
                                                });
                                            }
                                        });	/*ready*/
                                    </script>
                                    <script>
                                        var htmlDivCss = unescape(".hephaistos.tparrows%20%7B%0A%09cursor%3Apointer%3B%0A%09background%3A%23000%3B%0A%09background%3Argba%280%2C0%2C0%2C0.5%29%3B%0A%09width%3A40px%3B%0A%09height%3A40px%3B%0A%09position%3Aabsolute%3B%0A%09display%3Ablock%3B%0A%09z-index%3A100%3B%0A%20%20%20%20border-radius%3A50%25%3B%0A%7D%0A.hephaistos.tparrows%3Ahover%20%7B%0A%09background%3A%23000%3B%0A%7D%0A.hephaistos.tparrows%3Abefore%20%7B%0A%09font-family%3A%20%22revicons%22%3B%0A%09font-size%3A18px%3B%0A%09color%3A%23fff%3B%0A%09display%3Ablock%3B%0A%09line-height%3A%2040px%3B%0A%09text-align%3A%20center%3B%0A%7D%0A.hephaistos.tparrows.tp-leftarrow%3Abefore%20%7B%0A%09content%3A%20%22%5Ce82c%22%3B%0A%20%20margin-left%3A-2px%3B%0A%20%20%0A%7D%0A.hephaistos.tparrows.tp-rightarrow%3Abefore%20%7B%0A%09content%3A%20%22%5Ce82d%22%3B%0A%20%20%20margin-right%3A-2px%3B%0A%7D%0A%0A%0A");
                                        var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
                                        if(htmlDiv) {
                                            htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
                                        }
                                        else{
                                            var htmlDiv = document.createElement('div');
                                            htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
                                            document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
                                        }
                                    </script>
                                </div><div class="tp-fullwidth-forcer" style="width: 100%; height: 920px;"></div></div><!-- END REVOLUTION SLIDER --></div>
                    </div></div></div><div class="vc_row-full-width"></div><div class="vc_row wpb_row vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="wpb_wrapper">
                        <!-- START .main-contents -->
                        <div class="home-page container">

                            <!-- START .tour-plan -->
                                <form id="form" action="{{ url('/saatler')}}" method="post" enctype="multipart/form-data" class="plan-tour" id="searchform" onsubmit="return kontrol();" >
                                    {{ csrf_field() }}
                                <div class="plan-banner">
                                    <span>Bi' sonraki vapur</span>

                                    <h4>kaçta?</h4>
                                </div>

                                <div class="top-fields">
                                    <div class="input-field col-md-3">

                                        <select name="from">
                                            @if(old('from'))
                                                <option selected value="{{ old('from') }}> {{ old('from') }} </option>
                                            @endif
                                                        <option selected disabled>Kalkış yeri seçiniz</option>
@foreach($ports as $port)
                                                        <option value="{{$port->id}}">{{$port->name}}</option>
                                                @endforeach
                                        </select>



                                    </div>

                                    <div class="input-field col-md-3">

                                        <select name="to" class="postform">
                                            @if(old('to'))
                                                <option selected value="{{ old('to') }}> {{ old('to') }} </option>
                                            @endif
                                                        <option selected disabled>Varış yeri seçiniz</option>
                                                @foreach($ports as $port)
                                                        <option value="{{$port->id}}">{{$port->name}}</option>
                                                @endforeach
                                        </select>

                                    </div>



                                </div>

                                <div class="bottom-fields">
                                    <div class="col-md-9">
                                        <ul class="list-tour-types">
                                            <li><strong>Şuraların En güzel 15 mekanı: </strong></li>
                                            <li class="cat-item cat-item-36"><a href="http://extracoding.com/demo/wp/travelhub/type/adventure/">Kadıköy</a>
                                            </li>
                                            <li class="cat-item cat-item-24"><a href="http://extracoding.com/demo/wp/travelhub/type/amazing/">Karaköy</a>
                                            </li>
                                            <li class="cat-item cat-item-23"><a href="http://extracoding.com/demo/wp/travelhub/type/beach/">Eminönü</a>
                                            </li>
                                            <li class="cat-item cat-item-22"><a href="http://extracoding.com/demo/wp/travelhub/type/fun/">Üsküdar</a>
                                            </li>
                                            <li class="cat-item cat-item-22"><a href="http://extracoding.com/demo/wp/travelhub/type/fun/">Beşiktaş</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="submit-btn col-md-3">
                                        <input type="submit" value="hazırım söyle">
                                    </div>
                                </div>
                            </form>
                            <!-- END .tour-plan -->

                        </div>
                        <!-- END .main-contents -->
                    <div data-vc-full-width="true" data-vc-full-width-init="true" data-vc-parallax="1.5" data-vc-parallax-image="" class="vc_row wpb_row vc_row-fluid ft-footer vc_general vc_parallax vc_parallax-content-moving" style="/* padding-left: 40px; *//* padding-right: 40px; */margin-top: 20%;"><div class="wpb_column vc_column_container vc_col-sm-6"><div class="wpb_wrapper"><div class="exc-media-container" data-masonry="" data-autoload="" data-pk="05f13461bacd97f8a80687ab8125c0dd" data-counter="3" data-security=" f3251eb8be ">
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

                                    <div class="exc-media-loader loader" "="" style="display: none;"><div class="double-bounce1"></div><div class="double-bounce2"></div></div></div></div></div><div class="vc_parallax-inner skrollable skrollable-before" data-bottom-top="top: -50%;" data-top-bottom="top: 0%;" style=""></div></div>

            </div></div></div></div>
        <div class="vc_row-full-width"></div>


        </div>
    </main>
@include('partial.foot')