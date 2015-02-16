@extends("layouts.default")

@section("content")
{{ Form::open(["action"=>"UserController@postLogin", 'class'=>'form']) }}

<center>

    <div class="signin-box">
        <h1>Sign in</h1>
        <div class="form1 form-group">
            {{ Form::text('email', null, array('class'=>'form-control', 'placeholder'=>'Email')) }}
        </div>

        <div class="form1 form-group">
            {{ Form::password('password', array('class'=>'form-control', 'placeholder'=>'Password')) }}
        </div>

        <div class="form2 form-group">
            {{ Form::submit('Sign In', array('class'=>'btn btn-primary btn-block'))}}

        </div>
        <a class="pull-left" href="index.php"><span>Forget password?</span></a>
        <br>
    </div>
</center>

{{ Form::close()}}
@stop