@include('layouts.header')
        <div class="ui container">
            <h1 class="ui header">房東登入入口</h1>
                {{Form::open(['class' => 'ui form','url' => 'login', 'method' => 'post'])}}
                    <div class="field">
                        {{Form::label('user_account','帳號')}}
                        {{Form::text('user_account',null,['required'])}}
                    </div>
                    <div class="field">
                        {{Form::label('password','密碼')}}
                        {{Form::password('password')}}
                    </div>
                    {{Form::submit('登入',['class' => 'ui right floated primary submit button'])}}
                {{Form::close()}}
        </div>
    </body>
</html>


