@extends('layouts.master-blank')

@section('header', 'Coming Soon')
@section('title', 'coming soon')

@section('content')

    <!--CONTACT US AREA-->
    <section class="error-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2 col-sm-12 col-xs-12">
                    <div class="error-content text-center">
                        <img src="img/under-construction.png" alt="">
                        <h3>Dear all customers, </h3>
                        <h2>Our website is coming soon!</h2>                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--CONTACT US AREA END-->

    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script>
        $('body').addClass('single-page');
    </script>
@endsection