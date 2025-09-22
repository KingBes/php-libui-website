<?php

/**
 * 这个是webpress的配置文件
 */
return [
    // 基础配置
    "base" => [
        // 路由组
        "routeGroup" => "__webpress__",
        // 文档目录
        "directory" => app_path('markdown'),
    ],
    // 网站配置
    "webInfo" => [
        // 网站标题
        "title" => "libui",
        // 网站LOGO(图片路径)
        "logo" => "/assets/libui.png",
        // 网站描述
        "description" => "PHP-FFI 绑定 libui,实现跨平台 GUI 编程。",
        // 网站关键词
        "keywords" => "libui, PHP, FFI, GUI",
        // 备案号
        "icp" => "粤ICP备2021157827号",
    ],
    // 主题配置
    "themeConfig" => [
        // 导航栏
        "nav" => [
            [
                "text" => "首页",
                "link" => "/"
            ],
            [
                "text" => "文档",
                "link" => "/api/install",
            ],
            [
                "text" => "示例",
                "link" => "/example/hello",
            ],
            [
                "text" => "打包",
                "link" => "https://github.com/workbunny/bny.php"
            ]
        ],
        // 侧边栏
        "sidebar" => [
            "default" => [
                [
                    "text" => "简介",
                    "children" => [
                        [
                            "text" => "安装",
                            "link" => "/api/install"
                        ],
                        [
                            "text" => "类库",
                            "children" => [
                                [
                                    "text" => "应用类",
                                    "link" => "/api/App"
                                ],
                                [
                                    "text" => "区域类",
                                    "link" => "/api/Area"
                                ],
                                [
                                    "text" => "属性类",
                                    "link" => "/api/Attribute"
                                ],
                                [
                                    "text" => "盒子类",
                                    "link" => "/api/Box"
                                ],
                                [
                                    "text" => "按钮类",
                                    "link" => "/api/Button"
                                ],
                                [
                                    "text" => "复选框类",
                                    "link" => "/api/Checkbox"
                                ],
                                [
                                    "text" => "下拉列表框类",
                                    "link" => "/api/Combobox"
                                ],
                                [
                                    "text" => "控件类",
                                    "link" => "/api/Control"
                                ],
                                [
                                    "text" => "日期时间类",
                                    "link" => "/api/DateTime"
                                ],
                                [
                                    "text" => "日期时间选择器类",
                                    "link" => "/api/DateTimePicker"
                                ],
                                [
                                    "text" => "绘制类",
                                    "link" => "/api/Draw"
                                ],
                                [
                                    "text" => "可编辑下拉框类",
                                    "link" => "/api/EditableCombobox"
                                ],
                                [
                                    "text" => "输入框类",
                                    "link" => "/api/Entry"
                                ],
                                [
                                    "text" => "特点/特征类",
                                    "link" => "/api/Features"
                                ],
                                [
                                    "text" => "表单类",
                                    "link" => "/api/Form"
                                ],
                                [
                                    "text" => "网格类",
                                    "link" => "/api/Grid"
                                ],
                                [
                                    "text" => "组类",
                                    "link" => "/api/Group"
                                ],
                                [
                                    "text" => "图像类",
                                    "link" => "/api/Image"
                                ],
                                [
                                    "text" => "标签类",
                                    "link" => "/api/Label"
                                ],
                                [
                                    "text" => "菜单类",
                                    "link" => "/api/Menu"
                                ],
                                [
                                    "text" => "菜单项类",
                                    "link" => "/api/MenuItem"
                                ],
                                [
                                    "text" => "多行文本框类",
                                    "link" => "/api/MultilineEntry"
                                ],
                                [
                                    "text" => "进度条类",
                                    "link" => "/api/ProgressBar"
                                ],
                                [
                                    "text" => "单选框类",
                                    "link" => "/api/Radio"
                                ],
                                [
                                    "text" => "分隔符类",
                                    "link" => "/api/Separator"
                                ],
                                [
                                    "text" => "滑块类",
                                    "link" => "/api/Slider"
                                ],
                                [
                                    "text" => "微调框类",
                                    "link" => "/api/Spinbox"
                                ],
                                [
                                    "text" => "标签类",
                                    "link" => "/api/Tab"
                                ],
                                [
                                    "text" => "表格类",
                                    "link" => "/api/Table"
                                ],
                                [
                                    "text" => "窗口类",
                                    "link" => "/api/Window"
                                ]
                            ]
                        ]
                    ]
                ]
            ],
            "/example" => [
                [
                    "text" => "示例",
                    "children" => [
                        [
                            "text" => "hello world",
                            "link" => "/example/hello"
                        ],
                        [
                            "text" => "表格",
                            "link" => "/example/table"
                        ],
                        [
                            "text" => "日期时间选择器",
                            "link" => "/example/dateTimePicker"
                        ],
                        [
                            "text" => "按钮",
                            "link" => "/example/button"
                        ],
                        [
                            "text" => "复选框",
                            "link" => "/example/checkbox"
                        ],
                        [
                            "text" => "组合框",
                            "link" => '/example/combobox'
                        ],
                        [
                            "text" => "可编辑组合框",
                            "link" => "/example/editableCombobox"
                        ],
                        [
                            "text" => "输入框",
                            "link" => "/example/entry"
                        ],
                        [
                            "text" => "表单",
                            "link" => "/example/form"
                        ],
                        [
                            "text" => "网格布局",
                            "link" => "/example/grid"
                        ],
                        [
                            "text" => "分组",
                            "link" => "/example/group"
                        ]
                    ]
                ]
            ]
        ],
        // 联系信息
        "socialLinks" => [
            ["icon" => "icon icon-github-fill", "link" => "https://github.com/KingBes/php-libui"],
            ["img" => "/assets/gitcode.png", "link" => "https://gitcode.com/KingBes/php-libui"]
        ]
    ]
];
