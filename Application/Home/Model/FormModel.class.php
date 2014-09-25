<?php
namespace Home\Model;
use Think\Model;
class FormModel extends Model{
    protected $_validate = array (
        array('title','require','标题编写'),
    );
    protected $_auto=array(
        array('create_time','time',1,'function'),
    );
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

