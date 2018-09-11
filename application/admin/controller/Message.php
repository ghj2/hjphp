<?php
namespace app\admin\controller;

use think\Db;
use think\Controller;
use think\Request;
class Message extends Controller {
    	
	public function _initialize(){
		$this->admin_info = admin_check_login();
	}

	public function index(){
		$list = Db::name("message")
			->alias("a")
			->join("home_user b","a.uid=b.id","LEFT")
			->field("a.*,b.username as uid")
			->where("a.delete!=1")
			->select();
		$this->assign('list',$list);
		return view();
	}

	public function message_edit(){
		if(request()->isPost()){
			$request = request();
			$data = $request->only(['orderid','content'],"post");
			$res = Db::name("message")->where("id=".session("admin_message_edit_id"))->update($data);
			session("admin_message_edit_id",NULL);
			if($res!==FALSE){
				alert("更新成功");
				href(url("index"));
			}else{
				alert("更新失败");
				history(-1);
			}
		}else{
			$id = input("param.id");
			session("admin_message_edit_id",$id);
			$firm = Db::name("message")->where("id=:id",['id'=>$id])->find();
			$this->assign("firm",$firm);
			return view();
		}
	}
	
	public function message_del(){
		if(request()->isGet()){
			$id = input("param.id");
			$res = Db::name("message")->where("id=".$id)->setField("delete",1);
			if($res){
				alert("删除成功");
				history(-1);
			}else{
				alert("删除失败");
				history(-1);
			}
		}
		
	}







	

	
	

}

