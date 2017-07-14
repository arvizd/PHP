<?php
namespace Home\Controller;
use Think\Controller;
class SourceController extends CommonController {
    //查看货源信息
    public function s_select(){
        $db=M('driver');
        $condition['did']=session('did');
        $data=$db->where($condition)->find();
        $this->data=$data;
        $db1=M('source');
        $count=$db1->count('sid');
        //dump($count);die();
        $data1=$db1->join('left join w_owner on  w_owner.oid = w_source.oid')->select();
       // dump($data1);die();
        $this->data1=$data1;
        $this->count=$count;
        $this->display();
    }
    //显示货源信息
    public function s_show(){
    	$db=M('owner');
        $condition['oid']=session('oid');
        $data=$db->where($condition)->find();
        $this->data=$data;
        $db1=M('source');
        $condition1['oid']=session('oid');
        $count=$db1->where($condition1)->count('sid');
        //dump($count);die();
        $data1=$db1->where($condition1)->select();
       // dump($data1);die();
        $this->data1=$data1;
        $this->count=$count;
    	$this->display();
    }
    //发布货源信息
    public function s_add(){
    	$db=M('owner');
        $condition['oid']=session('oid');
        $data=$db->where($condition)->find();
        $this->data=$data;
        $this->display();
        
    }
    //处理添加
     public function ds_add(){
     	//dump($_POST);die();
    	if(!IS_POST) halt('页面不存在');
    	     $db=M('source');
    	     $oid=session('oid');
    	     $time=date("Y-m-d H:i:s");
             $dataList[] = array( 'sid'=>null,'oid'=>$oid,'s_time'=>$time,'s_start'=>I('s_start'),'weight'=>I('weight'),
               's_end'=>I('s_end') ,'s_distance'=>I('s_distance'),'amount'=>I('amount'),'des'=>I('des'),
               's_t_time'=>I('s_t_time')
                );
             $add=$db->addAll($dataList); 
             if($add){
                 $this->success('添加成功，即将前往展示页面',U('Source/s_show'));
                 
             }
             else{
                $this->error('添加失败，回到发布页面',U('Source/s_add'));
                
            }
         }
    //更新货源信息
    public function s_modify(){
    	$db=M('owner');
        $condition['oid']=session('oid');
        $data=$db->where($condition)->find();
        $this->data=$data;
    	$db1=M('source');
        $condition1['sid']=I('sid');
        $data1=$db1->where($condition1)->find();
        $this->data1=$data1;
        $this->display();
       	
    }
    public function ds_modify(){
    	$db=M('source');
        $condition['sid']=I('sid');
        $data['s_start']=I('s_start');
        $data['s_end']=I('s_end');
        $data['s_distance']=I('s_distance');
        $data['weight']=I('weight');
        $data['amount']=I('amount');
        $data['des']=I('des');
        $data['status']=I('status');
        $data['s_t_time']=I('s_t_time');
        $update=$db->where($condition)->save($data);
        if($update){
                $this->success('更新成功，即将回到查看页面',U('Source/s_show'));
                 
        }
        else{
                $this->error('更新失败，即将回到查看页面',U('Source/s_show'));
                
        }
       	
    }

    //删除货源信息
    public function s_delete(){
    	// dump(I('sid'));die();
        $db = M("Source");
        $condition['sid']=I('sid');
        $delete=$db->where($condition)->delete();
        if($delete){
                 $this->success('删除成功，即将前往查看页面',U('Source/s_show'));
                 
             }
             else{
                $this->error('删除失败，即将前往查看页面',U('Source/s_show'));
                
            }

    }
     public function s_manage(){
        $name=session('name');
        $this->name=$name;
        $db=M('source');
        $count=$db->count('sid');
        $data = $db->join('left join w_owner on  w_owner.oid = w_source.oid')->select();
       // dump($data1);die();
        $this->data=$data;
        $this->count=$count;
        $this->display();
        

    }
    public function sm_delete(){
         $db = M("source");
        $condition['sid']=I('sid');
        $delete=$db->where($condition)->delete();
        if($delete){
                 $this->success('删除成功，即将前管理页面',U('Source/s_manage'));
                 
             }
             else{
                $this->error('删除失败，即将前管理页面',U('Source/s_manage'));
                
            }
    }
    
}