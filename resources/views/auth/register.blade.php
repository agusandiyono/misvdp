@extends('auth.auth')

@section('content')
<div class="content">
<form class="register-form" method="POST" action="{{ route('register') }}">
<h3 class="font-green">Daftar</h3>
<p class="hint"> Isikan data berikut ini: </p>
    {{ csrf_field() }}
    <div class="form-group">
        <label class="control-label visible-ie8 visible-ie9">Nama Lengkap</label>
        <!-- <input class="form-control placeholder-no-fix" type="text" placeholder="Full Name" name="fullname" />  -->
        <input id="name" type="text" class="form-control placeholder-no-fix" name="name" placeholder="Nama Lengkap" value="{{ old('name') }}" required autofocus>
            @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
    </div>
    <div class="form-group">
        <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
        <label class="control-label visible-ie8 visible-ie9">Username</label>
        <!-- <input class="form-control placeholder-no-fix" type="text" placeholder="Username" name="username" />  -->
        <input id="username" type="text" class="form-control placeholder-no-fix" name="username" placeholder="Username" value="{{ old('username') }}" required>

            @if ($errors->has('username'))
                <span class="help-block">
                    <strong>{{ $errors->first('username') }}</strong>
                </span>
            @endif
    </div>  
    <div class="form-group">
        <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
        <label class="control-label visible-ie8 visible-ie9">Email</label>
        <!-- <input class="form-control placeholder-no-fix" type="text" placeholder="Email" name="email" />  -->
        <input id="email" type="email" class="form-control placeholder-no-fix" name="email" placeholder="Email" value="{{ old('email') }}" required>

            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
    </div> 

    <div class="form-group">
        <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
        <label class="control-label visible-ie8 visible-ie9">Password</label>
        <!-- <input class="form-control placeholder-no-fix" type="text" placeholder="Email" name="email" />  -->
        <input id="password" type="password" class="form-control placeholder-no-fix" name="password" placeholder="Password" value="{{ old('password') }}" required>

            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
    </div>  

    <div class="form-group">
        <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
        <label class="control-label visible-ie8 visible-ie9">Password</label>        
        <input id="password-confirm" type="password" class="form-control placeholder-no-fix" placeholder="Confirm Password" name="password_confirmation" required>
    </div>

    <div class="form-group">
        <label class="control-label visible-ie8 visible-ie9">Operator</label>
        <select name="country" class="form-control">
            <option value="">Silahkan Pilih</option>
            <option value="4">Operator Kabupaten</option>
            <option value="5">Operator Kecamatan</option>
            <option value="3">Operator Desa</option>
        </select>
    </div>
           
    <div class="form-actions">
        <!-- <input type="hidden" name="role[]" id="role[]" value="3"> -->
        <a href="{{ route('login') }}" type="button" class="btn green btn-outline">Back</a>
        <button type="submit" class="btn btn-success uppercase pull-right">Submit</button>
    </div>
</form>
</div>        
@endsection
