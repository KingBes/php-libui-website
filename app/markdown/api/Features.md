## 特点/特征类

> 特点/特征类 `use Kingbes\Libui\Features;`

<br>

#### 特点/特征创建打开类型

静态方法`createOpenType`

- 参数
    - 无
- 返回
    - `CData`

```php
public static function createOpenType(): CData
```

<br>

#### 特点/特征释放打开类型

静态方法`freeOpenType`

- 参数
    - `CData` `$features` 打开类型
- 返回
    - `void`

```php
public static function freeOpenType(CData $features): void
```

<br>

#### 特点/特征克隆打开类型

静态方法`cloneOpenType`

- 参数
    - `CData` `$features` 打开类型
- 返回
    - `CData`

```php
public static function cloneOpenType(CData $features): CData
```

<br>

#### 特点/特征添加打开类型

静态方法`addOpenType`

- 参数
    - `CData` `$features` 打开类型
    - `CData` `$a` 打开类型
    - `CData` `$b` 打开类型
    - `CData` `$c` 打开类型
    - `CData` `$d` 打开类型
    - `int` `$value` 打开类型
- 返回
    - `void`

```php
public static function addOpenType(CData $features, CData $a, CData $b, CData $c, CData $d, int $value): void
```

<br>

#### 特点/特征移除打开类型

静态方法`removeOpenType`    

- 参数
    - `CData` `$features` 打开类型
    - `CData` `$a` 打开类型
    - `CData` `$b` 打开类型
    - `CData` `$c` 打开类型
    - `CData` `$d` 打开类型
- 返回
    - `void`

```php
public static function removeOpenType(CData $features, CData $a, CData $b, CData $c, CData $d): void
```

<br>

#### 特点/特征获取打开类型

静态方法`getOpenType`

- 参数
    - `CData` `$features` 打开类型
    - `CData` `$a` 打开类型
    - `CData` `$b` 打开类型
    - `CData` `$c` 打开类型
    - `CData` `$d` 打开类型
- 返回
    - `int`

```php
public static function getOpenType(CData $features, CData $a, CData $b, CData $c, CData $d): int
```

<br>

#### 特点/特征创建属性

静态方法`createAttribute`

- 参数
    - `CData` `$otf` 打开类型
- 返回
    - `CData`

```php
public static function createAttribute(CData $otf): CData
```

<br>

#### 特点/特征属性

静态方法`attribute`

- 参数
    - `CData` `$attr` 属性
- 返回
    - `CData`

```php
public static function attribute(CData $attr): CData
```