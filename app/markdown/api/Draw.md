## 绘制类

> 绘制类 `use Kingbes\Libui\Draw;`

<br>

#### 创建路径

静态方法`createPath`

- 参数
    - `DrawFillMode` `$fillMode` 填充模式
- 返回
    - `CData` 路径句柄

```php
public static function createPath(DrawFillMode $fillMode): CData
```

<br>

#### 释放路径

静态方法`freePath`

- 参数
    - `CData` `$path` 路径句柄
- 返回
    - `void`

```php
public static function freePath(CData $path): void
```

<br>

#### 创建路径图

静态方法`createPathFigure`

- 参数
    - `CData` `$path` 路径句柄
    - `float` `$x` 起始点 x 坐标
    - `float` `$y` 起始点 y 坐标
- 返回
    - `void`

```php
public static function createPathFigure(CData $path, float $x, float $y): void
```

<br>

#### 创建路径图弧

静态方法`createPathFigureWithArc`

- 参数
    - `CData` `$path` 路径句柄
    - `float` `$xCenter` 圆心 x 坐标
    - `float` `$yCenter` 圆心 y 坐标
    - `float` `$radius` 半径
    - `float` `$startAngle` 起始角度
    - `float` `$sweep` 扫掠角度
    - `bool` `$negative` 是否逆时针;false:顺时针,true:逆时针
- 返回
    - `void`

```php
public static function createPathFigureWithArc(
        CData $path,
        float $xCenter,
        float $yCenter,
        float $radius,
        float $startAngle,
        float $sweep,
        bool $negative = false
    ): void 
```

<br>

#### 添加路径线到

静态方法`pathLineTo`

- 参数
    - `CData` `$path` 路径句柄
    - `float` `$x` 目标点 x 坐标
    - `float` `$y` 目标点 y 坐标
- 返回
    - `void`

```php
public static function pathLineTo(CData $path, float $x, float $y): void
```

<br>

#### 添加路径弧到

静态方法`pathArcTo`

- 参数
    - `CData` `$path` 路径句柄
    - `float` `$xCenter` 圆心 x 坐标
    - `float` `$yCenter` 圆心 y 坐标
    - `float` `$radius` 半径
    - `float` `$startAngle` 起始角度
    - `float` `$sweep` 扫掠角度
    - `bool` `$negative` 是否逆时针;false:顺时针,true:逆时针
- 返回
    - `void`

```php
public static function pathArcTo(
        CData $path,
        float $xCenter,
        float $yCenter,
        float $radius,
        float $startAngle,
        float $sweep,
        bool $negative = false
    ): void
```

<br>

#### 添加路径贝塞尔曲线

静态方法`pathBezierTo`

- 参数
    - `CData` `$path` 路径句柄
    - `float` `$c1x` 控制点 1 x 坐标
    - `float` `$c1y` 控制点 1 y 坐标
    - `float` `$c2x` 控制点 2 x 坐标
    - `float` `$c2y` 控制点 2 y 坐标
    - `float` `$endX` 目标点 x 坐标
    - `float` `$endY` 目标点 y 坐标
- 返回
    - `void`

```php
public static function pathBezierTo(
        CData $path,
        float $c1x,
        float $c1y,
        float $c2x,
        float $c2y,
        float $endX,
        float $endY
    ): void
```

<br>

#### 添加路径图关闭

静态方法`pathCloseFigure`

- 参数
    - `CData` `$path` 路径句柄
- 返回
    - `void`

```php
public static function pathCloseFigure(CData $path): void
```

<br>

#### 添加路径矩形

静态方法`pathAddRectangle`

- 参数
    - `CData` `$path` 路径句柄
    - `float` `$x` 起始点 x 坐标
    - `float` `$y` 起始点 y 坐标
    - `float` `$width` 宽度
    - `float` `$height` 高度
- 返回
    - `void`

```php
public static function pathAddRectangle(
        CData $path,
        float $x,
        float $y,
        float $width,
        float $height
    ): void
```

<br>

#### 添加路径结束

静态方法`pathEnd`

- 参数
    - `CData` `$path` 路径句柄
- 返回
    - `void`

```php
public static function pathEnd(CData $path): void
```

<br>

#### 绘制路径

静态方法`Stroke`

- 参数
    - `CData` `$c` 画布句柄
    - `CData` `$path` 路径句柄
    - `CData` `$brush` 画笔句柄
    - `CData` `$params` 绘制参数句柄
- 返回
    - `void`

```php
public static function Stroke(CData $c, CData $path, CData $brush, CData $params): void
```

<br>

#### 绘制路径填充

静态方法`fill`

- 参数
    - `CData` `$c` 画布句柄
    - `CData` `$path` 路径句柄
    - `CData` `$brush` 画笔句柄
- 返回
    - `void`

```php
public static function fill(CData $c, CData $path, CData $brush): void
```

<br>

#### 矩阵设置为单位矩阵

静态方法`matrixSetIdentity`

- 参数
    - `CData` `$m` 矩阵句柄
- 返回
    - `void`

```php
public static function matrixSetIdentity(CData $m): void
```

<br>

#### 矩阵平移

静态方法`matrixTranslate`

- 参数
    - `CData` `$m` 矩阵句柄
    - `float` `$x` 平移 x 坐标
    - `float` `$y` 平移 y 坐标
- 返回
    - `void`

```php
public static function matrixTranslate(CData $m, float $x, float $y): void
```

<br>

#### 矩阵缩放

静态方法`matrixScale`

- 参数
    - `CData` `$m` 矩阵句柄
    - `float` `$xCenter` 缩放中心 x 坐标
    - `float` `$yCenter` 缩放中心 y 坐标
    - `float` `$x` 缩放 x 坐标
    - `float` `$y` 缩放 y 坐标
- 返回
    - `void`

```php
public static function matrixScale(CData $m, float $xCenter, float $yCenter, float $x, float $y): void
```

<br>

#### 矩阵旋转

静态方法`matrixRotate`

- 参数
    - `CData` `$m` 矩阵句柄
    - `float` `$x` 旋转中心 x 坐标
    - `float` `$y` 旋转中心 y 坐标
    - `float` `$amount` 旋转角度
- 返回
    - `void`

```php
public static function matrixRotate(CData $m, float $x, float $y, float $amount): void
```

<br>

#### 矩阵倾斜

静态方法`matrixSkew`

- 参数
    - `CData` `$m` 矩阵句柄
    - `float` `$x` 倾斜中心 x 坐标
    - `float` `$y` 倾斜中心 y 坐标
    - `float` `$xAmount` 倾斜 x 角度
    - `float` `$yAmount` 倾斜 y 角度
- 返回
    - `void`

```php
public static function matrixSkew(CData $m, float $x, float $y, float $xAmount, float $yAmount): void
```

<br>

#### 矩阵乘法

静态方法`matrixMultiply`

- 参数
    - `CData` `$m` 矩阵句柄
    - `CData` `$other` 其他矩阵句柄
- 返回
    - `void`

```php
public static function matrixMultiply(CData $m, CData $other): void
```

<br>

#### 矩阵是否可逆

静态方法`matrixInvertible`

- 参数
    - `CData` `$m` 矩阵句柄
- 返回
    - `bool`

```php
public static function matrixInvertible(CData $m): bool
```

<br>

#### 矩阵求逆

静态方法`matrixInvert`

- 参数
    - `CData` `$m` 矩阵句柄
- 返回
    - `bool`

```php
public static function matrixInvert(CData $m): bool
```

<br>

#### 矩阵变换点

静态方法`matrixTransformPoint`

- 参数
    - `CData` `$m` 矩阵句柄
    - `array` `$xArr` x 坐标数组
    - `array` `$yArr` y 坐标数组
- 返回
    - `void`

```php
public static function matrixTransformPoint(CData $m, array $xArr, array $yArr): void
```

<br>

#### 矩阵变换大小

静态方法`matrixTransformSize`

- 参数
    - `CData` `$m` 矩阵句柄
    - `array` `$widthArr` 宽度数组
    - `array` `$heightArr` 高度数组
- 返回
    - `void`

```php
public static function matrixTransformSize(CData $m, array $widthArr, array $heightArr): void
```

<br>

#### 矩阵变换

静态方法`transform`

- 参数
    - `CData` `$c` 画布句柄
    - `CData` `$m` 矩阵句柄
- 返回
    - `void`

```php
public static function transform(CData $c, CData $m): void
```

<br>

#### 矩阵裁剪

静态方法`clip`

- 参数
    - `CData` `$c` 画布句柄
    - `CData` `$path` 路径句柄
- 返回
    - `void`

```php
public static function clip(CData $c, CData $path): void
```

<br>

#### 矩阵保存

静态方法`save`

- 参数
    - `CData` `$c` 画布句柄
- 返回
    - `void`

```php
public static function save(CData $c): void
```

<br>

#### 矩阵恢复

静态方法`restore`

- 参数
    - `CData` `$c` 画布句柄
- 返回
    - `void`

```php
public static function restore(CData $c): void
```

<br>

#### 矩阵文本布局

静态方法`createTextLayout`

- 参数
    - `CData` `$params` 参数句柄
- 返回
    - `CData`

```php
public static function createTextLayout(CData $params): CData
```

<br>

#### 矩阵释放文本布局

静态方法`freeTextLayout`

- 参数
    - `CData` `$tl` 文本布局句柄
- 返回
    - `void`

```php
public static function freeTextLayout(CData $tl): void
```

<br>

#### 矩阵绘制文本

静态方法`text`

- 参数
    - `CData` `$c` 画布句柄
    - `CData` `$tl` 文本布局句柄
    - `float` `$x` x 坐标
    - `float` `$y` y 坐标
- 返回
    - `void`

```php
public static function text(CData $c, CData $tl, float $x, float $y): void
```

<br>

#### 矩阵文本布局范围

静态方法`textLayoutExtents`

- 参数
    - `CData` `$tl` 文本布局句柄
    - `float` `$width` 宽度
    - `float` `$height` 高度
- 返回
    - `void`

```php
public static function textLayoutExtents(CData $tl, float $width, float $height): void
```

<br>

#### 创建文本布局参数

静态方法`createTextLayoutParams`

- 参数
    - `CData` `$str` 文本句柄
    - `CData` `$font` 默认字体句柄
    - `float` `$width` 文本宽度
    - `TextAlign` `$align` 文本对齐方式
- 返回
    - `CData` 参数句柄

```php
public static function createTextLayoutParams(CData $str, CData $defaultFont, float $width, TextAlign $align): CData
```

<br>

##### 创建字体描述符

静态方法`createFontDesc`

- 参数
    - `string` `$family` 字体名称
    - `float` `$size` 字体大小
    - `TextWeight` `$weight` 字体权重
    - `TextItalic` `$italic` 字体样式
    - `TextStretch` `$stretch` 字体拉伸
- 返回
    - `CData` 字体描述符句柄

```php
public static function createFontDesc(string $family, float $size, TextWeight $weight, TextItalic $italic, TextStretch $stretch): CData
```




