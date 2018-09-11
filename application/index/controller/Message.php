<?php
namespace app\index\controller;

use think\Db;
use think\Controller;
use think\Captcha;
use think\Request;
class Message extends Controller {

	public function _initialize(){
		$data = get_footprints();
		$res = Db::name("footprints")->insert($data);
		if(!$res){alert("welcome");}
	}
	
	public function index(){
		if(request()->isPost()){
			check_login();
			$data = array(
				'content'	=>	input("post.content"),
				'addtime'	=>	time(),
				'uid'		=>	session("userinfo")['id'],
			);
			$res = Db::name("message")->insert($data);
			if($res){
				alert("发布成功");
				href(url('index'));
			}else{
				alert("发布失败4001");
				history(-1);
			}
		}else{
			$list = Db::name("message")
				->alias("a")
				->join("home_user b","a.uid=b.id","LEFT")
				->field("a.*,b.username as uid")
				->where("`delete`!=1")
				->order("orderid desc,addtime desc")
				->paginate(8);
			$this->assign('list',$list);
			return view();
		}
	}

















































}