
<h3 align="center">
Milirulepilot
</h3>

<p align="center">
    <strong>Business Rules Engine for Laravel</strong>
</p>

<p  align="center">

[![Latest Stable Version](https://img.shields.io/packagist/v/milirezai/milirulepilot.svg?style=flat-square)](https://packagist.org/packages/milirezai/milirulepilot)
[![Total Downloads](https://img.shields.io/packagist/dt/milirezai/milirulepilot.svg?style=flat-square)](https://packagist.org/packages/milirezai/milirulepilot)
[![PHP Version](https://img.shields.io/packagist/php-v/milirezai/milirulepilot.svg?style=flat-square)](https://packagist.org/packages/milirezai/milirulepilot)
[![Laravel](https://img.shields.io/badge/Laravel-12.x|13.x-FF2D20?style=flat-square&logo=laravel&logoColor=white)](https://laravel.com)
![GitHub Stars](https://img.shields.io/github/stars/milirezai/milirulepilot?style=flat&logo=github)
![Contributors](https://img.shields.io/github/contributors/milirezai/milirulepilot?style=flat)
![GitHub Forks](https://img.shields.io/github/forks/milirezai/milirulepilot?style=flat&logo=github)
![GitHub Issues](https://img.shields.io/github/issues/milirezai/milirulepilot?style=flat&logo=github)

</p>




Milirulepilot یک موتور مدیریت قوانین کسب‌وکار (Business Rule Engine) برای برنامه‌های Laravel است که با هدف ساده‌سازی، مدیریت و اجرای تصمیم‌های پیچیده در سیستم‌ها ساخته شده است.


<h3> چرا Milirulepilot ساخته شد؟</h3>

در بسیاری از پروژه‌ها، با رشد سیستم، قوانین کسب‌وکار نیز بیشتر و پیچیده‌تر می‌شوند.

برای مثال:

- کاربران VIP تخفیف متفاوتی دریافت کنند.
- کاربران بر اساس سطح دسترسی، امکانات خاصی داشته باشند.
- قیمت محصولات بر اساس شرایط مختلف تغییر کند.
- کمپین‌های بازاریابی فقط برای گروه خاصی از کاربران فعال شوند.
- فرآیندهای سیستم بر اساس چندین شرط مختلف تصمیم‌گیری کنند.

معمولاً این منطق‌ها به صورت شرط‌های زیاد در کنترلرها، سرویس‌ها و بخش‌های مختلف برنامه نوشته می‌شوند.

با افزایش تعداد قوانین، مشکلاتی مانند موارد زیر ایجاد می‌شود:

- سخت شدن نگهداری کد
- پیچیده شدن تست‌ها
- سخت شدن اضافه کردن قوانین جدید
- وابستگی زیاد منطق کسب‌وکار به بخش‌های اصلی برنامه

Milirulepilot برای حل این مشکل ایجاد شده است تا قوانین کسب‌وکار از منطق اصلی برنامه جدا شوند.

## هدف Milirulepilot چیست؟

هدف اصلی این پکیج ایجاد یک لایه تصمیم‌گیری مستقل در برنامه است؛ به شکلی که توسعه‌دهندگان بتوانند قوانین سیستم را به صورت ساختاریافته تعریف، مدیریت و اجرا کنند.

با استفاده از Milirulepilot می‌توان:

- قوانین را از کدهای اصلی برنامه جدا کرد.
- شرایط مختلف را به صورت قابل مدیریت تعریف کرد.
- تصمیم‌گیری‌های پیچیده را ساده‌تر پیاده‌سازی کرد.
- تغییر قوانین کسب‌وکار را بدون تغییر بخش‌های اصلی سیستم انجام داد.

## Milirulepilot چه مشکلی را حل می‌کند؟

به جای اینکه منطق‌هایی مانند:

- اگر کاربر VIP بود و مقدار خرید بیشتر از مقدار مشخصی بود، تخفیف بده.
- اگر کاربر سطح خاصی داشت، دسترسی مشخصی فعال کن.
- اگر شرایط سفارش برقرار بود، فرآیند خاصی اجرا شود.

در قسمت‌های مختلف برنامه پخش شوند، این قوانین در یک ساختار مشخص قرار می‌گیرند و موتور Milirulepilot مسئول بررسی و اجرای آن‌ها خواهد بود.

## موارد استفاده

Milirulepilot می‌تواند در بخش‌هایی مانند موارد زیر استفاده شود:

- سیستم تخفیف و قیمت‌گذاری
- سطح‌بندی کاربران
- مدیریت دسترسی‌ها
- سیستم‌های پیشنهاددهی
- قوانین سفارش و پرداخت
- فرآیندهای خودکار کسب‌وکار

## فلسفه طراحی

Milirulepilot با تمرکز بر توسعه‌پذیری و جداسازی مسئولیت‌ها طراحی شده است.

هدف این است که اضافه کردن قوانین جدید یا تغییر قوانین موجود، نیازمند تغییر در هسته اصلی سیستم نباشد و هر بخش مسئولیت مشخص خود را داشته باشد.




<h3>روش نصب:</h3>

```php
composer require milirezai/milirulepilot
```



نسخه php مور نیاز:

php 8.2 به بعد


نسخه laravel مور نیاز:

laravel 12 به بعد



<h3>روش استفاده</h3>


برای استفاده از کلاس ابتدا باید کلاس های decision اختصاصی برای خود تعریف کنید و شرط ها و تصمیم های بیزینسی خودتون رو اونجا بنویسید ساختار این کلاس ها رو میتونید ببینید


این کلاس ها داخل دایرکتوری به اسم  Decisions تویه دایرکتوری app ساخته می شوند


```php

<?php

namespace App\Decisions;

use MiliRulePilot\Decision\DecisionBase;

class VipDiscountDecision extends DecisionBase
{

    public function name(): string
    {
        return 'VipDiscount';
    }

    public function conditions(): array
    {
       return [
           $this->condition->field('userLevel')->equal('vip')->make(),
           $this->condition->field('cartPrice')->equal(200000)->make()
       ];
    }

    public function result(): mixed
    {
        return 20;
    }
}


```


خوب این کلاس سه متد داره 

متد name: اسم  اختصاصی برای هر کدام از کلاس ها اینجا باید بنویسید 

متد conditions : اصلی ترین قسمت این کلاس این متد هست در اینجا قوانین و تصمیم های خودتون رو تعریف می کنید

متد result : خوب اینجا هم باید مقداری رو قرار بدید که هنگام درست بودن فوانین و شرایط باید به عنوان جروجی ارسال بشه


برای ساخت این کلاس ها باید از دستور زیر استفاده کنید


```php
php artisan decision:make VipDiscountDecision
```


تعریف قوانین داخل کلاس های decision  : 

قواین رو باید داخل متد conditions به صورت یک ارایه نوشت 



```php
public function conditions(): array
    {
       return [
           $this->condition->field('userLevel')->equal('vip')->make(),
           $this->condition->field('cartPrice')->equal(200000)->make()
       ];
    }
```

برای تعریف یک قانون می تونید از متد های زیر استفاده کنید  :


```php
field(string $field)
equal(mixed $value)
notEqual(mixed $value)
greaterThan(mixed $value)
lessThan(mixed $value)
stopOrFail()
```


این متد برای اسم rule هست


```php
$this->condition->field('userLevel')
```


operator ها :


```php
equal(mixed $value) // operator ==
notEqual(mixed $value) // operator !=
greaterThan(mixed $value) // operator >
lessThan(mixed $value) // operator <
```

 
اگر بخوایید که یک کاندیشن وقتی که شکتست خورد و مقدارش فالس شد سیستم کاندیشن های بعدی رو برسی نکنه می تونید برای کاندیشن ها از متد stopOrFail استفاده کنید 


کلا فلسفه  پکیج به این صورت هست که شما تویه یک سری کلاس تصمیم ها و کانیدشن های خودتون رو تعریف می کنید و در جای دیگه چه کنترلر چه داخل سرویس های دیگه میتونید این با دتیا ها و کاندیشن های متغییر مقایسه کنید 

برای استفاده از  پکیج می تونید از کللاس اصلی یا فساد آن استفاده کنید 



```php
use MiliRulePilot\RulePilot\MiliRulePilot;
use MiliRulePilot\Facade\MiliRulePilot;


public function index(MiliRulePilot $miliRulePilot){

$milirulepilot->evaloate(DecisionBaseContract $decision,array $conditions)


MiliRulePilot::evaloate(DecisionBaseContract $decision,array $conditions)

}

```

متد evaloate  : خوب این متد دو مقدار می گیره

اولین مقدار در یه نمونه از کلاس decision است 


دومین مقدار یک ارایه از کاندیشن هایی است که باید با کاندیشن های تعریف شده داخل decision کلاس مقایسه شوند


نمونه



```php
use MiliRulePilot\RulePilot\MiliRulePilot;
use App\Decisions\VipDiscountDecision;


public function index(MiliRulePilot $miliRulePilot,VipDiscuntDecision $vipDiscountDecision){

 $ruleResult = $milirulepilot->evaloate($vipDiscountDecision,[
                 [
                     'field' => 'userLevel',
                     'value' => 'vip'
                 ],
                 [
                     'field' => 'cartPrice',
                     'value' => $request->input('price')
                 ]
             ]);

}

```


مشاهده result   :

 پکیج خروجی رو به یک دیتا ابجکت از نوع DecisionResult  تبدیل می کنه که متد های کاربری و مفیدی داره


متد ها : 

```php
$ruleResult->decisionName() // return decision name
$ruleResult->matched() // return result boolean if conditions and decision condition matched
$ruleResult->conditionsProcessResult() // return process result for all decision conditions
$ruleResult->conditionsProcessResult('userLevel') // return process result for one decision conditions
$ruleResult->decisionResult() // return value method result in decision class
$ruleResult->process() // return info process for decision
```



نمونه 



```php
public function index(MiliRulePilot $miliRulePilot,VipDiscuntDecision $vipDiscountDecision){

 $ruleResult = $milirulepilot->evaloate($vipDiscountDecision,[
                 [
                     'field' => 'userLevel',
                     'value' => 'vip'
                 ],
                 [
                     'field' => 'cartPrice',
                     'value' => $request->input('price')
                 ]
             ]);

$ruleResult->matched();

}

```

دستورات artisan  :


```php
```



```php
php artisan decision:make VipDiscountDecision // create a decision class
php artisan decision:delete VipDiscountDecision // remove a decision class
php artisan decision:list  // list all decision class

```