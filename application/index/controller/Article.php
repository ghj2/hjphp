<?php
namespace app\index\controller;

use think\Db;
use think\Controller;
use think\Captcha;
use think\Request;
class Article extends Controller {

	public function _initialize(){
		$data = get_footprints();
		$res = Db::name("footprints")->insert($data);
		if(!$res){alert("welcome");}
	}

	public function index(){
		$where = "`delete`!=1 and `hide`!=1";
		$warr = [];
		$order = "`index` desc,`addtime` desc";

		$hot_list = Db::name("article")->where($where)->order("viewnum desc")->limit(5)->select();
		$this->assign("hot_list",$hot_list);

		if(request()->isPost()){//搜索
			if(input("post.searchword")){
				$where = $where." and `title` LIKE :searchword";
				$warr['searchword']="%".input('post.searchword')."%";
			}
		}
		$list = Db::name("article")->where($where,$warr)->order($order)->paginate(10);
		$this->assign('list',$list);

		$options = Db::name("options")->where('id=1')->find();
		$this->assign("options",$options);

		return view();
	}

	public function detail(){
		$id = input("param.id");
		$set_view_num = Db::name("article")->where("id=:id",['id'=>$id])->setInc("viewnum",1);
		$where = "`delete`!=1 and `hide`!=1";
		
		$options = Db::name("options")->where("id=1")->find();
		$this->assign("options",$options);
		
		$hot_list = Db::name("article")->where($where)->order("viewnum desc")->limit(5)->select();
		$this->assign('hot_list',$hot_list);

		$content = Db::name("article")->where($where." and id=:id",['id'=>$id])->find();
		$content['pre'] = Db::name("article")->where($where." and addtime<".$content['addtime'])->order("addtime desc")->find();
		$content['next'] = Db::name("article")->where($where." and addtime>".$content['addtime'])->order("addtime asc")->find();
		$this->assign("content",$content);

		$comment = Db::name("article_comment")
			->alias("a")
			->join("home_user b","a.uid=b.id","LEFT")
			->field("a.*,b.username as uid")
			->where("a.aid=:aid",['aid'=>$id])
			->order("addtime desc")
			->paginate(5);
		$this->assign("comment",$comment);

		return view();
	}

	public function comment_add(){
		if(request()->isPost()){
			if(session("userinfo")==""){
				return "4001";exit;
			}
			$postdata = json_decode(input("post.data"),true);
			$data = array(
				'uid'		=>	session("userinfo")['id'],
				'aid'		=>	$postdata['aid'],
				'content'	=>	$postdata['content'],
				'addtime'	=>	time(),
			);
			$res = Db::name("article_comment")->insert($data);
			if($res){
				return "1";exit;
			}else{
				return "4002";exit;
			}
		}
	}

	public function comment_zan(){
		if(request()->isAjax()){
			$cid = str_replace("comment_img","",input("post.cid"));
			$res = Db::name("article_comment")->where("id=:cid",['cid'=>$cid])->setInc("dianzan",1);
			$mes = ($res)?"1":"4001";
			return $mes;
		}
	}

















































}