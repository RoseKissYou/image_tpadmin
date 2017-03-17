<?php
namespace app\index\controller;

use app\common\controller\HomeBase;  // model
use think\Db;                       // db
use app\common\model\Photo as PhotoModel;

class Index extends HomeBase
{

    private $_article_model;
    /*
     * 控制器初始化
     * */
    public function _initialize()
    {
        $this->_article_model = new PhotoModel();
    }

    /*
     * 相册列表
     * */
    public function index($id=0)
    {
        $re =  $this->_article_model->showHomeList($id);
//                var_dump($re);
        //        exit;
        $this->assign('results',$re);
        // 这里做图片显示首页, 解析上传的图片数据
        return view('index');
    }

    /*
     * 相册列表
     * */
    public function detail($id){
        if(!empty($id)){
            // 获取数据
            $re = $this->_article_model->showOneArticle($id);
//            var_dump($re);
            if(is_array($re) && !empty($re)){
                $images_array = $re['0'];
//            var_dump($images_array);
                $photo_str = $images_array['photo'];
//            $photo_array = serialize($photo_str);
                $photo_array = unserialize($photo_str);
               // 对数据进行分页处理 5 张一页显示
                $this->assign('photos',$photo_array);
                $this->assign('results',$re);
                return view('detail');
            }else{
                $this->error('错误页面','Index/index');
            }

        }else{
//            $this->success('新增成功', 'Article/index');
            $this->error('错误页面','Index/index');
        }
    }

            /*
          * show article detail
          * @author rose @date 2017 02 25
          * */

    public function detail_bak($id=0){
        if(!empty($id)){
            // 根据id查询数据
            $re =  $this->_article_model->showOneArticle($id);
            $images_array = $re['0'];
            var_dump($images_array);
            $photo_str = $images_array['photo'];
//            $photo_array = serialize($photo_str);
            $photo_array = unserialize($photo_str);
            var_dump($photo_array);

//            var_dump($re);
            exit;
            $title_array = array(
                'title'     => '文章'     ,
                'id'     => 5
            );
            $this->assign('title',$title_array);

            $this->assign('results',$re);
            return view('detail');
            //  return $this->thinkJson($re);
        }else{
//            return $this->thinkJson($id);
            return 'error';
        }
    }



}
