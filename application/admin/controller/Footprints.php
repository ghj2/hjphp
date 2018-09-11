<?php
namespace app\admin\controller;

use think\Db;
use think\Controller;
use think\Request;
class Footprints extends Controller {
    	
	public function _initialize(){
		$this->admin_info = admin_check_login();
	}

	public function index(){
		$list = Db::name("footprints")->select();

		$this->assign("list",$list);
		return view();
	}

	public function show_ipaddress(){
		if(request()->isAjax()){
			$ip = input("post.ip");
			$area = json_decode(@file_get_contents("http://api.hjphp.com/ipaddress?ip=".$ip),true);
			$data = $area['result'];
			return $data;
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

}

