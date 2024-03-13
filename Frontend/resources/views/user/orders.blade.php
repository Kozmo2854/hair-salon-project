<!DOCTYPE html>
<html dir="ltr" lang="en-US">
@include('head')
{{--@dd($orders)--}}
<script src="{{ asset('/js/html5shiv.js') }}" defer></script>
<script src="{{ asset('/js/jquery-2.2.4.min.js') }}" defer></script>
<script src="{{ asset('/js/plugins.js') }}" defer></script>
<script src="{{ asset('js/respond.min.js') }}" defer></script>
<link href="http://cdn.datatables.net/2.0.1/css/dataTables.dataTables.min.css" rel="stylesheet" defer>
<script src="http://cdn.datatables.net/2.0.1/js/dataTables.min.js" type="application/javascript" defer></script>
<script src="{{ asset('js/functions.js') }}" defer></script>
<body>
<div id="wrapper" class="wrapper clearfix full-height">
    @include('header')
    <section id="page-title" class="page-title bg-overlay bg-overlay-dark bg-parallax">
    <div class="bg-section">
        <img src="http://demo.zytheme.com/hairy/assets/images/page-titles/3.jpg" alt="Background"/>
    </div>
    <div class="container-fluid full-height">
        @if(empty($orders))
            <h1 class="col-lg-12 text-center full-height color-white" style="margin-top: 200px">
                <td colspan="3" class="text-center">You have no orders yet.</td>
            </h1>
        @else
        <div class="row full-height">
            <div class="col-lg-12 text-center full-height">
                <div class="table-responsive full-height">
                    <table class="table table-bordered table-striped">
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
                                <td>
                                @if($row=='Products')
                                    <div class="row">
                                        @foreach(json_decode($value) as $product)
                                        <div class="col-xs-2">
                                            <img src="{{$product->image}}" alt="Product Image" class="img-responsive img-thumbnail" style="width: 200px; height: auto;">
                                        </div>
                                        @endforeach
                                    </div>
                                @else
                                {{$value}}
                                @endif
                                </td>
                            @endforeach
                        </tr>
                        @endforeach
                        <!-- Add more rows as needed -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @endif
    </section>
</div>

{{--        <div class="container">--}}

{{--        <table cellpadding="0" cellspacing="0" border="0" class="dataTable table table-striped" id="example">--}}

{{--        </table>--}}

{{--    </div>--}}
{{--    @if(empty($orders))--}}
{{--        <h1>You have no orders yet</h1>--}}
{{--    @else--}}
{{--        <div class="products-table-div">--}}
{{--            <table class="products-table display center-block" style="width:70%">--}}
{{--                <thead>--}}
{{--                <tr>--}}
{{--                    @foreach($orders[0] as $row => $value)--}}
{{--                        <th>{{$row}}</th>--}}
{{--                    @endforeach--}}
{{--                </tr>--}}
{{--                </thead>--}}
{{--                <tbody>--}}
{{--                @foreach($orders as $order)--}}
{{--                    <tr style="border-bottom: #0b0b0b;border">--}}
{{--                        @foreach($order as $row => $value)--}}
{{--                            @if($row=='Products')--}}
{{--                                <td>--}}
{{--                                    @foreach(json_decode($value) as $product)--}}
{{--                                        <img class="product-orders-panel" src="{{$product->image}}" alt="productImage"/>--}}
{{--                                    @endforeach--}}
{{--                                </td>--}}
{{--                                @continue;--}}
{{--                            @endif--}}
{{--                            <td>{{$value}}</td>--}}
{{--                        @endforeach--}}
{{--                    </tr>--}}
{{--                @endforeach--}}
{{--                </tbody>--}}
{{--                <tfoot>--}}
{{--                </tfoot>--}}
{{--            </table>--}}
{{--        </div>--}}
{{--    @endif--}}
{{--    <footer id="footer" class="footer footer-light">--}}
{{--        <!-- Copyrights--}}
{{--        ============================================= -->--}}
{{--        <div class="footer--copyright">--}}
{{--            <div class="container">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-xs-12 col-sm-12 col-md-12 text--center">--}}
{{--                        <span>&copy; 2017, All rights reserved.</span>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!-- .container end -->--}}
{{--        </div>--}}
{{--    </footer>--}}
{{--</div>--}}
{{--<script src="https://code.jquery.com/jquery-3.0.0.js" ></script>--}}
{{--<script src="https://code.jquery.com/jquery-migrate-3.3.0.js" ></script>--}}
{{--<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js" ></script>--}}
{{--<script src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.js" ></script>--}}
{{--<script src="https://cdn.datatables.net/select/1.3.1/js/dataTables.select.js" ></script>--}}
{{--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js" ></script>--}}
{{--<script src="https://cdn.datatables.net/responsive/2.2.5/js/dataTables.responsive.js" ></script>--}}
{{--<script src="{{ asset('js/dataTables.altEditor.js') }}" defer></script>--}}
{{--<script>--}}
{{--    $(document).ready(function () {--}}
{{--        const columnDefs = [--}}
{{--            {--}}
{{--                data: 'Products["image"]',--}}
{{--                title: 'Products',--}}
{{--                type: 'image',--}}
{{--            },--}}
{{--            {--}}
{{--                data: 'Total price',--}}
{{--                title: 'Total price',--}}
{{--            },--}}
{{--            {--}}
{{--                data: 'Order date',--}}
{{--                title: 'Order date',--}}
{{--            },--}}
{{--        ];--}}
{{--        myTable = $('.dataTable').DataTable({--}}
{{--            "sPaginationType": "full_numbers",--}}
{{--            data: @json($orders),--}}
{{--            columns: columnDefs,--}}
{{--            dom: 'Bfrtip',        // Needs button container--}}
{{--            select: 'single',--}}
{{--            responsive: true,--}}
{{--            altEditor: false,     // Enable altEditor--}}
{{--            buttons: [],--}}
{{--        })--}}
{{--    })--}}

{{--</script>--}}
</body>
</html>
