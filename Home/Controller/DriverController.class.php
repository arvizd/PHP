<?php
namespace Home\Controller;
use Think\Controller;
class DriverController extends CommonController {
    //展示司机管理首页
    public function index(){
        $db=M('driver');
        $condition['did']=session('did');
        $data=$db->where($condition)->find();
        $this->data=$data;
        $this->display();
    }
    //司机信息更新页面
    public function d_modify(){
        $db=M('driver');
        $condition['did']=session('did');
        $data=$db->where($condition)->find();
        $this->data=$data;
        $this->display();
        
    }
    //司机信息更新处理
    public function d_update(){
        $db=M('driver');
        $condition['tel']=I('tel');
        $data['name']=I('name');
        $data['email']=I('email');
        $data['place']=I('place');
        $data['d_age']=I('d_age');
        $data['status']=I('status');
        $data['name']=I('name');
        $update=$db->where($condition)->save($data);
        if($update){
                $this->success('更新成功，即将返回管理首页',U('Driver/index'));
        }
        else{
                $this->error('更新失败，即将回到更新页面',U('Driver/d_modify'));
        }
    }
    //司机车辆信息
    public function d_select(){
        $db=M('owner');
        $condition['oid']=session('oid');
        $data=$db->where($condition)->find();
        $db1=M('car');
        $count=$db1->count('cid');
        $data1= $db1->join('left join w_driver on  w_driver.did = w_car.did')->select();
       // dump($data1);die();
        $this->data=$data;
        $this->data1=$data1;
        $this->count=$count;
        $this->display();

    }
    //司机信息管理
    public function d_manage(){
        $name=session('name');
        $this->name=$name;
        $db=M('driver');
        $count=$db->count('did');
        $data=$db->select();
       // dump($data1);die();
        $this->data=$data;
        $this->count=$count;
        $this->display();
    }
    //管理司机信息
    public function dm_delete(){
         $db = M("driver");
        $condition['did']=I('did');
        $delete=$db->where($condition)->delete();
        if($delete){
                 $this->success('删除成功，即将前管理页面',U('Driver/d_manage'));
                 
             }
             else{
                $this->error('删除失败，即将前管理页面',U('Driver/d_manage'));
                
            }
    }
}