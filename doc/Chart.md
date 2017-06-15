## 图表模块

#### 参数

本模块最后得到的图表链接一般是:
```
http://xxxx/Chart/Api/getChart&token=a9a41bec8365599185c729e2047ae114
```

如果需要你也可以增加一些额外的参数

- 「size」,  格式 ：600 * 400（即，宽度 * 高度）



#### 脚本

自定义脚本分两种，「X 轴自定义脚本」和「Y 轴自定义脚本」，分别继承基类 `Chart\Lib\BaseScriptX` 和 `Chart\Lib\BaseScriptY`。

两者均需要实现 `run` 方法，`run` 方法应该返回一个以 `,` 分隔的，有序的，格式化字符串，格式如下：
```
"北京,天津,河北,..........,香港"
```

「X 轴自定义脚本」则需要多实现一个方法 `getField`，该方法返回 Y 轴所用的基准字段名，如上例中返回 「parent_id」。

#### 什么时候要用自定义脚本

当数据表内的原生字段无法直接作为统计字段时，举个例子：

例如我们需要统计各个省份里面有多少个市，但是我们的省市数据是分别存储在两个表内，通过字段映射关联关系。
如下图示：

![图片](https://dn-coding-net-production-pp.qbox.me/a03bcc9a-6014-4320-90b0-d98aea269a79.png) 
  
 显然我们基于 「parent_id」 去统计也能得到统计数据，但是 「parent_id」 具体指的是哪个省份？
 显然这是很不友好的阅读体验。
 
![图片](https://dn-coding-net-production-pp.qbox.me/df488350-fb8b-4c28-9f71-4128a99caef4.png)
 
 这时候我们就需要一些操作去获取拥有友好阅读体验的「省份名称」,这就需要编写脚本来获取「parent_id」对应的省份名了。

![图片](https://dn-coding-net-production-pp.qbox.me/8d37e9eb-e3a4-4931-a417-5246f72bf6cb.png) 

下面是示例代码：[脚本示例](https://github.com/ztbcms/ztbcms-Chart/blob/develop/doc/GetProvince.class.php)