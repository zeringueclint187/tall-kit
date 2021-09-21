<time datetime="{{ $date }}" {{
    $local === null
        ? $attributes
        : $attributes
            ->mergeThemeProvider($themeProvider, 'container')
            ->merge(['x-init' => 'setup(\''.$date->timestamp.'\', \''.($local !== true ? $local : 'YYYY-MM-DD HH:mm:ss (z)').'\')'])
}}>
    {{ $human ? $date->diffForHumans() : $date->format($format) }}
</time>
