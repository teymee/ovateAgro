@extends('layout.layout')

@section('banner')
    <div class="hero-wrap js-fullheight" style="background-image: url('website/images/contact.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-9 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                    <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.html">Home</a></span> <span>Contact</span></p>
                    <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Contact Us</h1>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('content')
    <section class="ftco-section contact-section">
        <div class="container">
            <div class="row d-flex mb-5 contact-info">
                <div class="col-md-12 mb-4">
                    <h2 class="h4">Contact Information</h2>
                </div>
                <div class="w-100"></div>
                <div class="col-md-3">
                    <p><span>Phone:</span> <a href="tel://+2348133097124">(234) 8133097124</a></p>
                </div>
                <div class="col-md-3">
                    <p><span>Email:</span> <a href="mailto:ov8farms@yahoo.com">ov8farms@yahoo.com</a></p>
                </div>
                <div class="col-md-6">
                    <p style="color: black"><span style="color: grey">Branch Office:</span> 44 Ayinla Sodimu Str Car Wash Abeokuta Ogun State</p>
                </div>
                <div class="col-md-6">
                    <p style="color: black"><span style="color: grey">Address:</span> Km 11 Abeokuta-Ibadan Exp way Beside SLAAB gas,
                        Camp Abeokuta Ogun State.</p>
                </div>



            </div>
            <div class="row block-9">
                <div class="col-md-6 order-md-last pr-md-5">
                    <form action="#">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Email">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Subject">
                        </div>
                        <div class="form-group">
                            <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                        </div>
                    </form>

                </div>

                <div class="col-md-6">
                    <div id="map"></div>
                </div>
            </div>
        </div>
    </section>
@endsection
