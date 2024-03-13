<!DOCTYPE html>
<html dir="ltr" lang="en-US">
@include('head')
<body>
{{--<div class="container">--}}
{{--    @include('header')--}}
{{--    <div class="bg-section">--}}
{{--        <img src="http://demo.zytheme.com/hairy/assets/images/page-titles/3.jpg" alt="Background"/>--}}

{{--        <table cellpadding="0" cellspacing="0" border="0" class="dataTable table table-striped" id="example">--}}

{{--        </table>--}}
{{--    </div>--}}

{{--</div>--}}
<div id="wrapper" class="wrapper clearfix">
    @include('header')
    <section id="page-title" class="page-title bg-overlay bg-overlay-dark bg-parallax">
        <div class="bg-section">
            <img src="http://demo.zytheme.com/hairy/assets/images/page-titles/3.jpg" alt="Background"/>
        </div>
        <div class="container page-title-logs title">

            <table cellpadding="0" cellspacing="0" border="0" class="dataTable table table-striped" id="example">

            </table>

        </div>
    </section>
    <footer id="footer" class="footer footer-light">
        <!-- Copyrights
        ============================================= -->
        <div class="footer--copyright">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 text--center">
                        <span>&copy; 2017, All rights reserved.</span>
                    </div>
                </div>
            </div>
            <!-- .container end -->
        </div>
    </footer>
</div>
<script src="https://code.jquery.com/jquery-3.0.0.js"></script>
<script src="https://code.jquery.com/jquery-migrate-3.3.0.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.js"></script>
<script src="https://cdn.datatables.net/select/1.3.1/js/dataTables.select.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.5/js/dataTables.responsive.js"></script>
<script src="{{ asset('js/dataTables.altEditor.js') }}" defer></script>
<script src="{{ asset('js/createLogTable.js')}}" defer></script>
<script src="{{ asset('js/functions.js')}}" defer></script>
</body>
</html>
