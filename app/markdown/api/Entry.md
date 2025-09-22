## 输入框类

> 输入框类 `use Kingbes\Libui\Entry;`

<br>

#### 输入框获取文本

静态方法`text`

- 参数
    - `CData` `$entry` 输入框句柄
- 返回
    - `string`

```php
public static function text(CData $entry): string
```

<br>

#### 输入框设置文本

静态方法`setText`

- 参数
    - `CData` `$entry` 输入框句柄
    - `string` `$text` 输入框文本
- 返回
    - `void`

```php
public static function setText(CData $entry, string $text): void
```

<br>

#### 输入框文本改变事件

静态方法`onChanged`

- 参数
    - `CData` `$entry` 输入框句柄
    - `callable<$entry>` `$callback` 回调函数
- 返回
    - `void`

```php
public static function onChanged(CData $entry, callable $callback): void
```

<br>

#### 输入框是否只读

静态方法`readOnly`

- 参数
    - `CData` `$entry` 输入框句柄
- 返回
    - `bool`

```php
public static function readOnly(CData $entry): bool
```

<br>

#### 输入框是否只读

静态方法`setReadOnly`

- 参数
    - `CData` `$entry` 输入框句柄
    - `bool` `$readOnly` 是否只读
- 返回
    - `void`

```php
public static function setReadOnly(CData $entry, bool $readOnly): void
```

<br>

#### 输入框创建

静态方法`create`

- 参数
    - 无
- 返回
    - `CData`

```php
public static function create(): CData
```

<br>

#### 输入框创建密码输入框

静态方法`createPwd`

- 参数
    - 无
- 返回
    - `CData`

```php
public static function createPwd(): CData
```

<br>

#### 输入框创建搜索输入框

静态方法`createSearch`

- 参数
    - 无
- 返回
    - `CData`

```php
public static function createSearch(): CData
```