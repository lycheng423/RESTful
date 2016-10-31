<?php
/*
 * 发送：
 * GET  http://localhost/restful/class  列出所有班级
 * GET  http://localhost/restful/class/1    获取指定班的信息
 * POST http://localhost/restful/class?name=SAT班&count=23 新建一个班
 * PUT  http://localhost/restful/class/1?name=SAT班&count=23  更新指定班的信息（全部信息）
 * PATCH  http://localhost/restful/class/1?name=SAT班    更新指定班的信息（部分信息）
 * DELETE  http://localhost/restful/class/1 删除指定班
*/
//数据操作类
require('Request.php');
//输出类
require('Response.php');
//获取数据
$data = Request::getRequest();
//输出结果
Response::sendResponse($data);

