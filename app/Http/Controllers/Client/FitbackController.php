<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Subscription;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\Facades\Toast;

class FitbackController extends Controller
{
        public function store(Request $request)
    {
        $subscription = new Subscription();
        $subscription->email = $request->input('email');
        $subscription->date = now()->format('d/m/Y');
        $subscription->isStatus = '1';
        $subscription->save();
        Toast::title('Подписка оформлена');
        return redirect()->route('client.index');
    }
}
