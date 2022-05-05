@extends('index')
@section('contents')
    {{--Beginning of About--}}
    <section id="about">
        <div class="container">

            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">About Us</h2>
                <p class="text-center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">
                    We are M4 Webmetrix are into the Development of Reliable and Secure Applications that can stand the test
                    of time,<br> no matter the situation and that can be easily scaled to embed newer features and services
                    easily and quickly.
                </p>
            </div>

            <div class="row">
                <div class="col-sm-6 wow fadeInLeft animated" style="visibility: visible; animation-name: fadeInLeft;">
                    <h3 class="column-title">Video Intro</h3>
                    <!-- 16:9 aspect ratio -->
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe src="//player.vimeo.com/video/58093852?title=0&amp;byline=0&amp;portrait=0&amp;color=e79b39" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen="" frameborder="0"></iframe>
                    </div>
                </div>

                <div class="col-sm-6 wow fadeInRight animated" style="visibility: visible; animation-name: fadeInRight;">
                    <h3 class="column-title">Multi Capability</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>

                    <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>

                    <div class="row">
                        <div class="col-sm-6">
                            <ul class="nostyle">
                                <li><i class="fa fa-check-square"></i> Ipsum is simply dummy</li>
                                <li><i class="fa fa-check-square"></i> When an unknown</li>
                            </ul>
                        </div>

                        <div class="col-sm-6">
                            <ul class="nostyle">
                                <li><i class="fa fa-check-square"></i> The printing and typesetting</li>
                                <li><i class="fa fa-check-square"></i> Lorem Ipsum has been</li>
                            </ul>
                        </div>
                    </div>

                    <a class="btn btn-primary" href="#">Learn More</a>

                </div>
            </div>
        </div>
    </section>
    <!--/#about-->
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6 mb-30">
                <h3 class="column-title">Our Skills</h3>
                <strong>GRAPHIC DESIGN</strong>
                <div class="progress">
                    <div class="progress-bar progress-bar-primary" role="progressbar" data-width="85">85%</div>
                </div>
                <strong>WEB DESIGN</strong>
                <div class="progress">
                    <div class="progress-bar progress-bar-primary" role="progressbar" data-width="70">70%</div>
                </div>
                <strong>WORDPRESS DEVELOPMENT</strong>
                <div class="progress">
                    <div class="progress-bar progress-bar-primary" role="progressbar" data-width="90">90%</div>
                </div>
                <strong>JOOMLA DEVELOPMENT</strong>
                <div class="progress">
                    <div class="progress-bar progress-bar-primary text-danger" role="progressbar" data-width="65">65%</div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 mb-30">
                <h3 class="column-title">Our Vision</h3>
                <div role="tabpanel">

                    <div id="" class="">
                        <div role="tabpanel" class="tab-pane fade active in" id="tab1" aria-labelledby="tab1">
                            <ol>
                                <li><p> To help Businesses and Establishments Acquire an online Presence for the
                                        Purpose of Creating Awareness, Advertisement and Profit Making.
                                    </p>
                                </li>
                                <li>
                                    <p> To develop Scalable and Efficient Web Applications that makes our clients services
                                        fast and reliable.
                                    </p>
                                </li>
                                <li>
                                    <p> To offer businesses who want to take their services online, the guide they need,
                                        through our Market Research Services and Analytic Services.
                                    </p>
                                </li>
                                <li>
                                    <p> To help rebrand Businesses and take businesses to a new Level.
                                    </p>
                                </li>
                                <li>
                                    <p> To help Businesses and Establishments Manage their Applications, and also trian those who needs
                                        help in doing so themselves.
                                    </p>
                                </li>
                            </ol>


                        </div>


                        <div role="tabpanel" class="tab-pane fade" id="tab5" aria-labelledby="tab5">
                            <h3 class="">Vision Five</h3>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 mb-30">
                <h3 class="column-title">Faqs</h3>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    What is M4 WebMetrix
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                            <div class="panel-body">
                                M4 WebMetrix is a Tech Company that Provides Services ranging from Web development, Software Development,
                                Web Rebranding, SEO implementation, Content Writing, Market Research, Website Management and so on.
                                We prioritize on security, scalability and efficiency for our services.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <h4 class="panel-title">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    How do i get to work with M4 WebMetrix
                                </a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="panel-body">
                                1. First, you can leave us a message with the contact form on our website,
                                stating your names, email address, the project you will want us to implement for you and
                                the description of the project and will get back to you quickly with all you need to know
                                about how we will tackle your project. <br>
                                2.  You can also call us with the number on our site, for a quicker response.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                   How much does your Services Cost
                                </a>
                            </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="panel-body">
                                The costs of our services are dependent on the type of project we will be working on,
                                During the analysis and feasibility stage of our discussion, our team will send you a proposal
                                document containing the list's of services that we will be implementing in your project
                                with their cost and the deadline for the completion of the project.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
