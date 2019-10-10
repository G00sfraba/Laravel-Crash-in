<div class="col-md-12">
    <table>
        <thead>
        <td>Date</td>
        <td>Total Price</td>
        <td>User name</td>
        <td>Games List</td>

        </thead>
        <tbody>
            @foreach(Auth::user()->orders as $order)
            <tr>
                <td>{{ $order->created_at }}</td>
                <td>{{ $order->price }}</td>
                <td>{{ $order->user->name }}</td>
                <td>
                    @if(!empty($order->games))
                        @foreach($order->games as $game)

                        <div>{{ $game->name }}</div>
                        @endforeach
                     @endif
                </td>

            </tr>
            @endforeach
        </tbody>
    </table>
</div>

