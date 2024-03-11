@include('head')
<script src="{{ asset('/js/html5shiv.js') }}" defer></script>
<script src="{{ asset('/js/jquery-2.2.4.min.js') }}" defer></script>
<script src="{{ asset('/js/plugins.js') }}" defer></script>
<script src="{{ asset('js/respond.min.js') }}" defer></script>
<link href="http://cdn.datatables.net/2.0.1/css/dataTables.dataTables.min.css" rel="stylesheet" defer>
<script src="http://cdn.datatables.net/2.0.1/js/dataTables.min.js" type="application/javascript" defer></script>
<script src="{{ asset('js/functions.js') }}" defer></script>
@include('header')
@if(empty($orders))
    <h1>You have no orders yet</h1>
@else
<div class="products-table-div">
    <table class="products-table display" style="width:100%">
        <thead>
        <tr>
            @foreach($orders[0] as $row => $value)
                <th>{{$row}}</th>
            @endforeach
        </tr>
        </thead>
        <tbody>
        @foreach($orders as $order)
            <tr>
                @foreach($order as $row => $value)
                    @if($row=='Products')
                        <td>
                            @foreach(json_decode($value) as $product)
                                <img class="product-orders-panel" src="{{$product->image}}" alt="productImage"/>
                            @endforeach
                        </td>
                        @continue;
                    @endif
                    <td>{{$value}}</td>
                @endforeach
            </tr>
        @endforeach
        </tbody>
        <tfoot>
        </tfoot>
    </table>
</div>
@endif
