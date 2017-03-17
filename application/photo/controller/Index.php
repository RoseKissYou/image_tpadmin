<?php
/**
 * Created by PhpStorm.
 * User: aeball
 * Date: 2017/3/14
 * Time: 18:16
 */

namespace app\photo\controller;

use app\common\controller\HomeBase;
use think\Db;
use app\common\model\Article as ArticleModel;

class Index extends HomeBase
{
    private $_article_model;
    /*
     * 控制器初始化
     * */
    public function _initialize()
    {
        $this->_article_model = new ArticleModel();
    }
    /*
     * 相册列表
     * */
    public function index($id=0)
    {
        $re =  $this->_article_model->showHomeList($id);
        //        var_dump($re);
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


}