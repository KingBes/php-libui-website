## 菜单项类

>   菜单项类 `use Kingbes\Libui\MenuItem;`

<br>

#### 启用菜单项

静态方法`enable`

- 参数
    - `CData` `$item` 菜单项
- 返回
    - `void`

```php
public static function enable(CData $item): void
```

<br>

#### 禁用菜单项

静态方法`disable`

- 参数
    - `CData` `$item` 菜单项
- 返回
    - `void`

```php
public static function disable(CData $item): void
```

<br>

#### 点击菜单项时调用

静态方法`onClicked`

- 参数
    - `CData` `$item` 菜单项
    - `callable<$item>` `$callback` 回调函数
- 返回
    - `void`

```php
public static function onClicked(CData $item, callable $callback): void
```

<br>

#### 获取菜单项是否选中

静态方法`checked`

- 参数
    - `CData` `$item` 菜单项
- 返回
    - `bool`

```php
public static function checked(CData $item): bool
```

<br>

#### 设置菜单项是否选中

静态方法`setChecked`

- 参数
    - `CData` `$item` 菜单项
    - `bool` `$checked` 是否选中
- 返回
    - `void`

```php
public static function setChecked(CData $item, bool $checked): void
```