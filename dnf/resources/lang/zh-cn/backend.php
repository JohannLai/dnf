<?php

return [
    'dnf' => '官网',
    'logout' => '退出',
    'dashboard' => '仪表盘',
    'workspace' => '工作台',
    'menu-management' => '菜单管理',
    'group-management' => '用户组管理',
    'user-management' => '用户管理',
    'category-management'=>'栏目管理',
    'article-management'=>'文章管理',
    'tag-management'=>'标签管理',
    'trashed'=>'回收站',
    'newest-action' => '最新动态',
    'where' => '所在位置',
    'signin' => '登陆',
    'username' => '用户名',
    'password' => '密码',
    'add-menu'=> '增加功能菜单',
    'add-group'=> '增加用户组',
    'add-user'=> '增加用户',
    'create'=>'添加文章',
    'edit-user'=> '编辑用户',
    'edit-self'=> '编辑个人信息',
    'account' => '帐号',
    'cancel' => '取消',
    'upload' => '提交',
    'save' => '保存',
    'article-select'=>'文章选项',
    'post' =>'发表',
    'character-left' => '字符剩余长度',
    'sort' => '排序',
    'update-time' => '更新日期',
    'create-time' => '创建日期',
    'operate' => '操作',
     'Forcibly remove' => '强制删除',
    'save-failed' => '保存失败',
    'none-data' => '数据不存在',
    'edit' => '编辑',
    'delete' => '删除',
    'change' => '改变',
    'option' => '选项',
    'acl-set' => '权限设置',
    'return' => "返回",
    'all-select' => "全选",
    'envelope' => "站内信",
    'unread' => '未读',
    'read' => '已读',
    'send'=> '发送',
    'sended' => '已发送',
    'send-envelope' => '发送站内信',
    'subject' => '标题',
    'send-to' => '发送至',
    'more-message' => '更多消息',

    # status button
    'button-status' => [
        # 状态
        'status' => [
            0 => '禁止',
            1 => '正常',
        ],
        #文章状态
        'article-status' => [
            0 => '已发布',
            1 => '草稿',
        ],
    ],


    # Form Label
    'form' => [
        'menu' => '菜单名',
        'module' => '模块名',
        'class' => '类名',
        'function' => '函数名',
        'parent-function' => '父级功能',
        'mark' => '备注',
        'status' => '状态',
        'group' => '用户组名',
        'group-level' => '用户组等级',
        'user' => '用户名',
        'realname' => '真实姓名',
        'last-login-time' => '最后登陆时间',
        'mobile' => '电话',
        'password' => '密码',
        'old-password' => '原密码',
        'password-confirmation' => '重复密码',
        'blog' =>[
	    'title'=>'标题',
	    'author' =>'作者',
	    'tag' =>'标签',
	    'category'=>'栏目名',
                 'category-belong' => '所属栏目',
                  'creator'=>'创建人',
                  'category-time'=>'创建时间',
                  'update-time'=>'更新时间',
	     'description' =>'简介',
	     'content'=>'内容',
	     'sort'=>'顺序',
                  'source'=>'来源',
                  'status'=>'状态',
	     'view'=>'浏览量',
                   'post'=>'发布',
                   'trashed'=>'草稿',
                   'updater'=>'更新者',
                    'deleter'=>'删除者',
                   'tags'=>'标签',
	],
    ],

    # website page title
    'title' => [
        'index' => 'Vtmer官网后台',
        'login' => 'Vtmer官网后台-登陆',
        'inbox' => '站内信',
        'acl' => [
            'index' => '菜单管理',
            'add' => '添加菜单',
        ],
        'blog' => [
            'index' => '博客管理',
            'trashed' => '文章回收站',
            'create' => '博客--添加文章',
            'update'=>'更新文章',
            'category'=>'栏目管理',
            'article'=>'文章管理',
            'tag' => '标签管理',
        ],
    ],

    # messages
    'messages' => [
        'about-module' => '如果涉及模块名，那么请填写，否则可以不填写',
        'select-parent' => '请选择父级功能',   
        'select-user' => '请选择用户',
        'select-group' => '请选择用户组',
        'select-category' => '请选择栏目',
        'select-status' => '请选择文章状态',
        'input-source' => '请输入文章来源',
        'input-description' => '请输入文章简介',
        'cant-change' => '不可更改',
        'confirm' => '确定此操作吗?',
        'select-all' => '点击我全选',
    ],
  
  
    # rules messages
    'rules' => [
        'max' => [
            'name' => '名称长度最长为：',
            'module' => '模块名长度最长为：',
            'mark' => '备注名长度最长为：',
            'content' => '内容长度最长为:',

        ],
        'URL' => '图片URL 需要符合URL格式',
        'required' => [
            'name' => '名称不为空',
            'module' => '模块名不为空',
            'class' => '类名不为空',
            'function' => '函数名不为空',
            'realname' => "真实名称",
            'group-id' => '用户组ID不为空',
            'content' => '内容不为空',
            'receiver-id' => '接收人ID不为空',
            'receiver-name' => '接收人姓名不为空',
             'title' => '文章标题不能为空',
             'author'=>'文章作者不能为空',
            'content' => '栏目不能为空',
             'creator' => '创建人不能为空',
             'updater'=>'更新者不能为空',
             'description'=>'文章简介不能为空',
             'content' =>'文章内容不能为空',
             'source' =>'文章来源不能为空',
             'category_id'=>'文章栏目不能为空',
             'tag_id'=>'文章标签不能为空',
        ],
        'unique' => [
            'name' => '名称必须唯一',
             'category' => '栏目必须唯一',
             'title' => '文章标题必须唯一',
              'tag' => '标签必须唯一',
             
        ],
        'integer' => [
            'pid' => '父级菜单值数据类型错误',
            'level' => '等级数据类型错误',
            'mobile' => '电话',
            'group-id' => '用户组ID数据类型错误',
            'receiver-id' => '接收人ID数据类型错误',
        ],
        'between' => [
            'name' => '名称长度范围为',
            'level' => '等级范围为',
            'mobile' => '电话范围为',
            'password' => '密码长度范围为',
             'title' => '文章标题长度范围为:',
            'source' => '文章来源长度范围为:',
            'category' => '栏目长度范围为:',
             'creator' => '创建人长度范围为:',
             'updater'=>'更新者长度范围为:',
              'author'=>'作者长度范围为:',
              'tag'=>'标签长度范围为:',
        ],
        'confirmed' => [
            'password' => '密码前后不一致',
        ]
    ],

    # 动态分类
    'action' => [
        '1' => '新建了菜单',
        '2' => '编辑了菜单',
        '3' => '删除了菜单',
        '4' => '新建了用户组',
        '5' => '编辑了用户组',
        '6' => '删除了用户组',
        '7' => '更改了用户组状态',
        '8' => '更改了用户组权限',
        '9' => '新增了用户',
        '10' => '编辑了用户',
        '11' => '删除了用户',
        '12' => '更改了用户状态',
        '13' => '更改了用户权限',
        '14' => '新建了栏目',
        '15' => '更改了栏目',
        '16' => '删除了栏目',
        '17' => '添加了文章',
        '18' => '编辑了文章',
        '19' => '更改了文章状态',
        '20' => '删除了文章',
        '21' => '新增了标签',
        '22' => '编辑了标签',
        '23' => '删除了标签',

    ],

    # pusher channel
    'pusher' => [
        'channel' => [
            'mail' => 'mail',
        ],
    ],
];
