<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Wallet;
use Illuminate\Support\Facades\Storage;

class SiteController extends Controller
{
    public function dashboard()
    {
        return view('dashboard');
    }

    public function content()
    {
        $contents = Content::with('category')->get();
        return view('content', compact('contents'));
    }

    public function create()
    {
        $categories = Category::all();
        $wallets = Wallet::all();
        return view('create', compact('categories', 'wallets'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'logo' => 'nullable|image|max:2048',
            'headline' => 'nullable|string',
            'category_id' => 'nullable|exists:categories,id',
            'badges' => 'nullable|array|min:1',
            'badges.*' => 'string',
            'highlight' => 'nullable|string',
            'features' => 'nullable|array|min:1',
            'features.*' => 'string',
            'currencies' => 'nullable|array|min:1',
            'currencies.*' => 'string',
            'wallet_id' => 'nullable|exists:wallets,id',
            'link' => 'nullable|url',
        ]);

        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $path = $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('logos'), $filename);
            if (! $path) {
                return back()->withErrors(['logo' => 'Gagal menyimpan file logo.'])->withInput();
            }

            $validated['logo'] = $path;
        }

        // Ensure arrays are set to null when not provided to avoid casting issues
        foreach (['badges', 'features', 'currencies'] as $arrField) {
            if (!isset($validated[$arrField]) && $request->has($arrField)) {
                $validated[$arrField] = (array) $request->input($arrField);
            }
        }

        Content::create($validated);

        return redirect()->route('admin.content')->with('success', 'Content created successfully.');
    }

    public function edit($id)
    {
        $content = Content::findOrFail($id);
        $categories = Category::all();
        $wallets = Wallet::all();
        return view('edit', compact('content', 'categories', 'wallets'));
    }

    public function update(Request $request, $id)
    {
        $content = Content::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'logo' => 'nullable|image|max:2048',
            'headline' => 'nullable|string',
            'category_id' => 'nullable|exists:categories,id',
            'badges' => 'nullable|array',
            'badges.*' => 'string',
            'highlight' => 'nullable|string',
            'features' => 'nullable|array',
            'features.*' => 'string',
            'currencies' => 'nullable|array',
            'currencies.*' => 'string',
            'wallet_id' => 'nullable|exists:wallets,id',
            'link' => 'nullable|url',
        ]);

        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $path = $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('logos'), $filename);
            if (! $path) {
                return back()->withErrors(['logo' => 'Gagal menyimpan file logo.'])->withInput();
            }
            // delete old logo if exists
            if ($content->logo) {
                Storage::disk('public')->delete($content->logo);
            }
            $validated['logo'] = $path;
        }

        foreach (['badges', 'features', 'currencies'] as $arrField) {
            if (!isset($validated[$arrField]) && $request->has($arrField)) {
                $validated[$arrField] = (array) $request->input($arrField);
            }
        }

        $content->update($validated);

        return redirect()->route('admin.content')->with('success', 'Content updated successfully.');
    }
}
