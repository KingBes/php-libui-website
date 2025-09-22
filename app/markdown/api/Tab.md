## 标签类

> 标签类 `use Kingbes\Libui\Tab;`

<br>

#### 添加标签页

静态方法`append`

- 参数
    - `CData` `$tab` 标签
    - `string` `$name` 标签名
    - `CData` `$control` 控件
- 返回
    - `void`

```php
public static function append(CData $tab, string $name, CData $control): void
```

<br>

#### 插入标签页

静态方法`insertAt`

- 参数
    - `CData` `$tab` 标签
    - `string` `$name` 标签名
    - `int` `$before` 位置
    - `CData` `$control` 控件
- 返回
    - `void`

```php
public static function insertAt(CData $tab, string $name, int $before, CData $control): void
```

<br>

#### 删除标签页

静态方法`delete`

- 参数
    - `CData` `$tab` 标签
    - `int` `$index` 位置
- 返回
    - `void`

```php
public static function delete(CData $tab, int $index): void
```

<br>

#### 获取标签页数

静态方法`numPages`

- 参数
    - `CData` `$tab` 标签
- 返回
    - `int` 标签页数

```php
public static function numPages(CData $tab): int
```

<br>

#### 获取标签页是否有边距

静态方法`margined`

- 参数
    - `CData` `$tab` 标签
    - `bool` `$margined` 是否有边距
- 返回
    - `void`

```php
public static function margined(CData $tab, bool $margined): int
```

<br>

#### 设置标签页是否有边距

静态方法`setMargined`

- 参数
    - `CData` `$tab` 标签
    - `int` `$page` 位置
    - `bool` `$margined` 是否有边距
- 返回
    - `void`

```php
public static function setMargined(CData $tab, int $page, bool $margined): void
```

<br>

#### 创建标签

静态方法`create`

- 参数
    - 无
- 返回
    - `CData` 标签

```php
public static function create(): CData
```