<?php
/**
 * Created by PhpStorm.
 * User: aeball
 * Date: 2017/3/14
 * Time: 19:37
 */

/*
 * 图片管理系统
 * */
namespace app\admin\controller;

use app\common\controller\AdminBase;
// 使用文章的分类
use app\common\model\Category as CategoryModel;
use app\common\model\Photo as PhotoModel;
use think\Db;



class Photo extends AdminBase
{
    protected $photo_model;
    protected $category_model;
    
    /*
     * 初始化分类信息
     * */
    protected function _initialize()
    {
    	parent::_initialize();
    	$this->article_model  = new PhotoModel();
    	$this->category_model = new CategoryModel();
    
    	$category_level_list = $this->category_model->getLevelList();
    	$this->assign('category_level_list', $category_level_list);
    }
    
    /*
     * show all blogs
     * */
    public function index($cid = 0, $keyword = '', $page = 1)
    {
        $map   = [];
        $field = 'id,title,cid,author,reading,status,create_time,sort';

        if ($cid > 0) {
            $category_children_ids = $this->category_model->where(['path' => ['like', "%,{$cid},%"]])->column('id');
            $category_children_ids = (!empty($category_children_ids) && is_array($category_children_ids)) ? implode(',', $category_children_ids) . ',' . $cid : $cid;
            $map['cid']            = ['IN', $category_children_ids];
        }

        if (!empty($keyword)) {
            $map['title'] = ['like', "%{$keyword}%"];
        }

        $article_list  = $this->article_model->field($field)->where($map)->order(['create_time' => 'DESC'])->paginate(15, false, ['page' => $page]);
        $category_list = $this->category_model->column('name', 'id');

        return $this->fetch('index', [
            'article_list' => $article_list,
            'category_list' => $category_list,
            'cid' => $cid, 'keyword' => $keyword
        ]);
    }

    /**
     * 添加文章
     * @return mixed
     */
    public function add()
    {
        return $this->fetch();
    }


    /**
     * 保存文章
     */
    public function save()
    {
        if ($this->request->isPost()) {
            $data            = $this->request->param();
            $imageSize = getimagesize('.'.$data['thumb']);
            $width = $imageSize[0];
            $height = $imageSize[1];
            // validate 验证数据
            $validate_result = $this->validate($data, 'Article');
            if ($validate_result !== true) {
                $this->error($validate_result);
                echo '保存失败';
            } else {
                if($data['width'] == $width || $data['height'] == $height){
                        $data['width'] = 300;
                        $data['height'] = 500;
                }
                if ($this->article_model->allowField(true)->save($data)) {
                    //   $this->success('保存成功');
                    //设置成功后跳转页面的地址，默认的返回页面是$_SERVER['HTTP_REFERER']
                    $this->success('新增成功', 'Photo/index');
                } else {
                    $this->error('保存失败');
                }
            }
        }
    }

    /**
     * 编辑文章
     * @param $id
     * @return mixed
     */
    public function edit($id)
    {
        $article = $this->article_model->find($id);
        return $this->fetch('edit', ['article' => $article]);
    }

    /**
     * 更新文章
     * @param $id
     */
    public function update($id)
    {
        if ($this->request->isPost()) {
            $data            = $this->request->param();
            $validate_result = $this->validate($data, 'Photo');

            if ($validate_result !== true) {
                $this->error($validate_result);
            } else {
                // 保存数据到数据库

                if ($this->article_model->allowField(true)->save($data, $id) !== false) {
//                    $this->success('更新成功');
                    $this->success('更新成功', 'Photo/index');
                } else {
                    $this->error('更新失败');
                }
            }
        }
    }

    /**
     * 删除文章
     * @param int   $id
     * @param array $ids
     */
    public function delete($id = 0, $ids = [])
    {
        $id = $ids ? $ids : $id;
        if ($id) {
            if ($this->article_model->destroy($id)) {
                $this->success('删除成功');
            } else {
                $this->error('删除失败');
            }
        } else {
            $this->error('请选择需要删除的文章');
        }
    }

    /**
     * 文章审核状态切换
     * @param array  $ids
     * @param string $type 操作类型
     */
    public function toggle($ids = [], $type = '')
    {
        $data   = [];
        $status = $type == 'audit' ? 1 : 0;

        if (!empty($ids)) {
            foreach ($ids as $value) {
                $data[] = ['id' => $value, 'status' => $status];
            }
            if ($this->article_model->saveAll($data)) {
                $this->success('操作成功');
            } else {
                $this->error('操作失败');
            }
        } else {
            $this->error('请选择需要操作的文章');
        }
    }





}