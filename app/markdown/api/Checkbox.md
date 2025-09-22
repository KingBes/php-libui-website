## 复选框类

> 复选框类 `use Kingbes\Libui\Checkbox;`

<br>

#### 获取复选框文本

静态方法`text`  

- 参数
    - `CData` `$checkbox` 复选框句柄
- 返回
    - `string` 复选框文本

```php
public static function text(CData $checkbox): string
```

<br>

#### 设置复选框文本

静态方法`setText`  

- 参数
    - `CData` `$checkbox` 复选框句柄
    - `string` `$text` 复选框文本
- 返回
    - `void`

```php
public static function setText(CData $checkbox, string $text): void
```

<br>

#### 获取复选框状态改变事件

静态方法`onToggled`

- 参数
    - `CData` `$checkbox` 复选框句柄
    - `callable` `$callback` 回调函数
- 返回
    - `void`

```php
public static function onToggled(CData $checkbox, callable $callback): void
```

<br>

#### 获取复选框状态

静态方法`checked`

- 参数
    - `CData` `$checkbox` 复选框句柄
- 返回
    - `bool` 复选框状态

```php
public static function checked(CData $checkbox): bool
```

<br>

#### 设置复选框状态

静态方法`setChecked`

- 参数
    - `CData` `$checkbox` 复选框句柄
    - `bool` `$checked` 复选框状态
- 返回
    - `void`

```php
public static function setChecked(CData $checkbox, bool $checked): void
```

<br>

#### 创建复选框

静态方法`create`  

- 参数
    - `string` `$text` 复选框文本
- 返回
    - `CData` 复选框句柄

```php
public static function create(string $text): CData
```