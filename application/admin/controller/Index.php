<?php
namespace app\admin\controller;

use think\Db;
use think\Controller;
use think\Request;
class Index extends Controller {
    	
	public function _initialize(){
		if(request()->action()!="login"&&request()->action()!="trans_md5"){
			$this->admin_info = admin_check_login();
		}
	}

	public function index(){
		$data['visitnum'] = Db::name("footprints")->count();
		$data['usernum'] = Db::name("user")->count();
		$data['articlenum'] = Db::name("article")->where("`delete`!=1")->count();
		$data['messagenum'] = Db::name("message")->where("`delete`!=1")->count();
		$this->assign("data",$data);

		$options = Db::name("options")->select()[0];
		$options['friend_link'] = json_decode($options['friend_link'],true);
		$this->assign('options',$options);

		return view();
	}



	public function login(){
		if(request()->isPost()){
			$request = request();
			$data = $request->only(['username','password'],"post");
			$res = Db::name("admin")->where("username=:un and password=:pw",['un'=>$data['username'],'pw'=>$data['password']])->find();
			if($res){
				unset($res['password']);
				session("admin_info",$res);
				alert("登录成功");
				href(url('index'));
			}else{
				alert("登录失败");
				history(-1);
			}
		}else{
			return view();
		}
	}

	public function logout(){
		session("admin_info",NULL);
		alert("退出成功");
		href(url("login"));
	}

	public function trans_md5(){
		$word = input("get.word");
		return md5($word);
	}

	public function set_options(){
		if(request()->isAjax()){
			$id = 1;
			$request = request();
			switch (input("post.type")) {
				case 'grjs':
					$data = $request->only(['grjs_row1','grjs_row2','grjs_pic','grjs_intro'],'post');
					break;
				case 'links':
					$count = (count(input("post."))-1)/3;
					if($count!=0){
						for($i=0;$i<$count;$i++){
							if(input('post.link_index'.$i)!=''&&input('post.link_title'.$i)!=''&&input('post.link_url'.$i)!=''){
								$postdata[$i]['index'] = input('post.link_index'.$i);
								$postdata[$i]['title'] = input('post.link_title'.$i);
								$postdata[$i]['url'] = input('post.link_url'.$i);
							}
						}
						$data['friend_link'] = json_encode($postdata);
					}else{
						$data['friend_link'] = "";
					}
					break;
				case 'hp':
					$data = $request->only(["homepage_pic","homepage_title"],"post");
					break;
				case 'wx':
					$data = $request->only(["wechat_pic"],"post");
					break;
				default:
					break;
			}
			$res = Db::name('options')->where('id='.$id)->update($data);
			if($res!==FALSE){
				return 1;
			}else{
				return '4001';
			}
		}
	}














    public function index1(){		
	
    	return view();
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

