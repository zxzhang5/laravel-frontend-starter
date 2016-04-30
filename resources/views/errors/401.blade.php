@extends('layouts.errors')
@section('meta')
<meta http-equiv="refresh" content="1;url=/login?jump=/{{Request::path()}}" />
@stop
@section('title')
<title>401</title>
@stop
@section('msg')
<div class="msg msg-large msg-error">
    <div class="msg-con">您的登录已超时
        <p>
            1秒后如果未自动跳转请点击 <a href="/login?jump=/{{Request::path()}}">登录</a>
        </p>
    </div>
    <s class="msg-icon"></s>
</div>
@stop