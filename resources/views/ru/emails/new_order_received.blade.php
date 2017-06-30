<h1>Новый заказ</h1>
<ul>
    <li>Дата: <strong>{{ date("Y-m-d H:i:s") }}</strong></li>
    <li>Имя: <strong>{{ $order->name }}</strong></li>
    <li>Тел: <strong>{{ $order->phone }}</strong></li>
    <li>{{ $order->message }}</li>
</ul>