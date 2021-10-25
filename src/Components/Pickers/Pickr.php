<?php

namespace TALLKit\Components\Pickers;

use TALLKit\Components\Forms\Input;
use TALLKit\Concerns\JsonOptions;

class Pickr extends Input
{
    use JsonOptions;

    /**
     * Create a new component instance.
     *
     * @param  string|null  $name
     * @param  string|null  $id
     * @param  string|bool|null  $label
     * @param  mixed  $bind
     * @param  mixed  $default
     * @param  string|null  $language
     * @param  bool  $showErrors
     * @param  string|null  $theme
     * @param  mixed  $options
     * @return void
     */
    public function __construct(
        $name = null,
        $id = null,
        $label = null,
        $bind = null,
        $default = null,
        $language = null,
        $showErrors = true,
        $theme = null,
        $options = null
    ) {
        parent::__construct(
            $name,
            $id,
            $label,
            'hidden',
            $bind,
            $default,
            null,
            null,
            null,
            $language,
            $showErrors,
            $theme
        );

        $this->setOptions($options);
    }

    /**
     * Get options values.
     *
     * @return array
     */
    protected function getOptionsValues()
    {
        return ['default' => $this->value];
    }
}
