## 日期时间选择器类

> 日期时间选择器类 `use Kingbes\Libui\DateTimePicker;`

<br>

#### 获取日期时间选择器的时间

静态方法`time`

- 参数
    - `CData` `$dateTimePicker` 日期时间选择器句柄
- 返回
    - `DateTime` 时间类

```php
public static function time(CData $dateTimePicker): DateTime
```

<br>

#### 设置日期时间选择器的时间

静态方法`setTime`

- 参数
    - `CData` `$dateTimePicker` 日期时间选择器句柄
    - `DateTime` `$time` 时间类
- 返回
    - `void`

```php
public static function setTime(CData $dateTimePicker, DateTime $time)
```

<br>

#### 日期时间选择器时间改变时调用

静态方法`onChanged`

- 参数
    - `CData` `$dateTimePicker` 日期时间选择器句柄
    - `callable` `$callback` 回调函数
- 返回
    - `void`

```php
public static function onChanged(CData $dateTimePicker, callable $callback)
```

<br>

#### 创建日期时间选择器

静态方法`createDataTime`

- 参数
    - 无
- 返回
    - `CData` 日期时间选择器句柄

```php
public static function createDataTime(): CData
```

<br>

#### 创建日期选择器

静态方法`createDate`

- 参数
    - 无
- 返回
    - `CData` 日期选择器句柄

```php
public static function createDate(): CData
```

<br>

#### 创建时间选择器

静态方法`createTime`

- 参数
    - 无
- 返回
    - `CData` 时间选择器句柄

```php
public static function createTime(): CData
```