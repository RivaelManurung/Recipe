@extends('pages.layout.baselayout')

@section('content')
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-6 ">
                <div class="copy " data-aos="fade-up" data-aos-duration="3000">
                    <div class="text-label">
                        Changes your bussines is more better

                    </div>
                    <div class="text-hero-bold">
                        Grow up your bussines with us
                    </div>
                    <div class="text-hero-regular shadow-none">
                        There are so many variations passages of management Your business</div>
                    <div class="cta">
                        <a href="#" class="btn btn-primary shadow-none ms-3">Explore now</a>
                        <a href="#" class="btn btn-secondary">pricing</a>
                    </div>

                </div>
            </div>
            <div class="col-md-6" data-aos="fade-up" data-aos-duration="3000">
                <img src="{{ asset('assets/img/foods.png') }}" alt="img">
            </div>
        </div>
    </div>
</section>
@endsection