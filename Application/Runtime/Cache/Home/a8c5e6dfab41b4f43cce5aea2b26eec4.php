<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<FORM method="post" action="/index.php/Home/Form/update">
    标题：<INPUT type="text" name="title" value="<?php echo ($vo["title"]); ?>"><br/>
    内容：<TEXTAREA name="content" rows="5" cols="45"><?php echo ($vo["content"]); ?></TEXTAREA><br/>
    <INPUT type="hidden" name="id" value="<?php echo ($vo["id"]); ?>">
    <INPUT type="submit" value="提交">
  </FORM>