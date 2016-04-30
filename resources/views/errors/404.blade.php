@extends('layouts.errors')
@section('title')
<title>404</title>
@stop
@section('msg')
<div class="msg msg-large msg-error">
    <div class="msg-con">对不起，您访问的页面不存在
        <p>
            您可以返回 <a href="javascript:window.history.go(-1)">上一页</a> 或 <a href="/">首页</a>
        </p>
    </div>
    <s class="msg-icon"></s>
</div>
@stop