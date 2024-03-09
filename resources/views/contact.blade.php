@extends('includes.layout')
@section('title', 'Projects')
@section('content')

    <!-- bread-crumb -->
    <section class="bread-crumb">
        <div class="container">
            <div class="content-box">
                <div class="link"><a href="index-2.html">Home</a></div>
                <ul class="list">
                    <li>Contact</li>
                    <li>Contact Us</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- bread-crumb end -->


    <!-- contact info -->
    <section class="contact-info-section contact-page">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12 column">
                    <div class="single-item">
                        <h4>Main Office</h4>
                        <div class="text">Newyork City</div>
                        <div class="phone"><i class="fa fa-phone"></i>350006892995</div>
                        <div class="mail"><i class="fa fa-envelope"></i>info@tallentsolution</div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 column">
                    <div class="single-item">
                        <h4>Corporate Office</h4>
                        <div class="text">Los Angeles</div>
                        <div class="phone"><i class="fa fa-phone"></i>350006892995</div>
                        <div class="mail"><i class="fa fa-envelope"></i>info@tallentsolution</div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 column">
                    <div class="single-item">
                        <h4>Branch Office</h4>
                        <div class="text">San Fransisico</div>
                        <div class="phone"><i class="fa fa-phone"></i>350006892995</div>
                        <div class="mail"><i class="fa fa-envelope"></i>info@tallentsolution</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact info end -->


    <!-- contact section -->
    <section class="contact-section sec-pad contact-page">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12 contact-column">
                    <div class="title"><h2>Get in Touch</h2></div>
                    <div class="form">
                        <form method="post" action="http://azim.commonsupport.com/Tallent/sendemail.php" id="contact-form">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                    <input type="text" name="username" placeholder="First Name" required>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                    <input type="email" name="email" placeholder="Your Email" required>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                                    <input type="text" name="phone" placeholder="Your Phone" required>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                                    <input type="text" name="subject" placeholder="Subject" required>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                                    <textarea name="message" placeholder="Message"></textarea>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                                    <div class="button"><button class="btn-one" type="submit" name="submit-form">Send Message</button></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12 map-column">
                    <div class="google-map-area">
                        <div
                            class="google-map"
                            id="contact-google-map"
                            data-map-lat="41.641264"
                            data-map-lng="19.705595"
                            data-icon-path="images/resources/map-marker.png"
                            data-map-title="Brooklyn, New York, United Kingdom"
                            data-map-zoom="12"
                            data-markers='{
                                "marker-1": [41.641264, 19.705595, "<h4>Branch Office</h4><p>77/99 London UK</p>","images/resources/map-marker.png"]
                            }'>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact section end -->


@endsection
