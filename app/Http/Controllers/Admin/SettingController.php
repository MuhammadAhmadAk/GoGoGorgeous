<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SiteSetting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        $settings = SiteSetting::all()->pluck('value', 'key');
        return view('backend.settings.index', compact('settings'));
    }

    public function update(Request $request)
    {
        $data = $request->except(['_token', '_method']);

        if ($request->hasFile('about_image_1')) {
            $path = $request->file('about_image_1')->store('uploads/settings', 'public');
            $data['about_image_1'] = $path;
        }
        if ($request->hasFile('about_image_2')) {
            $path = $request->file('about_image_2')->store('uploads/settings', 'public');
            $data['about_image_2'] = $path;
        }
        if ($request->hasFile('experience_image_main')) {
            $path = $request->file('experience_image_main')->store('uploads/settings', 'public');
            $data['experience_image_main'] = $path;
        }
        if ($request->hasFile('experience_image_small')) {
            $path = $request->file('experience_image_small')->store('uploads/settings', 'public');
            $data['experience_image_small'] = $path;
        }
        if ($request->hasFile('why_choose_us_image')) {
            $path = $request->file('why_choose_us_image')->store('uploads/settings', 'public');
            $data['why_choose_us_image'] = $path;
        }
        if ($request->hasFile('our_history_image')) {
            $path = $request->file('our_history_image')->store('uploads/settings', 'public');
            $data['our_history_image'] = $path;
        }
        if ($request->hasFile('how_it_works_image')) {
            $path = $request->file('how_it_works_image')->store('uploads/settings', 'public');
            $data['how_it_works_image'] = $path;
        }
        if ($request->hasFile('hero_bg_image')) {
            $path = $request->file('hero_bg_image')->store('uploads/settings', 'public');
            $data['hero_bg_image'] = $path;
        }
        if ($request->hasFile('approach_image_1')) {
            $path = $request->file('approach_image_1')->store('uploads/settings', 'public');
            $data['approach_image_1'] = $path;
        }
        if ($request->hasFile('approach_image_2')) {
            $path = $request->file('approach_image_2')->store('uploads/settings', 'public');
            $data['approach_image_2'] = $path;
        }
        if ($request->hasFile('approach_image_3')) {
            $path = $request->file('approach_image_3')->store('uploads/settings', 'public');
            $data['approach_image_3'] = $path;
        }

        foreach ($data as $key => $value) {
            SiteSetting::updateOrCreate(
                ['key' => $key],
                ['value' => $value]
            );
        }

        return redirect()->route('admin.settings.index')->with('success', 'Site settings updated successfully.');
    }
}




