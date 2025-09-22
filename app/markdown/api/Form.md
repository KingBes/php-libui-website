## 表单类

> 表单类 `use Kingbes\Libui\Form;`

<br>

#### 添加表单元素

静态方法`append`

- 参数
    - `CData` `$f` 表单
    - `string` `$lable` 标签
    - `CData` `$c` 元素
    - `bool` `$stretchy` 是否拉伸
- 返回
    - `void`

```php
public static function append(CData $f, string $lable, CData $c, bool $stretchy): void
```

<br>

#### 删除表单元素

静态方法`delete`

- 参数
    - `CData` `$f` 表单
    - `int` `$index` 索引
- 返回
    - `void`

```php
public static function delete(CData $f, int $index): void
```

<br>

#### 表单是否边距

静态方法`padded`

- 参数
    - `CData` `$f` 表单
- 返回
    - `bool`

```php
public static function padded(CData $f): bool
```

<br>

#### 表单设置是否边距

静态方法`setPadded`

- 参数
    - `CData` `$f` 表单
    - `bool` `$padded` 是否边距
- 返回
    - `void`

```php
public static function setPadded(CData $f, bool $padded): void
```

<br>

#### 创建表单

静态方法`create`

- 参数
    - 无
- 返回
    - `CData`

```php
public static function create(): CData
```