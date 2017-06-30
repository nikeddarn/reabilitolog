<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class OrderFormController extends Controller
{
    /**
     * @return View
     */
    public function showForm(){
        return view($this->viewPath())->with($this->viewParameters());
    }

    /**
     * @return string
     */
    private function viewPath()
    {
        return 'order/form';
    }

    /**
     * @return array
     */
    private function viewParameters()
    {
        return ['form' => trans('form.order')];
    }
}
