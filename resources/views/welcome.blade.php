<html class="csstransforms csstransforms3d csstransitions" lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>M4 WebMetrix</title>
    <!-- core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{asset('css/owl.transitions.css')}}" rel="stylesheet">
    <link href="{{asset('css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('css/main.css')}}" rel="stylesheet">
    <link href="{{asset('css/responsive.css')}}" rel="stylesheet">
{{--    More--}}
    <link rel="stylesheet" href="{{asset('style.css')}}">
    <link rel="stylesheet" href="{{asset('reset.css')}}">
{{--this style stops mobile users from seeing the picture for the {our creative Designer waiting for Project--}}
    <link rel="stylesheet" href="{{asset('responsive.css')}}">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="{{asset('images/ico/favicon.ico')}}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('images/ico/apple-touch-icon-144-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('images/ico/apple-touch-icon-114-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('images/ico/apple-touch-icon-72-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{asset('images/ico/apple-touch-icon-57-precomposed.png')}}">
</head>
<!--/head-->

<body id="home" class="homepage ">
{{--All Included Files--}}
@include('Required/header')

{{--Beginning of Hompages Directory Files--}}

{{--1. Background Image--}}
@include('HomePages/first_section')

{{--2. Services Section--}}
@include('HomePages.services')

{{--3. Our Process--}}
@include('HomePages.our_process')

<!-- Our Work/Portfolio Section -->
{{--4. our Works--}}
@include('HomePages.our_work')

<!-- This contains the Meet the team Section, but it is commented out -->
{{--5. Meet the team--}}
{{--include('HomePages.meet_the_team')--}}

{{--6. Fun Facts--}}
@include('HomePages/fun_facts')

{{--7. Testimonials--}}
@include('HomePages/testimonials')

{{--8. Contact Us--}}
{{--@include('HomePages/contact_us')--}}

{{--End of Homepages Directory Files--}}

{{--9. Footer Area--}}
@include('Required/footer')

{{--10 Links To all Scripts--}}
@include('Required/scripts')

{{--End of All Included Files--}}
</body>
</html>
