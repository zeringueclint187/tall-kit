<?php

namespace TALLKit\Components\Forms;

use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use TALLKit\Components\BladeComponent;

class FieldsGenerator extends BladeComponent
{
    /**
     * @var \Illuminate\Support\Collection
     */
    public $fields;

    /**
     * Create a new component instance.
     *
     * @param  mixed  $fields
     * @param  mixed  $bind
     * @param  string|null  $theme
     * @return void
     */
    public function __construct(
        $fields = null,
        $theme = null
    ) {
        $this->fields = Collection::make($fields);

        parent::__construct($theme);
    }

    /**
     * Get field component.
     *
     * @param  string|null  $key
     * @param  array|string|null  $field
     * @return string
     */
    public function getFieldComponent($key, $field)
    {
        $name = data_get($field, 'name', is_int($key) ? $field : $key);

        if (! $name || is_array($name)) {
            return 'input';
        }

        if ($fieldType = data_get($field, 'type')) {
            return $fieldType;
        }

        if (data_get($field, 'options') || Str::endsWith($name, '_id')) {
            return 'select';
        }

        $types = [
            'input-image' => ['image', 'picture', 'photo', 'logo', 'background'],
            'textarea' => ['message', 'comment'],
            'editor' => ['description', 'content', 'body'],
        ];

        foreach ($types as $type => $names) {
            if (Str::contains($name, $names)) {
                return $type;
            }
        }

        return 'input';
    }

    /**
     * Get field options.
     *
     * @param  string|null  $key
     * @param  array|string|null  $field
     * @return mixed
     */
    public function getFieldOptions($key, $field)
    {
        if ($options = data_get($field, 'options')) {
            return $options;
        }

        $name = data_get($field, 'name', is_int($key) ? $field : $key);

        if (is_string($name) && Str::endsWith($name, '_id')) {
            try {
                $model = app('\App\Models\\'.Str::of($name)->replace('_id', '')->studly());

                return $model->get();
            } catch (BindingResolutionException $e) {
                //
            }
        }

        return null;
    }
}
