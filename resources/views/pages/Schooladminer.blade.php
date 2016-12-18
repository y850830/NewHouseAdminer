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
@endsection
@section('quotes')
@endsection