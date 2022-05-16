{{--Start of Portfolio--}}
<style type="text/css">
    .portfolio-item-inner img{
        width:483px; 
        height:238px

    }
</style>
<div class="container-fluid" style="background-color: #f5f5f5">
<section id="portfolio">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title text-center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">
                Our Works
            </h2>
            <p class="text-center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">
               View our Works </p>
        </div>

        <div class="text-center">
            <ul class="portfolio-filter">
                <li><a class="active" href="#" data-filter="*">All Works</a></li>
                <li><a href="#" data-filter=".creative" class="">Creative</a></li>
                <li><a href="#" data-filter=".corporate" class="">Corporate</a></li>
                <li><a href="#" data-filter=".portfolio" class="">Portfolio</a></li>
            </ul>
            <!--/#portfolio-filter-->
        </div>

        <div class="portfolio-items isotope" style="position: relative; overflow: hidden; height: 408px;">
            <div class="portfolio-item creative isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1); opacity: 1;">
                <div class="portfolio-item-inner">
                    <img class="img-responsive" src="images/impact-africa-summit-website-design-home-page-scaled.jpg" alt=""  >
                    <div class="portfolio-info">
                        <h3>Portfolio Item 1</h3>
                        Lorem Ipsum Dolor Sit
                        <a class="preview" href="{{url('./name')}}" ><i class="fa fa-eye"></i></a>
                    </div>
                </div>

            </div>
            <!--/.portfolio-item-->

            <div class="portfolio-item corporate portfolio isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(291px, 0px, 0px) scale3d(1, 1, 1); opacity: 1;">
                <div class="portfolio-item-inner">
                    <img class="img-responsive"  src="images/adminpanel.png" alt="">
                    <div class="portfolio-info">
                        <h3>Portfolio Item 2</h3>
                        Course Allocation System
                        <a class="preview" href="{{url('./name')}}" ><i class="fa fa-eye"></i></a>
                    </div>
                </div>
            </div>
            <!--/.portfolio-item-->

            <div class="portfolio-item creative isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(582px, 0px, 0px) scale3d(1, 1, 1); opacity: 1;">
                <div class="portfolio-item-inner">
                    <img class="img-responsive"  src="images/portfolio/03.jpg" alt="">
                    <div class="portfolio-info">
                        <h3>Portfolio Item 3</h3>
                        Testing
                        <a class="preview" href="{{url('./name')}}" ><i class="fa fa-eye"></i></a>
                    </div>
                </div>
            </div>
            <!--/.portfolio-item-->

            <div class="portfolio-item corporate isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(873px, 0px, 0px) scale3d(1, 1, 1); opacity: 1;">
                <div class="portfolio-item-inner">
                    <img class="img-responsive" src="images/portfolio/04.jpg" alt="">
                    <div class="portfolio-info">
                        <h3>Portfolio Item 4</h3>
                        Lorem Ipsum Dolor Sit
                        <a class="preview" href="{{url('./name')}}" ><i class="fa fa-eye"></i></a>
                    </div>
                </div>
            </div>
            <!--/.portfolio-item-->

            <div class="portfolio-item creative portfolio isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 204px, 0px) scale3d(1, 1, 1); opacity: 1;">
                <div class="portfolio-item-inner">
                    <img class="img-responsive" src="images/portfolio/05.jpg" alt="">
                    <div class="portfolio-info">
                        <h3>Portfolio Item 5</h3>
                        Lorem Ipsum Dolor Sit
                        <a class="preview" href="{{url('./name')}}" ><i class="fa fa-eye"></i></a>
                    </div>
                </div>
            </div>
            <!--/.portfolio-item-->

            <div class="portfolio-item corporate isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(291px, 204px, 0px) scale3d(1, 1, 1); opacity: 1;">
                <div class="portfolio-item-inner">
                    <img class="img-responsive" src="images/portfolio/06.jpg" alt="">
                    <div class="portfolio-info">
                        <h3>Portfolio Item 5</h3>
                        Lorem Ipsum Dolor Sit
                        <a class="preview" href="{{url('./name')}}" ><i class="fa fa-eye"></i></a>
                    </div>
                </div>
            </div>
            <!--/.portfolio-item-->

            <div class="portfolio-item creative portfolio isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(582px, 204px, 0px) scale3d(1, 1, 1); opacity: 1;">
                <div class="portfolio-item-inner">
                    <img class="img-responsive" src="images/portfolio/07.jpg" alt="">
                    <div class="portfolio-info">
                        <h3>Portfolio Item 7</h3>
                        Lorem Ipsum Dolor Sit
                        <a class="preview" href="{{url('./name')}}" ><i class="fa fa-eye"></i></a>
                    </div>
                </div>
            </div>
            <!--/.portfolio-item-->

            <div class="portfolio-item corporate isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(873px, 204px, 0px) scale3d(1, 1, 1); opacity: 1;">
                <div class="portfolio-item-inner">
                    <img class="img-responsive" src="images/portfolio/08.jpg" alt="">
                    <div class="portfolio-info">
                        <h3>Portfolio Item 8</h3>
                        Lorem Ipsum Dolor Sit
                        <a class="preview" href="{{url('./name')}}" ><i class="fa fa-eye"></i></a>
                    </div>
                </div>
            </div>
            <!--/.portfolio-item-->

        </div>
    </div>
    @if(isset($index))
    <div class="row">
        <div class="text-center m-top-20" style="margin-bottom: -80px">
            <a href="{{url('/portfolio')}}" class="btn btn-success btn-lg">View All <i class="fa  fa-eye text-danger"></i></a>
        </div>
    </div>
    @endif

    <!--/.container-->
</section>
<!--/#portfolio-->
</div>