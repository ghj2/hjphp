<?php
namespace app\index\controller;

use think\Db;
use think\Controller;
use think\Captcha;
use think\Request;
class User extends Controller {
    
    public function _initialize(){
		$data = get_footprints();
		$res = Db::name("footprints")->insert($data);
		if(!$res){alert("welcome");}
	}
	
    public function index(){		
		href(url("center"));
    }	
	
	public function center(){
		check_login();
		$userinfo = session("userinfo");
		$userinfo['area'] = $this->get_area($userinfo['province'],$userinfo['city'],$userinfo['district']);
		
		$this->assign("userinfo",$userinfo);
		return view();
	}
	
	public function edit_userinfo(){
		check_login();
		if(request()->isPost()){
			$data = request()->only(['headpic','birthday','province','city','district','sign'],'post');
			$id = session('userinfo')['id'];
			$res = Db::name("user")->where("id=".$id)->update($data); 
			if($res!==FALSE){
				$this->reload_userinfo();
				alert("修改成功");
				history_reload(-2);
			}else{
				alert("修改失败");
				history(-1);
			}
		}else{
			$this->assign("userinfo",session("userinfo"));
			$formdata['province'] = Db::name("province")->select();
			$this->assign("formdata",$formdata);
			return view();
		}
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

