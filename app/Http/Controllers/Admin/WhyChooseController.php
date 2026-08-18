<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SiteSetting;
use App\Models\WhyChooseItem;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class WhyChooseController extends Controller
{
    public function index(): View
    {
        return view('admin.home.why-choose', [
            'items' => WhyChooseItem::orderBy('sort_order')->paginate(20),
            'sectionTitle' => SiteSetting::first()?->why_choose_title ?: 'Why Choose Pathway Driving Training School?',
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $this->validated($request);
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('why-choose', 'public');
        }
        $data['is_active'] = $request->boolean('is_active');
        WhyChooseItem::create($data);
        return back()->with('status', 'Why Choose item added successfully.');
    }

    public function update(Request $request, WhyChooseItem $whyChoose): RedirectResponse
    {
        $data = $this->validated($request);
        if ($request->hasFile('image')) {
            if ($whyChoose->image) Storage::disk('public')->delete($whyChoose->image);
            $data['image'] = $request->file('image')->store('why-choose', 'public');
        }
        $data['is_active'] = $request->boolean('is_active');
        $whyChoose->update($data);
        return back()->with('status', 'Why Choose item updated successfully.');
    }

    public function destroy(WhyChooseItem $whyChoose): RedirectResponse
    {
        if ($whyChoose->image) Storage::disk('public')->delete($whyChoose->image);
        $whyChoose->delete();
        return back()->with('status', 'Why Choose item deleted successfully.');
    }

    public function title(Request $request): RedirectResponse
    {
        $data = $request->validate(['why_choose_title' => ['required', 'string', 'max:255']]);
        SiteSetting::firstOrCreate([])->update($data);
        return back()->with('status', 'Section title updated successfully.');
    }

    private function validated(Request $request): array
    {
        return $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:1000'],
            'icon_class' => ['nullable', 'string', 'max:255'],
            'image' => ['nullable', 'image', 'max:2048'],
            'sort_order' => ['nullable', 'integer', 'min:0'],
        ]);
    }
}
