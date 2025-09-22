## 滑块类

> 滑块类 `use Kingbes\Libui\Slider;`

<br>

#### 创建滑块

静态方法`create`    

- 参数
    - `int` `$min` 最小值
    - `int` `$max` 最大值
- 返回
    - `CData` 滑块

```php
public static function create(int $min, int $max): CData
```

<br>

#### 获取滑块值

静态方法`value`

- 参数
    - `CData` `$slider` 滑块
- 返回
    - `int` 滑块值

```php
public static function value(CData $slider): int
```

<br>

#### 设置滑块值

静态方法`setValue`

- 参数
    - `CData` `$slider` 滑块
    - `int` `$value` 值
- 返回
    - `void`

```php
public static function setValue(CData $slider, int $value): void
```

<br>

#### 滑块值改变事件

静态方法`onChanged`

- 参数
    - `CData` `$slider` 滑块
    - `callable<$slider>` `$callback` 回调函数
- 返回
    - `void`

```php
public static function onChanged(CData $slider, callable $callback): void
```