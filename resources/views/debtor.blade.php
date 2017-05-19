@include('partials.header')

<div class="container">
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
            @if (Session::has('message'))
                <div class="alert alert-info">{{ Session::get('message') }}</div>
            @endif
        </div>
    </div>
</div>

{!! Form::open(array('route' => 'check_debts','enctype' => 'multipart/form-data')) !!}

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
        <label for="cp_message">Customer Name <span class="text-red">*</span></label>
        <div class="form-group {{ ($errors->has('customer_name')) ? 'has-error' : '' }}">
            <input class="form-control" placeholder="" name="customer_name" type="text" value="{{ old('customer_name') }}">
            {!! ($errors->has('customer_name') ? $errors->first('customer_name', '<p class="text-danger">:message</p>') : '') !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
         <label for="cp_message">Load Issue Date <span class="text-red">*</span></label>
        <div class="form-group {{ ($errors->has('loan_issue_date')) ? 'has-error' : '' }}">
            <input class="form-control" placeholder="" name="loan_issue_date" type="text" value="{{ old('loan_issue_date') }}">
            {!! ($errors->has('loan_issue_date') ? $errors->first('loan_issue_date', '<p class="text-danger">:message</p>') : '') !!}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
        <label for="cp_message">Customer ID <span class="text-red">*</span></label>
        <div class="form-group {{ ($errors->has('customer_id')) ? 'has-error' : '' }}">
            <input class="form-control" placeholder="" name="customer_id" type="text" value="{{ old('customer_id') }}">
            {!! ($errors->has('customer_id') ? $errors->first('customer_id', '<p class="text-danger">:message</p>') : '') !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
         <label for="cp_message">Loan Due Date <span class="text-red">*</span></label>
        <div class="form-group {{ ($errors->has('loan_due_date')) ? 'has-error' : '' }}">
            <input class="form-control" placeholder="" name="loan_due_date" type="text" value="{{ old('loan_due_date') }}">
            {!! ($errors->has('loan_due_date') ? $errors->first('loan_due_date', '<p class="text-danger">:message</p>') : '') !!}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
        <label for="cp_message">Customer Account Number <span class="text-red">*</span></label>
        <div class="form-group {{ ($errors->has('account_number')) ? 'has-error' : '' }}">
            <input class="form-control" placeholder="" name="account_number" type="text" value="{{ old('account_number') }}">
            {!! ($errors->has('account_number') ? $errors->first('account_number', '<p class="text-danger">:message</p>') : '') !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
         <label for="cp_message">Customer Mobile Number <span class="text-red">*</span></label>
        <div class="form-group {{ ($errors->has('mobile_number')) ? 'has-error' : '' }}">
            <input class="form-control" placeholder="" name="mobile_number" type="text" value="{{ old('mobile_number') }}">
            {!! ($errors->has('mobile_number') ? $errors->first('mobile_number', '<p class="text-danger">:message</p>') : '') !!}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
        <label for="cp_message">Loan Amount <span class="text-red">*</span></label>
        <div class="form-group {{ ($errors->has('loan_amount')) ? 'has-error' : '' }}">
            <input class="form-control" placeholder="" name="loan_amount" type="text" value="{{ old('loan_amount') }}">
            {!! ($errors->has('loan_amount') ? $errors->first('loan_amount', '<p class="text-danger">:message</p>') : '') !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
         <label for="cp_message">National ID <span class="text-red">*</span></label>
        <div class="form-group {{ ($errors->has('national_id')) ? 'has-error' : '' }}">
            <input class="form-control" placeholder="" name="national_id" type="text" value="{{ old('national_id') }}">
            {!! ($errors->has('national_id') ? $errors->first('national_id', '<p class="text-danger">:message</p>') : '') !!}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
        <label for="cp_message">Loan Balance <span class="text-red">*</span></label>
        <div class="form-group {{ ($errors->has('loan_balance')) ? 'has-error' : '' }}">
            <input class="form-control" placeholder="" name="loan_balance" type="text" value="{{ old('loan_balance') }}">
            {!! ($errors->has('loan_balance') ? $errors->first('loan_balance', '<p class="text-danger">:message</p>') : '') !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
         <label for="cp_message">Batch Number <span class="text-red">*</span></label>
        <div class="form-group {{ ($errors->has('batch_number')) ? 'has-error' : '' }}">
            <input class="form-control" placeholder="" name="batch_number" type="text" value="{{ old('batch_number') }}">
            {!! ($errors->has('batch_number') ? $errors->first('batch_number', '<p class="text-danger">:message</p>') : '') !!}
        </div>
    </div>
</div>




{{ Form::token() }}
<input class="btn btn-lg btn-primary btn-block" type="submit" value="ADD CLIENT !">

{!! Form::close() !!}



@include('partials.footer')