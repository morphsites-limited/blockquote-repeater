# Blockquote Repeater Block

A simple blockquote repeater block for [Dewsign's Nova Repeater Blocks](https://github.com/dewsign/nova-repeater-blocks)

## Installation & Usage

`composer require dewsign/blockquote-repeater`

`php artisan migrate`

Within your repeater types add the Blockquote

```php{5}
public function types(Request $request)
    {
        return [
            ...
            Dewsign\BlockquoteRepeater\Nova\Blockquote::class,
        ];
    }
```
