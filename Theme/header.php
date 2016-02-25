<header class="center header">

    <nav class="center navbar">
        <ul class="nav">

            <?php if(wx_is_login()){
                echo '<li class="float_right"><a class="" href="/WeChat/Myzhituer">个人中心</a></li>';
            }else{
                echo '<li class="float_right"><a class="" href="javascript:void(0);" data-toggle="modal" data-target="#myModal">登录</a></li>';
            }
            ?>
            <li class="li"><a class="float_right" href="/">首页</a> </li>

        </ul>
    </nav>

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog"
         aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
                <div class="modal-body">
                    <span id="login_container"></span>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal -->
    <script src="http://res.wx.qq.com/connect/zh_CN/htmledition/js/wxLogin.js"></script>
    <script>
        var obj = new WxLogin({
            id: "login_container",
            appid: "wxd6e4200710d057f2",
            scope: "snsapi_login",
            redirect_uri: encodeURIComponent("http://" + window.location.host + "/WeChat/Myzhituer"),
            state: Math.ceil(Math.random()*1000),
            style: "black",
            href: ""});
    </script>

    <div class="clear"></div>
</header>
<article>