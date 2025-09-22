## 图像类

> 图像类 `use Kingbes\Libui\Image;`

<br>

#### 创建图像

静态方法`create`    

- 参数
    - `float` `$width` 宽度
    - `float` `$height` 高度
- 返回
    - `CData`

```php
public static function create(float $width, float $height): CData
```

<br>

#### 释放图像

静态方法`free`

- 参数
    - `CData` `$image` 图像
- 返回
    - `void`

```php
public static function free(CData $image): void
```

<br>

#### 追加图像数据

静态方法`append`

- 参数
    - `CData` `$image` 图像
    - `CData` `$pixels` 像素数据
    - `int` `$pixelWidth` 像素宽度
    - `int` `$pixelHeight` 像素高度
    - `int` `$byteStride` 字节步长
- 返回
    - `void`

```php
public static function append(CData $image, CData $pixels, int $pixelWidth, int $pixelHeight, int $byteStride): void   
```