<?php   $accueil = "";
        $services = "";
        $gallerie = "";
        $contact = "active";
        $apropos = ""; ?>

<!doctype html>
<html lang="en">
    <head>
        
    @include('layouts.header')
    </head>
    <body>
        <!--================ Navbar =================-->
        @include('layouts.navbar')
        <!--================ Navbar =================-->
        
        <!--================Breadcrumb Area =================-->
        <section class="breadcrumb_area">
            <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background=""></div>
            <div class="container">
                <div class="page-cover text-center">
                    <h2 class="page-cover-tittle">CONTACTEZ-NOUS</h2>
                </div>
            </div>
        </section>
        <!--================Breadcrumb Area =================-->
        
        <!--================Contact Area =================-->
        <section class="contact_area section_gap">
            <div class="container">
            <div style="width:100%;padding:5%">
                <img id="" class="mapBox" src="{{asset('image/map.png')}}"/>
            </div>
                
                
                <div class="row" >
                    <div class="col-4" style="margin:auto">
                        <h3>Hotel IKRAM Oran</h3><br>
                        <div class="contact_info">
                            <div class="info_item">
                                <i class="lnr lnr-home"></i>
                                <h6>Oran</h6>
                                <p>Boulvard ...etc</p>
                            </div>
                            <div class="info_item">
                                <i class="lnr lnr-phone-handset"></i>
                                <h6><a href="#">+ (213) 9865 562</a></h6>
                                <p>disponibilité 24/24  et 7/7</p>
                            </div>
                            <div class="info_item">
                                <i class="lnr lnr-envelope"></i>
                                <h6><a href="#">info@ikram-hotel.dz</a></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-4" style="margin:auto">
                        <h3>Hotel IKRAM Alger</h3><br>
                        <div class="contact_info">
                            <div class="info_item">
                                <i class="lnr lnr-home"></i>
                                <h6>Alger</h6>
                                <p>Boulvard ...etc</p>
                            </div>
                            <div class="info_item">
                                <i class="lnr lnr-phone-handset"></i>
                                <h6><a href="#">+ (213) 9865 562</a></h6>
                                <p>disponibilité 24/24  et 7/7</p>
                            </div>
                            <div class="info_item">
                                <i class="lnr lnr-envelope"></i>
                                <h6><a href="#">info@ikram-hotel.dz</a></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================Contact Area =================-->
        
        @include('layouts.footer')
       
    
    </body>
</html>