<?php
namespace app\index\controller;

use think\Db;
use think\Controller;
use think\Captcha;
use think\Request;
class Index extends Controller {

	public function _initialize(){
		$data = get_footprints();
		$res = Db::name("footprints")->insert($data);
		if(!$res){alert("welcome");}
	}
    	
    public function index(){		
		//静态数据
		$options = Db::name("options")->where('id=1')->find();
		if(!empty($options['friend_link'])){
			$options['friend_link'] = json_decode($options['friend_link'],true);
			$options['friend_link'] = order_by_column("index",$options['friend_link']);
		}
		$this->assign('options',$options);
		
		//文章列表
		$article = Db::name("article")->where('`delete`!=1 and hide!=1')->select();
		if(!empty($article)){
			$list['time'] = order_by_column("addtime",$article,SORT_DESC);
			$list['hot'] = order_by_column("viewnum",$article,SORT_DESC);
			$list['recommend'] = order_by_column("index",$article,SORT_DESC);
		}else{
			$list = [];
		}
		$this->assign("list",$list);
	
    	return view();	
    }	

	public function login(){
		if(request()->isPost()){
			$logindata = json_decode(input("post.logindata"));
			
			$res = captcha_check($logindata->checkcode);
			if(!$res){
				return "01";//"验证码有误，请重新输入";
				exit;
			}  
			$userinfo = Db::name('user')->where("username='".$logindata->username."'")->find();
			if(!$userinfo){
				return "02";//"账号有误，请重新输入";
				exit;
			} 
			$res = $userinfo['password'] === $logindata->password;
			if(!$res){
				return "03";//"密码有误，请重新输入";
				exit;
			}  
			
			unset($userinfo['password']);
			session('userinfo',$userinfo);
			return "1";
		}
	}
	
	public function register(){
		if(request()->isPost()){
			$request = request();
			$data = $request->only(['username_regis','password_regis','headpic','birthday','province','city','district','sign'],"post");
			
			$res = Db::name("user")->where("username='".$data['username_regis']."'")->find();
			if($res){
				alert("用户名重复，请重新注册");
				history(-1);
			}
			
			$data = change_arr_key_multi(["username_regis","password_regis"],["username","password"],$data);
			$data['addtime'] = time();
			
			$res = Db::name("user")->insertGetId($data);
			if($res){
				alert("注册成功！");
				$userinfo = Db::name("user")->where("id=".$res)->find();
				unset($userinfo['password']);
				session('userinfo',$userinfo);
				history_reload(-2);
			}else{
				alert("注册失败");
				history(-1);
			}	
		}else{
			$formdata['province'] = Db::name("province")->select();
			$this->assign("formdata",$formdata);
			return view();
		}
	}
	
	public function logout(){
		session("userinfo",NULL); 
		alert("已退出登录");
		history_reload(-1);
	}
	
	
	
	
	



















	
	
	
	//三级联动
	public function show_area(){
		if(input("post.province")!=""){
			$city = Db::name("city")->where("provinceCode=".input("post.province"))->select();
			return $city;
		}
		if(input("post.city")!=""){
			$district = Db::name("district")->where("cityCode=".input("post.city"))->select();
			return $district;
		}
		exit;
	}
	//文件上传
	public function upload_img(Request $request){
		$file=$request->file('up_headpic_input');
		$info=$file->move("./upload/");
		
		if($info){
			$message = "/upload/".$info->getSaveName();
        }else{
            // 上传失败获取错误信息
            //$message =  $file->getError();
			$message = "图片上传失败:02";
		}
		
		return $message;
		exit;
	}
	//验证用户名重复
	public function check_username(){
		$res = Db::name("user")->where("username='".input("post.username")."'")->find();
		$mes = ($res===NULL)?1:0;
		return $mes;
	}
	
	//重载身份信息(用于身份信息更新之后)
	function reload_userinfo(){
		$id = session("userinfo")['id'];
		session("userinfo",NULL);
		$data = Db::name("user")->where("id=".$id)->find();
		unset($data['password']);
		session("userinfo",$data);
	}
	
	//区域代码转区域
	function get_area($pro,$city,$dist){
		$data = Db::name("province")
			->alias("a")
			->join("home_city b","a.code=b.provinceCode")
			->join("home_district c","b.code=c.cityCode")
			->field("a.name as province,b.name as city,c.name as district")
			->where("a.code=".$pro." AND b.code=".$city." AND c.code=".$dist)
			->find();
		return $data;
	}

}

