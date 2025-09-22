## 进度条类

> 进度条类 `use Kingbes\Libui\ProgressBar;`

<br>

#### 创建进度条

静态方法`create`

- 参数
    - 无
- 返回
    - `CData` 进度条

```php
public static function create(): CData
```

<br>

#### 获取进度条值

静态方法`value`

- 参数
    - `CData` `$progressBar` 进度条
- 返回
    - `int` 进度条值

```php
public static function value(CData $progressBar): int
```

<br>

#### 设置进度条值

静态方法`setValue`

- 参数
    - `CData` `$progressBar` 进度条
    - `int` `$value` 进度条值
- 返回
    - `void`

```php
public static function setValue(CData $progressBar, int $value): void
```