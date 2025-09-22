## 网格类

> 网格类 `use Kingbes\Libui\Grid;`

<br>

#### 创建网格

静态方法`create`

- 参数
    - 无
- 返回
    - `CData`

```php
public static function create(): CData
```

<br>

#### 添加组件

静态方法`append`

- 参数
    - `CData` `$g` 网格
    - `CData` `$c` 组件
    - `int` `$left` 左
    - `int` `$top` 上
    - `int` `$xspan` 跨列
    - `int` `$yspan` 跨行
    - `int` `$hexpand` 水平是否展开
    - `int` `$halign` 水平对齐
    - `int` `$vexpand` 垂直是否展开
    - `Align` `$valign` 垂直对齐
- 返回
    - `void`

```php
public static function append(CData $g, CData $c, int $left, int $top, int $xspan, int $yspan, int $hexpand, int $halign, int $vexpand, Align $valign):void
```

<br>

#### 添加组件到指定位置

静态方法`insertAt`

- 参数
    - `CData` `$g` 网格
    - `CData` `$c` 组件
    - `CData` `$existing` 存在的组件
    - `At` `$at` 位置
    - `int` `$xspan` 跨列
    - `int` `$yspan` 跨行
    - `int` `$hexpand` 水平是否展开
    - `Align` `$halign` 水平对齐
    - `int` `$vexpand` 垂直是否展开
    - `Align` `$valign` 垂直对齐
- 返回
    - `void`

```php
public static function insertAt(CData $g, CData $c, CData $existing, At $at, int $xspan, int $yspan, int $hexpand, Align $halign, int $vexpand, Align $valign)
```

<br>

#### 网格是否有内边距

静态方法`padded`

- 参数
    - `CData` `$g` 网格
- 返回
    - `bool`

```php
public static function padded(CData $g): bool
```

<br>

#### 网格设置是否有内边距

静态方法`setPadded`

- 参数
    - `CData` `$g` 网格
    - `bool` `$padded` 是否有内边距
- 返回
    - `void`

```php
public static function setPadded(CData $g, bool $padded): void
```