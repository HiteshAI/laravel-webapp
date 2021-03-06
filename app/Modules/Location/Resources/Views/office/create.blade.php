@extends('admin::layout')
@section('title') Create Office Details @endsection
@section('breadcrumb')
    <li><a href="{{route('office.index')}}">Districts</a></li>
    <li class="active">Create</li>
@endsection

@section('content')
    <div class="row">
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-flat shadow-z-2">
                    <div class="panel-heading">
                        <div class="heading-elements">
                            <ul class="icons-list">
                                <li>
                                    <a href="{{route('office.index')}}">
                                        <button type="button" class="btn btn-info btn-icon btn-rounded legitRipple">
                                            <i class=" icon-arrow-left52"></i>
                                            <span class="legitRipple-ripple"></span>
                                        </button>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <h5 class="panel-title">Create Office Details</h5>

                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                {!! Form::open(['route' => 'office.store','method'=>'POST','class'=>'form-horizontal','role'=>'form']) !!}

                                <fieldset>

                                    <div class="form-group">
                                        {!! Form::label('name', 'Name', ['class' => 'col-md-2 control-label required_label']) !!}
                                        <div class="col-md-10">
                                            {!! Form::text('name', $value = null, ['id'=>'name','placeholder'=>'Name','class'=>'form-control']) !!}
                                            <span class="text-danger">{{ $errors->first('name') }}</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('office_head', 'Office Head', ['class' => 'col-md-2 control-label required_label']) !!}
                                        <div class="col-md-10">
                                            {!! Form::text('office_head', $value = null, ['id'=>'office_head','placeholder'=>'Office Head','class'=>'form-control']) !!}
                                            <span class="text-danger">{{ $errors->first('office_head') }}</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('established_date', 'Established Date', ['class' => 'col-md-2 control-label required_label']) !!}
                                        <div class="col-md-10">
                                            {!! Form::text('established_date', $value = null, ['id'=>'established_date','placeholder'=>'Established Date','class'=>'form-control datepicker']) !!}
                                            <span class="text-danger">{{ $errors->first('established_date') }}</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('address', 'Address', ['class' => 'col-md-2 control-label required_label']) !!}
                                        <div class="col-md-10">
                                            {!! Form::text('address', $value = null, ['id'=>'address','placeholder'=>'Address','class'=>'form-control']) !!}
                                            <span class="text-danger">{{ $errors->first('address') }}</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('phone_number', 'Phone Number', ['class' => 'col-md-2 control-label required_label']) !!}
                                        <div class="col-md-10">
                                            {!! Form::text('phone_number', $value = null, ['id'=>'phone_number','placeholder'=>'Phone Number','class'=>'form-control']) !!}
                                            <span class="text-danger">{{ $errors->first('phone_number') }}</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('fax_number', 'Fax', ['class' => 'col-md-2 control-label required_label']) !!}
                                        <div class="col-md-10">
                                            {!! Form::text('fax_number', $value = null, ['id'=>'fax_number','placeholder'=>'Fax','class'=>'form-control']) !!}
                                            <span class="text-danger">{{ $errors->first('fax_number') }}</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('email', 'Email', ['class' => 'col-md-2 control-label required_label']) !!}
                                        <div class="col-md-10">
                                            {!! Form::text('email', $value = null, ['id'=>'email','placeholder'=>'Email','class'=>'form-control']) !!}
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('office_head_number', 'Number Of Office Head', ['class' => 'col-md-2 control-label required_label']) !!}
                                        <div class="col-md-10">
                                            {!! Form::text('office_head_number', $value = null, ['id'=>'office_head_number','placeholder'=>'Number Of Office Head','class'=>'form-control']) !!}
                                            <span class="text-danger">{{ $errors->first('office_head_number') }}</span>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <div class="col-md-10 col-md-offset-2">
                                            {!! Form::submit('Save',['class'=>'btn btn-success btn-rounded legitRipple']) !!}
                                            <a href="{{ route('office.index') }}">
                                                {!! Form::button('Cancel',['class'=>'btn btn-warning btn-rounded legitRipple']) !!}
                                            </a>
                                        </div>

                                    </div>


                                </fieldset>
                                <!-- /.col-lg-6 (nested) -->

                                {!! Form::close() !!}
                            </div>
                            <!-- /.col-lg-6 (nested) -->
                        </div>
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-6 -->
        </div>
    </div>
    <!-- /.row -->

@stop
