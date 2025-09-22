## 下拉列表框类

> 下拉列表框类 `use Kingbes\Libui\Combobox;`

<br>

#### 创建下拉列表框

静态方法`create`  

- 参数
    - 无
- 返回
    - `CData` 下拉列表框句柄

```php
public static function create(): CData
```

<br>

#### 添加下拉列表框选项

静态方法`append`  

- 参数
    - `CData` `$combobox` 下拉列表框句柄
    - `string` `$text` 选项文本
- 返回
    - `void`

```php
public static function append(CData $combobox, string $text): void
```

<br>

#### 获取下拉列表框选中项

静态方法`selected`  

- 参数
    - `CData` `$combobox` 下拉列表框句柄
- 返回
    - `int` 选中项索引

```php
public static function selected(CData $combobox): int
```

<br>

#### 设置下拉列表框选中项

静态方法`setSelected`  

- 参数
    - `CData` `$combobox` 下拉列表框句柄
    - `int` `$index` 选中项索引
- 返回
    - `void`

```php
public static function setSelected(CData $combobox, int $index): void
```

<br>

#### 下拉列表框选中项改变事件

静态方法`onSelected`  

- 参数
    - `CData` `$combobox` 下拉列表框句柄
    - `callable` `$callback` 回调函数
- 返回
    - `void`

```php
public static function onSelected(CData $combobox, callable $callback): void
```