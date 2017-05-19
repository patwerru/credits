@include('partials.header')

    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Jquery DataTable | Bootstrap Based Admin Template - Material Design</title>
    <!-- Favicon-->
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="data/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
    <!-- JQuery DataTable Css -->
    <link href="data/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">

    <!-- Custom Css -->
    <link href="data/css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="data/css/themes/all-themes.css" rel="stylesheet" />



<div class="container">

    <!-- Exportable Table -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="body">
                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>ID Number</th>
                        <th>Phone Number</th>
                        <th>Date Awarded</th>
                        <th>Date Due</th>
                        <th>Total Amount</th>
                        <th>Loan Balance</th>
                    </tr>
                    </thead>

                    <tbody>
                    @if(count($profiles)>0)

                        @foreach($profiles as $profile)
                            <tr>
                            <td>{{$profile->cust_name}}</td>
                            <td>{{$profile->cust_id}}</td>
                            <td>0{{$profile->cust_mobile_number}}</td>
                            <td>{{$profile->loan_issue_date}}</td>
                            <td>{{$profile->loan_due_dat}}</td>
                            <td>{{$profile->loan_amount}}</td>
                            <td>{{$profile->loan_balance}}</td>
                            </tr>
                            @endforeach
                        @endif
                    {{--<tr>--}}
                        {{--<td>Michael Bruce</td>--}}
                        {{--<td>Javascript Developer</td>--}}
                        {{--<td>Singapore</td>--}}
                        {{--<td>29</td>--}}
                        {{--<td>2011/06/27</td>--}}
                        {{--<td>$183,000</td>--}}
                        {{--<td>$183,000</td>--}}
                    {{--</tr>--}}

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>




@include('partials.footer')
<script src="data/plugins/bootstrap-select/js/bootstrap-select.js"></script>
<script src="data/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
<script src="data/plugins/node-waves/waves.js"></script>
<script src="data/plugins/jquery-datatable/jquery.dataTables.js"></script>
<script src="data/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
<script src="data/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
<script src="data/plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
<script src="data/plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
<script src="data/plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
<script src="data/plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
<script src="data/plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
<script src="data/plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>
<script src="data/js//admin.js"></script>
<script src="data/js//pages/tables/jquery-datatable.js"></script>