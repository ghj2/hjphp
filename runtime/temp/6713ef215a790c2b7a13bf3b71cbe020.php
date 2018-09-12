<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:67:"D:\wamp64\www\tp5\public/../application/index\view\index\index.html";i:1536650424;s:52:"D:\wamp64\www\tp5\application\index\view\header.html";i:1534139910;s:52:"D:\wamp64\www\tp5\application\index\view\footer.html";i:1534231803;}*/ ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>郭豪杰个人博客_技术博客_个人网站建设_PHP-HJPHP</title>
<meta name="keywords" content="郭豪杰,hjphp,ghj,个人博客,技术博客,php博客,thinkphp博客模板" />
<meta name="description" content="郭豪杰的个人博客,分享生活,记录编程点滴,开源项目以及一些自编的免费API." />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
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




<div class="picshow">
  <ul>
    <li><a href="/"><i><img src="<?php echo $options['homepage_pic']; ?>" style="height:100%;"></i>
      <div class="font">
        <h3><?php echo $options['homepage_title']; ?></h3>
      </div>
      </a></li>
    
  </ul>
</div>
<?php if($list == NULL): ?>
<article>
  <div class="blogs">
    <li> 
      <h3 class="blogtitle" style="text-align:center;">暂无内容...</h3>
    </li>
  </div>
  <div class="sidebar">
    <div class="about">
      <div class="avatar"> <img src="<?php echo $options['grjs_pic']; ?>" alt=""> </div>
      <p class="abname"><?php echo $options['grjs_row1']; ?></p>
      <p class="abposition"><?php echo $options['grjs_row2']; ?></p>
      <div class="abtext"> <?php echo $options['grjs_intro']; ?> </div>
    </div>
    <div class="search">
     <!--  <form action="/e/search/index.php" method="post" name="searchform" id="searchform">
        <input name="keyboard" id="keyboard" class="input_text" value="请输入关键字" style="color: rgb(153, 153, 153);" onfocus="if(value=='请输入关键字'){this.style.color='#000';value=''}" onblur="if(value==''){this.style.color='#999';value='请输入关键字'}" type="text">
        <input name="show" value="title" type="hidden">
        <input name="tempid" value="1" type="hidden">
        <input name="tbname" value="news" type="hidden">
        <input name="Submit" class="input_submit" value="搜索" type="submit">
      </form> -->
    </div>

    <div class="paihang">
      <h2 class="hometitle">点击排行</h2>
      <ul>
        <li><b style="text-align:center;">暂无内容...</b>
        </li>
      </ul>
    </div>
    <div class="paihang">
      <h2 class="hometitle">站长推荐</h2>
       <ul>
        <li><b style="text-align:center;">暂无内容...</b>
        </li>
      </ul>
    </div>
    <div class="links">
      <h2 class="hometitle">友情链接</h2>
      <ul>
        <?php if($options['friend_link'] == NULL): ?>
        <li style="text-align:center;"><b>暂无内容...</b></li>
        <?php else: if(is_array($options['friend_link']) || $options['friend_link'] instanceof \think\Collection || $options['friend_link'] instanceof \think\Paginator): if( count($options['friend_link'])==0 ) : echo "" ;else: foreach($options['friend_link'] as $key=>$item): ?>
        <li><a href="<?php echo $item['url']; ?>" title="<?php echo $item['title']; ?>"><?php echo $item['title']; ?></a></li>
        <?php endforeach; endif; else: echo "" ;endif; endif; ?>
      </ul>
    </div>
    <div class="weixin">
      <h2 class="hometitle">官方微信</h2>
      <ul>
        <img src="<?php echo $options['wechat_pic']; ?>">
      </ul>
    </div>
  </div>
</article>

<?php else: ?>
<article>
  <div class="blogs">
	
    <?php if(is_array($list['time']) || $list['time'] instanceof \think\Collection || $list['time'] instanceof \think\Paginator): if( count($list['time'])==0 ) : echo "" ;else: foreach($list['time'] as $key=>$item): ?>
    <li> <span class="blogpic"><a href="<?php echo url('article/detail',['id'=>$item['id']]); ?>"><img src="<?php echo $item['pic']; ?>"></a></span>
      <h3 class="blogtitle"><a href="<?php echo url('article/detail',['id'=>$item['id']]); ?>"><?php echo $item['title']; ?></a></h3>
      <div class="bloginfo">
        <p><?php echo $item['intro']; ?></p>
      </div>
      <div class="autor">
        <span class="lm"><a href="/" title="CSS3|Html5" target="_blank" class="classname"><?php echo $item['tag']; ?></a></span>
        <span class="dtime"><?php echo date("Y-m-d H:i:s",$item['addtime']); ?></span>
        <span class="viewnum">浏览（<a href="#"><?php echo $item['viewnum']; ?></a>）</span>
        <span class="readmore"><a href="<?php echo url('article/detail',['id'=>$item['id']]); ?>">阅读原文</a></span></div>
    </li>
    <?php endforeach; endif; else: echo "" ;endif; ?>
  </div>
  <div class="sidebar">
    <div class="about">
      <div class="avatar"> <img src="<?php echo $options['grjs_pic']; ?>" alt=""> </div>
      <p class="abname"><?php echo $options['grjs_row1']; ?></p>
      <p class="abposition"><?php echo $options['grjs_row2']; ?></p>
      <div class="abtext"> <?php echo $options['grjs_intro']; ?> </div>
    </div>
    <div class="search">
      <form action="/e/search/index.php" method="post" name="searchform" id="searchform">
        <input name="keyboard" id="keyboard" class="input_text" value="请输入关键字" style="color: rgb(153, 153, 153);" onfocus="if(value=='请输入关键字'){this.style.color='#000';value=''}" onblur="if(value==''){this.style.color='#999';value='请输入关键字'}" type="text">
        <input name="show" value="title" type="hidden">
        <input name="tempid" value="1" type="hidden">
        <input name="tbname" value="news" type="hidden">
        <input name="Submit" class="input_submit" value="搜索" type="submit">
      </form>
    </div>

    <div class="paihang">
      <h2 class="hometitle">点击排行</h2>
      <ul>
        <?php if(is_array($list['hot']) || $list['hot'] instanceof \think\Collection || $list['hot'] instanceof \think\Paginator): if( count($list['hot'])==0 ) : echo "" ;else: foreach($list['hot'] as $key=>$item): ?>
        <li><b><a href="<?php echo url('article/detail',['id'=>$item['id']]); ?>" target="_blank"><?php echo $item['title']; ?></a></b>
          <p><i><a href="<?php echo url('article/detail',['id'=>$item['id']]); ?>" target="_blank"><img src="<?php echo $item['pic']; ?>"></a></i><?php echo $item['intro']; ?></p>
        </li>
        <?php endforeach; endif; else: echo "" ;endif; ?>
      </ul>
    </div>
    <div class="paihang">
      <h2 class="hometitle">站长推荐</h2>
      <ul>
        <?php if(is_array($list['recommend']) || $list['recommend'] instanceof \think\Collection || $list['recommend'] instanceof \think\Paginator): if( count($list['recommend'])==0 ) : echo "" ;else: foreach($list['recommend'] as $key=>$item): ?>
        <li><b><a href="<?php echo url('article/detail',['id'=>$item['id']]); ?>" target="_blank"><?php echo $item['title']; ?></a></b>
          <p><i><a href="<?php echo url('article/detail',['id'=>$item['id']]); ?>" target="_blank"><img src="<?php echo $item['pic']; ?>"></a></i><?php echo $item['intro']; ?></p>
        </li>
        <?php endforeach; endif; else: echo "" ;endif; ?>
		
      </ul>
    </div>
    <div class="links">
      <h2 class="hometitle">友情链接</h2>
      <ul>
        <?php if($options['friend_link'] == NULL): ?>
        <li style="text-align:center;"><b>暂无内容...</b></li>
        <?php else: if(is_array($options['friend_link']) || $options['friend_link'] instanceof \think\Collection || $options['friend_link'] instanceof \think\Paginator): if( count($options['friend_link'])==0 ) : echo "" ;else: foreach($options['friend_link'] as $key=>$item): ?>
        <li><a href="<?php echo $item['url']; ?>" title="<?php echo $item['title']; ?>"><?php echo $item['title']; ?></a></li>
        <?php endforeach; endif; else: echo "" ;endif; endif; ?>
      </ul>
    </div>
    <div class="weixin">
      <h2 class="hometitle">官方微信</h2>
      <ul>
        <img src="<?php echo $options['wechat_pic']; ?>">
      </ul>
    </div>
  </div>
</article>

<?php endif; ?>


<div class="blank"></div>


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
