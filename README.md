1.账号 123456 密码123456
2.文件地址:
  配置文件   在Blog/Home/Conf
  后台文件    Blog/Home/  Lib/Action/Indexaction.class.php  
  前台文件    Blog/Home/Tpl/index
  缓存文件    Blog\Home\Runtime\Cache
  引入的CSS js 图片   Blog\Public（这个当时二了，把网页连接上的css，js也复制粘贴过来到本地文件了）
4.数据库说明
  ty_blog:   typename(类别 汉字型)  type（类型  编号型）  当时栏目名设计的不是太好  这两个栏目别人看着可能有些混淆了，解释一下
  ty_user    username (账号)   password（密码  MD5）  name(网名)
  ty_comments    blog(该评论对应的文章的id号)   commenter  评论者
  ty_types      id (类型编号)    typename(类别 汉字型)    num(该类型的文章有多少篇)
3.功能简介 
  点左上角Home或Toruneko 是首页列表  
  Login是登陆  （输入为空会有弹框提示）
  中间是文章列表，右下角有“增删改”功能  增删改之前要检测是否登陆，没有的话就不能,修改是的类别下拉菜单是跟数据库tp_types关联，选项会随数据库更该而改变
  右上角是搜索 (输入为空会有弹框提示) 
  右侧边栏连接数据库tp_types显示类别和数量，如果数据库中的“类别”一栏有更改，页面上都可以更新；文章增删该之后各类别对应的数量显示会改变（当时每个分类有多少篇文章没有数清楚，所以显示的ty_types里的num跟ty_blogs里的对不上，数一下改一下num就好了）
  点击右侧边栏的某一类，页面会显示该类的所有文章
  点击标题进入文章详情，标题下边有括号显示分类，文章下边有“上一篇” ,“下一篇”可以翻篇，再往下是显示评论，评论者（评论时间没写，原理跟文章的发表时间一样啦），再往下是发表评论的框，为空的话有提示
  最下面是分页