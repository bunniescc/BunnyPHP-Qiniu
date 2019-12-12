# BunnyPHP 七牛云存储组件

BunnyPHP的七牛云存储组件

[![Version](https://img.shields.io/packagist/v/ivanlulyf/bunnyphp-qiniu.svg?color=orange&style=flat-square)](https://packagist.org/packages/ivanlulyf/bunnyphp-qiniu)
[![Total Downloads](https://img.shields.io/packagist/dt/ivanlulyf/bunnyphp-qiniu.svg?color=brightgreen&style=flat-square)](https://packagist.org/packages/ivanlulyf/bunnyphp-qiniu)
![License](https://img.shields.io/packagist/l/ivanlulyf/bunnyphp-qiniu.svg?color=blue&style=flat-square)

[English](README.md) | 中文

## 安装

```shell
composer require ivanlulyf/bunnyphp-qiniu
```

## 配置

```php
"storage" => [
	"name" => "bunny.qiniu",
	"key" => "",            // 替换成你的AccessKey
	"secret" => "",         // 替换成你的SecretKey
	"bucket" => "",         // 替换成你的Bucket
	"url" => ""             // 替换成你的外部访问地址
],
```