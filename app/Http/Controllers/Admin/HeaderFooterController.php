<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\NavigationItem;
use App\Models\SiteSetting;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class HeaderFooterController extends Controller
{
    public function edit(): View
    {
        return view('admin.home.header-footer', [
            'settings' => SiteSetting::firstOrCreate([]),
            'menus' => NavigationItem::whereNull('parent_id')->with(['children' => fn ($query) => $query->orderBy('sort_order')])->orderBy('sort_order')->get(),
        ]);
    }

    public function update(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'header_logo' => ['nullable', 'image', 'max:2048'],
            'footer_logo' => ['nullable', 'image', 'max:2048'],
            'favicon' => ['nullable', 'file', 'mimes:ico,png,jpg,jpeg,webp', 'max:1024'],
            'footer_about' => ['nullable', 'string', 'max:2000'],
            'office_title' => ['nullable', 'string', 'max:255'],
            'office_hours' => ['nullable', 'string', 'max:255'],
            'office_days' => ['nullable', 'string', 'max:255'],
            'office_note' => ['nullable', 'string', 'max:255'],
            'address' => ['nullable', 'string', 'max:1000'],
            'email' => ['nullable', 'email', 'max:255'],
            'phone' => ['nullable', 'string', 'max:50'],
            'floating_phone' => ['nullable', 'string', 'max:50'],
            'whatsapp_number' => ['nullable', 'string', 'max:50'],
            'facebook' => ['nullable', 'url', 'max:500'],
            'linkedin' => ['nullable', 'url', 'max:500'],
            'youtube' => ['nullable', 'url', 'max:500'],
            'instagram' => ['nullable', 'url', 'max:500'],
            'registration_text' => ['nullable', 'string', 'max:255'],
            'copyright_text' => ['nullable', 'string', 'max:255'],
            'menus' => ['nullable', 'array'],
            'menus.*.label' => ['required', 'string', 'max:100'],
            'menus.*.url' => ['nullable', 'string', 'max:500'],
            'menus.*.children' => ['nullable', 'array'],
            'menus.*.children.*.label' => ['required', 'string', 'max:100'],
            'menus.*.children.*.url' => ['nullable', 'string', 'max:500'],
        ]);

        DB::transaction(function () use ($request, $validated) {
            $settings = SiteSetting::firstOrCreate([]);
            $settings->fill(collect($validated)->except(['header_logo', 'footer_logo', 'favicon', 'menus'])->all());

            foreach (['header_logo', 'footer_logo', 'favicon'] as $field) {
                if ($request->hasFile($field)) {
                    if ($settings->{$field}) Storage::disk('public')->delete($settings->{$field});
                    $settings->{$field} = $request->file($field)->store('site', 'public');
                }
            }
            $settings->save();

            NavigationItem::whereNull('parent_id')->delete();
            foreach ($validated['menus'] ?? [] as $order => $menu) {
                $parent = NavigationItem::create(['label' => $menu['label'], 'url' => $menu['url'] ?: '#', 'sort_order' => $order]);
                foreach ($menu['children'] ?? [] as $childOrder => $child) {
                    NavigationItem::create(['parent_id' => $parent->id, 'label' => $child['label'], 'url' => $child['url'] ?: '#', 'sort_order' => $childOrder]);
                }
            }
        });

        return back()->with('status', 'Header এবং footer সফলভাবে update হয়েছে।');
    }
}
