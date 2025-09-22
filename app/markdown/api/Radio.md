## 单选框类

> 单选框类 `use Kingbes\Libui\Radio;`

<br>

#### 创建单选框

静态方法`create`

- 参数
    - 无
- 返回
    - `CData` 单选框

```php
public static function create(): CData
```

<br>

#### 添加单选框选项

静态方法`append`

添加单选框选项

- 参数
    - `CData` `$radio` 单选框
    - `string` `$text` 选项文本
- 返回
    - `void`

```php
public static function append(CData $radio, string $text): void
```

<br>

#### 获取选中的选项

静态方法`selected`

- 参数
    - `CData` `$radio` 单选框
- 返回
    - `int` 选中的选项

```php
public static function selected(CData $radio): int
```

<br>

#### 设置选中的选项

静态方法`setSelected`

- 参数
    - `CData` `$radio` 单选框
    - `int` `$index` 选项索引
- 返回
    - `void`

```php
public static function setSelected(CData $radio, int $index): void
```

<br>

#### 选项改变事件

静态方法`onSelected`

- 参数
    - `CData` `$radio` 单选框
    - `callable<$radio>` `$callback` 回调函数
- 返回
    - `void`

```php
public static function onSelected(CData $radio, callable $callback): void
```