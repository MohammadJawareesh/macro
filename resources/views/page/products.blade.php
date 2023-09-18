@extends('layout.main')
@section('conn')
    <section class="furniture_section layout_padding">
        <div class="container">
            <div class="heading_container">
                <h2>
                    Our Product
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
                                <img src="storage/{{ $products->image }}" alt="" style="object-fit: cover !important;">
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
        </div>
    </section>
@endsection
