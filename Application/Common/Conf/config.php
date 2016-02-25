<?php
return array(
	//'配置项'=>'配置值'
	//模版配置
	'VIEW_PATH'		=>		'./Theme/' , //模版目录
	
    'LOAD_EXT_CONFIG' => 'dataconfig',  //加载扩展配置文件
	//默认过滤方法
	'DEFAULT_FILTER'        => 'htmlspecialchars',
	//最大次数

	'max_view'				=> 40,
	'URL_CASE_INSENSITIVE' =>false,		// URL不区分大小写
	'URL_MODEL'             =>  2,       // URL访问模式,可选参数0、1、2、3,代表以下四种模式：
    // 0 (普通模式); 1 (PATHINFO 模式); 2 (REWRITE  模式); 3 (兼容模式)  默认为PATHINFO 模式

	'VAR_MODULE'            =>  'module',     // 默认模块获取变量
	'VAR_CONTROLLER'        =>  'controller',    // 默认控制器获取变量
	'VAR_ACTION'            =>  'action',    // 默认操作获取变量
	
	//伪静态
	'URL_HTML_SUFFIX'=>'html',
	//静态缓存
	'HTML_CACHE_ON'     =>    true, // 开启静态缓存
	'HTML_CACHE_TIME'   =>    600,   // 全局静态缓存有效期（秒）
	'HTML_FILE_SUFFIX'  =>    '.shtml', // 设置静态缓存文件后缀
	'HTML_CACHE_RULES'  =>     array(
		// 定义静态缓存规则     // 定义格式1 数组方式     '静态地址'    =>     array('静态规则', '有效期', '附加规则'),
		// 定义格式2 字符串方式     '静态地址'    =>     '静态规则',

		'Post:post_page'=>array('Post/post_page/{post_id}','600'),
	),

	
	//表单令牌验证相关的配置参数：
	'TOKEN_ON'      =>    false,  // 是否开启令牌验证 默认关闭
	'TOKEN_NAME'    =>    '__hash__',    // 令牌验证的表单隐藏字段名称，默认为__hash__
	'TOKEN_TYPE'    =>    'md5',  //令牌哈希验证规则 默认为MD5
	'TOKEN_RESET'   =>    true,  //令牌验证出错后是否重置令牌 默认为true
	//默认操作
	'DEFAULT_MODULE'        =>  'Open',  // 默认模块
	'DEFAULT_CONTROLLER'    =>  'Post', // 默认控制器名称
	'DEFAULT_ACTION'        =>  'index', // 默认操作名称
	'TMPL_TEMPLATE_SUFFIX'  =>  '.php',     // 默认模板文件后缀
	'DEFAULT_CHARSET'       =>  'utf-8', // 默认输出编码
	
	
	//上传图片配置 由于用到用户变量，需到控制器里面配置。
	//服务器域名
	//'sever_host'					=>  'http://wx.zhituer.com', //本地
	'sever_host'					=>  'http://wx.ccsabc.com', //服务器
	'is_sever'						=>0,				//是否在服务器
);