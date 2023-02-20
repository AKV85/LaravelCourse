

<h1>Order Summary</h1>

<table>
    <thead>
    <tr>
        <th>Order ID</th>
        <th>Total Price</th>
    </tr>
    </thead>
    <tbody>
    @foreach($orderSummaries as $orderSummary)
    <tr>
        <td>{{ $orderSummary->order_id }}</td>
        <td>{{ $orderSummary->total_price }}</td>
    </tr>
    @endforeach
    </tbody>
</table>
