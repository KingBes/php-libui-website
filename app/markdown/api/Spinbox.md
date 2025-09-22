## 微调框类

> 微调框类 `use Kingbes\Libui\Spinbox;`

<br>

#### 获取微调框值

静态方法`value`

- 参数
    - `CData` `$spinbox` 微调框
- 返回
    - `int` 微调框值

```php
public static function value(CData $spinbox): int
```

<br>

#### 设置微调框值

静态方法`setValue`

- 参数
    - `CData` `$spinbox` 微调框
    - `int` `$value` 值
- 返回
    - `void`

```php
public static function setValue(CData $spinbox, int $value): void
```

<br>

#### 微调框值改变事件

静态方法`onChanged`

- 参数
    - `CData` `$spinbox` 微调框
    - `callable<$spinbox>` `$callback` 回调函数
- 返回
    - `void`

```php
public static function onChanged(CData $spinbox, callable $callback): void
```

<br>

#### 创建微调框

静态方法`create`

- 参数
    - `int` `$min` 最小值
    - `int` `$max` 最大值
- 返回
    - `CData` 微调框

```php
public static function create(int $min, int $max): CData
```