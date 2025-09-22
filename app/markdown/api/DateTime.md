## 日期时间类

> 日期时间类 `use Kingbes\Libui\DateTime;`

<br>

#### 构造函数

方法`__construct`

- 参数
    - `public` `int` `$sec` 秒 [0, 60] 包括闰秒
    - `public` `int` `$min` 分 [0, 59]
    - `public` `int` `$hour` 时 [0, 23]
    - `public` `int` `$mday` 日 [1, 31]
    - `public` `int` `$mon` 月 [1, 12]
    - `public` `int` `$year` 年 自1900 年开始计算的年数
    - `public` `int` `$wday` 星期 [1, 7]
    - `public` `int` `$yday` 一年中的第几天 [0, 365]
    - `public` `int` `$isdst` 夏令时标志 -1 表示不确定，0 表示不使用夏令时，1 表示使用夏令时

```php
public function __construct(
    public int $sec = 0,
    public int $min = 0,
    public int $hour = 0,
    public int $mday = 0,
    public int $mon = 0,
    public int $year = 0,
    public int $wday = 0,
    public int $yday = 0,
    public int $isdst = -1,
)
```