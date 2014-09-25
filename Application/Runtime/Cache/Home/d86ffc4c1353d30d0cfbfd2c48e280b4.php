<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<table>
<tr>
    <td>id:</td>
    <td><?php echo ($data["id"]); ?></td>
</tr>
<tr>
    <td>标题：</td>
    <td><?php echo ($data["title"]); ?></td>
</tr>
<tr>
    <td>内容：</td>
    <td><?php echo ($data["content"]); ?></td>
</tr>
</table>