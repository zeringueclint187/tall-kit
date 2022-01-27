<div {{ $attributes->mergeThemeProvider($themeProvider, 'container') }}>
    @isset($header)
        {{ $header }}
    @else
        <x-crud-header
            {{ $attributes->mergeOnlyThemeProvider($themeProvider, 'header') }}
            :title="$title"
            :theme="$theme"
        >
            @isset($actionsHeader)
                {{ $actionsHeader }}
            @elseif(isset($actions))
                {{ $actions }}
            @elseif($route = route_detect([$prefix.'.create', $prefix.'.new', $prefix.'.form'], $parameters, null))
                <x-button
                    {{ $attributes->mergeOnlyThemeProvider($themeProvider, 'create') }}
                    preset="create"
                    :text="$tooltip ? '' : null"
                    :tooltip="$tooltip"
                    :href="$route"
                    :theme="$theme"
                />
            @endisset
        </x-crud-header>
    @endisset

    {{ $slot }}

    @isset($datatable)
        {{ $datatable }}
    @else
        <x-datatable
            {{ $attributes->mergeOnlyThemeProvider($themeProvider, 'datatable') }}
            :search="$search"
            :search-default="$searchDefault"
            :cols="$cols"
            :resource="$resource"
            :footer="$footer"
            :empty-text="$emptyText"
            :paginator="$paginator"
            :paginator-position="$paginatorPosition"
            :theme="$theme"
        >
            @foreach ($cols as $key => $col)
                @php
                $colname = 'col_'.data_get($col, 'name', is_int($key) ? $col : $key);
                $action = isset(${$colname}) ? ${$colname} : null;
                @endphp

                @if ($displayActionsColumn && $colname === 'col_actions')
                    @scopedslot('col_actions', ($row), ($customActions, $prefix, $parameters, $tooltip, $attributes, $themeProvider, $theme))
                        <div {{ $attributes->mergeOnlyThemeProvider($themeProvider, 'row-actions') }}>
                            <x-crud-actions
                                {{ $attributes->mergeOnlyThemeProvider($themeProvider, 'actions') }}
                                :custom-actions="$customActions"
                                :prefix="$prefix"
                                :parameters="array_merge($parameters, [$row])"
                                :tooltip="$tooltip ?? true"
                                :theme="$theme"
                            />
                        </div>
                    @endscopedslot

                    @continue
                @endif

                @isset ($action)
                    @scopedslot($colname, ($row), ($action))
                        {{ $action($row) }}
                    @endscopedslot
                @endisset
            @endforeach

            @isset ($searchFields)
                <x-slot name="searchFields">
                    {{ $searchFields }}
                </x-slot>
            @endisset

            @isset ($searchSubmit)
                <x-slot name="searchSubmit">
                    {{ $searchSubmit }}
                </x-slot>
            @endisset

            @isset ($head)
                <x-slot name="head">
                    {{ $head }}
                </x-slot>
            @endisset

            @isset ($body)
                <x-slot name="body">
                    {{ $body }}
                </x-slot>
            @endisset

            @isset ($empty)
                <x-slot name="empty">
                    {{ $empty }}
                </x-slot>
            @endisset

            @isset ($foot)
                <x-slot name="foot">
                    {{ $foot }}
                </x-slot>
            @endisset
        </x-datatable>
    @endisset
</div>
