public function show($id)
{
    $order = Order::with('items')->findOrFail($id);
    return view('order_details', compact('order'));
}
