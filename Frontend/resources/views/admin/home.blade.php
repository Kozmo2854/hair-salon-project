<!DOCTYPE html>
<html dir="ltr" lang="en-US">
@include('head')
<body>
{{--<div id="wrapper" class="wrapper clearfix">--}}
@include('header')
<div class="container">
{{--    <img src='http://demo.zytheme.com/hairy/assets/images/shop/grid/4.jpg' alt='product image>'--}}

    <table cellpadding="0" cellspacing="0" border="0" class="dataTable table table-striped" id="example">

    </table>

</div>
<script src="https://code.jquery.com/jquery-3.0.0.js" ></script>
<script src="https://code.jquery.com/jquery-migrate-3.3.0.js" ></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js" ></script>
<script src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.js" ></script>
<script src="https://cdn.datatables.net/select/1.3.1/js/dataTables.select.js" ></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js" ></script>
<script src="https://cdn.datatables.net/responsive/2.2.5/js/dataTables.responsive.js" ></script>
<script src="{{ asset('js/dataTables.altEditor.js') }}" defer></script>
<script src="{{ asset('js/createTable.js')}}" defer></script>
{{--</div>--}}
</body>
</html>
