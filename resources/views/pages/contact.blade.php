@extends('layouts.master-secondary')

@section('header', 'Contact Us')
@section('title', 'Contact')

@section('content')

    <!--CONTACT US AREA-->
    <section class="contact-area" id="contact">
        <div class="map-area relative">
            <div id="map" style="width: 100%; height: 400px;"> </div>
        </div>
        <div class="contact-form-area section-padding gray-bg">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                        <div class="area-title">
                            <h3>GET IN TOUCH with Us</h3>
                            <p>Thank you for using our flight service. 
                            Please complete the form below, so we can provide quick and efficient service. 
                            If this is an urgent matter please contact our Customer Support:</p>
                            <table>
                                <tr>
                                    <th style="text-align:left;width:30%">Company</th>
                                    <td>&nbsp;<span class="glyphicon glyphicon-hand-right">&nbsp;</span></td>
                                    <td>KC International Airlines Co.,Ltd</td>
                                </tr>
                                <tr>
                                    <th style="text-align:left;">Phone</th>
                                    <td>&nbsp;<span class="glyphicon glyphicon-hand-right">&nbsp;</span></td>
                                    <td>+855(0)23 972 777 / +855(0)17 799 677</td>
                                </tr>
                                <tr>
                                    <th style="text-align:left;">Working Days</th>
                                    <td>&nbsp;<span class="glyphicon glyphicon-hand-right">&nbsp;</span></td>
                                    <td>Monday-Friday 8:00 AM - 5:30 PM</td>
                                </tr>
                                <tr>
                                    <th style="text-align:left;">Email</th>
                                    <td>&nbsp;<span class="glyphicon glyphicon-hand-right">&nbsp;</span></td>
                                    <td>passenger.service@kcairlines.com</td>
                                </tr>
                                <tr>
                                    <th style="text-align:left;">P.O. Box</th>
                                    <td>&nbsp;<span class="glyphicon glyphicon-hand-right">&nbsp;</span></td>
                                    <td>Russian Blvd, Phnom Penh 12406</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
                        <div class="contact-form">
                            @if (Session::has('flash_message'))
                                <div class="alert alert-success">{{ Session::get('flash_message') }} </div>
                            @endif
                            <form action="{{ route('message.send') }}" method="post">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                        <div class="form-group" id="name-field">
                                            <div class="form-input">
                                                <input type="text" class="form-control" id="form-name" name="name" placeholder="Name.." required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                        <div class="form-group" id="email-field">
                                            <div class="form-input">
                                                <input type="email" class="form-control" id="form-email" name="email" placeholder="Email.." required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                        <div class="form-group" id="phone-field">
                                            <div class="form-input">
                                                <input type="text" class="form-control" id="form-phone" name="phone" placeholder="Phone Number.." required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                        <div class="form-group" id="message-field">
                                            <div class="form-input">
                                                <textarea class="form-control" rows="6" id="form-message" name="message" placeholder="Your Message Here..." required></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <button type="submit">Send</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                        <div class="contact-image text-center">
                            <img src="{{ url('/img/contact-right.png') }}" alt="">
                        </div>
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
    
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBTS_KEDfHXYBslFTI_qPJIybDP3eceE-A&sensor=false"></script>
    <script src="{{ url('/js/maps.active.js') }}"></script>

@endsection