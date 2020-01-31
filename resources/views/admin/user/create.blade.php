@extends('admin.layouts.main')
@section('content')
<section class="content">
    <div class="row">
        <div class="col-lg-10 col-xs-6">
            <div class="box">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">增加用户</h3>
                    </div>
                    <form role="form" action="/admin/user/store" method="POST">
                        {{csrf_field()}}
                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">用户名</label>
                                <input type="text" class="form-control" name="name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">密码</label>
                                <input type="password" class="form-control" placeholder="Password" name="password">
                            </div>
                        </div>
                        @include('admin.layouts.error')
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">提交</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection