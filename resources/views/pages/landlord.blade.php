@extends('layouts.entrace')
@section('content')
<div class="houseInfo">
    <h1 class ="ui header">houseinfo</h1>
</div>
<div class="tenant">
    <div class="ui container">
        <h1 class ="ui header">房客資訊</h1>

    </div>
</div>

<div class="passfix">
    <div class="ui container">
        <h2 class="ui header">密碼修改</h2>
        {{Form::open(['class' => 'ui form','route' => 'landlord.fixpass','id' => 'fixpass','method' => 'patch'])}}
        <div class="field">
            <div class="ui labeled input">
                {{Form::label('old_password','原本密碼',['class' => 'ui label'])}}
                {{Form::password('old_password')}}
            </div>
        </div>
        <div class="field">
            <div class="ui labeled input">
                {{Form::label('new_password','修改密碼',['class' => 'ui label'])}}
                {{Form::password('new_password')}}
            </div>
        </div>
        <div class="field">
            <div class="ui labeled input">
                {{Form::label('new_pass2','確認新碼',['class' => 'ui label'])}}
                {{Form::password('new_pass2')}}
            </div>
        </div>
        <div class="ui error message"><ul class="list"></ul></div>
        {{Form::submit('送出',['class' => 'ui right floated positive submit button'])}}
        {{Form::close()}}
    </div>
</div>

<script>
    $('.houseInfo').transition();
    // $('.tenant').transition();
    $('.passfix').transition();

    /**
     * 密碼修改
     * 檢查輸入的新密碼是否相同 by semantic-ui
     */
    $('.ui.form')
    .form({
        on: 'blur',
        fields: {
        match: {
            identifier  : 'new_pass2',
            rules: [
            {
                type   : 'match[new_password]',
                prompt : '新密碼輸入錯誤'
            }
            ]
        },
        different: {
            identifier  : 'old_password',
            rules: [{
                type    : 'different[new_password]',
                prompt  : '新密碼與舊密碼相同'
            }]
        }
        }
    });

    @if (str_contains(Session::get('status'), '0'))
        alertify.error("舊密碼輸入錯誤");
    @elseif(str_contains(Session::get('status'),'1'))
        alertify.success("新密碼更改成功");
    @endif
    /**
     * END
     */
</script>
@endsection
@section('quotes')
@endsection

