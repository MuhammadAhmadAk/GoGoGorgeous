@extends('backend.layouts.app')
@section('page_title', 'Site Settings')

@section('content')
    <div class="d-flex justify-content-between mb-3">
        <h2>Site Settings</h2>
    </div>

    <form action="{{ route('admin.settings.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-6 mb-3">
                <label class="form-label">About Section Image 1</label>
                <input type="file" name="about_image_1" class="form-control">
                @if(isset($settings['about_image_1']))
                    <img src="{{ asset('uploads/' . str_replace('uploads/', '', $settings['about_image_1'])) }}" width="150" class="mt-2" style="border-radius:5px;">
                @endif
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label">About Section Image 2</label>
                <input type="file" name="about_image_2" class="form-control">
                @if(isset($settings['about_image_2']))
                    <img src="{{ asset('uploads/' . str_replace('uploads/', '', $settings['about_image_2'])) }}" width="150" class="mt-2" style="border-radius:5px;">
                @endif
            </div>
            <div class="col-md-4 mb-3">
                <label class="form-label">Experience Main Image</label>
                <input type="file" name="experience_image_main" class="form-control">
                @if(isset($settings['experience_image_main']))
                    <img src="{{ asset('uploads/' . str_replace('uploads/', '', $settings['experience_image_main'])) }}" width="150" class="mt-2" style="border-radius:5px;">
                @endif
            </div>
            <div class="col-md-4 mb-3">
                <label class="form-label">Experience Small Image (10+)</label>
                <input type="file" name="experience_image_small" class="form-control">
                @if(isset($settings['experience_image_small']))
                    <img src="{{ asset('uploads/' . str_replace('uploads/', '', $settings['experience_image_small'])) }}" width="150" class="mt-2" style="border-radius:5px;">
                @endif
            </div>
            <div class="col-md-4 mb-3">
                <label class="form-label">Why Choose Us Image</label>
                <input type="file" name="why_choose_us_image" class="form-control">
                @if(isset($settings['why_choose_us_image']))
                    <img src="{{ asset('uploads/' . str_replace('uploads/', '', $settings['why_choose_us_image'])) }}" width="150" class="mt-2" style="border-radius:5px;">
                @endif
            </div>
            <div class="col-md-4 mb-3">
                <label class="form-label">Skin Care Card 1 Image</label>
                <input type="file" name="approach_image_1" class="form-control">
                @if(isset($settings['approach_image_1']))
                    <img src="{{ asset('uploads/' . str_replace('uploads/', '', $settings['approach_image_1'])) }}" width="150" class="mt-2" style="border-radius:5px;">
                @endif
            </div>
            <div class="col-md-4 mb-3">
                <label class="form-label">Skin Care Card 2 Image</label>
                <input type="file" name="approach_image_2" class="form-control">
                @if(isset($settings['approach_image_2']))
                    <img src="{{ asset('uploads/' . str_replace('uploads/', '', $settings['approach_image_2'])) }}" width="150" class="mt-2" style="border-radius:5px;">
                @endif
            </div>
            <div class="col-md-4 mb-3">
                <label class="form-label">Skin Care Card 3 Image</label>
                <input type="file" name="approach_image_3" class="form-control">
                @if(isset($settings['approach_image_3']))
                    <img src="{{ asset('uploads/' . str_replace('uploads/', '', $settings['approach_image_3'])) }}" width="150" class="mt-2" style="border-radius:5px;">
                @endif
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label">Hero Background Image</label>
                <input type="file" name="hero_bg_image" class="form-control">
                @if(isset($settings['hero_bg_image']))
                    <img src="{{ asset('uploads/' . str_replace('uploads/', '', $settings['hero_bg_image'])) }}" width="150" class="mt-2" style="border-radius:5px;">
                @endif
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label">Hero Subtitle</label>
                <input type="text" name="hero_subtitle" class="form-control" value="{{ $settings['hero_subtitle'] ?? 'Beauty & Laser Care' }}">
            </div>
            <div class="col-md-12 mb-3">
                <label class="form-label">Hero Description</label>
                <textarea name="hero_description" class="form-control" rows="3">{{ $settings['hero_description'] ?? 'From flawless skin to smooth, hair-free confidence — Go Go Gorgeous brings expert beauty and laser treatments together under one roof, tailored just for you.' }}</textarea>
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label">Clinic Name / Hero Title</label>
                <input type="text" name="hero_title" class="form-control" value="{{ $settings['hero_title'] ?? 'Go Go Gorgeous' }}">
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label">Phone Number</label>
                <input type="text" name="phone" class="form-control" value="{{ $settings['phone'] ?? '+1 234 567 890' }}">
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label">Email Address</label>
                <input type="text" name="email" class="form-control" value="{{ $settings['email'] ?? 'info@gogorgeous.com' }}">
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label">Clinic Address</label>
                <input type="text" name="address" class="form-control" value="{{ $settings['address'] ?? '123 Beauty Lane, NY' }}">
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label">Opening Hours</label>
                <input type="text" name="opening_hours" class="form-control" value="{{ $settings['opening_hours'] ?? 'Mon-Sat: 9AM - 8PM' }}">
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label">Facebook URL</label>
                <input type="text" name="facebook_url" class="form-control" value="{{ $settings['facebook_url'] ?? '#' }}">
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label">Instagram URL</label>
                <input type="text" name="instagram_url" class="form-control" value="{{ $settings['instagram_url'] ?? '#' }}">
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label">Twitter URL</label>
                <input type="text" name="twitter_url" class="form-control" value="{{ $settings['twitter_url'] ?? '#' }}">
            </div>
        </div>

        <button type="submit" class="btn btn-primary mt-3">
            <i class="fa-solid fa-save me-2"></i> Save Settings
        </button>
    </form>
@endsection



