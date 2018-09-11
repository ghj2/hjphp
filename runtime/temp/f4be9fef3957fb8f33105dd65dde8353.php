<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:87:"/www/wwwroot/www.hjphp.com/wwwroot/public/../application/index/view/article/detail.html";i:1536651085;s:69:"/www/wwwroot/www.hjphp.com/wwwroot/application/index/view/header.html";i:1534139910;s:69:"/www/wwwroot/www.hjphp.com/wwwroot/application/index/view/footer.html";i:1534231803;}*/ ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo $content['title']; ?></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
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




<input type="hidden" id="pageval" value="<?php echo input('param.page');; ?>"/>

<article>
  <h1 class="t_nav">
  	<span><?php echo config("head_sentence");; ?></span>
  	<a href="/" class="n1">网站首页</a><a href="#" class="n2">文章</a>
  </h1>
  
  <div class="infos">
    <div class="newsview">
      <h3 class="news_title"><?php echo $content['title']; ?></h3>
      <div class="news_author"><span class="au01"><a href="mailto:dancesmiling@qq.com">郭理智</a></span><span class="au02"><?php echo date("Y-m-d H:i:s",$content['addtime']); ?></span><span class="au03">共<b><?php echo $content['viewnum']; ?></b>人围观</span></div>
      <div class="tags"><a href="#"><?php echo $content['tag']; ?></a></div>
      <div class="news_about"><strong>简介</strong><?php echo $content['intro']; ?></div>
      <div class="news_infos"> 
          <?php echo $content['detail']; ?>
      </div>
    </div>
    <div class="share"> </div>
    <div class="nextinfo">
     
      <p>上一篇： 
        <?php if($content['pre'] != null): ?>
        <a href="<?php echo url('detail',['id'=>$content['pre']['id']]); ?>" target="_blank"><?php echo $content['pre']['title']; ?></a></p>
        <?php else: ?>
        <a href="#">没有了...</a>
        <?php endif; ?>
      <p>下一篇：
        <?php if($content['next'] != null): ?>
        <a href="<?php echo url('detail',['id'=>$content['next']['id']]); ?>" target="_blank"><?php echo $content['next']['title']; ?></a></p>
         <?php else: ?>
        <a href="#">没有了...</a>
        <?php endif; ?>
    </div>

    <div class="news_pl">
      <h2>文章评论</h2>
      <ul id="comment_content">
        <?php if(is_array($comment) || $comment instanceof \think\Collection || $comment instanceof \think\Paginator): if( count($comment)==0 ) : echo "" ;else: foreach($comment as $key=>$item): ?>
        <li>
        <img id="comment_img<?php echo $item['id']; ?>_hide" src="/static/images/zan.gif" style="position: absolute;display: none;width:80px;height:80px;"/>
        <div class="gbko"><?php echo $item['content']; ?></div> 
        <div class="comment_info">
          <span class="comment_time"><?php echo $item['uid']; ?>  <?php echo date("Y-m-d H:i:s",$item['addtime']); ?></span>
          <span class="comment_img" id="comment_img<?php echo $item['id']; ?>"><img src="/static/images/zan.png"/>(<span id="comment_zan_num<?php echo $item['id']; ?>"><?php echo $item['dianzan']; ?></span>)</span>
        </div>
        <center><hr width='95%'></center>
        </li>
        <?php endforeach; endif; else: echo "" ;endif; ?>
        <style>
        /* 分页-tp5自带标签 */
        .pagination { text-align: center; color: #666; width: 100%; clear: both; margin: 20px 0; padding-top: 20px;}
        .pagination li { color: #666; margin: 0 2px; border: 1px solid #000; padding: 5px 10px;display:inline;}
        .pagination li:hover { color: #f00; text-decoration: underline }
        </style>
        <?php echo $comment->render(); ?>
      </ul>
      <div class="comment_editor">
        <textarea id="comment_textarea"></textarea>
        <button style="display:none;">发布评论</button>
      </div>

    </div>
    


  </div>
  

  <div class="sidebar">
   
    <div class="paihang" style="margin-top: 20px;">
      <h2 class="hometitle">点击排行</h2>
      <ul>
        <?php if(is_array($hot_list) || $hot_list instanceof \think\Collection || $hot_list instanceof \think\Paginator): if( count($hot_list)==0 ) : echo "" ;else: foreach($hot_list as $key=>$item): ?>
        <li><b><a href="<?php echo url('detail',['id'=>$item['id']]); ?>" target="_blank"><?php echo $item['title']; ?></a></b>
          <p><i><img src="<?php echo $item['pic']; ?>"></i><?php echo $item['intro']; ?></p>
        </li>
        <?php endforeach; endif; else: echo "" ;endif; ?>
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

<script>
/*评论按钮*/
//按钮
$(".comment_editor textarea").focus(function(){
    $(".comment_editor button").fadeIn("1000");
});
$(".comment_editor textarea").blur(function(){
    $(".comment_editor button").fadeOut("1000");
});
//提交
$(".comment_editor button").click(function(){
    var comment_data= {
      "aid":<?php echo $content['id']; ?>,
      "content":$("#comment_textarea").val(),
    };
    var comment_data = JSON.stringify(comment_data);  
    $.post("<?php echo url('comment_add'); ?>",{data:comment_data},function(res){
      if(res=='1'){
        $("#comment_content").prepend("<li>"+
            "<div class='gbko'>"+$("#comment_textarea").val()+"</div>"+
            "<div class='comment_info'>"+
              "<span class='comment_time'><?php echo session('userinfo')['username']; ?>  <?php echo date('Y-m-d H:i:s',time()); ?></span>"+
              "<span class='comment_img'><img src='/static/images/zan.png'/>0</span>"+
            "</div>"+
            "<center><hr width='95%'></center></li>"
        );
      }else{
        alert("评论文章请先登录");
        $("[name='top_login']").click();
        $('html , body').animate({scrollTop: 0},'slow');
      };
    });
});
//分页
if($("#pageval").val()!=""){
   $('html,body').animate({scrollTop:$('.news_pl').offset().top}, 800);
}
//点赞
$(".comment_img").click(function(){
  var id = $(this).attr("id");
  //动画效果
  var left = $("#"+id).position().left;
  $("#"+id+"_hide").css("left",left-80);
  $("#"+id+"_hide").fadeIn(100);
  $("#"+id+"_hide").fadeOut(500);
  //ajax
  $.post("<?php echo url('comment_zan'); ?>",{cid:id},function(res){
    if(res=="1"){
      var zan_id = "comment_zan_num"+id.replace(/[^0-9]/ig,"");
      $("#"+zan_id).text(parseInt($("#"+zan_id).text())+1);
    }else{
      alert("error:"+res);
    }
  });
});
</script>

</body>
</html>
