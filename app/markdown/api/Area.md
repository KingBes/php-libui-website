## 区域类

> 区域类 `use Kingbes\Libui\Area;`

<br>

#### 区域事件处理

静态方法`handler`

区域处理程序用于处理区域的绘制、键盘事件、鼠标事件、鼠标跨域事件和拖动中断事件。

- 参数
    - `callable<this, CData, CData>` `$draw` 绘制回调函数
- 返回
    - `CData` 区域数据

```php
public static function handler(
    callable $draw,
    callable $KeyEvent,
    callable|null $MouseEvent = null,
    callable|null $MouseCrossed = null,
    callable|null $DragBroken = null,
): CData
```

<br>

#### 设置区域大小

静态方法`setSize`       

设置区域大小

- 参数
    - `CData` `$data` 区域数据
    - `int` `$width` 宽度
    - `int` `$height` 高度
- 返回
    - `void` 

```php
public static function setSize(CData $data, int $width, int $height): void
```

<br>

#### 队列重绘

静态方法`queueRedraw`

队列重绘

- 参数
    - `CData` `$a` 区域数据
- 返回
    - `void` 

```php
public static function queueRedraw(CData $a): void
```

<br>

#### 滚动到指定位置

静态方法`scrollTo`  

滚动到指定位置

- 参数
    - `CData` `$a` 区域数据
    - `float` `$x` X坐标
    - `float` `$y` Y坐标
    - `float` `$width` 宽度
    - `float` `$height` 高度
- 返回
    - `void` 

```php
public static function scrollTo(CData $a, float $x, float $y, float $width, float $height): void
```

<br>

#### 开始用户窗口移动

静态方法`beginUserWindowMove`

注意：这些操作只能在鼠标相关处理程序中进行调用
注意：是否应该允许在滚动区域使用这些操作？
注意：确定哪些鼠标事件应被接受；“按下”是目前唯一能确保正常工作的事件
注意：调用此函数之后到下一次鼠标抬起期间，事件会发生什么变化？
注意：是否需要释放捕获状态？

- 参数
    - `CData` `$a` 区域数据
- 返回
    - `void` 

```php
public static function beginUserWindowMove(CData $a): void
```

<br>

#### 开始用户窗口调整大小

静态方法`beginUserWindowResize` 

开始用户窗口调整大小

- 参数
    - `CData` `$a` 区域数据
    - `AreaResizeEdge` `$edge` 调整大小边缘
- 返回
    - `void` 

```php
public static function beginUserWindowResize(CData $a, AreaResizeEdge $edge): void
```

<br>

#### 创建滚动区域

静态方法`createScroll`

- 参数
    - `CData` `$ah` 区域数据
    - `int` `$width` 宽度
    - `int` `$height` 高度
- 返回
    - `CData` 区域数据

```php
static function createScroll(CData $ah, int $width, int $height): CData
```