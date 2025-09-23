## 属性类

> 属性类 `use Kingbes\Libui\Attribute;`

<br>

#### 释放属性

静态方法`free`

- 参数
    - `CData` `$attr` 属性句柄
- 返回
    - `void` 

```php
public static function free(CData $attr): void
```

<br>

#### 获取属性类型

静态方法`getType`

- 参数
    - `CData` `$attr` 属性句柄
- 返回
    - `AttributeType` 属性类型

```php
public static function getType(CData $attr): AttributeType
```

<br>

#### 创建属性组

静态方法`createFamily`

- 参数
    - `string` `$name` 属性组名称
- 返回
    - `CData` 属性组句柄

```php
public static function createFamily(string $name): CData
```

<br>

#### 获取属性组名称

静态方法`Family`

- 参数
    - `CData` `$family` 属性组句柄
- 返回
    - `string` 属性组名称

```php
public static function Family(CData $family): string
```

<br>

#### 创建属性大小

静态方法`createSize`

- 参数
    - `float` `$size` 属性大小
- 返回
    - `CData` 属性大小句柄

```php
public static function createSize(float $size): CData
```

<br>

#### 获取属性大小

静态方法`size`

- 参数
    - `CData` `$attr` 属性句柄
- 返回
    - `float` 属性大小

```php
public static function size(CData $attr): float
```

<br>

#### 创建属性权重

静态方法`createWeight`

- 参数
    - `TextWeight` `$weight` 属性权重
- 返回
    - `CData` 属性权重句柄

```php
public static function createWeight(TextWeight $weight): CData
```

<br>

#### 获取属性权重

静态方法`weight`

- 参数
    - `CData` `$attr` 属性句柄
- 返回
    - `TextWeight` 属性权重

```php
public static function weight(CData $attr): TextWeight
```

<br>

#### 创建属性斜体

静态方法`createItalic`

- 参数
    - `TextItalic` `$italic` 属性斜体
- 返回
    - `CData` 属性斜体句柄

```php
public static function createItalic(TextItalic $italic): CData
```

<br>

#### 获取属性斜体

静态方法`italic`

- 参数
    - `CData` `$attr` 属性句柄
- 返回
    - `TextItalic` 属性斜体

```php
public static function italic(CData $attr): TextItalic
```

<br>

#### 创建属性拉伸

静态方法`createStretch`

- 参数
    - `TextStretch` `$stretch` 属性拉伸
- 返回
    - `CData` 属性拉伸句柄

```php
public static function createStretch(TextStretch $stretch): CData
```

<br>

#### 获取属性拉伸

静态方法`stretch`

- 参数
    - `CData` `$attr` 属性句柄
- 返回
    - `TextStretch` 属性拉伸

```php
public static function stretch(CData $attr): TextStretch
```

<br>

#### 创建属性颜色

静态方法`createColor`

- 参数
    - `float` `$r` 红色
    - `float` `$g` 绿色
    - `float` `$b` 蓝色
    - `float` `$a` 透明度
- 返回
    - `CData` 属性颜色句柄

```php
public static function createColor(float $r, float $g, float $b, float $a): CData
```

<br>

#### 获取属性颜色

静态方法`color`

- 参数
    - `CData` `$attr` 属性句柄
- 返回
    - `array<float>` 属性颜色

```php
public static function color(CData $attr): array
```

<br>

#### 获取属性背景颜色

静态方法`createBackground`

- 参数
    - `float` `$r` 红色
    - `float` `$g` 绿色
    - `float` `$b` 蓝色
    - `float` `$a` 透明度
- 返回
    - `CData` 属性背景颜色句柄

```php
public static function createBackground(float $r, float $g, float $b, float $a): CData
```

<br>

#### 创建属性下划线

静态方法`createUnderline`

- 参数
    - `Underline` `$u` 属性下划线
- 返回
    - `CData` 属性下划线句柄

```php
public static function createUnderline(Underline $u): CData
```

<br>

#### 获取属性下划线

静态方法`underline`

- 参数
    - `CData` `$attr` 属性句柄
- 返回
    - `Underline` 属性下划线

```php
public static function underline(CData $attr): Underline
```

<br>

#### 创建属性下划线颜色

静态方法`createUnderlineColor`

- 参数
    - `UnderlineColor` `$c` 属性下划线颜色
    - `float` `$r` 红色
    - `float` `$g` 绿色
    - `float` `$b` 蓝色
    - `float` `$a` 透明度
- 返回
    - `CData` 属性下划线颜色句柄

```php
public static function createUnderlineColor(UnderlineColor $c, float $r, float $g, float $b, float $a): CData
```

<br>

#### 获取属性下划线颜色

静态方法`underlineColor`

- 参数
    - `CData` `$attr` 属性句柄
- 返回
    - `array<float>` 属性下划线颜色

```php
public static function underlineColor(CData $attr): array
```

<br>

#### 创建属性字符串

静态方法`createString`

- 参数
    - `string` `$initialString` 属性字符串
- 返回
    - `CData` 属性字符串句柄

```php
public static function createString(string $initialString): CData
```

<br>

#### 释放属性字符串

静态方法`freeString`

- 参数
    - `CData` `$attr` 属性字符串句柄
- 返回
    - `void`

```php
public static function freeString(CData $attr): void
```

<br>

#### 获取属性字符串属性值

静态方法`stringString`

- 参数
    - `CData` `$attr` 属性字符串句柄
- 返回
    - `string` 属性字符串

```php
public static function stringString(CData $attr): string
```

<br>

#### 追加属性字符串(无属性)

静态方法`stringAppendUnattributed`

- 参数
    - `CData` `$attr` 属性字符串句柄
    - `string` `$s` 字符串
- 返回
    - `void`

```php
public static function stringAppendUnattributed(CData $attr, string $s): void
```

<br>

#### 插入属性字符串(无属性)

静态方法`stringInsertAtUnattributed`

- 参数
    - `CData` `$attr` 属性字符串句柄
    - `string` `$s` 字符串
    - `int` `$at` 插入位置
- 返回
    - `void`

```php
public static function stringInsertAtUnattributed(CData $attr, string $s, int $at): void
```

<br>

#### 删除属性字符串

静态方法`stringDelete`

- 参数
    - `CData` `$attr` 属性字符串句柄
    - `int` `$start` 开始位置
    - `int` `$end` 结束位置
- 返回
    - `void`

```php
public static function stringDelete(CData $attr, int $start, int $end): void
```

<br>

#### 删除属性字符串 grapheme 数量

静态方法`stringNumGraphemes`

- 参数
    - `CData` `$attr` 属性字符串句柄
- 返回
    - `int` 属性字符串 grapheme 数量

```php
public static function stringNumGraphemes(CData $attr): int
```

<br>

#### 获取属性字符串 grapheme 索引

静态方法`stringByteIndexToGrapheme`

- 参数
    - `CData` `$attr` 属性字符串句柄
    - `int` `$byteIndex` 字节索引
- 返回
    - `int` 属性字符串 grapheme 索引

```php
public static function stringByteIndexToGrapheme(CData $attr, int $byteIndex): int
```

<br>

#### 获取属性字符串 grapheme 字节索引

静态方法`stringGraphemeToByteIndex`

- 参数
    - `CData` `$attr` 属性字符串句柄
    - `int` `$graphemeIndex` grapheme 索引
- 返回
    - `int` 属性字符串 grapheme 字节索引

```php
public static function stringGraphemeToByteIndex(CData $attr, int $graphemeIndex): int
```

<br>

#### 字符串属性设置

静态方法`stringSet`

- 参数
    - `CData` `$attrStr` 属性字符串句柄
    - `CData` `$attr` 属性句柄
    - `int` `$start` 开始位置
    - `int` `$end` 结束位置
- 返回
    - `void`

```php
public static function stringSet(
    CData $attrStr, 
    CData $attr, 
    int $start, 
    int $end
): void
```

<br>
