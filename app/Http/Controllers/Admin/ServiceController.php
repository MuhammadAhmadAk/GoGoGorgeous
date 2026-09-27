<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::orderBy('order', 'asc')->latest()->get();
        return view('backend.services.index', compact('services'));
    }

    public function create()
    {
        return view('backend.services.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'nullable|string|max:100',
            'description' => 'nullable|string',
            'price' => 'nullable|numeric|min:0',
            'order' => 'nullable|integer',
            'is_featured' => 'nullable|boolean',
            'status' => 'nullable|boolean',
            'icon_image' => 'nullable|image|mimes:jpeg,png,jpg,svg,webp|max:2048',
            'featured_image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:4096',
        ]);

        $validated['slug'] = Str::slug($validated['title']);
        $validated['is_featured'] = $request->boolean('is_featured');
        $validated['status'] = $request->boolean('status');
        $validated['order'] = $validated['order'] ?? 0;

        if ($request->hasFile('icon_image')) {
            $path = $request->file('icon_image')->store('uploads/services/icons', 'public');
            $validated['icon_image'] = $path;
        }

        if ($request->hasFile('featured_image')) {
            $path = $request->file('featured_image')->store('uploads/services/images', 'public');
            $validated['featured_image'] = $path;
        }

        Service::create($validated);

        return redirect()->route('admin.services.index')->with('success', 'Service created successfully.');
    }

    public function edit(Service $service)
    {
        return view('backend.services.edit', compact('service'));
    }

    public function update(Request $request, Service $service)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'nullable|string|max:100',
            'description' => 'nullable|string',
            'price' => 'nullable|numeric|min:0',
            'order' => 'nullable|integer',
            'icon_image' => 'nullable|image|mimes:jpeg,png,jpg,svg,webp|max:2048',
            'featured_image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:4096',
        ]);

        $validated['slug'] = Str::slug($validated['title']);
        $validated['is_featured'] = $request->boolean('is_featured');
        $validated['status'] = $request->boolean('status');
        $validated['order'] = $validated['order'] ?? 0;

        if ($request->hasFile('icon_image')) {
            $path = $request->file('icon_image')->store('uploads/services/icons', 'public');
            $validated['icon_image'] = $path;
        }

        if ($request->hasFile('featured_image')) {
            $path = $request->file('featured_image')->store('uploads/services/images', 'public');
            $validated['featured_image'] = $path;
        }

        $service->update($validated);

        return redirect()->route('admin.services.index')->with('success', 'Service updated successfully.');
    }

    public function destroy(Service $service)
    {
        $service->delete();
        return redirect()->route('admin.services.index')->with('success', 'Service deleted successfully.');
    }
}
