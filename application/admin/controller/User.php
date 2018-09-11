<?php
namespace app\admin\controller;

use think\Db;
use think\Controller;
use think\Request;
class User extends Controller {
    	
	public function _initialize(){
		$this->admin_info = admin_check_login();
	}

	public function index(){
		$list = Db::name("user")
			->alias("a")
			->join("home_province b","a.province=b.code",'left')
			->join("home_city c","a.city=c.code","left")
			->join("home_district d","a.district=d.code","left")
			->field("a.*,b.name as province,c.name as city,d.name as district")
			->order("id desc")
			->select();
		$this->assign('list',$list);
		return view();
	}

	public function user_edit(){
		if(request()->isAjax()){
			$editdata = json_decode(input("post.editdata"),true);
			if($editdata['password']==md5("")){
				unset($editdata['password']);
			}
			$uniqe =Db::name("user")->where("username=:un and id!=:id",['un'=>$editdata['username'],'id'=>session("admin_user_edit_id")])->find();
			if($uniqe){
				return "用户名重复";exit;
			}
			$res = Db::name("user")->where("id=".session("admin_user_edit_id"))->update($editdata);
			//session("admin_user_edit_id",NULL);
			if($res!==FALSE){
				return "修改成功";exit;
			}else{
				return "修改失败";exit;
			}
		}else{
			$id = input("param.id");
			session("admin_user_edit_id",$id);
			$firm = Db::name("user")->where("id=".$id)->find();
			$this->assign("firm",$firm);
			$formdata['province'] = Db::name("province")->select();
			$this->assign("formdata",$formdata);
			$viewdata = Db::name("footprints")->where("username='".$firm['username']."'")->order('addtime desc')->select();
			$this->assign("viewdata",$viewdata);
			return view();
		}
	}







	

	
	

}

