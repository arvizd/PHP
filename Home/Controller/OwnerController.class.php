<?php
namespace Home\Controller;
use Think\Controller;
class OwnerController extends CommonController {
    //展示货主管理首页
    public function index(){
        $db=M('owner');
        $condition['oid']=session('oid');
        $data=$db->where($condition)->find();
        $this->data=$data;
        $this->display();
    }
    //货主信息更新页面
    public function o_modify(){
        $db=M('owner');
        $condition['oid']=session('oid');
        $data=$db->where($condition)->find();
        $this->data=$data;
        $this->display();
        
    }
    //货主信息更新处理
    public function o_update(){
        $db=M('owner');
        $condition['tel']=I('tel');
        $data['name']=I('name');
        $data['email']=I('email');
        $data['place']=I('place');
        $data['comp']=I('comp');
        $update=$db->where($condition)->save($data);
        if($update){
                $this->success('更新成功，即将返回管理首页',U('Owner/index'));
        }
        else{
                $this->error('更新失败，即将回到更新页面',U('Owner/o_modify'));
        }
    }
    public function o_manage(){
        $name=session('name');
        $this->name=$name;
        $db=M('owner');
        $count=$db->count('oid');
        $data=$db->select();
       // dump($data1);die();
        $this->data=$data;
        $this->count=$count;
        $this->display();
    }
    public function dm_delete(){
         $db = M("Owner");
        $condition['oid']=I('oid');
        $delete=$db->where($condition)->delete();
        if($delete){
                 $this->success('删除成功，即将前管理页面',U('Owner/o_manage'));
                 
             }
             else{
                $this->error('删除失败，即将前管理页面',U('Owner/o_manage'));
                
            }
    }
}