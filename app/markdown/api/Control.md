## 控件类

> 控件类 `use Kingbes\Libui\Control;`

<br>

#### 销毁控件

静态方法`destroy`

- 参数
    - `CData` `$control` 控件句柄
- 返回
    - `void`

```php
public static function destroy(CData $control): void
```

<br>

#### 获取控件句柄

静态方法`handle`

- 参数
    - `CData` `$control` 控件句柄
- 返回
    - `CData` 控件句柄

```php
public static function handle(CData $control): CData
```

<br>

#### 获取控件父容器句柄

静态方法`parent`

- 参数
    - `CData` `$control` 控件句柄
- 返回
    - `CData` 父容器句柄

```php
public static function parent(CData $control): CData
```

<br>

#### 设置控件父容器

静态方法`setParent`

- 参数
    - `CData` `$control` 控件句柄
    - `CData` `$parent` 父容器句柄
- 返回
    - `void`

```php
public static function setParent(CData $control, CData $parent): void
```

<br>

#### 判断控件是否为顶级容器

静态方法`topLevel`

- 参数
    - `CData` `$control` 控件句柄
- 返回
    - `int` 1 为顶级容器 0 不为顶级容器

```php
public static function topLevel(CData $control): int
```

<br>

#### 判断控件是否可见

静态方法`visible`

- 参数
    - `CData` `$control` 控件句柄
- 返回
    - `bool` 可见返回 true 不可见返回 false

```php
public static function visible(CData $control): bool
```

<br>

#### 显示控件

静态方法`show`

- 参数
    - `CData` `$control` 控件句柄
- 返回
    - `void`

```php
public static function show(CData $control): void
```

<br>

#### 隐藏控件

静态方法`hide`

- 参数
    - `CData` `$control` 控件句柄
- 返回
    - `void`

```php
public static function hide(CData $control): void
```

<br>

#### 判断控件是否可用

静态方法`enabled`

- 参数
    - `CData` `$control` 控件句柄
- 返回
    - `bool` 可用返回 true 不可用返回 false

```php
public static function enabled(CData $control): bool
```

<br>

#### 启用控件

静态方法`enable`

- 参数
    - `CData` `$control` 控件句柄
- 返回
    - `void`

```php
public static function enable(CData $control): void
```

<br>

#### 禁用控件

静态方法`disable`

- 参数
    - `CData` `$control` 控件句柄
- 返回
    - `void`

```php
public static function disable(CData $control): void
```

<br>

#### 分配控件

静态方法`allocControl`

- 参数
    - `int` `$n` 控件类型
    - `int` `$OSsig` 操作系统类型
    - `int` `$typesig` 控件类型
    - `string` `$typenamestr` 控件类型字符串
- 返回
    - `CData` 控件句柄

```php
public static function allocControl(int $n, int $OSsig, int $typesig, string $typenamestr): CData
```

<br>

#### 释放控件

静态方法`free`

- 参数
    - `CData` `$control` 控件句柄
- 返回
    - `void`

```php
public static function free(CData $control): void
```

<br>

#### 验证并设置控件父容器

静态方法`verifySetParent`

- 参数
    - `CData` `$control` 控件句柄
    - `CData` `$parent` 父容器句柄
- 返回
    - `void`

```php
public static function verifySetParent(CData $control, CData $parent): void
```

<br>

#### 判断控件是否对用户可用

静态方法`enabledToUser`

- 参数
    - `CData` `$control` 控件句柄
- 返回
    - `bool` 对用户可用返回 true 对用户不可用返回 false

```php
public static function enabledToUser(CData $control): bool
```

<br>

#### 判断用户是否可以设置控件父容器

静态方法`userBugCannotSetParentOnToplevel`

- 参数
    - `string` `$type` 控件类型
- 返回
    - `void`

```php
public static function userBugCannotSetParentOnToplevel(string $type): void
```