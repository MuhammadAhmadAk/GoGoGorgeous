@extends('frontend.layouts.main')
@section('title', 'Gallery - Go Go Gorgeous')
@section('meta_description',
    'Browse our gallery of beauty and laser hair removal treatments at Go Go
    Gorgeous. See real results from our facials, skin rejuvenation, and hair
    transformation services.')
@section('meta_keywords',
    'go go gorgeous gallery, beauty transformation photos, laser hair removal
    results, salon gallery, before after facials')
@section('content')


    <!-- Page Header Start -->
    <div class="page-header dark-section parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-3" data-cursor="-opaque">Our gallery</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Gallery</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Photo Gallery Start -->
    <div class="page-gallery">
        <div class="container">
            <!-- gallery section start -->
            <div class="row gallery-items page-gallery-box">
                
                @foreach($galleries as $gallery)
                <div class="col-lg-4 col-6">
                    <div class="photo-gallery wow fadeInUp">
                        <a href="{{ $gallery->image_url }}" data-cursor-text="View">
                            <figure class="image-anime">
                                <img src="{{ $gallery->image_url }}" alt="{{ $gallery->title }}">
                            </figure>
                        </a>
                    </div>
                </div>
                @endforeach
</div>
            <!-- gallery section end -->
        </div>
    </div>
    <!-- Photo Gallery End -->


@endsection
