## 组类

> 组类 `use Kingbes\Libui\Group;`

<br>

#### 获取组标题

静态方法`title`

- 参数
    - `CData` `$group` 组
- 返回
    - `string`

```php
public static function title(CData $group): string
```

<br>

#### 设置组标题

静态方法`setTitle`

- 参数
    - `CData` `$group` 组
    - `string` `$title` 标题
- 返回
    - `void`

```php
public static function setTitle(CData $group, string $title): void
```

<br>

#### 设置组子元素

静态方法`setChild`      

- 参数
    - `CData` `$group` 组
    - `CData` `$child` 子元素
- 返回
    - `void`

```php
public static function setChild(CData $group, CData $child): void
```

<br>

#### 获取组是否有边距

静态方法`margined`

- 参数
    - `CData` `$group` 组
- 返回
    - `bool`

```php
public static function margined(CData $group): bool
```

<br>

#### 设置组是否有边距

静态方法`setMargined`

- 参数
    - `CData` `$group` 组
    - `bool` `$margined` 是否有边距
- 返回
    - `void`

```php
public static function setMargined(CData $group, bool $margined): void
```

<br>

#### 创建组

静态方法`create`

- 参数
    - `string` `$title` 标题
- 返回
    - `CData`

```php
public static function create(string $title): CData
```