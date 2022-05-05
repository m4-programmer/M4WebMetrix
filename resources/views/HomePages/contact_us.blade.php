{{--thirteenth Section--}}
<section id="contact">
    <div id="google-map" style="height:650px" data-latitude="52.365629" data-longitude="4.871331">

    </div>
    <div class="container-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-8 col-sm-6 col-sm-offset-6">
                    <div class="contact-form">
                        <h3 @class('text-center')>Contact Info</h3>

                        <address>
                            <strong>Location: Unn, Nsukka Enugu, Nigeria</strong><br>
                            <abbr title="Phone">Phone:</abbr> +(234) 812-7872-082 <br>
                            <abbr title="Email">Email:</abbr> M4WebMetrix@gmail.com
                        </address>

                        <form id="main-contact-form" name="contact-form" method="post" action="#">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" placeholder="Name" required="">
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="Email" required="">
                            </div>
                            <div class="form-group">
                                <input type="text" name="subject" class="form-control" placeholder="Subject" required="">
                            </div>
                            <div class="form-group">
                                <textarea name="message" class="form-control" rows="8" placeholder="Message" required=""></textarea>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Send Message</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/#bottom-->
