<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;
use App\Models\Gallery;
use App\Models\Team;
use App\Models\Testimonial;
use App\Models\Faq;
use App\Models\SiteSetting;
use Illuminate\Support\Str;

class ContentSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Services
        $services = [
            [
                'title' => 'Hair Color',
                'category' => 'Hair Care',
                'description' => 'Get vibrant, long-lasting hair color customized to match your style and skin tone.',
                'price' => 44.99,
                'icon_image' => 'frontend/images/icons/icon-hair-color.svg',
                'featured_image' => 'frontend/images/services/hair_color.jpg',
                'is_featured' => true,
                'order' => 1,
            ],
            [
                'title' => 'Hair Cut',
                'category' => 'Hair Care',
                'description' => 'Professional haircuts designed to suit your face shape and personal style.',
                'price' => 29.99,
                'icon_image' => 'frontend/images/icons/icon-hair-cut.svg',
                'featured_image' => 'frontend/images/services/hair_cut.jpg',
                'is_featured' => true,
                'order' => 2,
            ],
            [
                'title' => 'Head Massage',
                'category' => 'Hair Care',
                'description' => 'Relax and rejuvenate with a soothing head massage that relieves stress and tension.',
                'price' => 34.99,
                'icon_image' => 'frontend/images/icons/icon-head-massage.svg',
                'featured_image' => 'frontend/images/services/head_massage.jpg',
                'is_featured' => true,
                'order' => 3,
            ],
            [
                'title' => 'Deep Conditioning',
                'category' => 'Hair Care',
                'description' => 'Restore moisture and shine to dry, damaged hair with our deep conditioning treatment.',
                'price' => 44.99,
                'icon_image' => 'frontend/images/icons/icon-deep-conditioning.svg',
                'featured_image' => 'frontend/images/services/deep_conditioning.jpg',
                'is_featured' => true,
                'order' => 4,
            ],
            [
                'title' => 'Highlights',
                'category' => 'Hair Care',
                'description' => 'Add dimension and brightness to your hair with expertly placed highlights.',
                'price' => 249.00,
                'icon_image' => 'frontend/images/icons/icon-highlights.svg',
                'featured_image' => 'frontend/images/services/highlights.jpg',
                'is_featured' => true,
                'order' => 5,
            ],
            [
                'title' => 'Eyebrow Threading',
                'category' => 'Threading & Waxing',
                'description' => 'Get precisely shaped, natural-looking eyebrows with our threading service.',
                'price' => 9.99,
                'icon_image' => 'frontend/images/icons/icon-eyebrow-threading.svg',
                'featured_image' => 'frontend/images/services/eyebrow_threading.jpg',
                'is_featured' => true,
                'order' => 6,
            ],
            [
                'title' => 'Waxing Full Body',
                'category' => 'Threading & Waxing',
                'description' => 'Smooth, hair-free skin with our gentle and effective full body waxing treatments.',
                'price' => 134.99,
                'icon_image' => 'frontend/images/icons/icon-waxing-full-body.svg',
                'featured_image' => 'frontend/images/services/waxing_full_body.jpg',
                'is_featured' => true,
                'order' => 7,
            ],
            [
                'title' => 'Waxing Full Face',
                'category' => 'Threading & Waxing',
                'description' => 'Gentle and precise facial waxing leaving your skin silky soft and hair-free.',
                'price' => 24.99,
                'icon_image' => 'frontend/images/icons/icon-waxing-full-face.svg',
                'featured_image' => 'frontend/images/services/waxing_full_face.jpg',
                'is_featured' => true,
                'order' => 8,
            ],
            [
                'title' => 'Facials',
                'category' => 'Skin Care',
                'description' => 'Refresh and revitalize your skin with our customized deep-cleansing facial treatments.',
                'price' => 59.99,
                'icon_image' => 'frontend/images/icons/icon-facials.svg',
                'featured_image' => 'frontend/images/services/facials.jpg',
                'is_featured' => true,
                'order' => 9,
            ],
            [
                'title' => 'Brightening Facial',
                'category' => 'Skin Care',
                'description' => 'Brighten dull skin and even out your complexion with our specialized brightening facial.',
                'price' => 69.99,
                'icon_image' => 'frontend/images/icons/icon-brightening-facial.svg',
                'featured_image' => 'frontend/images/services/brightening_facial.jpg',
                'is_featured' => true,
                'order' => 10,
            ],
            [
                'title' => 'Anti-Aging Facial',
                'category' => 'Skin Care',
                'description' => 'Restore youthfulness and elasticity to your skin with our advanced anti-aging treatments.',
                'price' => 79.99,
                'icon_image' => 'frontend/images/icons/icon-anti-aging-facial.svg',
                'featured_image' => 'frontend/images/services/anti-aging_facial.jpg',
                'is_featured' => true,
                'order' => 11,
            ],
            [
                'title' => 'Full Body Laser Hair Removal',
                'category' => 'Laser Care',
                'description' => 'Safe, virtually painless full body laser hair removal for long-lasting, smooth skin.',
                'price' => 249.99,
                'icon_image' => 'frontend/images/icons/icon-laser-full-body.svg',
                'featured_image' => 'frontend/images/services/laser_hair_removal_full_body.jpg',
                'is_featured' => true,
                'order' => 12,
            ],
            [
                'title' => 'Laser Hair Removal Face',
                'category' => 'Laser Care',
                'description' => 'Precision laser hair removal targeting facial hair for a smooth, flawless look.',
                'price' => 64.99,
                'icon_image' => 'frontend/images/icons/icon-laser-face.svg',
                'featured_image' => 'frontend/images/services/laser_hair_removal_face.jpg',
                'is_featured' => true,
                'order' => 13,
            ],
            [
                'title' => 'Photo Facial',
                'category' => 'Laser Care',
                'description' => 'Improve skin tone, reduce redness, and stimulate collagen with light-based photo facial therapy.',
                'price' => 79.99,
                'icon_image' => 'frontend/images/icons/icon-photo-facial.svg',
                'featured_image' => 'frontend/images/services/photo_facial.jpg',
                'is_featured' => true,
                'order' => 14,
            ],
            [
                'title' => 'Skin Rejuvenation (IPL)',
                'category' => 'Laser Care',
                'description' => 'IPL laser treatment to improve skin tone, reduce pigmentation, and stimulate collagen.',
                'price' => 119.99,
                'icon_image' => 'frontend/images/icons/icon-skin-rejuvenation.svg',
                'featured_image' => 'frontend/images/services/skin_rejuvenation_IPL.jpg',
                'is_featured' => true,
                'order' => 15,
            ],
            [
                'title' => 'Microblading',
                'category' => 'Brows & Beauty',
                'description' => 'Semi-permanent brow styling for perfectly shaped, fuller, and natural-looking eyebrows.',
                'price' => 299.99,
                'icon_image' => 'frontend/images/icons/icon-microblading.svg',
                'featured_image' => 'frontend/images/services/microblading.jpg',
                'is_featured' => true,
                'order' => 16,
            ],
            [
                'title' => 'Body Massage',
                'category' => 'Body Care',
                'description' => 'Relax and destress with our full-body therapeutic massage designed to soothe muscles.',
                'price' => 79.99,
                'icon_image' => 'frontend/images/icons/icon-body-massage.svg',
                'featured_image' => 'frontend/images/services/body_massage.jpg',
                'is_featured' => true,
                'order' => 17,
            ],
            [
                'title' => 'Make Up & Hair Style',
                'category' => 'Brows & Beauty',
                'description' => 'Flawless makeup and customized hairstyling for weddings, parties, and special events.',
                'price' => 149.99,
                'icon_image' => 'frontend/images/icons/icon-makeup-hairstyle.svg',
                'featured_image' => 'frontend/images/services/makeup_hair_style.jpg',
                'is_featured' => true,
                'order' => 18,
            ],
        ];

        foreach ($services as $srv) {
            Service::updateOrCreate(
                ['slug' => Str::slug($srv['title'])],
                $srv
            );
        }

        // 2. Galleries
        for ($i = 1; $i <= 6; $i++) {
            Gallery::updateOrCreate(
                ['image_path' => "frontend/images/gallery/gallery-{$i}.webp"],
                [
                    'title' => "Gallery Treatment {$i}",
                    'category' => 'Beauty & Laser',
                    'order' => $i,
                    'status' => true,
                ]
            );
        }

        // 3. Teams
        $teams = [
            [
                'name' => 'Sana Mali',
                'designation' => 'Senior Beautician',
                'image_path' => 'frontend/images/team/team-1.webp',
                'facebook_url' => '#',
                'instagram_url' => '#',
                'dribbble_url' => '#',
                'linkedin_url' => '#',
                'order' => 1,
            ],
            [
                'name' => 'Hira Ahmed',
                'designation' => 'Laser & Skin Specialist',
                'image_path' => 'frontend/images/team/team-2.webp',
                'facebook_url' => '#',
                'instagram_url' => '#',
                'dribbble_url' => '#',
                'linkedin_url' => '#',
                'order' => 2,
            ],
            [
                'name' => 'Fatima Raz',
                'designation' => 'Hair & Color Expert',
                'image_path' => 'frontend/images/team/team-3.webp',
                'facebook_url' => '#',
                'instagram_url' => '#',
                'dribbble_url' => '#',
                'linkedin_url' => '#',
                'order' => 3,
            ],
        ];

        foreach ($teams as $t) {
            Team::updateOrCreate(['name' => $t['name']], $t);
        }

        // 4. Testimonials
        $testimonials = [
            [
                'client_name' => 'Mahnoor Fatima',
                'client_role' => 'Satisfied Client',
                'rating' => 5,
                'review' => 'I got laser hair removal done here and the results are amazing. The staff was very professional and made me feel comfortable throughout the process.',
                'avatar' => 'frontend/images/gallery/gallery-1.webp',
                'order' => 1,
            ],
            [
                'client_name' => 'Areeba Siddiqui',
                'client_role' => 'Satisfied Client',
                'rating' => 5,
                'review' => 'Best facial I\'ve ever had! My skin feels so fresh and glowing. Highly recommend Go Go Gorgeous to everyone.',
                'avatar' => 'frontend/images/gallery/gallery-2.webp',
                'order' => 2,
            ],
            [
                'client_name' => 'Zainab Tariq',
                'client_role' => 'Satisfied Client',
                'rating' => 5,
                'review' => 'The hair coloring service exceeded my expectations. Very skilled team and a relaxing environment.',
                'avatar' => 'frontend/images/gallery/gallery-3.webp',
                'order' => 3,
            ],
            [
                'client_name' => 'Kinza Rehman',
                'client_role' => 'Satisfied Client',
                'rating' => 5,
                'review' => 'I\'ve been coming here for microblading and skin treatments for months now. Consistent quality every single time.',
                'avatar' => 'frontend/images/gallery/gallery-4.webp',
                'order' => 4,
            ],
            [
                'client_name' => 'Noor-ul-Ain Sheikh',
                'client_role' => 'Satisfied Client',
                'rating' => 5,
                'review' => 'Clean, professional, and truly caring staff. My go-to place for all beauty needs.',
                'avatar' => 'frontend/images/gallery/gallery-5.webp',
                'order' => 5,
            ],
        ];

        foreach ($testimonials as $test) {
            Testimonial::updateOrCreate(['client_name' => $test['client_name']], $test);
        }

        // 5. FAQs
        $faqs = [
            [
                'question' => 'Do I need to book an appointment in advance?',
                'answer' => 'Yes, we recommend booking in advance to secure your preferred time slot, especially for laser and skin treatments.',
                'order' => 1,
            ],
            [
                'question' => 'What services do you offer?',
                'answer' => 'We offer a full range of beauty and laser services including hair coloring, cutting, facials, waxing, threading, laser hair removal, skin rejuvenation, microblading, body sculpting, and more.',
                'order' => 2,
            ],
            [
                'question' => 'How long does a typical laser session take?',
                'answer' => 'Depending on the treatment area, a laser session usually takes 15 to 45 minutes.',
                'order' => 3,
            ],
            [
                'question' => 'Are your products and equipment hygienic?',
                'answer' => 'Absolutely. We follow strict hygiene protocols and use sterilized, high-quality equipment and products for every client.',
                'order' => 4,
            ],
        ];

        foreach ($faqs as $faq) {
            Faq::updateOrCreate(['question' => $faq['question']], $faq);
        }

        // 6. Site Settings
        $settings = [
            ['key' => 'site_name', 'value' => 'Go Go Gorgeous', 'group' => 'general'],
            ['key' => 'phone', 'value' => '+1 (604) 506-4358', 'group' => 'contact'],
            ['key' => 'email', 'value' => 'info@gogorgeous.com', 'group' => 'contact'],
            ['key' => 'address', 'value' => '16674 64 Ave, Surrey, BC V3S 0W5, Canada', 'group' => 'contact'],
            ['key' => 'opening_hours_weekdays', 'value' => 'Monday – Saturday: 10:00 AM – 6:00 PM', 'group' => 'hours'],
            ['key' => 'opening_hours_sunday', 'value' => 'Sunday: 11:00 AM – 5:00 PM', 'group' => 'hours'],
            ['key' => 'facebook_url', 'value' => 'https://facebook.com', 'group' => 'social'],
            ['key' => 'instagram_url', 'value' => 'https://instagram.com', 'group' => 'social'],
            ['key' => 'tiktok_url', 'value' => 'https://tiktok.com', 'group' => 'social'],
            ['key' => 'youtube_url', 'value' => 'https://youtube.com', 'group' => 'social'],
            ['key' => 'hero_title', 'value' => 'Reveal Your Most Gorgeous Self', 'group' => 'hero'],
            ['key' => 'hero_subtitle', 'value' => 'Beauty & Laser Care', 'group' => 'hero'],
            ['key' => 'hero_description', 'value' => 'From flawless skin to smooth, hair-free confidence — Go Go Gorgeous brings expert beauty and laser treatments together under one roof, tailored just for you.', 'group' => 'hero'],
        ];

        foreach ($settings as $setting) {
            SiteSetting::updateOrCreate(['key' => $setting['key']], $setting);
        }
    }
}
