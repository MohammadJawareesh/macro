@extends('layout.main')
@section('conn')
<style>
    .video-container iframe {
        width: 100%;
        height: 100%;
    }

    .img-box {
        position: relative;
        padding-bottom: 56.25%; 
        overflow: hidden;
    }

    .img-box iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 120%; 
        height: 120%; 
        transform: translate(-10%, -10%); 
    }
</style>
<section class="about_section layout_padding long_section">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="img-box">
            <iframe src="{{ asset('storage/'. $product->video) }}" frameborder="0" allowfullscreen></iframe>
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                {{ $product->name }}
              </h2>
            </div>
            <p>
                {{ $product->description }}
            </p>
            <p style="color:blue">
                Price: ${{ $product->price }}
            </p>
            <a href="">
                Buy Now
            </a>
          </div>
        </div>
      </div>
    </div>
</section>
@endsection
