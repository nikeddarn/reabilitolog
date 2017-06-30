<?php

namespace App\Http\Controllers\Order;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\View\View;
use App\Models\Order;

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

        $this->storeOrder($request);

        $this->notify($request);

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
     * @param Request $request
     */
    private function storeOrder(Request $request)
    {
        Order::create($request->only(['name', 'phone', 'message']));
    }

    private function notify(Request $request)
    {

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
