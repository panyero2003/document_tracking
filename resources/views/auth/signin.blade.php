@extends('layouts.app')

@section('content')
<link href="{{ asset('css/background.css') }}" rel="stylesheet">
<!-- <div>
    <img src="{{URL::asset('/images/ns.png')}}" alt="profile Pic" align="center" height="100" width="100">
</div> -->
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">

            

            <div class="panel panel-default">
                <div class="panel-heading">Login</div>
                <div align = "center">
                <a href="{{URL('my-search_prs')}}">{!! Html::image('images/ns.png') !!}</a>
            </div>
                <div class="panel-body" >

                    <!-- <form class="form-group" role="form" method="POST" action="{{ route('signin') }}"> -->

                    <form class="form-horizontal" role="form" method="POST" action="{{ route('signin') }}">
                        {{ csrf_field() }}
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-sign-in"></i> Login
                                </button>

                               
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="footer navbar-fixed-bottom">

    <div class="container">

        <div align="center" class="text-warning">
            
        <hr />

            <?php
            // $copyYear = 2019; // Set your website start date
            // $curYear = date('Y'); // Keeps the second year updated
            // echo $copyYear . (($copyYear != $curYear) ? '-' . $curYear : '');
            ?> © 2019 Copyright: Provincial Government of Northern Samar - Management Information System Office (MISO).
            <!-- <p>Email Address: <a href="mailto:panyero2003@yahoo.com">panyero2003@yahoo.com</a>.</p> -->
        </div>
    </div>
    <br>
</div>

</div>


@endsection


