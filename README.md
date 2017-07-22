# Doctrine utils for [Nette](https://www.nette.org) framework
[![Build Status](https://travis-ci.org/nofutur3/nette-doctrine.svg?branch=master)](https://travis-ci.org/nofutur3/nette-doctrine)
[![Downloads this Month](https://img.shields.io/packagist/dm/nofutur3/nette-doctrine.svg)](https://packagist.org/packages/nofutur3/nette-doctrine)
[![Latest stable](https://img.shields.io/packagist/v/nofutur3/nette-doctrine.svg)](https://packagist.org/packages/nofutur3/nette-doctrine)


Nette integration for Sentry

## Installation

The recommended installation is using [composer](https://getcomposer.org/). 

_If you are not still using composer, you should check it out. It's 2017(+) afterall._

```
composer require nofutur3/nette-doctrine
```

Alternative way - in case you are not able to use composer. Download the source code (ie clone git repo) into your project
and require it some way. For [nette framework](https://nette.org/en/) like this in your bootstrap file:
```
$configurator
    ->createRobotLoader()
    ->addDirectory(__DIR__ . 'path/to/library/');
```

## Included