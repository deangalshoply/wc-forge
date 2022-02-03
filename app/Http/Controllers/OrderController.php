<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
     /**
     * Display a listing of the resource.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function fetch(Request $request)
    {
        foreach ($request->all() as $order) {
            
        $order['date_created'] = json_encode($order['date_created']);
        $order['date_paid'] = json_encode($order['date_paid']);
        $order['date_completed'] = json_encode($order['date_completed']);
        $order['line_items'] = json_encode($order['line_items']);
        $order['shipping_lines'] = json_encode($order['shipping_lines']);
        $order['shipping'] = json_encode($order['shipping_lines']);
        $order['billing'] = json_encode($order['shipping_lines']);
        $order['fee_lines'] = json_encode($order['shipping_lines']);
        $order['coupon_lines'] = json_encode($order['shipping_lines']);
        // $order['status_history'] = substr($order['status_history'],0,500) ;
        Order::create($order);
            
        }
        return 'FETCH';

    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Order::all();

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      
        $data = $request->all();
        $data['date_created'] = json_encode($data['date_created']);
        $data['date_paid'] = json_encode($data['date_paid']);
        $data['line_items'] = json_encode($data['line_items']);
        $data['shipping_lines'] = json_encode($data['shipping_lines']);
        $data['shipping'] = json_encode($data['shipping_lines']);
        $data['billing'] = json_encode($data['shipping_lines']);
        $data['fee_lines'] = json_encode($data['shipping_lines']);
        $data['coupon_lines'] = json_encode($data['shipping_lines']);

        // Order::create($data);
        // Http::post('http://localhost:8001/order/status',['id' => Order::create($request->all())->id,'status' => 'success']);
        return  $data;

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Order::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $order = Order::find($id);
        $order->update($request->all());
        return $order;    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       return Order::destroy($id);
    }

     /**
     * Search for a name
     *
     * @param  str  $name
     * @return \Illuminate\Http\Response
     */
    public function search($phone_number)
    {
       return Order::where('name', 'like', '%'.$phone_number.'%')->get();
    }
}
