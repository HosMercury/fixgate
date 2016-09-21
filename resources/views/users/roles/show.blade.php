@extends('theme.index')
@section('content')
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <br>

            <div class="box ">
                <div class="box-header with-border">
                    <h3 class="box-title">Role #{{$role->id}}</h3>
                    <a href="/auth/register" class="btn btn-sm btn-success pull-right">
                        <i class="fa fa-fw fa-plus"></i> New role</a>
                </div>

                <!-- /.box-header -->
                <div class="box-body">
                    <div class="col-xs-11 box box-widget">
                        <h3>{{$role->name}}</h3>
                        @include('users.roles.partials.permissions')
                    </div>

                </div>
                <!-- /.box-body -->
            </div>
        </div>
    </div>
@stop
@section('scripts')
    @include('users.roles.partials.scripts')
@stop