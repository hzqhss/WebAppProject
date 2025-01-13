public function show($id)
{
    $order = Order::with('items')->findOrFail($id); // Fetch order and related items
    return view('order_details', compact('order'));
}
