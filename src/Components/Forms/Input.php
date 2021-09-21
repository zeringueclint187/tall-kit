<?php

namespace TALLKit\Components\Forms;

use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

class Input extends Field
{
    /**
     * @var string|bool|null
     */
    public $id;

    /**
     * @var string|null
     */
    public $type;

    /**
     * @var mixed
     */
    public $value;

    /**
     * @var mixed
     */
    public $default;

    /**
     * @var mixed
     */
    protected $mask;

    /**
     * @var array|null
     */
    protected $cleave;

    /**
     * @var array|bool|null
     */
    protected $tagify;

    /**
     * Create a new component instance.
     *
     * @param  string|null  $name
     * @param  string|bool|null  $id
     * @param  string|bool|null  $label
     * @param  string|null  $type
     * @param  mixed  $bind
     * @param  mixed  $default
     * @param  mixed  $mask
     * @param  array|null  $cleave
     * @param  array|bool|null  $tagify
     * @param  string|null  $language
     * @param  bool  $showErrors
     * @param  string|null  $theme
     * @param  bool  $groupable
     * @param  string|null  $prependText
     * @param  string|null  $prependIcon
     * @param  string|null  $appendText
     * @param  string|null  $appendIcon
     * @return void
     */
    public function __construct(
        $name = null,
        $id = null,
        $label = null,
        $type = null,
        $bind = null,
        $default = null,
        $mask = null,
        $cleave = null,
        $tagify = null,
        $language = null,
        $showErrors = true,
        $theme = null,
        $groupable = true,
        $prependText = null,
        $prependIcon = null,
        $appendText = null,
        $appendIcon = null
    ) {
        parent::__construct(
            $name,
            $label,
            $showErrors,
            $theme,
            $groupable,
            $prependText,
            $prependIcon,
            $appendText,
            $appendIcon,
        );

        $this->id = $id ?? $this->name;
        $this->type = $type ?: $this->getTypeByName($this->name);
        $this->default = $default;

        if ($language) {
            $this->name = "{$this->name}[{$language}]";
        }

        if ($this->type !== 'password') {
            $this->setValue($bind, $default, $language);
        }

        $this->mask = $mask;
        $this->cleave = $cleave;
        $this->tagify = $tagify;

        $this->label = $this->type === 'hidden' || $this->tagify ? false : $this->label;
    }

    /**
     * Mask options.
     *
     * @return array
     */
    public function maskOptions()
    {
        if (! $this->mask || $this->type === 'hidden') {
            return [];
        }

        $encoded = json_encode((object) (is_array($this->mask) ? $this->mask : ['mask' => $this->mask]));

        return $this->attributes
            ->mergeOnlyThemeProvider($this->themeProvider, 'mask')
            ->merge(['x-init' => 'setup('.$encoded.')'], false)
            ->getAttributes();
    }

    /**
     * Cleave options.
     *
     * @return array
     */
    public function cleaveOptions()
    {
        if (! is_array($this->cleave) || $this->type === 'hidden') {
            return [];
        }

        $encoded = json_encode((object) $this->cleave);

        return $this->attributes
            ->mergeOnlyThemeProvider($this->themeProvider, 'cleave')
            ->merge(['x-init' => 'setup('.$encoded.')'], false)
            ->getAttributes();
    }

    /**
     * Tagify options.
     *
     * @return array
     */
    public function tagifyOptions()
    {
        if (! $this->tagify || $this->type === 'hidden') {
            return [];
        }

        $encoded = json_encode((object) (is_array($this->tagify) ? $this->tagify : []));

        return $this->attributes
            ->mergeOnlyThemeProvider($this->themeProvider, 'tagify')
            ->merge(['x-init' => 'setup('.$encoded.')'], false)
            ->getAttributes();
    }

    /**
     * Get input type by name.
     *
     * @param  string|null  $name
     * @return string
     */
    protected function getTypeByName($name = null)
    {
        if (! $name) {
            return 'text';
        }

        $types = [
            'color' => ['color'],
            'date' => ['date', 'birthdate', 'birth_date', '_at'],
            'datetime-local' => ['datetime', 'date_time'],
            'email' => ['email'],
            'file' => ['image', 'picture', 'photo', 'logo', 'background', 'audio', 'video', 'file'],
            'password' => ['password', 'password_confirmation', 'new_password', 'new_password_confirmation'],
            'url' => ['url', 'website', 'youtube', 'vimeo', 'facebook', 'twitter', 'instagram', 'linkedin'],
            'time' => ['time'],
        ];

        foreach ($types as $type => $names) {
            if (Str::contains($name, $names)) {
                return $type;
            }
        }

        return 'text';
    }

    /**
     * Set default and old value.
     *
     * @param  mixed  $bind
     * @param  mixed  $default
     * @param  mixed  $language
     * @return void
     */
    protected function setValue($bind = null, $default = null, $language = null)
    {
        if ($this->isWired()) {
            return;
        }

        if (! $this->hasName()) {
            $this->value = $default;

            return;
        }

        if (! $language) {
            $this->value = $this->formatValue(
                $this->getFieldValue($bind, $default)
            );

            return;
        }

        if ($bind !== false) {
            $bind = $bind ?: $this->getBoundTarget();
        }

        if ($bind) {
            $default = $bind->getTranslation($this->getFieldKey(), $language, false) ?: $default;
        }

        $this->value = old("{$this->getFieldName()}.{$language}", $default);
    }

    /**
     * Format value.
     *
     * @param  mixed  $value
     * @return mixed
     */
    protected function formatValue($value)
    {
        if ($value instanceof Carbon) {
            switch ($this->type) {
                case 'date':
                    return $value->format('Y-m-d');
                    break;
                case 'datetime-local':
                    return $value->format('Y-m-d\TH:i');
                    break;
                case 'week':
                    return $value->format('Y-\WW');
                    break;
                case 'time':
                    return $value->format('H:i');
                    break;
                case 'month':
                    return $value->format('Y-m');
                    break;
            }
        }

        return $value;
    }
}
