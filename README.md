# vkesign

vkesign 是一个基于 SAE 和微信平台开发的校内讲座、课程预约网页应用。

该项目采用 [Bootstrap](http://getbootstrap.com/) 前端开发框架，并使用兼容 Bootstrap 框架的表单验证插件 [FormValidation](https://github.com/formvalidation/formvalidation) 对用户输入进行实时检查。服务端运行的 PHP 脚本通过微信公众平台开发者接口获取用户信息，并对 MySQL 数据库进行读写操作将数据反映到前端页面上呈现给用户。

该项目由本人独立完成，也是本人首次使用 PHP 编写的上线项目。2015年05月27日，校内微积分讲座预约上线，课容量250人，40分钟内预约已满，SAE 统计的访问量 PV 为2573，微信公众号新增用户160人。