<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index(){
		$m=M('Blogs');
        $nowPage=isset($_GET['p']) ? $_GET['p'] : 1;
        $data=$m->limit(      (($nowPage-1)*5) .','. '5'   )->select();
        $this->assign('data',$data);
        import('ORG.Util.Page');//导入分页类
        $count= $m->count();
        $Page = new Page($count,5);
        $show = $Page->show();
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $m->order('timeat')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('list',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
       
        $a=M('types');
        $arr=$a->select();
        $this->assign('lists',$arr);
        
        $this->display();
    }
    public function lists(){
    	$m=M('Blogs');
        $data=$m->select();
        $this->assign('data',$data);
        $a=M('Types');
        $arr=$a->select();
        $this->assign('list',$arr);
        $this->display();
    }
    public function login(){
        $this->display();
    }
    public function dologin(){
        //获取用户名和密码等 和数据中中比对
            //dump($_POST);
            //var_dump($_SESSION);

        $username=$_POST['username'];
        $password=md5($_POST['password']);
        $code=$_POST['code'];
        if(md5($code)!==$_SESSION['verify'])
        {
            $this->error('验证码错误！');
        }
        $m=M('User');
        $data['username']=$username;
        $data['password']=$password;
        $arr=$m->where($data)->select();
        $author=$arr[0]['name'];
        if($arr){
            $_SESSION['username']=$username;
            $_SESSION['author']=$author;
            $_SESSION['id']=$arr[0]['id'];
            $this->success("用户登录成功！",'index');
            //$this->display();
        }else{
            var_dump($arr);
            $this->error('账号或密码错误！');
        }
    }
    public function content(){
        $id=$_GET['id'];
        $this->assign('id',$id);
        $m=M('Blogs');
        $first=$m->getField('id');
        $count=count($m->select());
        if($id<$first || $id>($count+$first-1))
            $this->error("没有文章了！");
        $blog=$m->where("id=$id")->select();
        $this->assign('blog',$blog);
        $a=M('Types');
        $arr=$a->select();
        $this->assign('list',$arr);
        $b=M('Comments');
        $arr2=$b->where("blog=$id")->select();
        $this->assign('com',$arr2);
        $this->display();
    }
    public function comment(){
        $commenter=$_POST['username'];
        $content=$_POST['contents'];
        $email=$_POST['email'];
        $code=$_POST['verifyCode'];
        $blog=$_POST['yt0'];

        if(md5($code)!==$_SESSION['verify']){
            $this->error('验证码错误！');
        }
        
        else{
            $a=M('Comments');
            $data['commenter']=$commenter;
            $data['content']=$content;
            $data['blog']=$blog;
            $data['email']=$email;
            $a->add($data);
            $this->success("评论成功！");
        }
        
    }
    public function add(){
        

        if(!isset($_SESSION['username']) || $_SESSION['username']=='')
            $this->error('请先登录！');
        else{
            $m=M('Types');
            $arr=$m->select();
            $this->assign('types',$arr);
            $this->display();
        }   
    }
    public function doAdd(){
        $title=$_POST['title'];
        $content=$_POST['content'];
        $type=explode(",",$_POST['type']);
        $blog['title']=$title;
        $blog['content']=$content;
        $blog['type']=$type[0];
        $blog['typename']=$type[1];
        $blog['author']=$_SESSION['author'];
        $blog['timeat']=date('y-m-d h:i:s',time());
        $m=M('Blogs');
        $m->add($blog);
        //更改各类型对应的文章数量
        $t=M('Types');
        $typeid=$blog['type'];
        $arr=$t->where("id=$typeid")->select();
        $newnum=$arr[0]['num'] + 1;
        $data['id']=$blog['type'];
        $data['num']=$newnum;
        $t->save($data);
        $this->success("添加成功！",index);

    }
    public function delete(){
        if(!isset($_SESSION['username']) || $_SESSION['username']=='')
            $this->error('请先登录！');
        else{
            $id=$_GET['id'];
            $m=M('Blogs');
            $blog=$m->where("id=$id")->select();
            $typeid=$blog[0]['type'];
            $m->where("id=$id")->delete();
            //更改tp_types中的num
            $t=M('Types');
            $arr=$t->where("id=$typeid")->select();
            $newnum=$arr[0]['num'] - 1;
            $data['id']=$typeid;
            $data['num']=$newnum;
            $t->save($data);
            $this->success("删除成功！",'__URL__/index');
        }
    }
   
    public function change(){
        if(!isset($_SESSION['username']) || $_SESSION['username']=='')
            $this->error('请先登录！');
        else{
            $m=M('Types');
            $arr=$m->select();
            $this->assign('types',$arr);
            

            $id=$_GET['id'];
            $b=M('Blogs');
            $blogarr=$b->where("id=$id")->select();
            $blog=$blogarr[0];
            $this->assign('blog',$blog);
            $this->display();
        }

    }
    public function doChange(){
        $title=$_POST['title'];
        $content=$_POST['content'];
        $blogid=$_GET['id'];
        $type=explode(",",$_POST['type']);
        $blog['id']=$blogid;
        $blog['title']=$title;
        $blog['content']=$content;
        $blog['type']=$type[0];
        $blog['typename']=$type[1];
        $blog['author']=$_SESSION['author'];
        $blog['timeat']=date('y-m-d h:i:s',time());
        $m=M('Blogs');
        $arr=$m->where("id=$blogid")->select();
        $oldTypeId=$arr[0]['type'];//先取出原文章对应的type号
        $m->save($blog);


        //更改各类型对应的文章数量
        //1.原文章的类型对应的数量-1
        $t=M('Types');
        $typeid=$blog['type'];
        $arr=$t->where("id=$oldTypeId")->select();
        $newnum=$arr[0]['num'] - 1;
        $data['id']=$oldTypeId;
        $data['num']=$newnum;
        $t->save($data);

        //2.新的文章类型对应的数量+1
        $arr=$t->where("id=$typeid")->select();
        $newnum=$arr[0]['num'] + 1;
        $data['id']=$blog['type'];
        $data['num']=$newnum;
        $t->save($data);
        $this->success("修改成功！",'__URL__/index');
    }
    public function type(){
        $m=M('Blogs');
        $blogType=$_GET['typename'];
        $nowPage=isset($_GET['p']) ? $_GET['p'] : 1;
        //where("$typename='私人'" )     私人要加引号，否则报错
        $data=$m->where("type='$blogType' ")->limit(      (($nowPage-1)*5) .','. '5'   )->select();
        $this->assign('data',$data);
        import('ORG.Util.Page');//导入分页类
        $count= $m->where("type='$blogType'")->count();
        $Page = new Page($count,5);
        $show = $Page->show();
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $m->order('timeat')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('list',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
       
        $a=M('types');
        $arr=$a->select();
        $this->assign('lists',$arr);
        
        $this->display('index');
        
    }
    public function search(){
        $kw=$_GET['kw'];
        $blog=M('Blogs');
        $result=$blog->query("select * from tp_blogs where title like '%{$kw}%' or content like '%{$kw}%' or author like '%{$kw}%'");    
        $this->assign("data",$result);

        $a=M('types');
        $arr=$a->select();
        $this->assign('list',$arr);

        $this->display('index');
        
    }



}