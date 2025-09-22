## 盒子类

> 盒子类 `use Kingbes\Libui\Box;`

<br>

#### 添加子元素

静态方法`append`

- 参数
    - `CData` `$box` 盒子句柄
    - `CData` `$child` 子元素句柄
    - `bool` `$stretchy` 是否可拉伸
- 返回
    - `void`

```php
public static function append(CData $box, CData $child, bool $stretchy): void
```

<br>

#### 删除子元素

静态方法`delete`

- 参数
    - `CData` `$box` 盒子句柄
    - `int` `$index` 子元素索引
- 返回
    - `void`

```php
public static function delete(CData $box, int $index): void
```

<br>

#### 是否有内边距

静态方法`padded`

- 参数
    - `CData` `$box` 盒子句柄
- 返回
    - `bool`

```php
public static function padded(CData $box): bool
```

<br>

#### 设置是否有内边距

静态方法`setPadded`

- 参数
    - `CData` `$box` 盒子句柄
    - `bool` `$padded` 是否有内边距
- 返回
    - `void`

```php
public static function setPadded(CData $box, bool $padded): void
```

<br>

#### 创建水平盒子

静态方法`newHorizontalBox`

- 参数
    - 无
- 返回
    - `CData` 盒子句柄

```php
public static function newHorizontalBox(): CData
```

<br>

#### 创建垂直盒子

静态方法`newVerticalBox`

- 参数
    - 无
- 返回
    - `CData` 盒子句柄

```php
public static function newVerticalBox(): CData
```