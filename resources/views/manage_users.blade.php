@include('partials.header')

<div class="row">

    <div class="col-sm-6 col-sm-offset-3" style="border-bottom: 1px solid black; margin-bottom: 10px;">
        <form class="form-inline" method="post" action="check_roles">
        <div class="form-group">
            <input type="email" class="form-control" name="user" value="patweru2@gmail.com" disabled>
        </div>
        <div class="form-group ">
            <select name="price_type" required style="padding:6px; width: 200px; border: 1px solid #DFDFDF;">
                <option value="">Select Role</option>
                <option value="roleA">RoleA</option>
                <option value="roleB">RoleB</option>
            </select>
            </div>
            <input type="text" class="form-control hidden" name="username" value="patweru2@gmail.com" >
            {{ Form::token() }}
        <button type="submit" class="btn btn-default">Update</button>
        </form>
    </div>

</div>



@include('partials.footer')