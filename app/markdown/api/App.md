## 应用类

> 应用类 `use Kingbes\Libui\App;`

<br>

#### 初始化

静态方法`init`

- 参数
    - `int` `$size` 默认 1
- 返回
    - `void`

```php
public static function init(int $size = 1): void
```

<br>

#### 退出初始化(一般PHP不需要)

静态方法`unInit`

- 参数
    - 无
- 返回
    - `void`

```php
public static function unInit(): void
```

<br>

#### 释放初始化错误信息(一般PHP不需要)

静态方法`freeInitError`

- 参数
    - `string` `$err` 错误信息
- 返回
    - `void`

```php
public static function freeInitError(string $err): void
```

<br>


#### 主循环

静态方法`main`

- 参数
    - 无
- 返回
    - `void`

```php
public static function main(): void
```

<br>

#### 主循环步骤

静态方法`mainSteps`

- 参数
    - 无
- 返回
    - `void`

```php
public static function mainSteps(): void
```

<br>

#### 退出主循环

静态方法`quit`

- 参数
    - 无
- 返回
    - `void`

```php
public static function quit(): void
```

<br>

#### 队列主循环步骤

静态方法`queueMain`

- 参数
    - `callable<$data>` `$callable` 回调函数
- 返回
    - `void`

```php
public static function queueMain(callable $callable): void
```

### 列队主循环注销事件

静态方法`onShouldQuit`

- 参数
    - `callable:int` `$callable`
- 返回
    - `void`

```php
public static function onShouldQuit(callable $callable): void
```