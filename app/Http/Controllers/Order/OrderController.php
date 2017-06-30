<?php

namespace App\Http\Controllers\Order;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;
use App\Models\Order;
use App\Mail\NewOrderReceived;

class OrderController extends Controller
{
    /**
     * Handle incoming order request
     *
     * @param Request $request
     *
     * @return View
     */
    public function order(Request $request)
    {
        $this->validate($request, $this->validationRules());

        $order = $this->storeOrder($request);

        $this->notify($order);

        return redirect($this->successPath());
    }

    /**
     * Validation rules of order form
     *
     * @return array
     */
    private function validationRules()
    {
        return ['name' => 'required', 'phone' => 'required|regex:/[0-9\-\(\)\+\s]{7,32}/'];
    }

    /**
     * Store new order in DB.
     *
     * @param Request $request
     * @return Order
     */
    private function storeOrder(Request $request)
    {
        return Order::create($request->only(['name', 'phone', 'message']));
    }

    /**
     * Send email to admin of massages.
     *
     * @param Order $order
     * @return void
     */
    private function notify(Order $order)
    {
        Mail::to(config('order.notification.to'))->send(new NewOrderReceived($order));
    }

    /**
     * Path to the success view.
     *
     * @return string
     */
    private function successPath()
    {
        return '/success';
    }
}
