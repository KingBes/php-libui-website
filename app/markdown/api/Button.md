## 按钮类

> 按钮类 `use Kingbes\Libui\Button;`

<br>

#### 创建按钮

静态方法`create`

- 参数
    - `string` `$text` 按钮文本
- 返回
    - `CData` 按钮句柄

```php
public static function create(string $text): CData
```

<br>

#### 获取按钮文本

静态方法`text`

- 参数
    - `CData` `$button` 按钮句柄
- 返回
    - `string` 按钮文本

```php
public static function text(CData $button): string
```

<br>

#### 设置按钮文本

静态方法`setText`

- 参数
    - `CData` `$button` 按钮句柄
    - `string` `$text` 按钮文本
- 返回
    - `void`

```php
public static function setText(CData $button, string $text): void
```

<br>

#### 设置按钮点击事件

静态方法`onClicked`

- 参数
    - `CData` `$button` 按钮句柄
    - `callable<$button>` `$callback` 回调函数
- 返回
    - `void`

```php
public static function onClicked(CData $button, callable $callback): void
```

<br>

#### 设置按钮字体

静态方法`font`

- 参数
    - `CData` `$button` 按钮句柄
    - `CData` `$desc` 字体描述
- 返回
    - `void`

```php
public static function font(CData $b, CData $desc): void
```

<br>

#### 设置按钮字体改变事件

静态方法`onFontChanged`

- 参数
    - `CData` `$btn` 按钮句柄
    - `callable<$btn>` `$callback` 回调函数
- 返回
    - `void`

```php
public static function onFontChanged(CData $btn, callable $callback): void
```

<br>

#### 创建字体描述

静态方法`createFont`

- 参数
    - 无
- 返回
    - `CData` 字体描述句柄

```php
public static function createFont(): CData
```

<br>

#### 释放字体描述

静态方法`freeFont`

- 参数
    - `CData` `$desc` 字体描述句柄
- 返回
    - `void`

```php
public static function freeFont(CData $desc): void
```

<br>

#### 获取按钮颜色

静态方法`color`

- 参数
    - `CData` `$btn` 按钮句柄
- 返回
    - `object` 字体颜色对象

```php
public static function color(CData $btn): object
```

<br>

#### 设置按钮颜色

静态方法`setColor`

- 参数
    - `CData` `$btn` 按钮句柄
    - `float` `$r` 红色
    - `float` `$g` 绿色
    - `float` `$b` 蓝色
    - `float` `$a` 透明度
- 返回
    - `void`

```php
public static function color(CData $btn, float $r, float $g, float $b, float $a): void
```

<br>

#### 获取按钮字体颜色改变事件

静态方法`colorOnChanged`

- 参数
    - `CData` `$btn` 按钮句柄
    - `callable<$btn>` `$callback` 回调函数
- 返回
    - `void`

```php
public static function colorOnChanged(CData $btn, callable $callback): void
```

<br>

#### 创建颜色描述

静态方法`createColor`

- 参数
    - 无
- 返回
    - `CData` 颜色描述句柄

```php
public static function createColor(): CData
```