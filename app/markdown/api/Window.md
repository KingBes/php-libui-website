## 窗口类

> 窗口类 `use Kingbes\Libui\Window;`

<br>

#### 获取窗口标题

静态方法`title`

- 参数
    - `CData` `$window` 窗口
- 返回
    - `string` 标题

```php
public static function title(CData $window): string
```

<br>

#### 设置窗口标题

静态方法`setTitle`

- 参数
    - `CData` `$window` 窗口
    - `string` `$title` 标题
- 返回
    - `void`

```php
public static function setTitle(CData $window, string $title): void
```

<br>

#### 设置窗口内容大小

静态方法`setContentSize`

- 参数
    - `CData` `$window` 窗口
    - `int` `$width` 宽度
    - `int` `$height` 高度
- 返回
    - `void`

```php
public static function setContentSize(CData $window, int $width, int $height): void
```

<br>

#### 设置窗口是否全屏

静态方法`fullscreen`

- 参数
    - `CData` `$window` 窗口
- 返回
    - `bool` 是否全屏

```php
public static function fullscreen(CData $window): bool
```

<br>

#### 设置窗口是否全屏

静态方法`setFullscreen`

- 参数
    - `CData` `$window` 窗口
    - `bool` `$fullscreen` 是否全屏
- 返回
    - `void`

```php
public static function setFullscreen(CData $window, bool $fullscreen): void
```

<br>

#### 窗口内容大小改变事件

静态方法`onContentSizeChanged`

- 参数
    - `CData` `$window` 窗口
    - `callable` `$callback` 回调函数
- 返回
    - `void`

```php
public static function onContentSizeChanged(CData $window, callable $callback): void
```

<br>

#### 创建窗口

静态方法`create`

- 参数
    - `string` `$title` 标题
    - `int` `$width` 宽度
    - `int` `$height` 高度
    - `int` `$hasMenubar` 是否有菜单栏
- 返回
    - `CData` 窗口

```php
public static function create(string $title, int $width, int $height, int $hasMenubar): CData
```

<br>

#### 获取窗口是否无边框

静态方法`borderless`

- 参数
    - `CData` `$window` 窗口
- 返回
    - `bool` 是否无边框

```php
public static function borderless(CData $window): bool
```

<br>

#### 设置窗口是否无边框

静态方法`setBorderless`

- 参数
    - `CData` `$window` 窗口
    - `bool` `$borderless` 是否无边框
- 返回
    - `void`

```php
public static function setBorderless(CData $window, bool $borderless): void
```

<br>

#### 设置窗口子元素

静态方法`setChild`

- 参数
    - `CData` `$window` 窗口
    - `CData` `$child` 子元素
- 返回
    - `void`

```php
public static function setChild(CData $window, CData $child): void
```

<br>

#### 获取窗口是否有边距

静态方法`margined`

- 参数
    - `CData` `$window` 窗口
- 返回
    - `bool` 是否有边距

```php
public static function margined(CData $window): bool
```

<br>

#### 设置窗口是否有边距

静态方法`setMargined`

- 参数
    - `CData` `$window` 窗口
    - `bool` `$margined` 是否有边距
- 返回
    - `void`

```php
public static function setMargined(CData $window, bool $margined): void
```

<br>

#### 设置窗口关闭事件

静态方法`onClosing`

- 参数
    - `CData` `$window` 窗口
    - `callable` `$callback` 回调函数
- 返回
    - `void`

```php
public static function onClosing(CData $window, callable $callback): void
```

<br>

#### 打开文件对话框

静态方法`openFile`

- 参数
    - `CData` `$window` 窗口
- 返回
    - `string` 文件路径

```php
public static function openFile(CData $window): string
```

<br>

#### 保存文件对话框

静态方法`saveFile`

- 参数
    - `CData` `$window` 窗口
- 返回
    - `string` 文件路径

```php
public static function saveFile(CData $window): string
```

<br>

#### 消息框

静态方法`msgBox`

- 参数
    - `CData` `$parent` 父窗口
    - `string` `$title` 标题
    - `string` `$desc` 描述
- 返回
    - `void`

```php
public static function msgBox(CData $parent, string $title, string $desc): void
```

<br>

#### 错误消息框

静态方法`msgBoxError`

- 参数
    - `CData` `$parent` 父窗口
    - `string` `$title` 标题
    - `string` `$desc` 描述
- 返回
    - `void`

```php
public static function msgBoxError(CData $parent, string $title, string $desc): void
```