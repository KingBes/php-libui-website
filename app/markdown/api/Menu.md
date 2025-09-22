## 菜单类

> 菜单类 `use Kingbes\Libui\Menu;`

<br>

#### 添加菜单项

静态方法`appendItem`

- 参数
    - `CData` `$menu` 菜单
    - `string` `$name` 名称
- 返回
    - `CData`

```php
public static function appendItem(CData $menu, string $name): CData
```

<br>

#### 添加复选菜单项

静态方法`appendCheckItem`

- 参数
    - `CData` `$menu` 菜单
    - `string` `$name` 名称
- 返回
    - `CData`

```php
public static function appendCheckItem(CData $menu, string $name): CData
```

<br>

#### 添加退出菜单项

静态方法`appendQuitItem`

- 参数
    - `CData` `$menu` 菜单
- 返回
    - `CData`

```php
public static function appendQuitItem(CData $menu): CData
```

<br>

#### 添加偏好设置菜单项

静态方法`appendPreferencesItem`

- 参数
    - `CData` `$menu` 菜单
- 返回
    - `CData`

```php
public static function appendPreferencesItem(CData $menu): CData
```

<br>

#### 添加关于菜单项

静态方法`appendAboutItem`

- 参数
    - `CData` `$menu` 菜单
- 返回
    - `CData`

```php
public static function appendAboutItem(CData $menu): CData
```

<br>

#### 添加分隔符

静态方法`appendSeparator`

- 参数
    - `CData` `$menu` 菜单
- 返回
    - `void`

```php
public static function appendSeparator(CData $menu): void
```

<br>

#### 创建菜单

静态方法`create`

- 参数
    - `string` `$name` 名称
- 返回
    - `CData`

```php
public static function create(string $name): CData
```