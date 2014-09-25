<?php
namespace Home\Controller;
use Think\Controller;
class FormController extends Controller {
    public function index(){
        $this->display();
    }
    
    public function insert(){
        
        $Form=D('form');
        if($Form->create()){
            $result=$Form->add();
            if($result){
                $this->success('操作成功');
            }
            else {
                $this->error('写入错误');
            }
        }
        else {
                $this->error($form->getError());
        }
    }
    
    public function read($id=0){
        $Form=D('form');
        $data=$Form->find($id);
        dump($data);
        if($data){
            $this->data=$data;
        }
        else {
            $this->error('数据错误');
        }
        $this->display();
    }
    
    public  function delete($id=0){
        $form=  D('form');
        $form->delete($id);
    }
    
    public  function edit($id=0){
        $form=M('form');
        $this->vo=$form->find($id);
        $this->display();
    }
    
    public  function update(){
        $form=D('form');
        if($form->create()){
            $result=$form->save();
            if($result){
                $this->success("操作成功");
            }
            else {
                $this->error("写入错误");
            }
        }
        else {
            $this->error($form->getError());
        }
    }
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

