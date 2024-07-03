<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Affiche la liste des produits
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    // Affiche le formulaire de création d'un produit
    public function create()
    {
        return view('products.create');
    }

    // Enregistre un nouveau produit
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'image' => 'nullable|image',
            'description' => 'nullable',
        ]);

        $product = new Product();
        $product->name = $validated['name'];

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images', 'public');
            $product->image = $path;
        }

        $product->description = $validated['description'];
        $product->save();

        return redirect()->route('products.index');
    }

    // Affiche le formulaire de modification d'un produit
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    // Met à jour un produit existant
    public function update(Request $request, Product $product)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'image' => 'nullable|image',
            'description' => 'nullable',
        ]);

        $product->name = $validated['name'];

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images', 'public');
            $product->image = $path;
        }

        $product->description = $validated['description'];
        $product->save();

        return redirect()->route('products.index');
    }

    // Supprime un produit
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index');
    }
}
