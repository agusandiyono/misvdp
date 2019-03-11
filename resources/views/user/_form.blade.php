<div class="form-body">
    <!-- Nama Form Input -->
    <div class="form-group @if ($errors->has('name')) has-error @endif">
      <label class="control-label col-md-3">Nama Lengkap
          <span class="required"> * </span>
      </label>
      <div class="col-md-6">
        {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nama Lengkap', 'required']) }}
      </div>
      @if ($errors->has('name')) <p class="help-block">{{ $errors->first('name') }}</p> @endif
    </div>

    <!-- Username Form Input -->
    <div class="form-group @if ($errors->has('username')) has-error @endif">
      <label class="control-label col-md-3">Username
          <span class="required"> * </span>
      </label>
      <div class="col-md-6">
        {{ Form::text('username', null, ['class' => 'form-control', 'placeholder' => 'Username', 'required']) }}
      </div>
      @if ($errors->has('username')) <p class="help-block">{{ $errors->first('username') }}</p> @endif
    </div>

    <!-- Email Form Input -->
    <div class="form-group @if ($errors->has('email')) has-error @endif">
      <label class="control-label col-md-3">Email
          <span class="required"> * </span>
      </label>
      <div class="col-md-6">
        {{ Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Email', 'required']) }}
      </div>
      @if ($errors->has('email')) <p class="help-block">{{ $errors->first('email') }}</p> @endif
    </div>

    <!-- password Form Input -->
    <div class="form-group @if ($errors->has('email')) has-error @endif">
      <label class="control-label col-md-3">Password
          <span class="required"> * </span>
      </label>
      <div class="col-md-6">
        {{ Form::text('password', null, ['class' => 'form-control', 'placeholder' => 'Password', 'required']) }}
      </div>
      @if ($errors->has('password')) <p class="help-block">{{ $errors->first('password') }}</p> @endif
    </div>


    <!-- Roles Form Input -->
    <div class="form-group @if ($errors->has('email')) has-error @endif">
      <label class="control-label col-md-3">Roles
          <span class="required"> * </span>
      </label>
      <div class="col-md-6">
      {!! Form::select('roles[]', $roles, isset($user) ? $user->roles->pluck('id')->toArray() : null,  ['class' => 'form-control', 'multiple']) !!}
      </div>
      @if ($errors->has('roles')) <p class="help-block">{{ $errors->first('roles') }}</p> @endif
    </div>

    <!-- Permissions -->
    @if(isset($user))
        @include('shared._permissions', ['closed' => 'true', 'model' => $user ])
    @endif
</div>