@extends('layouts.errors')
@section('title')
<title>403</title>
@stop
@section('msg')
<div class="msg msg-large msg-error">
    <div class="msg-con">
        对不起，您无权访问该页面                    
        <p>
            您可以返回 <a href="javascript:window.history.go(-1)">上一页</a> 或 <a href="/">首页</a>
        </p>
    </div>
    <s class="msg-icon"></s>
</div>
@stop