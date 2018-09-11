<?php
namespace app\admin\controller;

use think\Db;
use think\Controller;
use think\Request;
class Article extends Controller {
    	
	public function _initialize(){
		$this->admin_info = admin_check_login();
	}

	public function index(){
		$list = Db::name("article")->where('`delete`!=1')->select();

		$this->assign('list',$list);
		return view();
	}

	public function article_add(){
		if(request()->isPost()){
			$request = request();
			$data = $request->only(['title','title2','pic','intro','detail','hide','index','tag','viewnum'],"post");
			$data['addtime'] = time();
			$res = Db::name("article")->insert($data);
			if($res){
				alert("添加成功！");
				href(url('index'));
			}else{
				alert("添加失败!4001");
				history(-1);
			}
		}else{
			return view();
		}
	}

	public function article_edit(){
		if(request()->isPost()){
			$request = request();
			$data = $request->only(['title','title2','pic','intro','detail','hide','index','tag','viewnum'],"post");
			$data['updatetime'] = time();
			$res = Db::name("article")->where('id='.session("admin_edit_article_id"))->update($data);
			session("admin_edit_article_id",NULL);
			if($res){
				alert("修改成功！");
				href(url('index'));
			}else{
				alert("修改失败!4002");
				history(-1);
			}
		}else{
			$id = input('param.id');
			session("admin_edit_article_id",$id);
			$firm = Db::name('article')->where('id='.$id)->find();
			$this->assign('firm',$firm);
			return view();
		}
	}

	public function article_del(){
		$id = input('param.id');
		$res = Db::name("article")->where('id='.$id)->setField("delete","1");
		if($res){
			alert('删除成功！');
			history(-1);
		}else{
			alert('删除失败！4003');
			history(-1);
		}
	}
	






	

	
	

}

