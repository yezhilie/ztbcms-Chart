<?php

return array(
    array(
        //父菜单ID，NULL或者不写系统默认，0为顶级菜单
        "parentid" => 37,
        //地址，[模块/]控制器/方法
        "route" => "Chart/Index/index",
        //类型，1：权限认证+菜单，0：只作为菜单
        "type" => 0,
        //状态，1是显示，0不显示（需要参数的，建议不显示，例如编辑,删除等操作）
        "status" => 1,
        //名称
        "name" => "图表模块",
        //备注
        "remark" => "图表模块！",
        //子菜单列表
        "child" => array(
            array(
                "route" => "Chart/Index/create",
                "type" => 1,
                "status" => 1,
                "name" => "制作图表",
            ),
            array(
                "route" => "Chart/Index/lists",
                "type" => 1,
                "status" => 1,
                "name" => "已有图表",
            )
        ),
    ),
);
