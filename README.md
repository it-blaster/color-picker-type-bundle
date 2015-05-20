# ColorPickerTypeBundle

[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/it-blaster/color-picker-type-bundle/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/it-blaster/color-picker-type-bundle/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/it-blaster/color-picker-type-bundle/badges/build.png?b=master)](https://scrutinizer-ci.com/g/it-blaster/color-picker-type-bundle/build-status/master)
[![License](https://poser.pugx.org/it-blaster/color-picker-type-bundle/license.svg)](https://packagist.org/packages/it-blaster/color-picker-type-bundle)
[![Total Downloads](https://poser.pugx.org/it-blaster/color-picker-type-bundle/downloads)](https://packagist.org/packages/it-blaster/color-picker-type-bundle)
[![Latest Unstable Version](https://poser.pugx.org/it-blaster/color-picker-type-bundle/v/unstable.svg)](https://packagist.org/packages/it-blaster/color-picker-type-bundle)
[![Latest Stable Version](https://poser.pugx.org/it-blaster/color-picker-type-bundle/v/stable.svg)](https://packagist.org/packages/it-blaster/color-picker-type-bundle)

The FormType for choosing a color based on [Iris](https://github.com/Automattic/Iris).

## Installation

Add it-blaster/color-picker-type-bundle to your `composer.json` file and run `composer`

```json
...
"require": {
    "it-blaster/color-picker-type-bundle": "1.0.*"
}
...
```

Register the bundle in your `AppKernel.php`

```php
...
new Fenrizbes\ColorPickerTypeBundle\FenrizbesColorPickerTypeBundle(),
...
```

Include bundle's scripts and Iris' dependencies in your page:

```html
...
<script src="path/to/jquery.js"></script>
<script src="path/to/jquery-ui.js"></script>
<script src="{{ asset('bundles/fenrizbescolorpickertype/lib/js/iris.min.js') }}"></script>
<script src="{{ asset('bundles/fenrizbescolorpickertype/js/color_picker_type.js') }}"></script>
...
```

## Usage

Just set the `color_picker` FormType for your field as follows:

```php
...
    ->add('color', 'color_picker')
...
```

## Options

You can pass all the Iris' options as a `picker_options` value:

```php
...
    ->add('color', 'color_picker', array(
        'picker_options' => array(
            'color'    => false,
            'mode'     => 'hsl',
            'hide'     => true,
            'border'   => true,
            'target'   => false,
            'width'    => 200,
            'palettes' => false,
            'controls' => array(
                'horiz' => 's',
                'vert'  => 'l',
                'strip' => 'h'
            )
        )
    ))
...
