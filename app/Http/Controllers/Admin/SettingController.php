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

        foreach ($data as $key => $value) {
            SiteSetting::updateOrCreate(
                ['key' => $key],
                ['value' => $value]
            );
        }

        return redirect()->route('admin.settings.index')->with('success', 'Site settings updated successfully.');
    }
}
