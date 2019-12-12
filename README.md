# BunnyPHP Qiniu Storage Component

Qiniu Storage for BunnyPHP

[![Version](https://img.shields.io/packagist/v/ivanlulyf/bunnyphp-qiniu.svg?color=orange&style=flat-square)](https://packagist.org/packages/ivanlulyf/bunnyphp-qiniu)
[![Total Downloads](https://img.shields.io/packagist/dt/ivanlulyf/bunnyphp-qiniu.svg?color=brightgreen&style=flat-square)](https://packagist.org/packages/ivanlulyf/bunnyphp-qiniu)
![License](https://img.shields.io/packagist/l/ivanlulyf/bunnyphp-qiniu.svg?color=blue&style=flat-square)

English | [中文](README_CN.md)

## Install

```shell
composer require ivanlulyf/bunnyphp-qiniu
```

## Configure

```php
"storage" => [
	"name" => "bunny.qiniu",
	"key" => "",            // replace to your AccessKey
	"secret" => "",         // replace to your SecretKey
	"bucket" => "",         // replace to your Bucket
	"url" => ""             // replace to your access url
],
```