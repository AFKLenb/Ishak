<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Hero;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\Facades\Toast;
use ProtoneMedia\Splade\SpladeTable;

class HeroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Admin.heroes.index', [
            'heroes' => SpladeTable::for(Hero::class)
                ->column('title', label: 'Название', sortable: true)
                ->column('description', label: 'Описание')
                ->column('plus', label: 'Описание')
                ->column('plusOne', label: 'Описание')
                ->column('plusTwo', label: 'Описание')
                ->column('plusTree', label: 'Описание')
                ->column('image', label: 'Картинка')
                ->column('action', 'Действия', canBeHidden: false)
                ->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.heroes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $hero = new Hero();
        $hero->title = $request->input('title');
        $hero->description = $request->input('description');
        $hero->plus = $request->input('pluss');
        $hero->plusOne = $request->input('plusOne');
        $hero->plusTwo = $request->input('plusTwo');
        $hero->plusTree = $request->input('plusTree');
        $hero->image = $request->file('image')->store('public/heroes');
        $hero->save();
        Toast::title('Секция героя добавлена');
        return redirect()->route('heroes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Hero $hero)
    {
        return view('Admin.heroes.edit', compact('hero'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Hero $hero)
    {
        $hero->title = $request->input('title');
        $hero->description = $request->input('description');
        $hero->plus = $request->input('pluss');
        $hero->plusOne = $request->input('plusOne');
        $hero->plusTwo = $request->input('plusTwo');
        $hero->plusTree = $request->input('plusTree');
        if($request->hasFile('image')){
            $image = $request->file('image');
            $fileName = $image->getClientOriginalName();
            $image->storeAs('public/heroes', $fileName);
            $hero->image = $fileName;
        }
        $hero->save();
        Toast::title('Секция героя обновлена');
        return redirect()->route('heroes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Hero $hero)
    {
        $hero->delete();
        Toast::title('Категория удалена');
        return redirect()->route('heroes.index');
    }
}

