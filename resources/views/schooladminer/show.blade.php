@extends('layouts.master')
@section('content')
<div class="col-xs-3">
<div class="panel-group" id="accordion">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion" 
				   href="#collapseOne">
					租屋資訊
				</a>
			</h4>
		</div>
		<div id="collapseOne" class="panel-collapse collapse">
			<div class="panel-body">
                <?php $page=1 ?>
				<a href="{{route('Administrator.show',$page)}}" class="list-group-item list-group-item-action">管理房屋資訊</a>
				<a href="{{route('Administrator.show',$page)}}" class="list-group-item list-group-item-action">管理房東帳號</a>
				<a href="{{route('Administrator.show',$page)}}" class="list-group-item list-group-item-action">管理房屋座標</a>
				<a href="{{route('Administrator.show',$page)}}" class="list-group-item list-group-item-action">管理學生資訊</a>
			</div>
		</div>
	</div>
    	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion" 
				   href="#collapseTwo">
					交通安全
				</a>
			</h4>
		</div>
		<div id="collapseTwo" class="panel-collapse collapse">
			<div class="panel-body">
                <?php $page=2 ?>
				<a href="{{route('Administrator.show',$page)}}" class="list-group-item list-group-item-action">管理交通事件選項</a>
				<a href="{{route('Administrator.show',$page)}}" class="list-group-item list-group-item-action">管理交通安全路段</a>
				<a href="{{route('Administrator.show',$page)}}" class="list-group-item list-group-item-action">管理交通事件</a>
			</div>
		</div>
	</div>
    	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion" 
				   href="#collapsethree">
					校外實習
				</a>
			</h4>
		</div>
		<div id="collapsethree" class="panel-collapse collapse">
			<div class="panel-body">
                <?php $page=3 ?>
                <a href="{{route('Administrator.show',$page)}}" class="list-group-item list-group-item-action">新增校外實習</a>
				<a href="{{route('Administrator.show',$page)}}" class="list-group-item list-group-item-action">管理校外實習</a>
			</div>
		</div>
	</div>
    	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion" 
				   href="#collapsefour">
					服務學習
				</a>
			</h4>
		</div>
		<div id="collapsefour" class="panel-collapse collapse">
			<div class="panel-body">
                <?php $page=4 ?>
                <a href="{{route('Administrator.show',$page)}}" class="list-group-item list-group-item-action">新增服務學習</a>
				<a href="{{route('Administrator.show',$page)}}" class="list-group-item list-group-item-action">管理服務學習</a>
			</div>
		</div>
	</div>
    	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion" 
				   href="#collapsefive">
					生活e點靈
				</a>
			</h4>
		</div>
		<div id="collapsefive" class="panel-collapse collapse">
			<div class="panel-body">
                <?php $page=5 ?>
                <a href="{{route('Administrator.show',$page)}}" class="list-group-item list-group-item-action">新增校園美食</a>
				<a href="{{route('Administrator.show',$page)}}" class="list-group-item list-group-item-action">管理校園美食</a>
			</div>
		</div>
	</div>
    	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion" 
				   href="#collapsesix">
					網站管理
				</a>
			</h4>
		</div>
		<div id="collapsesix" class="panel-collapse collapse">
			<div class="panel-body">
                <?php $page=6 ?>
                <a href="{{route('Administrator.show',$page)}}" class="list-group-item list-group-item-action">新增公告資訊</a>
				<a href="{{route('Administrator.show',$page)}}" class="list-group-item list-group-item-action">新增文件下載</a>
				<a href="{{route('Administrator.show',$page)}}" class="list-group-item list-group-item-action">管理公告資訊</a>
				<a href="{{route('Administrator.show',$page)}}" class="list-group-item list-group-item-action">管理文件下載</a>
			</div>
		</div>
	</div>
    	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion" 
				   href="#collapseseven">
					系統設定
				</a>
			</h4>
		</div>
		<div id="collapseseven" class="panel-collapse collapse">
			<div class="panel-body">
                <?php $page=7 ?>
                <a href="{{route('Administrator.show',$page)}}" class="list-group-item list-group-item-action">圖示管理</a>
				<a href="{{route('Administrator.show',$page)}}" class="list-group-item list-group-item-action">子站台維護人員</a>
				<a href="{{route('Administrator.show',$page)}}" class="list-group-item list-group-item-action">管理者資料維護</a>
				<a href="{{route('Administrator.show',$page)}}" class="list-group-item list-group-item-action">租屋網標籤功能管理</a>
			</div>
		</div>
	</div>
    	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion" 
				   href="#collapseeight">
					回報系統
				</a>
			</h4>
		</div>
		<div id="collapseeight" class="panel-collapse collapse">
			<div class="panel-body">
                <?php $page=8 ?>
				<a href="{{route('Administrator.show',$page)}}" class="list-group-item list-group-item-action">問題回報</a>
                <a href="{{route('Administrator.show',$page)}}" class="list-group-item list-group-item-action">回報清單</a>
			</div>
		</div>
	</div>
</div>
</div>
<div class="col-xs-9">
        {{--房屋資訊--}}
        @if($pages == 1)
        <div class="col-xs-12">
    <br>
    <center>
        <div>
            <h4>關鍵字</h4>
        </div>
    </center>
    <br>
    {{Form::open(['role' => 'form', 'id' => 'filterForm'])}}
        <div class="col-xs-2">
            {{Form::label(null,'房東姓名:',['class' => 'control-label'])}}
        </div>
        <div class="col-xs-3">       
            {{Form::text('name',null,['class' => 'form-control'])}}
        </div>
        <div class="col-xs-2">  
            {{Form::label(null,'房東帳號:',['class' => 'control-label'])}}
        </div>
        <div class="col-xs-3">  
            {{Form::text('account',null,['class' => 'form-control'])}}
        </div>
        <div class="col-xs-2">
            {{Form::button('篩選',['class'=>'btn btn-block btn-primary'])}}
        </div>
    {{ Form::close() }}
    <br>
    <br>
    <br>
    <div>
        <div class="col-xs-4">      
        </div>
        <div class="col-xs-2">      
            <button type="button" class="btn btn-primary btn-xs">新增</button>
        </div>
        <div class="col-xs-2">      
            <button type="button" class="btn btn-primary btn-xs">匯出Excel</button>
        </div>
        <div class="col-xs-4"> 
        </div>
    </div>
    </div>
            <div>
                <table class="table">
                <thead class="thead-inverse">
                    <tr>
                    <th>#</th>
                    <th>學校代碼</th>
                    <th>房東姓名</th>
                    <th>房東帳號</th>
                    <th>房東email</th>
                    <th>房東電話</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
                </table>
            </div>

            <div>
                <h4>關鍵字</h4>
            </div>
            <div>
                <table class="table">
                <thead class="thead-inverse">
                    <tr>
                    <th>#</th>
                    <th>編號</th>
                    <th>地址</th>
                    <th>類型</th>
                    <th>對應房東</th>
                    <th>修改</th>
                    <th>狀態</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
                </table>
            </div>

            <div>
                <h4>關鍵字</h4>
            </div>
            <div>
                <table class="table">
                <thead class="thead-inverse">
                    <tr>
                    <th>#</th>
                    <th>編號</th>
                    <th>地址</th>
                    <th>經度</th>
                    <th>緯度</th>
                    <th>修改</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
                </table>
            </div>

            <div>
                <h4>關鍵字</h4>
            </div>
            <div>
                <table class="table">
                <thead class="thead-inverse">
                    <tr>
                    <th>#</th>
                    <th>學號</th>
                    <th>姓名</th>
                    <th>手機</th>
                    <th>房東姓名</th>
                    <th>地址</th>
                    <th>房號</th>
                    <th>合約開始時間</th>
                    <th>合約結束時間</th>
                    <th>修改</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
                </table>
            </div>
        @endif
        {{-- 交通安全 --}}
        @if($pages == 2)
            <div>
                <h4>關鍵字</h4>
            </div>
            <div>
                <table class="table">
                <thead class="thead-inverse">
                    <tr>
                    <th>編號</th>
                    <th>發生日期</th>
                    <th>發生時間</th>
                    <th>發生地點</th>
                    <th>事故人數</th>
                    <th>修改</th>
                    <th>刪除</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
                </table>
            </div>

            <div>
                <h4>關鍵字</h4>
            </div>
            <div>
                <table class="table">
                <thead class="thead-inverse">
                    <tr>
                    <th>編號</th>
                    <th>地址</th>
                    <th>經度</th>
                    <th>緯度</th>
                    <th>修改</th>
                    <th>刪除</th>
                    <th>房號</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
                </table>
            </div>
        @endif
        {{--校外實習--}}
        @if($pages == 3)
            <br>
            <div>
                <center>     
                    <button type="button" class="btn btn-primary btn-xs">新增</button>
                </center>
            </div>
            <div>
                <table class="table">
                <thead class="thead-inverse">
                    <tr>
                    <th>廠商編號</th>
                    <th>廠商名稱</th>
                    <th>廠商地址</th>
                    <th>負責人</th>
                    <th>負責人電話</th>
                    <th>修改</th>
                    <th>刪除</th>
                    <th>狀態</th>
                    <th>座標修正</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
                </table>
            </div>
        @endif
        {{--服務學習--}}
        @if($pages == 4)
            <br>
            <div>
                <center>     
                    <button type="button" class="btn btn-primary btn-xs">新增</button>
                </center>
            </div>
            <div>
                <table class="table">
                <thead class="thead-inverse">
                    <tr>
                    <th>廠商編號</th>
                    <th>廠商名稱</th>
                    <th>廠商地址</th>
                    <th>負責人</th>
                    <th>負責人電話</th>
                    <th>修改</th>
                    <th>刪除</th>
                    <th>狀態</th>
                    <th>座標修正</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
                </table>
            </div>
        @endif
        {{--校園美食--}}
        @if($pages == 5)
            <br>
            <div>
                <center>     
                    <button type="button" class="btn btn-primary btn-xs">新增</button>
                </center>
            </div>
            <div>
                <table class="table">
                <thead class="thead-inverse">
                    <tr>
                    <th>廠商編號</th>
                    <th>廠商名稱</th>
                    <th>廠商地址</th>
                    <th>負責人</th>
                    <th>負責人電話</th>
                    <th>修改</th>
                    <th>刪除</th>
                    <th>狀態</th>
                    <th>座標修正</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
                </table>
            </div>
        @endif
        {{--公告和文件資訊--}}
        @if($pages == 6)
            <br>
            <div>
                <center>     
                    <button type="button" class="btn btn-primary btn-xs">新增</button>
                </center>
            </div>
            <div>
                <table class="table">
                <thead class="thead-inverse">
                    <tr>
                    <th>廠商編號</th>
                    <th>廠商名稱</th>
                    <th>廠商地址</th>
                    <th>負責人</th>
                    <th>負責人電話</th>
                    <th>修改</th>
                    <th>刪除</th>
                    <th>狀態</th>
                    <th>座標修正</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
                </table>
            </div>

            <div>
                <h4>關鍵字</h4>
            </div>
            <div>
                <table class="table">
                <thead class="thead-inverse">
                    <tr>
                    <th>廠商編號</th>
                    <th>廠商名稱</th>
                    <th>廠商地址</th>
                    <th>負責人</th>
                    <th>負責人電話</th>
                    <th>修改</th>
                    <th>刪除</th>
                    <th>狀態</th>
                    <th>座標修正</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
                </table>
            </div>
        @endif
        {{--公告和文件資訊--}}
        @if($pages == 8)
            <br>
            <div>
                <center>     
                    <button type="button" class="btn btn-primary btn-xs">新增</button>
                </center>
            </div>
            <div>
                <table class="table">
                <thead class="thead-inverse">
                    <tr>
                    <th>回報時間</th>
                    <th>回報主旨</th>
                    <th>回報內容</th>
                    <th>處理狀況</th>
                    <th>處理時間</th>
                    <th>詳細情況</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
                </table>
            </div>
        @endif
</div>
@endsection
@section('quotes')
@endsection