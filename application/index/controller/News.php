<?php
namespace app\index\controller;

use think\Db;
use think\Controller;
use think\Captcha;
use think\Request;
class News extends Controller {

	public function _initialize(){
		$data = get_footprints();
		$res = Db::name("footprints")->insert($data);
		if(!$res){alert("welcome");}
	}
	
	public function index(){
		$where = "`delete`!=1";
		$warr = [];
		if(request()->isPost()){
			$where = $where." and title like :like";
			$warr['like'] = "%".input("post.searchword")."%";
		}
		if(input("param.from")!=''){
			$where = $where." and `from`=:from";
			$warr['from'] = input("param.from");
		}
		$list = Db::name("worm_article")->where($where,$warr)->order("realtime desc")->paginate(10);
		$this->assign("list",$list);

		$options = Db::name("options")->where('id=1')->find();
		$this->assign("options",$options);

		return view();
	}

















































}