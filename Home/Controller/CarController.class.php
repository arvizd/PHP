<?php
namespace Home\Controller;
use Think\Controller;
class CarController extends CommonController {
    //查看车辆信息
    public function c_show(){
    	$db=M('driver');
        $condition['did']=session('did');
        $data=$db->where($condition)->find();
        $this->data=$data;
        $db1=M('car');
        $condition1['did']=session('did');
        $count=$db1->where($condition1)->count('cid');
        //dump($count);die();
        $data1=$db1->where($condition1)->select();
       // dump($data1);die();
        $this->data1=$data1;
        $this->count=$count;
    	$this->display();
    }
    //添加车辆信息
    public function c_add(){
    	$db=M('driver');
        $condition['did']=session('did');
        $data=$db->where($condition)->find();
        $this->data=$data;
        $this->display();
        
    }
    //处理添加
     public function dc_add(){
     	//dump($_POST);die();
    	if(!IS_POST) halt('页面不存在');
    	     $db=M('car');
    	     $did=session('did');
             $dataList[] = array('cid'=>I('cid'),'did'=>$did,'c_type'=>I('c_type'),'weight'=>I('weight'),
                'c_long'=>I('c_long'),'c_width'=>I('c_width'),'c_high'=>I('c_high')
                );
             $add=$db->addAll($dataList); 
             if($add){
                 $this->success('添加成功，即将前往查看页面',U('Car/c_show'));
                 
             }
             else{
                $this->error('添加失败，回到添加页面',U('Car/c_add'));
                
            }
         }
    //更新车辆信息
    public function c_modify(){
    	$db=M('driver');
        $condition['did']=session('did');
        $data=$db->where($condition)->find();
        $this->data=$data;
    	$db1=M('car');
        $condition1['cid']=i('cid');
        $data1=$db1->where($condition1)->find();
        $this->data1=$data1;
        $this->display();
       	
    }
    public function dc_modify(){
    	$db=M('car');
        $condition['cid']=I('cid');
        $data['c_type']=I('c_type');
        $data['weight']=I('weight');
        $data['c_long']=I('c_long');
        $data['c_width']=I('c_width');
        $data['c_high']=I('c_high');
        $update=$db->where($condition)->save($data);
        if($update){
                $this->success('更新成功，即将回到查看页面',U('Car/c_show'));
                 
        }
        else{
                $this->error('更新失败，即将回到查看页面',U('Car/c_show'));
                
        }
       	
    }

    //删除车辆信息
    public function c_delete(){
        $db = M("car");
        $condition['cid']=I('cid');
        $delete=$db->where($condition)->delete();
        if($delete){
                 $this->success('删除成功，即将前往查看页面',U('Car/c_show'));
                 
             }
             else{
                $this->error('删除失败，即将前往查看页面',U('Car/c_show'));
                
            }

    }
    public function c_manage(){
        $name=session('name');
        $this->name=$name;
        $db=M('car');
        $count=$db->count('did');
        $data = $db->join('left join w_driver on  w_driver.did = w_car.did')->select();
       // dump($data1);die();
        $this->data=$data;
        $this->count=$count;
        $this->display();
        

    }
    public function cm_delete(){
         $db = M("car");
        $condition['cid']=I('cid');
        $delete=$db->where($condition)->delete();
        if($delete){
                 $this->success('删除成功，即将前管理页面',U('Car/c_manage'));
                 
             }
             else{
                $this->error('删除失败，即将前管理页面',U('Car/c_manage'));
                
            }
    }
}