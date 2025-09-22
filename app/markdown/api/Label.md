## 标签类

> 标签类 `use Kingbes\Libui\Label;`

<br>

#### 获取标签文本

静态方法`text`

- 参数
    - `CData` `$label` 标签
- 返回
    - `string`

```php
public static function text(CData $label): string
```

<br>

#### 设置标签文本

静态方法`setText`

- 参数
    - `CData` `$label` 标签
    - `string` `$text` 文本
- 返回
    - `void`

```php
public static function setText(CData $label, string $text): void
```

<br>

#### 创建标签

静态方法`create`

- 参数
    - `string` `$text` 文本
- 返回
    - `CData`

```php
public static function create(string $text): CData
```