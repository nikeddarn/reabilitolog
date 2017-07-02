@extends('layouts/common')

@section('content')

    <!-- Page Content -->
    <div id="music" class="container">

        <!-- Breadcrumbs -->
        <div class="row top-buffer">
            <div class="col-lg-12">
                <ol class="breadcrumb">
                    <li><a href="/">Home</a>
                    </li>
                    <li class="active">Order</li>
                </ol>
            </div>
        </div>

        <!-- Form -->
        <div class="row">
            <div class="col-md-8">
                <h3>Заказать массаж</h3>
                <form action="/order" method="post" name="sentMessage" id="contactForm" novalidate>

                    {{ csrf_field() }}

                    <div class="control-group form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <div class="controls">
                            <label>{{ $form['name']['title'] }}</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="{{ $form['name']['holder'] }}" value="{{ old('name') }}" required>
                            @if ($errors->has('name'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                            @endif
                            <p class="help-block"></p>
                        </div>
                    </div>

                    <div class="control-group form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                        <div class="controls">
                            <label>{{ $form['phone']['title'] }}</label>
                            <input name="phone" type="tel" class="form-control" id="phone" placeholder="{{ $form['phone']['holder'] }}" value="{{ old('phone') }}" required>
                            @if ($errors->has('phone'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="control-group form-group">
                        <div class="controls">
                            <label>{{ $form['message']['title'] }}</label>
                            <textarea name="message" rows="10" cols="100" class="form-control" id="message" placeholder="{{ $form['message']['holder'] }}" maxlength="255" style="resize:none"></textarea>
                        </div>
                    </div>

                    <!-- For success/fail messages -->
                    <button type="submit" class="btn btn-primary">{{ $form['submit'] }}</button>
                </form>
            </div>

        </div>

    </div>
@endsection

@section('description')
    <meta name="description" content="{{ trans('meta.description.order.form') }}">
@endsection

@section('title')
    <title>{{ trans('meta.title.order.form') }}</title>
@endsection