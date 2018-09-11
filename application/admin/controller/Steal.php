<?php
namespace app\admin\controller;

use think\Db;
use think\Controller;
use think\Request;
use QL\QueryList;

class Steal extends Controller {
    	
	public function _initialize(){
		$this->admin_info = admin_check_login();
	}

	public function index(){
		return view();
	}

	public function run_worm(){
		$request = request();
		if($request->isAjax()&&input("post.ready")==1){
			$mes = json_encode(['status'=>'-1','message'=>'开始']);
			$url = "https://voice.hupu.com/nba";					//页面
			$rule = array(											//规则
				'title'		=>	[".news-list .list-hd h4 a","text"],
				'url'		=>	[".news-list .list-hd h4 a","href"],
				'realtime'	=>	[".time","title","",function($time){
			        return strtotime($time);
			    }],
			    'addtime'	=>	[".news-list .list-hd h4 a","text","",function($text){
			        return time();
			    }],
			);
			
	    	$ql = QueryList::get($url)->rules($rule); 	
			$data = $ql->query()->getData();		  				
			$ql->destruct(); 
			$data = $data->toArray();

			$last = Db::name("worm_article")->field('max(realtime) as max')->find()['max'];
			foreach($data as $key=>$value){
				if($data[$key]['realtime']<=$last) unset($data[$key]);
			}

			$res = Db::name("worm_article")->insertAll($data);
			if($res){
				$mes = json_encode(['status'=>'1','message'=>'运行完毕','count'=>count($data)]);
			}else{
				$mes = json_encode(['status'=>'0','message'=>'插入MySql失败']);
			}

			return $mes;
			exit;
		}
	}

	public function list(){
		$list = Db::name('worm_article')->where("`delete`!=1")->select();
		$this->assign('list',$list);
		return view();
	}

	public function article_edit(){
		if(request()->isPost()){
			$request = request();
			$data = $request->only(['title','pic','intro','realtime'],"post");
			$data['realtime'] = strtotime($data['realtime']);
			$res = Db::name("worm_article")->where("id=".session("steal_article_edit_id"))->update($data);
			session("steal_article_edit_id",NULL);
			if($res!==FALSE){
				alert("修改成功");
				href(url('list'));
			}else{
				alert("修改失败");
				history(-1);
			}
		}else{
			$id = input("param.id");
			session("steal_article_edit_id",$id);
			$content = Db::name("worm_article")->where("id=".$id)->find();
			$this->assign("content",$content);
			return view();
		}
	}

	public function article_del(){
		$id = input('param.id');
		$res = 	Db::name("worm_article")->where("id=:id",['id'=>$id])->setField("delete",1);
		if($res){
			alert("删除成功");
			history(-1);
		}else{
			alert("删除失败4003");
			history(-1);
		}
	}



























	// public function run_worm_test(){
	// 	$url = "https://voice.hupu.com/nba";					//页面
	// 	$rule = array(											//规则
	// 		'title'	=>	[".news-list .list-hd h4 a","text"],
	// 		'url'	=>	[".news-list .list-hd h4 a","href"],
	// 		'time'	=>	[".time","title","",function($time){
	// 	        return strtotime($time);
	// 	    }],
	// 	    'addtime'	=>	[".news-list .list-hd h4 a","text","",function($text){
	// 	        return time();
	// 	    }],
	// 	);
	
 //    	$ql = QueryList::get($url)->rules($rule); 	
	// 	$data = $ql->query()->getData();		  				
	// 	$ql->destruct(); 

	// 	var_dump($data);exit;

	// }

}

