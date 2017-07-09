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
     * @var Request
     */
    private $request;
    /**
     * @var Order
     */
    private $order;

    /**
     * OrderController constructor.
     * @param Request $request
     * @param Order $order
     */
    public function __construct(Request $request, Order $order){

        $this->request = $request;
        $this->order = $order;
    }

    /**
     * Handle incoming order request
     * @return View
     * @internal param Request $request
     *
     * @internal param Order $order
     */
    public function order()
    {
        $this->validate($this->request, $this->validationRules());

        $order = $this->storeOrder();

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
     * @return Order
     */
    private function storeOrder()
    {
        return $this->order->create($this->request->only(['name', 'phone', 'message']));
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
