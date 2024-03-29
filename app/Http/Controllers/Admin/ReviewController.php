<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Review;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\Facades\Toast;
use ProtoneMedia\Splade\SpladeTable;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Admin.reviews.index',[
            'reviews' => SpladeTable::for(Review::class)
                ->withGlobalSearch(columns: ['title', 'content'])
                ->column('name', label: 'ФИО клиента', sortable: true)
                ->column('text', label: 'Текст отзыва', )
                ->column('patch', label: 'патч для js ', )
                ->column('image', label: 'Изображение клиента', exportAs: false)
                ->column('isActive', label: 'Статус отзыва')
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
        return view('Admin.reviews.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $reviews = new Review();
        $reviews->name = $request->input('name');
        $reviews->text = $request->input('text');
        $reviews->patch = $request->input('patch');
        $reviews->image = $request->file('image')->store('public/reviews');
        $reviews->isActive = $request->input('isActive');
        $reviews->category_id = $request->input('category_id');
        $reviews->save();
        Toast::title('Отзыв добавлен');
        return redirect()->route('reviews.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Review $review)
    {
        return view('Admin.reviews.show', compact('review'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Review $review)
    {
        $categories = Category::pluck('title', 'id')->toArray();
        return view('Admin.reviews.edit', compact('review'), compact('categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Review $review)
    {
        $review->name = $request->input('name');
        $review->text = $request->input('text');
        $review->patch = $request->input('patch');
        $review->isActive = $request->input('isActive');
        $review->category_id = $request->input('category_id');
        if($request->hasFile('image')){
            $image = $request->file('image');
            $fileName = $image->getClientOriginalName();
            $image->storeAs('public/reviews', $fileName);
            $review->image = $fileName;
        }
        $review->save();
        Toast::title('Отзыв обновлена');
        return redirect()->route('reviews.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Review $review)
    {
        $review->delete();
        Toast::title('Отзыв удалён');
        return redirect()->route('reviews.index');
    }
}
