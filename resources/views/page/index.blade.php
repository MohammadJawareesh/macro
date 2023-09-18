@extends('layout.main')
@section('conn')
    <!-- end header section -->
    <!-- slider section -->
    <section class="slider_section long_section">
        <div id="customCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container ">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="detail-box">
                                    <h1>
                                        pubg steam macro
                                        <br>
                                        no recoil
                                    </h1>
                                    <p>
                                        You are still worried about not controlling your weapon, do not worry, we have the
                                        solution
                                    </p>
                                    <div class="btn-box">
                                        <a href="/contact" class="btn1">
                                            Contact Us
                                        </a>
                                        <a href="/product" class="btn2">
                                            Product
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="img-box">
                                    <img src="{{ asset('components/images/img-og-pubg.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


    </section>
    </div>

    <!-- furniture section -->

    <section class="furniture_section layout_padding">
        <div class="container">
            <div class="heading_container">
                <h2>
                    OUR PRODUCT
                </h2>
                <p>
                    You are still worried about not controlling your weapon, do not worry, we have the solution
                </p>
            </div>
            <div class="row">
                @foreach ($product as $products)
                    <div class="col-md-6 col-lg-4">
                        <div class="box">
                            <div class="img-box">
                                <img src="storage/{{ $products->image }}" alt=""
                                    style="object-fit: cover !important;">
                            </div>
                            <div class="detail-box">
                                <h5>
                                    {{ $products->name }}
                                </h5>
                                <div class="price_box">
                                    <h6 class="price_heading">
                                        <span>$</span>{{ $products->price }}
                                    </h6>
                                    <a href="/ProductDetail/{{$products->id}}">
                                        Detail
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
    </section>

    <!-- contact section -->
    <section class="contact_section  long_section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="form_container">
                        <div class="heading_container">
                            <h2>
                                Contact Us
                            </h2>
                        </div>
                        @include('forms.contactsForm')
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
