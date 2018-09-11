<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:86:"/www/wwwroot/www.hjphp.com/wwwroot/public/../application/index/view/article/index.html";i:1536650920;s:69:"/www/wwwroot/www.hjphp.com/wwwroot/application/index/view/header.html";i:1534139910;s:69:"/www/wwwroot/www.hjphp.com/wwwroot/application/index/view/footer.html";i:1534231803;}*/ ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>技术文章_郭豪杰个人博客_PHP-HJPHP</title>
<meta name="keywords" content="技术文章,php文章,API接口文章,API,ghj,郭豪杰个人博客,技术博客" />
<meta name="description" content="技术文章,开源项目以及一些自编的免费API." />
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 

<!-- 基本样式 -->
<link href="/static/css/base.css" rel="stylesheet">
<link href="/static/css/index.css" rel="stylesheet">
<link href="/static/css/m.css" rel="stylesheet">

<!--[if lt IE 9]>
<script src="/static/js/modernizr.js"></script>
<![endif]-->
<script>
window.onload = function ()
{
	var oH2 = document.getElementsByTagName("h2")[0];
	var oUl = document.getElementsByTagName("ul")[0];
	oH2.onclick = function ()
	{
		var style = oUl.style;
		style.display = style.display == "block" ? "none" : "block";
		oH2.className = style.display == "block" ? "open" : ""
	}
}
</script>


</head>
<body>

<header>
  <div class="tophead">
    <div class="logo"><a href="/">Reason 个人博客</a></div>
    <div id="mnav">
      <h2><span class="navicon"></span></h2>
      <ul>
        <li><a href="/">网站首页</a></li>
        <li><a href="<?php echo url('article/index'); ?>">文章</a></li>
        <li><a href="<?php echo url('news/index'); ?>">新闻</a></li>
        <li><a href="<?php echo url('message/index'); ?>">留言</a></li>
		<?php if(session('userinfo') == NULL): ?> 
		<li><a href="javascript:void(0);" name="top_login">登录</a></li>
		<?php else: ?>
		<li><a href="<?php echo url('user/center'); ?>"><?php echo session('userinfo')['username']; ?>的个人中心</a></li>
		<li><a href="<?php echo url('index/logout'); ?>">注销</a></li>
		<?php endif; ?>
		
      </ul>
    </div>
    <nav class="topnav" id="topnav">
      <ul>
        <li><a class="topnav<?php if(request()->controller()=='Index')echo '_current';?>" href="/">网站首页</a></li>
        <li><a class="topnav<?php if(request()->controller()=='Article')echo '_current';?>" href="<?php echo url('article/index'); ?>">文章</a></li>
        <li><a class="topnav<?php if(request()->controller()=='News')echo '_current';?>" href="<?php echo url('news/index'); ?>">新闻</a></li>
        <li><a class="topnav<?php if(request()->controller()=='Message')echo '_current';?>" href="<?php echo url('message/index'); ?>">留言</a></li>
		<?php if(session('userinfo') == NULL): ?> 
		<li><a href="javascript:void(0);" name="top_login">登录</a></li>
		<?php else: ?>
		<li><a class="topnav<?php if(request()->controller()=='User')echo '_current';?>" href="<?php echo url('user/center'); ?>"><?php echo session('userinfo')['username']; ?>的个人中心</a></li>
		<li><a href="<?php echo url('index/logout'); ?>">注销</a></li>
		<?php endif; ?>
      </ul>
    </nav>
  </div>
</header>






<article>
  <h1 class="t_nav">
  	<span><?php echo config("head_sentence");; ?></span>
  	<a href="/" class="n1">网站首页</a><a href="#" class="n2">文章</a>
  </h1>
  <div class="blogs">
    <div class="mt20"></div>
	<?php if($list->isEmpty() == 1): ?>
	<li>
      <h3 class="blogtitle" style="text-align: center;">暂无内容...</h3>
    </li>
	<?php else: if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): if( count($list)==0 ) : echo "" ;else: foreach($list as $key=>$item): ?>
    <li> <span class="blogpic"><a href="<?php echo url('detail',['id'=>$item['id']]); ?>"><img style="max-height: 160px;" src="<?php echo $item['pic']; ?>"></a></span>
      <h3 class="blogtitle"><a href="<?php echo url('detail',['id'=>$item['id']]); ?>"><?php echo $item['title']; ?></a></h3>
      <div class="bloginfo">
        <p><?php echo $item['intro']; ?></p>
      </div>
      <div class="autor">
        <span class="lm"><a href="#" title="" class="classname"><?php echo $item['tag']; ?></a></span>
        <span class="dtime"><?php echo date("Y-m-d H:i:s",$item['addtime']); ?></span>
        <span class="viewnum">浏览（<a href="#"><?php echo $item['viewnum']; ?></a>）</span>
        <span class="readmore"><a href="<?php echo url('detail',['id'=>$item['id']]); ?>">阅读原文</a></span>
      </div>
    </li>
    <?php endforeach; endif; else: echo "" ;endif; endif; ?>
    <style>
    /* 分页-tp5自带标签 */
    .pagination { text-align: center; color: #666; width: 100%; clear: both; margin: 20px 0; padding-top: 20px;}
    .pagination li { color: #666; margin: 0 2px; border: 1px solid #000; padding: 5px 10px;display:inline;}
    .pagination li:hover { color: #f00; text-decoration: underline }
    </style>
    <?php echo $list->render(); ?>
  </div>

  <div class="sidebar">
    <div class="search">
      <form action="" method="post" name="searchform" id="searchform" 
            onsubmit="if($.trim($('#searchword').val())=='请输入关键字'||$.trim($('#searchword').val())==''){alert('请输入关键字');return false;}">
        <input name="searchword" id="searchword" class="input_text" value="请输入关键字" style="color: rgb(153, 153, 153);" onfocus="if(value=='请输入关键字'){this.style.color='#000';value=''}" onblur="if(value==''){this.style.color='#999';value='请输入关键字'}" type="text">
       
        <input name="Submit" class="input_submit" value="搜索" type="submit">
      </form>
    </div>
    <!-- <div class="lmnav">
      <h2 class="hometitle">栏目导航</h2>
      <ul class="navbor">
        <li><a href="#">关于我</a></li>
        <li><a href="share.html">模板分享</a>
          <ul>
            <li><a href="list.html">个人博客模板</a></li>
            <li><a href="#">HTML5模板</a></li>
          </ul>
        </li>
        <li><a href="list.html">学无止境</a>
          <ul>
            <li><a href="list.html">学习笔记</a></li>
            <li><a href="#">HTML5+CSS3</a></li>
            <li><a href="#">网站建设</a></li>
          </ul>
        </li>
        <li><a href="#">慢生活</a></li>
      </ul>
    </div> -->
    <div class="paihang">
      <h2 class="hometitle">点击排行</h2>
      <ul>
        <?php if(is_array($hot_list) || $hot_list instanceof \think\Collection || $hot_list instanceof \think\Paginator): if( count($hot_list)==0 ) : echo "" ;else: foreach($hot_list as $key=>$item): ?>
        <li><b><a href="<?php echo url('detail',['id'=>$item['id']]); ?>" target="_blank"><?php echo $item['title']; ?></a></b>
          <p><i><img src="<?php echo $item['pic']; ?>"></i><?php echo $item['intro']; ?></p>
        </li>
        <?php endforeach; endif; else: echo "" ;endif; ?>
      </ul>
    </div>
    <!-- <div class="cloud">
      <h2 class="hometitle">标签云</h2>
      <ul>
        <a href="/">陌上花开</a> <a href="/">校园生活</a> <a href="/">html5</a> <a href="/">SumSung</a> <a href="/">青春</a> <a href="/">温暖</a> <a href="/">阳光</a> <a href="/">三星</a><a href="/">索尼</a> <a href="/">华维荣耀</a> <a href="/">三星</a> <a href="/">索尼</a>
      </ul>
    </div> -->
    <div class="weixin">
      <h2 class="hometitle">官方微信</h2>
      <ul>
        <img src="<?php echo $options['wechat_pic']; ?>">
      </ul>
    </div>
  </div>
</article>





<footer>
  <p> www.hjphp.com | All Rights Reserved </p>
</footer>

<script src="/static/js/nav.js"></script>
<script src="/static/js/jquery-2.1.1.min.js"></script>
<script src="/static/js/jquery.md5.js"></script>

<!-- 登录框start -->
<script>
$(function(){

	//登录表单 点击按钮弹出遮罩
	$("[name='top_login']").click(function(){
		showOverlay();
		$('html , body').animate({scrollTop: 0},'slow');
	});
	$("#overlay").click(function(){
		hideOverlay()
	});
	
	 /* 显示遮罩层 */
	function showOverlay() {
		//手机端影藏头部
		$("#mnav ul").css('display','none');
		$("#mnav h2").attr("class","");
		
		$("#overlay").height(bodyHeight());
		$("#overlay").width(bodyWidth());
		// fadeTo第一个参数为速度，第二个为透明度
		$("#overlay").fadeTo(200, 0.5);
		$("#login_div").fadeTo(200, 1.0);
	}
 
	/* 隐藏覆盖层 */
	function hideOverlay() {
		$("#overlay").fadeOut(200);
		$("#login_div").fadeOut(200);
	}
	/* 当前页面高度 */
	function bodyHeight() {
		return document.body.scrollHeight;
	}
	/* 当前页面宽度 */
	function bodyWidth() {
		return document.body.scrollWidth;
	}
	/* 当前浏览器的宽度*/
	function pageHeight() {
		return window.screen.availHeight;
	}
	/* 当前浏览器的宽度*/
	function pageWidth() {
		return window.screen.availWidth;
	}
	
	//登录表单 验证
	$("#login").click(function(){
		if($.trim($("#username").val())==""){
			alert("请输入用户名");return;
		}
		if($("#password").val()==""){
			alert("请输入密码");return;
		}
		if($.trim($("#checkcode").val())==""){
			alert("请输入验证码");return;
		}
		
		var logindata= {
			"username":$.trim($("#username").val()),
			"password":$.md5($("#password").val()),
			"checkcode":$.trim($("#checkcode").val())
		};
		var logindata = JSON.stringify(logindata);	
		
		$.post("<?php echo url('index/login'); ?>",{logindata:logindata},function(res){
			$("#checkcodeimg").attr("src","<?php echo captcha_src(); ?>");
			switch(res){
				case "1":
					alert("登录成功");
					location.reload();
					break;
				case "01":
					alert("验证码有误，请重新输入");
					break;
				case "02":
					alert("账号有误，请重新输入");
					break;
				case "03":
					alert("密码有误，请重新输入");
					break;
				default:
					break;
			}
		});
		
	});
	
	
	
});

</script>

<div id="overlay"></div>
<div id="login_div">
	<form action="" class="basic-grey">
		<h1>用户登录</h1>
		<label>
			<span>用户名：</span>
			<input type="text" name="username" id="username" placeholder="请输入用户名" />
		</label>
		<label>
			<span>密码:</span>
			<input type="password" name="password" id="password" placeholder="请输入密码" />
		</label>
		<label>
			<span>验证码:</span>
			<input type="text" name="checkcode" id="checkcode" placeholder="请输入验证码" />
		</label>
		<label>
			<span>&nbsp;</span>
			<img src="<?php echo captcha_src(); ?>" alt="" id="checkcodeimg" onclick="this.src='/captcha'" style="margin-bottom: 20px;">
		</label>
		<label>
			<span>&nbsp;</span>
			<input type="button" class="button" id="login" value="登录" />
		</label>
		<br/>
		<label>
			<span>&nbsp;</span>
			<a href="<?php echo url('index/register'); ?>" style="float:right;margin-right:40px;">没有账号？立即注册</a>
		</label>
	</form>
</div>
<!-- 登录框end -->


</body>
</html>
