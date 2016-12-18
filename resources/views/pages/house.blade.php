@extends('layouts.master')
@section('content')
<div class="col-xs-2">
	{{Form::open(['role' => 'form', 'id' => 'filterForm'])}}
		<div class="form-group">
			{{Form::label(null,'房屋總數：'.$houses_total.'間',['class' => 'control-label'])}}
			{{Form::label(null,'剩餘空房數：'.$houses_empty_room.'間',['class' => 'control-label'])}}
		</div>
		<div class="form-group">
			{{Form::label('campus','校區：',['class' => 'control-label'])}}
			<select name="campus" class="form-control">
					<option value="999" selected>本校區</option>
				@foreach ($subsites as $subsite)
					<option value="{{$subsite->subsites_Id}}">{{$subsite->subsite_title}}校區</option>
				@endforeach
			</select>
		</div>
		<div class="form-group">
			{{Form::label('display', '顯示方式：',['class' => 'control-label'])}} <!--未做-->
			{{Form::select('display' ,['1' => '地圖模式','2' => '列表模式'],'1',['class'=>'form-control'])}}
		</div>
		<div class="form-group">
			{{Form::label('sortMode','排序方式：',['class' => 'control-label'])}}  <!--未做-->
			{{Form::select('sortMode',['0' =>'預設(隨機)','1' =>'套房房租(高→低)','2' =>'套房房租(高→低)','3' =>'雅房房租(低→高)','4' =>'雅房房租(低→高)'],'0',['class'=>'form-control'])}}
		</div>
		<div class="form-group"> <!--未做-->
			{{Form::label('keyword','關鍵字',['class' => 'control-label'])}}
			{{Form::text('keyword',null,['class' => 'form-control','placeholder' => '地址'])}}
		</div>
		<div class="form-group">
			{{Form::label('type','房屋類型：',['class' => 'control-label'])}}
			{{Form::select('type',['0' => '不限制','1' => '透天','2' => '公寓','3' => '大樓','4' => '學舍'],'0',['class'=>'form-control'])}}
			{{Form::label('roomtype','房間類型：',['class' => 'control-label'])}}
			{{Form::select('roomtype',['0' => '不限制','1'=>'套房','2'=>'雅房'],'0',['class'=>'form-control'])}}
		</div>
		<div class="form-group">
			{{Form::label('limit','性別限制',['class' => 'control-label'])}}
			<div class="btn-group">
				{{Form::radio('limit','0',true)}} 無限制
				{{Form::radio('limit','1')}} 限男
				{{Form::radio('limit','2')}} 限女
			</div>
		</div>
		<div class="form-group">
			{{Form::label('regionId','地區',['class' => 'control-label'])}}
			<select name="regionId" class="form-control">
				@foreach ($regions as $region)
					<option value="{{$region ->regionId}}">{{$region->regionName}}</option>
				@endforeach
			</select>
		</div>
		<div class="form-group">
			{{Form::checkbox('nosmok','1')}}
			{{Form::label('nosmok','無煙租屋',['class' => 'control-label'])}}
		</div>
		<div class="form-group">
			{{Form::label(null,'價格：',['class' => 'control-label'])}}
			<span id="rangeVal">4000</span>
			<input type="range" name="rental" id="rental" value="4000" min="1000" max="10000" step="1000" onchange="showValue(this.value)"/>
		</div>
		{{Form::button('篩選',['class'=>'btn btn-block btn-primary', 'onclick' => 'filterHouse()'])}}
	{{Form::close()}}
</div>
<div class="col-xs-8">
	<div id="map-canvas"></div>
</div>
<div class="col-xs-2">
<script>
var i=0;
var la = [];
var ln = [];

</script>
@foreach($geocodes as $array)
	@foreach($array as $item)
	<script>
		la[i]='<?php echo $item->lat ?>';
		ln[i]='<?php echo $item->lon ?>';
		i++;
	</script>
	@endforeach
@endforeach
<script>
i=0;
</script>
<div data-spy="scroll"  data-offset="0" style="height:750px;width:200px;overflow:auto; position: relative;">
	<div id="rightlist" class="list-group">
		  <a href="#" class="list-group-item active">國立虎尾科技大學</a>
		@foreach($houses as $item)
		<a href="#" class="list-group-item list-group-item-action"  onclick="targetHouse('{{$item->houseId}}');" >
			@if($item->roomYAll >0 )
				<h6>雅房:每月{{$item->rentalY}}元</h6>
				<h6>剩餘{{$item->roomYNum}}間</h6>
			@endif
			@if($item->roomAll >0 )
				<h6>套房:每月{{$item->rental}}元</h6>
				<h6>剩餘{{$item->roomNum}}間</h6>
			@endif
			@if($item->roomNum==0 && $item->roomYNum==0)
				<img src="{{URL::asset('images/Fullrent.jpg')}}"/>
			@endif
		</a>
		<script>
		i++;
		</script>
		@endforeach
	</div>
</div>
</div>
@foreach($site as $item)
<script>
	address='<?php echo $item->site_address ?>';
</script>
@endforeach

<script>
var Houses = <?=$houses?>; // 測試用
	function showValue(newValue){
		document.getElementById("rangeVal").innerHTML = newValue;
	}
</script>
@endsection