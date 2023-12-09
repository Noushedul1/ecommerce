<h4>Customer Order List</h4>
<table border="1" cellspacing="0" width="100%">
    <thead>
    <tr>
        <th>No</th>
        <th>Customer Name</th>
        <th>Mobile</th>
        <th>Address</th>
        <th>Product Name</th>
    </tr>
    </thead>
    <tbody>
        @foreach ($orders as $order)
        <tr>
            <td><b>{{ $loop->iteration }}</b></td>
            <td><b>{{ $order->first_name }} {{ $order->last_name }}</b></td>
            <td><b>{{  $order->mobile }}</b></td>
            <td><b>{{ $order->city }}, {{  $order->address  }}</b></td>
            <td>
                <ul>
                    @foreach ($order->orderitem as $oitem)
                    <li>
                        <b>
                            {{ $oitem->product_name }} x {{ $oitem->quantity }} = {{ $oitem->total_price}}
                        </b>
                    </li>
                    @endforeach
                </ul>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
