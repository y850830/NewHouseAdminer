@include('layouts.header')
<div class="container">
  <div class="ui four item inverted menu">
    <a class="item">租屋資訊</a>
    <a class="item">房客資訊</a>
    <a class="item">密碼修改</a>
    {{link_to_route('logout','登出',null,['class' => 'item'])}}
  </div>
  @section('content')
  @show
</div>
@section('quotes')
@stop
</body>
</html>