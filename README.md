<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">

<a href="https://packagist.org/packages/sashagm/messages"><img src="https://img.shields.io/packagist/dt/sashagm/messages" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/sashagm/messages"><img src="https://img.shields.io/packagist/v/sashagm/messages" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/sashagm/messages"><img src="https://img.shields.io/packagist/l/sashagm/messages" alt="License"></a>
<a href="https://packagist.org/packages/sashagm/messages"><img src="https://img.shields.io/github/languages/code-size/sashagm/messages" alt="Code size"></a>
<a href="https://packagist.org/packages/sashagm/messages"><img src="https://img.shields.io/packagist/stars/sashagm/messages" alt="Code size"></a>

[![PHP Version](https://img.shields.io/badge/PHP-%2B8-blue)](https://www.php.net/)
[![Laravel Version](https://img.shields.io/badge/Laravel-%2B10-red)](https://laravel.com/)

</p>



## Личные сообщения для Laravel

Наш пакет предоставляет простой компонент Личных сообщений для вашего Laravel приложения.



### Оглавление:

- [Требования](#требования)
- [Установка](#установка)
- [Использование](#использование)
  - [Конфигурация](#конфигурация)
- [Дополнительные возможности](#дополнительные-возможности)
- [Тестирование](#тестирование)
- [Лицензия](#лицензия)



#### Требования

Основные требования для установки и корректной работы:

- `PHP` >= 8.0
- `Laravel` >= 10.x
- `Composer` >= 2.4.x

#### Установка

Для установки пакета необходимо выполнить команды:

- composer require sashagm/messages
- php artisan messages:install
#### Использование


#### Конфигурация


Вы можете изменять и настраивать под себя необходимые настройки найти можно в конфигурационном файле `config/ms.php`. 
Здесь показаны все настройки и описание параметров.




#### Дополнительные возможности

Наш пакет предоставляет ряд дополнительных возможностей, которые могут быть полезны при работе с темами:

- `php artisan messages:install` - Данная команда установит все необходимые компоненты пакета.


#### Тестирование

Для проверки работоспособности можно выполнить специальную команду:

- ./vendor/bin/phpunit --configuration phpunit.xml

#### Лицензия

Laravel Messages - это программное обеспечение с открытым исходным кодом, лицензированное по [MIT license](LICENSE.md ).
