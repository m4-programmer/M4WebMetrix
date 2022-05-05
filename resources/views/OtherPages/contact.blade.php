@extends('index')
@section('contents')
    <!-- Contact Us -->
    <section class="contact-us section-space">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-7 col-12">
                    <!-- Contact Form -->
                    <div class="contact-form-area m-top-30">
                        <h4>Get In Touch</h4>
                        <form class="form" method="post" action="{{url('/contact')}}">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-group">
                                        <div class="icon"><i class="fa fa-user"></i></div>
                                        <input type="text" name="first_name" placeholder="First Name">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-group">
                                        <div class="icon"><i class="fa fa-user"></i></div>
                                        <input type="text" name="last_name" placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-group">
                                        <div class="icon"><i class="fa fa-envelope"></i></div>
                                        <input type="email" class="form-control" name="email" placeholder="Type Email" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-group">
                                        <div class="icon"><i class="fa fa-tag"></i></div>
                                        <input type="text" class="form-control" name="subject" placeholder="Type Subjects">
                                    </div>
                                </div>

                                <div class="col-12 col-md-12 col-lg-12">
                                    <div class="form-group textarea">
                                        <div class="icon"><i class="fa fa-pencil"></i></div>
                                        <textarea type="textarea" class="form-control" name="message" rows="5"></textarea>
                                    </div>
                                </div>

                                <div class="col-12 col-md-12 col-lg-12">
                                    <div class="form-group button">
                                        <button type="submit" class="bizwheel-btn theme-2">Send Now</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!--/ End contact Form -->
                </div>
                <div class="col-lg-5 col-md-5 col-12">
                    <div class="contact-box-main m-top-30">
                        <div class="contact-title">
                            <h2>Contact with us</h2>
                            <p></p>
                        </div>
                        <!-- Single Contact -->
                        <div class="single-contact-box">
                            <div class="c-icon"><i class="fa fa-clock-o"></i></div>
                            <div class="c-text">
                                <h4>Opening Hour</h4>
                                <p>Monday - Saturday<br>08AM - 10PM (everyday)</p>
                            </div>
                        </div>
                        <!--/ End Single Contact -->
                        <!-- Single Contact -->
                        <div class="single-contact-box">
                            <div class="c-icon"><i class="fa fa-phone"></i></div>
                            <div class="c-text">
                                <h4>Call Us Now</h4>
                                <p>Tel.: +(234) 812 787 2082<br> Mob.: +(234) 802 688 9782</p>
                            </div>
                        </div>
                        <!--/ End Single Contact -->
                        <!-- Single Contact -->
                        <div class="single-contact-box">
                            <div class="c-icon"><i class="fa fa-envelope-o"></i></div>
                            <div class="c-text">
                                <h4>Email Us</h4>
                                <p>M4WebMetrix@gmail.com<br>miraboy13@gmail.com</p>
                            </div>
                        </div>
                        <!--/ End Single Contact -->
                        <div class="button">
                            <a href="#" class="bizwheel-btn theme-1">Our Works<i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ End Contact Us -->

@endsection
