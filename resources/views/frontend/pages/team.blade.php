@extends('frontend.layouts.main')
@section('title', 'Meet Our Team - Go Go Gorgeous')
@section('meta_description',
    'Meet the skilled and certified beauty and skin care experts at Go Go
    Gorgeous, dedicated to delivering the best treatment experience for every
    client.')
@section('meta_keywords',
    'go go gorgeous team, beauty experts, laser specialists, skin care
    professionals, certified beauticians')
@section('content')


    <!-- Page Header Start -->
    <div class="page-header dark-section parallaxie" style="background-image: url('{{ \App\Models\SiteSetting::get('header_bg_team') ? asset('uploads/' . str_replace('uploads/', '', \App\Models\SiteSetting::get('header_bg_team'))) : asset('frontend/images/about/page-header-bg.webp') }}');">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-3" data-cursor="-opaque">Our team</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('team') }}">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Team</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Page Team Start -->
    <div class="page-team">
        <div class="container">
            <div class="row">
                @forelse($teams as $index => $member)
                <div class="col-xl-4 col-md-6">
                    <!-- Team Item Start -->
                    <div class="team-item wow fadeInUp" data-wow-delay="{{ $index * 0.2 }}s">
                        <div class="team-item-image">
                            <figure>
                                <img src="{{ $member->image_url }}" alt="{{ $member->name }}">
                            </figure>
                        </div>
                        <div class="team-item-body">
                            <div class="team-item-content">
                                <h2>{{ $member->name }}</h2>
                                <p>{{ $member->designation }}</p>
                            </div>
                            <div class="team-item-social-list">
                                <ul>
                                    @if($member->facebook_url)
                                    <li><a href="{{ $member->facebook_url }}" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    @endif
                                    @if($member->instagram_url)
                                    <li><a href="{{ $member->instagram_url }}" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                                    @endif
                                    @if($member->linkedin_url)
                                    <li><a href="{{ $member->linkedin_url }}" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Team Item End -->
                </div>
                @empty
                @endforelse
            </div>
        </div>
    </div>
    <!-- Page Team End -->


@endsection

