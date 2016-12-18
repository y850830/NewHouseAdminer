@extends('layouts.master')
@section('content')
<h1>{{$school}}公告欄</h1>
<div class="form-horizontal">
    @foreach ($posts as $category)
        {{Form::checkbox('case'.$category->Newscateg_id,$category->Newscateg_id,false,['onclick' => 'filterPost(this)'])}}
		{{Form::label('case'.$category->Newscateg_id,$category->Newscateg_name,['class' => 'control-label'])}}
    @endforeach
</div>

<div class="panel panel-primary">
    <div class="panel-heading">項目</div>
    <div id="post" class="panel-body"></div>
</div>
<!--<div class="panel panel-default">
    <div class="panel-heading">內容</div>
    <div id="context" class="panel-body"></div>
</div>-->

<script>
// 重要：news_cate種類  _content內容 _id文章號 _title標題
$(document).ready(function(){
    initBoard();
});
// 顯示標題的 DOM
var post = document.getElementById('post');
// 顯示內容的 DOM
// var context = document.getElementById('context');
// 篩選該校的資料，利用 Laravel 的關聯模型
var dataCollect = [
    @foreach ($posts as $category)
        @foreach ($category->news as $item)
            @if ($item['site_name'] == $school )
            {!!$item->toJson()!!},
            @endif
        @endforeach
    @endforeach
];
// 一開始全部都是false
var enableArr = [false,false,false,false];
function filterPost(cb){
    var titles = "";

    // 將點選的值，做布林轉換
    enableArr[cb.value] = !enableArr[cb.value];

    // 如果全部都沒選，則當作全部都要。
    var all_false = enableArr.every(function(value,index,array){
        return value == false;
    });

    if(!all_false){
        // filter : 過濾條件，回傳一新陣列。
        var new_collect = dataCollect.filter(function(item,key){
                        // 以 news_cate 作為 key => value 取出對應布林值，news_cate 代表文章種類
                        // 也就是文章類別存在，就是允許通過之資料
                        return enableArr[item['news_cate']];
                    });
        // 將新集合的內容串起
        new_collect.forEach(function(item,key){
            titles +=
            markCateg(item['news_cate'])+
            "<a href='#"+key+"' data-toggle='collapse'>"+item['news_title']+"</a>"+
            "<div id='"+key+"' class='collapse'>"+item['news_content']+"</div><br/>";
        });
        // 印出去
        post.innerHTML = titles;
    } else initBoard(); // 否則，內容全印
}
// 顯示資料內容
// function showContent(news_id){
//     dataCollect.forEach(function(item,key){
//         if(item['news_id'] == news_id){
//             context.innerHTML = dataCollect[key]['news_content'];
//         }
//     });
// }

// 初始佈告欄
function initBoard(){
    var titles = "";
    dataCollect.forEach(function(item,key){
        titles +=
        markCateg(item['news_cate'])+
        "<a href='#"+key+"' data-toggle='collapse'>"+item['news_title']+"</a>"+
        "<div id='"+key+"' class='collapse'>"+item['news_content']+"</div><br/>";
    });
    // 印出去
    post.innerHTML = titles;
}

// 項目類別提醒
// 目前預設為 4 種類別
function markCateg(category){
    switch(category){
        case 0:
            return "<span style='color: gray'><一般公告> </span>";
        break;
        case 1:
            return "<span style='color: blue'><學生> </span>";
        break;
        case 2:
            return "<span style='color: purple'><房東> </span>";
        break;
        case 3:
            return "<span style='color: red'><重要> </span>";
        break;
    }
}
</script>

@endsection