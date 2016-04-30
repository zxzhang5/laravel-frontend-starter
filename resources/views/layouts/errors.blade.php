<!DOCTYPE html>
<html lang="zh-CN">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="renderer" content="webkit">
        @yield("meta")
        @yield("title")
        @yield("css")
        <script src="/lib/jquery/jquery-1.12.1.min.js"></script>
    </head>
    <body>
        <div style="width:100%;text-align:center;display: table" id="box">
            <div style="vertical-align: middle;display: table-cell">
                @yield("msg")
            </div>
        </div>
        <script>
            $(function () {
                $('#box').height($(window).height()*0.9);
            });
        </script>
    </body>
</html>