# Key-Value Redis Store
[![Gitter](https://badges.gitter.im/Join Chat.svg)](https://gitter.im/adammbalogh/key-value-store-redis?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge&utm_content=badge)

[![Author](http://img.shields.io/badge/author-@adammbalogh-blue.svg?style=flat)](https://twitter.com/adammbalogh)
[![Build Status](https://img.shields.io/travis/adammbalogh/key-value-store-redis/master.svg?style=flat)](https://travis-ci.org/adammbalogh/key-value-store-redis)
[![Quality Score](https://img.shields.io/scrutinizer/g/adammbalogh/key-value-store-redis.svg?style=flat)](https://scrutinizer-ci.com/g/adammbalogh/key-value-store-redis)
[![Software License](https://img.shields.io/badge/license-MIT-blue.svg?style=flat)](LICENSE)
[![Packagist Version](https://img.shields.io/packagist/v/adammbalogh/key-value-store-redis.svg?style=flat)](https://packagist.org/packages/adammbalogh/key-value-store-redis)
[![Total Downloads](https://img.shields.io/packagist/dt/adammbalogh/key-value-store-redis.svg?style=flat)](https://packagist.org/packages/adammbalogh/key-value-store-redis)

[![SensioLabsInsight](https://insight.sensiolabs.com/projects/f34aa5bf-4787-4929-a4a7-58053f8e63c3/small.png)](https://insight.sensiolabs.com/projects/f34aa5bf-4787-4929-a4a7-58053f8e63c3)

# Description

This library provides a layer to a key value redis store.

It uses the [predis/predis](https://github.com/nrk/predis) package.

# Support

[![Support with Gittip](http://img.shields.io/gittip/adammbalogh.svg?style=flat)](https://www.gittip.com/adammbalogh/)

# Usage

```php
<?php
use AdammBalogh\KeyValueStore\KeyValueStore;
use AdammBalogh\KeyValueStore\Adapter\RedisAdapter as Adapter;
use Predis\Client as RedisClient;

$redisClient = new RedisClient();

$adapter = new Adapter($redisClient);

$kvs = new KeyValueStore($adapter);

$kvs->set('sample_key', 'Sample value');
$kvs->get('sample_key');
```

# Installation

Install it through composer.

```json
{
    "require": {
        "adammbalogh/key-value-store-redis": "@stable"
    }
}
```

**tip:** you should browse the [`adammbalogh/key-value-store-redis`](https://packagist.org/packages/adammbalogh/key-value-store-redis)
page to choose a stable version to use, avoid the `@stable` meta constraint.

# API

**Please visit the [API](https://github.com/adammbalogh/key-value-store/blob/master/readme.md#api) link in the abstract library.**

