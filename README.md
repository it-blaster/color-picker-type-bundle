# ColorPickerTypeBundle

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
new Fenrizbes\ColorPickerTypeBundle\FenrizbesColorPickerTypeBundleBundle(),
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
