<p align="center">
<img src="https://raw.githubusercontent.com/hekmatinasser/saad/master/logo.png" alt="jalali">
</p>
<h1 align="center">Alireza haji/saad</h1>
<p align="center">
<a href="https://packagist.org/packages/hekmatinasser/saad"><img src="https://poser.pugx.org/hekmatinasser/saad/v/stable" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/hekmatinasser/saad"><img src="https://poser.pugx.org/hekmatinasser/saad/downloads" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/hekmatinasser/saad"><img src="https://poser.pugx.org/hekmatinasser/saad/license" alt="License"></a>
</p>

<p align="center">
<a href="https://hekmatinasser.github.io/saad">English Document</a>
</p>

<p align="center">The saad is package for change solar calendar and gregorian together and provide helper function to use date and time.</p>
<p align="center">Verta extend class PHP Datetime and Jalali, compatible with Carbon Package.</p>
<p align="center">This package has been created by Nasser Hekmati under the license of MIT.</p>


## Quick view
     
- [Installation](#installation)
- [Usage](#usage)
    - [Jalali to Gregorian](#jalali-to-gregorian)
    - [Gregorian to Jalali](#gregorian-to-jalali)
    - [Jalali to Carbon](#jalali-to-carbon)
    - [Carbon to Jalali](#carbon-to-jalali)
- [Getters](#getters)
- [Setters](#setters)
  - [Fluent Setters](#fluent-setters)
- [Formatting](#formatting)
  - [Common Formats](#common-formats)
  - [Difference for Humans](#difference-for-humans)
- [Modification](#modification)
- [Boundaries](#boundaries)
- [Compression](#compression)
  - [Difference](#difference)
- [Validation](#validation)
- [Localization](#localization)
- [Validation Request](#validation-request)
- [Licence](#licence)
- [Contributors](#contributors)

### Installation

```shell
composer require hekmatinasser/saad
```

<table>
    <thead>
    <tr>
        <th>Laravel Version</th>
        <th>Package Version</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>8.0</td>
        <td>8.0</td>
    </tr>
    <tr>
        <td>9.0</td>
        <td>8.2</td>
    </tr>
    <tr>
        <td>10.0</td>
        <td>8.3</td>
    </tr>
    <tr>
        <td>11.0</td>
        <td>8.4</td>
    </tr>
    </tbody>
</table>

### Usage
<p>use saad datetime jalali</p>

```php
echo saad(); //1401-05-24 00:00:00
```

#### Gregorian to Jalali
<p>change gregorian to jalali and reverse</p>

```php
echo saad('2022-08-15'); //1401-05-24 00:00:00
```

#### jalali to Gregorian
<p>change jalali to gregorian and reverse</p>

```php
echo Verta::parse('1401-05-24 14:12:32')->datetime(); //2022-08-15 00:00:00
```

#### Carbon to Jalali
<p>change carbon to jalali and reverse</p>

```php
echo now()->toJalali(); //1401-05-24 00:00:00
```

#### Jalali to Carbon
<p>change jalali to gregorian and reverse</p>

```php
echo saad()->toCarbon(); //2022-08-15 00:00:00
```
[view more function](https://hekmatinasser.github.io/saad/#instantiate)

### Getters
<p>access part of jalali datetime</p>

```php
$v = saad(); // 1396-03-14 14:18:23
echo $v->year; // 1396
```
[view more getter](https://hekmatinasser.github.io/saad/#getter)

### Setters
<p>set part of jalali datetime</p>

```php
$v = saad(); // 1396-03-14 14:18:23
echo $v->year = 1395;
```
[view more setter](https://hekmatinasser.github.io/saad/#setter)


#### Fluent Setters
<p>set multiple part of jalali datetime</p>

```php
$v = saad(); // 1396-03-14 14:18:23
echo $v->setTimeString('12:25:45');
```
[view more fluent setter](https://hekmatinasser.github.io/saad/#set_date_time)


### Formatting
<p>show datetime variant datetime</p>

```php
echo saad()->format('Y.m.d'); // 1401.05.24
echo saad()->formatWord('l dS F'); // دوشنبه بیست و چهارم مرداد
```
[view more format](https://hekmatinasser.github.io/saad/#formatting)


#### Common Formats
<p>show common datetime variant datetime</p>

```php
echo saad()->formatJalaliDatetime(); // output 1395/10/07 14:12:25
```
[view more common format](https://hekmatinasser.github.io/saad/#format_date_time)


### Difference for Humans
<p>show difference format readable humans</p>

```php
echo saad('-13 month')->formatDifference(); // 1 سال قبل
```
[view more format difference](https://hekmatinasser.github.io/saad/#format_difference)

### Modification
<p>manipulate jalali datetime</p>

```php
echo saad()->addWeeks(3); 
...
```
[view more modifications](https://hekmatinasser.github.io/saad/#modification)

### Boundaries
<p>get boundary jalali datetime</p>

```php
echo saad()->startWeek(3); 
```
[view more boundaries](https://hekmatinasser.github.io/saad/#boundaries)

### Compression
<p>get compression jalali datetime</p>

```php
echo saad('+2 day')->gte('2022-08-15');
```
[view more compression](https://hekmatinasser.github.io/saad/#comparison)


### Difference
<p>calculate difference two jalali datetime</p>

```php
echo saad('+13 day')->diffMonths('2022-08-15'); 
```
[view more differences](https://hekmatinasser.github.io/saad/#difference)

### Validation
<p>check datetime check is valid </p>

```php
echo Verta::isLeapYear(1394); // false
```
[view more validations](https://hekmatinasser.github.io/saad/#validation)


### Localization
<p>set language for formatting datetime</p>

```php
Verta::setLocale('ar');
```
[view more localizations](https://hekmatinasser.github.io/saad/#localization)


### Validation Request
<p>validation input form</p>

```php
'birthday' => ['required', 'jdate_before_equal']
```
[view more localizations](https://hekmatinasser.github.io/saad/#laravel_validation)


## Licence

This package has been created by Alireza Haji Seyed Hassan  under the license of MIT.

## Contributors
Thanks to people who contributed for grow saad.
