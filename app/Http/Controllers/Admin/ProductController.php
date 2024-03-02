<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\Facades\Toast;
use ProtoneMedia\Splade\SpladeTable;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::pluck('title', 'id')->toArray();
        $category = Category::pluck('target')->toArray();
        return view('Admin.products.index',[
            'products' => SpladeTable::for(Product::class)
                ->withGlobalSearch(columns: ['title', 'content'])
                ->selectFilter('category_id', $categories, 'Категория')
                ->column('title', label: 'Название продукта', sortable: true)
                ->column('content', label: 'Описание продукта', )
                ->column('material', label: 'Материал продукта', )
                ->column('size', label: 'Размер продукта', )
                ->column('timeCreate', label: 'Время создания продукта', )
                ->column('target', label: 'таргет для js ', )
                ->column('patch', label: 'патч для js ', )
                ->column('image', label: 'Изображение продукта', exportAs: false)
                ->column('isActive', label: 'Статус')
                ->column('action', 'Действия', canBeHidden: false)
                ->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::pluck('title', 'id')->toArray();
        $category = Category::pluck('target')->toArray();
        return view('Admin.products.create', compact('categories','category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product = new Product();
        $product->title = $request->input('title');
        $product->content = $request->input('content');
        $product->material = $request->input('material');
        $product->size = $request->input('size');
        $product->timeCreate = $request->input('timeCreate');
        $product->target = $request->input('target');
        $product->patch = $request->input('patch');
        $product->category_id = $request->input('category_id');
        $product->isActive = $request->input('isActive');
        $product->image = $request->file('image')->store('public/products');
        $product->save();
        Toast::title('Товар добавлен');
        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('Admin.products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $categories = Category::pluck('title', 'id')->toArray();
        $category = Category::pluck('target')->toArray();
        return view('Admin.products.edit', compact('product'), compact('categories','category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $product->title = $request->input('title');
        $product->content = $request->input('content');
        $product->material = $request->input('material');
        $product->size = $request->input('size');
        $product->target = $request->input('target');
        $product->patch = $request->input('patch');
        $product->timeCreate = $request->input('timeCreate');
        $product->category_id = $request->input('category_id');
        $product->isActive = $request->input('isActive');
        $product->image = $request->file('image')->store('public/products');
        if($request->hasFile('image')){
            $image = $request->file('image');
            $fileName = $image->getClientOriginalName();
            $image->storeAs('public/casees', $fileName);
            $product->image = $fileName;
        }
        $product->save();
        Toast::title('Услуга обновлена');
        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        Toast::title('Услуга удалена');
        return redirect()->route('products.index');
    }
}
