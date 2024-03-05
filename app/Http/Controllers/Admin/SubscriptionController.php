<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Subscription;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\Facades\Toast;
use ProtoneMedia\Splade\SpladeTable;

class SubscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Admin.subscriptions.index', [
            'subscriptions' => SpladeTable::for(Subscription::class)
                ->column('email', label: 'Сообщение')
                ->column('date', label: 'Дата подписки ', exportAs: false)
                ->column('isStatus', label: 'Статус')
                ->column('action', 'Действия', canBeHidden: false)
                ->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
//        $subscriptions = Application::pluck('name', 'id')->toArray();
        return view('Admin.subscriptions.create', );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $subscription = new Subscription();
        $subscription->email = $request->input('email');
        $subscription->date = now()->format('d/m/Y');
        $subscription->isStatus = $request->input('isStatus');
        $subscription->save();
        Toast::title('Заявка добавлена');
        return redirect()->route('subscriptions.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Subscription $subscription)
    {
        return view('Admin.subscriptions.show', compact('subscription'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Subscription $subscription)
    {

        return view('Admin.subscriptions.edit', compact('subscription'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Subscription $subscription)
    {
        $subscription->email = $request->input('email');
        $subscription->date = $request->input('date');
        $subscription->isStatus = $request->input('isStatus');
        $subscription->save();
        Toast::title('Подписка обновлена');
        return redirect()->route('subscriptions.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subscription $subscription)
    {
        $subscription->delete();
        Toast::title('Подписка удалена');
        return redirect()->route('subscriptions.index');
    }
}
