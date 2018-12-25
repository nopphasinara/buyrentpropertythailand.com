@extends('layout.main')
@section('title') @if( ! empty($title)) {{ $title }} | @endif @parent @endsection

@section('main')

    <div class="container">

        <div id="wrapper">
            @include('admin.sidebar_menu')

            <div id="page-wrapper">
                @if( ! empty($title))
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header"> {{ $title }}  </h1>
                        </div> <!-- /.col-lg-12 -->
                    </div> <!-- /.row -->
                @endif
                @include('admin.flash_msg')

                <div class="row">
                    <div class="col-sm-8 col-sm-offset-1 col-xs-12">

                        {{ Form::open(['class' => 'form-horizontal']) }}

                        <div class="form-group {{ $errors->has('country_name')? 'has-error':'' }}">
                            <label for="country_name" class="col-sm-4 control-label">@lang('app.country_name')</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="country_name" value="{{ old('country_name')? old('country_name') : $country->country_name }}" name="country_name" placeholder="@lang('app.country_name')">
                                {!! $errors->has('country_name')? '<p class="help-block">'.$errors->first('country_name').'</p>':'' !!}
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('country_code')? 'has-error':'' }}">
                            <label for="country_code" class="col-sm-4 control-label">@lang('app.country_code')</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="country_code" value="{{ old('country_code')? old('country_code') : $country->country_code }}" name="country_code" placeholder="@lang('app.country_code')">
                                {!! $errors->has('country_code')? '<p class="help-block">'.$errors->first('country_code').'</p>':'' !!}
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-sm-offset-4 col-sm-8">
                                <button type="submit" class="btn btn-primary">@lang('app.save_button_label')</button>
                            </div>
                        </div>
                        {{ Form::close() }}
                    </div>
                </div>

            </div>   <!-- /#page-wrapper -->

        </div>   <!-- /#wrapper -->


    </div> <!-- /#container -->
@endsection
