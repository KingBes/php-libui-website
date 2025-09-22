## 可编辑下拉框类

> 可编辑下拉框类 `use Kingbes\Libui\EditableCombobox;`

<br>

#### 可编辑下拉框创建

静态方法`create`

- 参数
    - 无
- 返回
    - `CData`

```php
public static function create(): CData
```

<br>

#### 可编辑下拉框添加选项

静态方法`append`

- 参数
    - `CData` `$combobox` 可编辑下拉框句柄
    - `string` `$text` 选项文本
- 返回
    - `void`

```php
public static function append(CData $combobox, string $text): void
```

<br>

#### 可编辑下拉框获取文本

静态方法`text`

- 参数
    - `CData` `$combobox` 可编辑下拉框句柄
- 返回
    - `string`

```php
public static function text(CData $combobox): string
```

<br>

#### 可编辑下拉框设置文本

静态方法`setText`

- 参数
    - `CData` `$combobox` 可编辑下拉框句柄
    - `string` `$text` 选项文本
- 返回
    - `void`

```php
public static function setText(CData $combobox, string $text): void
```

<br>

#### 可编辑下拉框文本改变事件

静态方法`onChanged`

- 参数
    - `CData` `$combobox` 可编辑下拉框句柄
    - `callable<$combobox>` `$callback` 回调函数
- 返回
    - `void`

```php
public static function onChanged(CData $combobox, callable $callback): void
```