## 多行文本框类

> 多行文本框类 `use Kingbes\Libui\MultilineEntry;`

<br>

#### 创建多行文本框

静态方法`create`

- 返回
    - `CData`

```php
public static function create(): CData
```

<br>

#### 创建不换行的多行文本框

静态方法`createNonWrapping`

- 返回
    - `CData`

```php
public static function createNonWrapping(): CData
```

<br>

#### 获取多行文本框的文本

静态方法`text`

- 参数
    - `CData` `$entry` 多行文本框
- 返回
    - `string`

```php
public static function text(CData $entry): string
```

<br>

#### 设置多行文本框的文本

静态方法`setText`

- 参数
    - `CData` `$entry` 多行文本框
    - `string` `$text` 文本
- 返回
    - `void`

```php
public static function setText(CData $entry, string $text): void
```

<br>

#### 追加文本到多行文本框

静态方法`append`

- 参数
    - `CData` `$entry` 多行文本框
    - `string` `$text` 文本
- 返回
    - `void`

```php
public static function append(CData $entry, string $text): void
```

<br>

#### 当多行文本框的文本改变时调用

静态方法`onChanged`

- 参数
    - `CData` `$entry` 多行文本框
    - `callable<$entry>` `$callback` 回调函数
- 返回
    - `void`

```php
public static function onChanged(CData $entry, callable $callback): void
```

<br>

#### 获取多行文本框是否只读

静态方法`readOnly`

- 参数
    - `CData` `$entry` 多行文本框
- 返回
    - `bool`

```php
public static function readOnly(CData $entry): bool
```

<br>

#### 设置多行文本框是否只读

静态方法`setReadOnly`

- 参数
    - `CData` `$entry` 多行文本框
    - `bool` `$readonly` 是否只读
- 返回
    - `void`

```php
public static function setReadOnly(CData $entry, bool $readonly): void
```