<?php

$lang = str_replace('_', '-', app()->getLocale());
$locale = strtolower(substr($lang, 0, 2));

return [
    'prefix' => '',

    'options' => [

        /*
        |--------------------------------------------------------------------------
        | TALLKit Assets URL
        |--------------------------------------------------------------------------
        |
        | This value sets the path to TALLKit JavaScript assets, for cases where
        | your app's domain root is not the correct path. By default, TALLKit
        | will load its JavaScript assets from the app's "relative root".
        |
        | Examples: "/assets", "myurl.com/app".
        |
        */

        'asset_url' => null,

        /*
        |--------------------------------------------------------------------------
        | Load type
        |--------------------------------------------------------------------------
        |
        | Supported:
        |
        | data-tallkit-assets: Load only used assets, using the 'data-tallkit-assets' attribute.
        | true: Load all assets on 'options.assets'.
        | false: Disable load assets, you need to inject manually.
        |
        */

        'load_type' => 'data-tallkit-assets',

        /*
        |--------------------------------------------------------------------------
        | inject
        |--------------------------------------------------------------------------
        |
        | Some assets are essential for the package to work,
        | with this option you can inject them automatically or not.
        |
        */
        'inject' => [

            /*
            |
            | Enable when you want to inject tailwindcss directly from the CDN,
            | the url is in `assets.tailwindcss`.
            | This option is disabled for several reasons.
            | See https://tailwindcss.com/docs/installation#using-tailwind-via-cdn
            |
            */

            'tailwindcss' => false,

            /*
            |
            | Inject alpinejs directly from the CDN, the url is in `assets.alpine`.
            | See https://github.com/alpinejs/alpine/tree/2.x#install
            | See https://alpinejs.dev/essentials/installation#from-a-script-tag
            |
            */

            'alpine' => true,
        ],
    ],

    'assets' => [
        /**
         * Tailwindcss.
         */
        'tailwindcss' => [
            'https://cdn.jsdelivr.net/npm/tailwindcss@2/dist/tailwind.min.css',
        ],

        /**
         * Alpine.
         */
        'alpine' => [
            //'https://cdn.jsdelivr.net/npm/alpinejs@2/dist/alpine.min.js',
            'https://cdn.jsdelivr.net/npm/alpinejs@3/dist/cdn.min.js',
        ],

        /**
         * Editors.
         */
        'easymde' => [
            'https://cdn.jsdelivr.net/npm/easymde@2/dist/easymde.min.css',
            'https://cdn.jsdelivr.net/npm/easymde@2/dist/easymde.min.js',
        ],

        'quill' => [
            'https://cdn.jsdelivr.net/npm/quill@1/dist/quill.snow.min.css',
            'https://cdn.jsdelivr.net/npm/quill@1/dist/quill.min.js',
        ],

        'trix' => [
            'https://cdn.jsdelivr.net/npm/trix@1/dist/trix.min.css',
            'https://cdn.jsdelivr.net/npm/trix@1/dist/trix.min.js',
        ],

        /**
         * Forms.
         */
        'cleave' => [
            'https://cdn.jsdelivr.net/npm/cleave.js@1/dist/cleave.min.js',
        ],

        'imask' => [
            'https://cdn.jsdelivr.net/npm/imask@6/dist/imask.min.js',
        ],

        'tagify' => [
            'https://cdn.jsdelivr.net/npm/@yaireo/tagify@4/dist/tagify.css',
            'https://cdn.jsdelivr.net/npm/@yaireo/tagify@4/dist/tagify.polyfills.min.js',
            'https://cdn.jsdelivr.net/npm/@yaireo/tagify@4/dist/tagify.min.js',
        ],

        /**
         * Moment.
         */
        'moment' => [
            'https://cdn.jsdelivr.net/npm/moment@2/moment.min.js',
        ],

        'moment-timezone' => [
            'https://cdn.jsdelivr.net/npm/moment-timezone@0/builds/moment-timezone-with-data.min.js',
        ],

        /**
         * Overlays.
         */
        'tooltip' => [
            'https://cdn.jsdelivr.net/npm/@popperjs/core@2/dist/umd/popper.min.js',
            'https://cdn.jsdelivr.net/npm/tippy.js@6/dist/tippy.umd.min.js',
            'https://cdn.jsdelivr.net/npm/tippy.js@6/dist/tippy.css',
        ],

        /**
         * Pickers.
         */
        'flatpickr' => [
            'https://cdn.jsdelivr.net/npm/flatpickr@4/dist/flatpickr.min.css',
            'https://cdn.jsdelivr.net/npm/flatpickr@4/dist/flatpickr.min.js',
            $locale != 'en' ? 'https://cdn.jsdelivr.net/npm/flatpickr@4/dist/l10n/'.$locale.'.min.js' : '',
        ],

        'pickr' => [
            'https://cdn.jsdelivr.net/npm/@simonwep/pickr@1/dist/themes/classic.min.css',
            'https://cdn.jsdelivr.net/npm/@simonwep/pickr@1/dist/pickr.min.js',
        ],

        'pikaday' => [
            'https://cdn.jsdelivr.net/npm/pikaday@1/css/pikaday.min.css',
            'https://cdn.jsdelivr.net/npm/pikaday@1/pikaday.min.js',
        ],

        /**
         * Sliders.
         */
        'flickity' => [
            'https://cdn.jsdelivr.net/npm/flickity@2/dist/flickity.min.css',
            'https://cdn.jsdelivr.net/npm/flickity@2/dist/flickity.pkgd.min.js',
        ],

        'splide' => [
            'https://cdn.jsdelivr.net/npm/@splidejs/splide@2/dist/css/splide.min.css',
            'https://cdn.jsdelivr.net/npm/@splidejs/splide@2/dist/js/splide.min.js',
        ],

        'swiper' => [
            'https://cdn.jsdelivr.net/npm/swiper@7/swiper-bundle.min.css',
            'https://cdn.jsdelivr.net/npm/swiper@7/swiper-bundle.min.js',
        ],
    ],

    'components' => [
        /**
         * Bars.
         */
        'navbar' => \TALLKit\Components\Bars\Navbar::class,
        'sidebar' => \TALLKit\Components\Bars\Sidebar::class,
        'toolbar' => \TALLKit\Components\Bars\Toolbar::class,

        /**
         * Buttons.
         */
        'button' => \TALLKit\Components\Buttons\Button::class,
        'bt' => \TALLKit\Components\Buttons\Button::class, // alias
        'btn' => \TALLKit\Components\Buttons\Button::class, // alias
        'form-button' => \TALLKit\Components\Buttons\FormButton::class,
        'form-bt' => \TALLKit\Components\Buttons\FormButton::class, // alias
        'form-btn' => \TALLKit\Components\Buttons\FormButton::class, // alias
        'logout' => \TALLKit\Components\Buttons\Logout::class,
        'toggler' => \TALLKit\Components\Buttons\Toggler::class,

        /**
         * Datetimes.
         */
        'carbon' => \TALLKit\Components\Datetimes\Carbon::class,
        'countdown' => \TALLKit\Components\Datetimes\Countdown::class,
        'count-down' => \TALLKit\Components\Datetimes\Countdown::class, // alias,

        /**
         * Editors.
         */
        'editor' => \TALLKit\Components\Editors\Quill::class, // alias
        'easymde' => \TALLKit\Components\Editors\Easymde::class,
        'easy-mde' => \TALLKit\Components\Editors\Easymde::class, // alias
        'mde' => \TALLKit\Components\Editors\Easymde::class, // alias
        'quill' => \TALLKit\Components\Editors\Quill::class,
        'trix' => \TALLKit\Components\Editors\Trix::class,

        /**
         * Forms.
         */
        'checkbox' => \TALLKit\Components\Forms\Checkbox::class,
        'check' => \TALLKit\Components\Forms\Checkbox::class, // alias
        'errors' => \TALLKit\Components\Forms\Errors::class,
        'error' => \TALLKit\Components\Forms\Errors::class, // alias
        'field-group' => \TALLKit\Components\Forms\FieldGroup::class,
        'field' => \TALLKit\Components\Forms\Field::class, // alias
        'form-field' => \TALLKit\Components\Forms\Field::class,
        'form' => \TALLKit\Components\Forms\Form::class,
        'group' => \TALLKit\Components\Forms\Group::class,
        'form-group' => \TALLKit\Components\Forms\Group::class, // alias
        'image-preview' => \TALLKit\Components\Forms\InputImage::class, // alias
        'input' => \TALLKit\Components\Forms\Input::class,
        'input-image' => \TALLKit\Components\Forms\InputImage::class,
        'label' => \TALLKit\Components\Forms\Label::class,
        'lbl' => \TALLKit\Components\Forms\Label::class, // alias
        'radio' => \TALLKit\Components\Forms\Radio::class,
        'select' => \TALLKit\Components\Forms\Select::class,
        'submit' => \TALLKit\Components\Forms\Submit::class,
        'textarea' => \TALLKit\Components\Forms\Textarea::class,
        'validation-bag' => \TALLKit\Components\Forms\ValidationErrors::class, // alias
        'validation-errors' => \TALLKit\Components\Forms\ValidationErrors::class,
        'validation-error' => \TALLKit\Components\Forms\ValidationErrors::class, // alias
        'validation' => \TALLKit\Components\Forms\ValidationErrors::class, // alias

        /**
         * Icons.
         */
        'icon' => \TALLKit\Components\Icons\Icon::class,

        /**
         * Layouts.
         */
        'admin-panel' => \TALLKit\Components\Layouts\AdminPanel::class,
        'admin' => \TALLKit\Components\Layouts\AdminPanel::class, // alias
        'admin-card' => \TALLKit\Components\Layouts\AdminPanel::class, // alias
        'authentication-card' => \TALLKit\Components\Layouts\AuthenticationCard::class,
        'auth' => \TALLKit\Components\Layouts\AuthenticationCard::class, // alias
        'auth-card' => \TALLKit\Components\Layouts\AuthenticationCard::class, // alias
        'authentication' => \TALLKit\Components\Layouts\AuthenticationCard::class, // alias
        'container' => \TALLKit\Components\Layouts\Container::class,
        'content' => \TALLKit\Components\Layouts\Container::class, //alias
        'google-fonts' => \TALLKit\Components\Layouts\GoogleFonts::class,
        'googlefonts' => \TALLKit\Components\Layouts\GoogleFonts::class, // alias
        'html' => \TALLKit\Components\Layouts\Html::class,
        'logo' => \TALLKit\Components\Layouts\Logo::class,
        'meta' => \TALLKit\Components\Layouts\Meta::class,

        /**
         * Markdowns.
         */
        'markdown' => \TALLKit\Components\Markdowns\Markdown::class,
        'md' => \TALLKit\Components\Markdowns\Markdown::class, // alias
        'toc' => \TALLKit\Components\Markdowns\Toc::class,

        /**
         * Menus.
         */
        'dropdown-menu' => \TALLKit\Components\Menus\MenuDropdown::class, // alias
        'menu-dropdown' => \TALLKit\Components\Menus\MenuDropdown::class,
        'menu' => \TALLKit\Components\Menus\Menu::class,
        'menu-user' => \TALLKit\Components\Menus\UserMenu::class, // alias
        'user-menu' => \TALLKit\Components\Menus\UserMenu::class,

        /**
         * Messages.
         */
        'alert' => \TALLKit\Components\Messages\Message::class, // alias
        'message' => \TALLKit\Components\Messages\Message::class,

        /**
         * Navigations.
         */
        'drawer' => \TALLKit\Components\Navigations\Drawer::class,
        'dropdown' => \TALLKit\Components\Navigations\Dropdown::class,
        'navigation-drawer' => \TALLKit\Components\Navigations\Drawer::class, // alias
        'nav' => \TALLKit\Components\Navigations\Nav::class,
        'nav-item' => \TALLKit\Components\Navigations\NavItem::class,
        'navitem' => \TALLKit\Components\Navigations\NavItem::class, // alias
        'toggleable' => \TALLKit\Components\Navigations\Toggleable::class,

        /**
         * Overlays.
         */
        'backdrop' => \TALLKit\Components\Overlays\Overlay::class, // alias
        'consent' =>  \TALLKit\Components\Overlays\CookieConsent::class, // alias
        'cookie-consent' => \TALLKit\Components\Overlays\CookieConsent::class,
        'modal' => \TALLKit\Components\Overlays\Modal::class,
        'overlay' => \TALLKit\Components\Overlays\Overlay::class,
        'tooltip' => \TALLKit\Components\Overlays\Tooltip::class,

        /**
         * Panels.
         */
        'accordion' => \TALLKit\Components\Panels\Accordion::class,
        'accordion-item' => \TALLKit\Components\Panels\AccordionItem::class,
        'accordionitem' => \TALLKit\Components\Panels\AccordionItem::class, // alias
        'card' => \TALLKit\Components\Panels\Card::class,
        'form-section' => \TALLKit\Components\Panels\FormSection::class,
        'section' => \TALLKit\Components\Panels\Section::class,
        'tab' => \TALLKit\Components\Panels\Tab::class,
        'tab-item' => \TALLKit\Components\Panels\TabItem::class,
        'tabitem' => \TALLKit\Components\Panels\TabItem::class, // alias

        /**
         * Pickers.
         */
        'datetime-picker' => \TALLKit\Components\Pickers\Flatpickr::class, // alias
        'datetimepicker' => \TALLKit\Components\Pickers\Flatpickr::class, // alias
        'flatpickr' => \TALLKit\Components\Pickers\Flatpickr::class,
        'color-picker' => \TALLKit\Components\Pickers\Pickr::class, // alias
        'colorpicker' => \TALLKit\Components\Pickers\Pickr::class, // alias
        'pickr' => \TALLKit\Components\Pickers\Pickr::class,
        'date-picker' => \TALLKit\Components\Pickers\Pikaday::class, // alias
        'datepicker' => \TALLKit\Components\Pickers\Pikaday::class, // alias
        'pikaday' => \TALLKit\Components\Pickers\Pikaday::class,

        /**
         * Sliders.
         */
        'flickity' => \TALLKit\Components\Sliders\Flickity::class,
        'flickity-item' => \TALLKit\Components\Sliders\FlickityItem::class,
        'flickityitem' => \TALLKit\Components\Sliders\FlickityItem::class, // alias
        'slider' => \TALLKit\Components\Sliders\Slider::class,
        'slider-item' => \TALLKit\Components\Sliders\SliderItem::class,
        'slideritem' => \TALLKit\Components\Sliders\SliderItem::class, // alias
        'splide' => \TALLKit\Components\Sliders\Splide::class,
        'splide-item' => \TALLKit\Components\Sliders\SplideItem::class,
        'splideitem' => \TALLKit\Components\Sliders\SplideItem::class, // alias
        'swiper' => \TALLKit\Components\Sliders\Swiper::class,
        'swiper-item' => \TALLKit\Components\Sliders\SwiperItem::class,
        'swiperitem' => \TALLKit\Components\Sliders\SwiperItem::class, // alias

        /**
         * Supports.
         */
        'avatar' => \TALLKit\Components\Supports\Avatar::class,
        'cron' => \TALLKit\Components\Supports\Cron::class, // alias
        'image-loader' => \TALLKit\Components\Supports\ImageLoader::class,
        'img-loader' => \TALLKit\Components\Supports\ImageLoader::class, // alias
        'load-img' => \TALLKit\Components\Supports\ImageLoader::class, // alias
        'load-image' => \TALLKit\Components\Supports\ImageLoader::class, // alias
        'unsplash' => \TALLKit\Components\Supports\Unsplash::class, // alias


        /**
         * Tables.
         */
        'table' => \TALLKit\Components\Tables\Table::class,
        'heading' => \TALLKit\Components\Tables\Heading::class,
        'head' => \TALLKit\Components\Tables\Heading::class, // alias
        'th' => \TALLKit\Components\Tables\Heading::class, // alias
        'row' => \TALLKit\Components\Tables\Row::class,
        'tr' => \TALLKit\Components\Tables\Row::class, // alias
        'cell' => \TALLKit\Components\Tables\Cell::class,
        'td' => \TALLKit\Components\Tables\Cell::class, // alias
    ],

    'themes' => [
        'default' => [
            /**
             * Bars.
             */
            'navbar' => [
                'container' => [
                    'data-tallkit-assets' => 'alpine',
                    'x-cloak' => '',
                    'x-data' => 'window.tallkit.component(\'navbar\')',
                    '@click.away' => 'close',
                    '@click.outside' => 'close',
                    '@keydown.escape.window' => 'close',
                    'class' => 'flex flex-wrap items-center relative',
                ],

                'aligns' => [
                    'start' => [
                        'class' => 'justify-start',
                    ],

                    'end' => [
                        'class' => 'justify-end',
                    ],

                    'center' => [
                        'class' => 'justify-center',
                    ],

                    'between' => [
                        'class' => 'justify-between',
                    ],

                    'around' => [
                        'class' => 'justify-around',
                    ],

                    'evenly' => [
                        'class' => 'justify-evenly',
                    ],
                ],

                'breakpoints' => [
                    'sm' => [
                        'container' => [
                            'class' => 'sm:flex-nowrap',
                        ],

                        'logo' => [],

                        'toggler' => [
                            'class' => 'sm:hidden',
                        ],

                        'nav' => [
                            'class' => 'sm:flex sm:w-auto sm:flex-grow-0 sm:flex-row sm:items-center sm:max-h-full sm:relative',
                        ],

                        'animated' => [
                            'class' => 'sm:transition-none',
                        ],
                    ],

                    'md' => [
                        'container' => [
                            'class' => 'md:flex-nowrap',
                        ],

                        'logo' => [],

                        'toggler' => [
                            'class' => 'md:hidden',
                        ],

                        'nav' => [
                            'class' => 'md:flex md:w-auto md:flex-grow-0 md:flex-row md:items-center md:max-h-full md:relative',
                        ],

                        'animated' => [
                            'class' => 'md:transition-none',
                        ],
                    ],

                    'lg' => [
                        'container' => [
                            'class' => 'lg:flex-nowrap',
                        ],

                        'logo' => [],

                        'toggler' => [
                            'class' => 'lg:hidden',
                        ],

                        'nav' => [
                            'class' => 'lg:flex lg:w-auto lg:flex-grow-0 lg:flex-row lg:items-center lg:max-h-full lg:relative',
                        ],

                        'animated' => [
                            'class' => 'lg:transition-none',
                        ],
                    ],

                    'xl' => [
                        'container' => [
                            'class' => 'xl:flex-nowrap',
                        ],

                        'logo' => [],

                        'toggler' => [
                            'class' => 'xl:hidden',
                        ],

                        'nav' => [
                            'class' => 'xl:flex xl:w-auto xl:flex-grow-0 xl:flex-row xl:items-center xl:max-h-full xl:relative',
                        ],

                        'animated' => [
                            'class' => 'xl:transition-none',
                        ],
                    ],

                    '2xl' => [
                        'container' => [
                            'class' => '2xl:flex-nowrap',
                        ],

                        'logo' => [],

                        'toggler' => [
                            'class' => '2xl:hidden',
                        ],

                        'nav' => [
                            'class' => '2xl:flex 2xl:w-auto 2xl:flex-grow-0 2xl:flex-row 2xl:items-center 2xl:max-h-full 2xl:relative',
                        ],

                        'animated' => [
                            'class' => '2xl:transition-none',
                        ],
                    ],
                ],

                'logo' => [],

                'toggler' => [
                    '@click' => 'toggle',
                ],

                'nav' => [
                    'x-ref' => 'nav',
                    ':class' => '{ \'hidden\': isClosed() }',
                    ':style' => 'style()',
                    'class' => 'w-full flex-grow flex-col items-start max-h-0',

                    'theme:item' => [
                        'theme:container' => [
                            'class' => 'w-full',
                        ],
                    ],
                ],

                'animated' => [
                    'class' => 'transition-all',
                ],
            ],

            'sidebar' => [
                'container' => [
                    'data-tallkit-assets' => 'alpine',
                    'x-cloak' => '',
                    'x-data' => 'window.tallkit.component(\'sidebar\')',
                    '@resize.window' => 'check',
                ],

                'nav' => [
                    'class' => 'h-full relative bg-gray-700 overflow-y-auto',
                ],

                'item' => [
                    'class' => 'text-gray-100 w-full flex items-center py-4 px-6 transition hover:bg-black hover:bg-opacity-10 outline-none focus:outline-none',
                ],

                'active' => [
                    'class' => 'bg-black bg-opacity-25 hover:bg-opacity-25',
                ],
            ],

            'toolbar' => [
                'container' => [
                    'class' => 'flex justify-between items-center py-4 px-6 bg-white border-b-4 border-indigo-700',
                ],

                'title' => [
                    'class' => 'flex-1 text-2xl font-medium',
                ],
            ],

            /**
             * Buttons.
             */
            'button' => [
                'container' => [
                    'class' => 'flex justify-between items-center space-x-2 py-2 px-4 outline-none focus:outline-none',
                ],

                'iconLeft' => [],

                'iconRight' => [],

                'colors' => [
                    'default' => [
                        'name' => 'gray',
                        'weight' => 500,
                        'hover' => 700,
                    ],

                    'info' => [
                        'name' => 'blue',
                        'weight' => 500,
                        'hover' => 700,
                    ],

                    'error' => [
                        'name' => 'red',
                        'weight' => 500,
                        'hover' => 700,
                    ],

                    'success' => [
                        'name' => 'green',
                        'weight' => 500,
                        'hover' => 700,
                    ],

                    'warning' => [
                        'name' => 'yellow',
                        'weight' => 500,
                        'hover' => 700,
                    ],
                ],

                'rounded' => [
                    'default' => [
                        'class' => 'rounded',
                    ],

                    'sm' => [
                        'class' => 'rounded-sm',
                    ],

                    'md' => [
                        'class' => 'rounded-md',
                    ],

                    'lg' => [
                        'class' => 'rounded-lg',
                    ],

                    'full' => [
                        'class' => 'rounded-full',
                    ],

                    'none' => [
                        'class' => 'rounded-none',
                    ],
                ],

                'shadow' => [
                    'default' => [
                        'class' => 'shadow',
                    ],

                    'xs' => [
                        'class' => 'shadow-xs',
                    ],

                    'sm' => [
                        'class' => 'shadow-sm',
                    ],

                    'md' => [
                        'class' => 'shadow-md',
                    ],

                    'lg' => [
                        'class' => 'shadow-lg',
                    ],

                    'xl' => [
                        'class' => 'shadow-xl',
                    ],

                    '2xl' => [
                        'class' => 'shadow-2xl',
                    ],

                    'inner' => [
                        'class' => 'shadow-inner',
                    ],

                    'outline' => [
                        'class' => 'shadow-outline',
                    ],

                    'none' => [
                        'class' => 'shadow-none',
                    ],
                ],
            ],

            'form-button' => [
                'container' => [],

                'button' => [],
            ],

            'logout' => [
                'button' => [],
            ],

            'toggler' => [
                'button' => [],

                'icon' => [
                    'class' => 'w-6 h-6',
                ],

                'iconName' => 'menu',

                'iconSvg' => [
                    '<svg class="fill-current" viewBox="0 0 24 24"><path d="M4 6H20M4 12H20M4 18H11" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg>',
                ],
            ],

            /**
             * Datetimes.
             */
            'carbon' => [
                'container' => [
                    'data-tallkit-assets' => 'alpine,moment,moment-timezone',
                    'x-data' => 'window.tallkit.component(\'carbon\')',
                ],
            ],

            'countdown' => [
                'container' => [
                    'data-tallkit-assets' => 'alpine',
                    'x-data' => 'window.tallkit.component(\'countdown\')',
                ],

                'days' => [
                    'x-ref' => 'days',
                ],

                'hours' => [
                    'x-ref' => 'hours',
                ],

                'minutes' => [
                    'x-ref' => 'minutes',
                ],

                'seconds' => [
                    'x-ref' => 'seconds',
                ],
            ],

            /**
             * Editors.
             */
            'easymde' => [
                'container' => [
                    'data-tallkit-assets' => 'alpine,easymde',
                    'wire:ignore' => 'true',
                    'x-data' => 'window.tallkit.component(\'easymde\')',
                ],

                'label' => [
                    'class' => 'block',
                ],

                'labelText' => [
                    'class' => 'mb-1',
                ],

                'easymde' => [
                    'x-ref' => 'editor',
                ],

                'options' => [
                    'forceSync' => true,
                ],
            ],

            'quill' => [
                'container' => [
                    'data-tallkit-assets' => 'alpine,quill',
                    'wire:ignore' => 'true',
                    'x-data' => 'window.tallkit.component(\'quill\')',
                ],

                'label' => [
                    'class' => 'block',
                ],

                'labelText' => [
                    'class' => 'mb-1',
                ],

                'input' => [
                    'x-ref' => 'input',
                ],

                'quill' => [
                    'x-ref' => 'editor',
                    'class' => 'quill-container',
                ],

                'options' => [
                    'theme' => 'snow',
                ],
            ],

            'trix' => [
                'container' => [
                    'data-tallkit-assets' => 'alpine,trix',
                    'wire:ignore' => 'true',
                    'x-data' => 'window.tallkit.component(\'trix\')',
                    'x-init' => 'setup',
                    'x-on:trix-change' => 'change',
                ],

                'label' => [
                    'class' => 'block',
                ],

                'labelText' => [
                    'class' => 'mb-1',
                ],

                'input' => [],

                'trix' => [
                    'class' => 'trix-content block w-full border-gray-200 rounded shadow bg-white',
                ],
            ],

            /**
             * Forms.
             */
            'checkbox' => [
                'container' => [
                    'class' => 'flex flex-col',
                ],

                'label' => [
                    'class' => 'flex items-center',
                ],

                'labelText' => [
                    'class' => 'ml-3',
                ],

                'checkbox' => [
                    'class' => 'h-4 w-4 border-gray-200 rounded shadow',
                ],
            ],

            'errors' => [
                'container' => [
                    'class' => 'text-red-600 text-sm italic',
                ],
            ],

            'field-group' => [
                'container' => [
                    'class' => 'flex divide-x items-center border border-gray-200 bg-white rounded shadow overflow-hidden focus-within:ring',
                ],

                'field' => [
                    'class' => 'flex-1 w-full relative',
                ],

                'prepend' => [
                    'class' => 'py-2 px-3',
                ],

                'append' => [
                    'class' => 'p-2 px-3',
                ],
            ],

            'field' => [
                'container' => [
                    'class' => 'mb-4',
                ],

                'label' => [
                    'class' => 'block',
                ],

                'labelText' => [
                    'class' => 'mb-1',
                ],

                'errors' => [],
            ],

            'form' => [
                'container' => [],
            ],

            'group' => [
                'labelText' => [
                    'class' => 'mb-1',
                ],

                'types' => [
                    'block' => [],

                    'inline' => [
                        'class' => 'flex flex-wrap space-x-6',
                    ],

                    'grid-1' => [
                        'class' => 'grid gap-6 grid-cols-1',
                    ],

                    'grid-2' => [
                        'class' => 'grid gap-6 grid-cols-2',
                    ],

                    'grid-3' => [
                        'class' => 'grid gap-6 grid-cols-3',
                    ],

                    'grid-4' => [
                        'class' => 'grid gap-6 grid-cols-4',
                    ],

                    'grid-5' => [
                        'class' => 'grid gap-6 grid-cols-5',
                    ],

                    'grid-6' => [
                        'class' => 'grid gap-6 grid-cols-6',
                    ],

                    'grid-7' => [
                        'class' => 'grid gap-6 grid-cols-7',
                    ],

                    'grid-8' => [
                        'class' => 'grid gap-6 grid-cols-8',
                    ],

                    'grid-9' => [
                        'class' => 'grid gap-6 grid-cols-9',
                    ],

                    'grid-10' => [
                        'class' => 'grid gap-6 grid-cols-10',
                    ],

                    'grid-11' => [
                        'class' => 'grid gap-6 grid-cols-11',
                    ],

                    'grid-12' => [
                        'class' => 'grid gap-6 grid-cols-12',
                    ],
                ],
            ],

            'input-image' => [
                'container' => [
                    'data-tallkit-assets' => 'alpine',
                    'x-cloak' => '',
                    'x-data' => 'window.tallkit.component(\'input-image\')',
                    'x-init' => 'setup',
                ],

                'label' => [],

                'labelText' => [
                    'class' => 'mb-1',
                ],

                'field' => [
                    'class' => 'bg-white inline-block relative overflow-hidden border border-gray-200 rounded shadow focus-within:ring',
                ],

                'input' => [
                    'x-ref' => 'input',
                    '@change' => 'change',
                    'class' => 'hidden',
                    'type' => 'file',
                ],

                'empty' => [
                    'x-show' => 'isEmpty()',
                    '@click.prevent' => 'edit',
                    'class' => 'w-full h-full',
                ],

                'emptyIconSvg' => '<svg class="w-6 h-6 inline-block" viewBox="0 0 512 512"><path fill="currentColor" d="M512 144v288c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V144c0-26.5 21.5-48 48-48h88l12.3-32.9c7-18.7 24.9-31.1 44.9-31.1h125.5c20 0 37.9 12.4 44.9 31.1L376 96h88c26.5 0 48 21.5 48 48zM376 288c0-66.2-53.8-120-120-120s-120 53.8-120 120 53.8 120 120 120 120-53.8 120-120zm-32 0c0 48.5-39.5 88-88 88s-88-39.5-88-88 39.5-88 88-88 88 39.5 88 88z"></path></svg>',

                'loading' => [
                    'x-show' => 'isLoading()',
                    'class' => 'w-full h-full flex items-center justify-center p-2',
                ],

                'loadingIcon' => 'animate-spin w-6 h-6 shadown',

                'loadingIconName' => 'loading',

                'loadingIconSvg' => '<svg fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg>',

                'error' => [
                    'x-show' => 'isFailed()',
                    '@click.prevent' => 'edit',
                    'class' => 'w-full h-full',
                ],

                'errorIconSvg' => '<svg class="w-6 h-6 inline-block" viewBox="0 0 352 512"><path fill="currentColor" d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z"></path></svg>',

                'complete' => [
                    'x-show' => 'isCompleted()',
                    'class' => 'w-full h-full flex flex-col items-center justify-center',
                ],

                'img' => [
                    'x-ref' => 'output',
                    'class' => 'm-4',
                ],

                'actions' => [
                    'class' => 'w-full h-full flex items-center justify-center border-t p-2',
                ],

                'edit' => [
                    '@click.prevent' => 'edit',
                    'class' => 'transition transform hover:scale-125',
                ],

                'editIcon' => [
                    'class' => 'w-6 h-6',
                ],

                'editIconName' => 'pencil',

                'editIconSvg' => '<svg viewBox="0 0 512 512"><path fill="currentColor" d="M497.9 142.1l-46.1 46.1c-4.7 4.7-12.3 4.7-17 0l-111-111c-4.7-4.7-4.7-12.3 0-17l46.1-46.1c18.7-18.7 49.1-18.7 67.9 0l60.1 60.1c18.8 18.7 18.8 49.1 0 67.9zM284.2 99.8L21.6 362.4.4 483.9c-2.9 16.4 11.4 30.6 27.8 27.8l121.5-21.3 262.6-262.6c4.7-4.7 4.7-12.3 0-17l-111-111c-4.8-4.7-12.4-4.7-17.1 0zM124.1 339.9c-5.5-5.5-5.5-14.3 0-19.8l154-154c5.5-5.5 14.3-5.5 19.8 0s5.5 14.3 0 19.8l-154 154c-5.5 5.5-14.3 5.5-19.8 0zM88 424h48v36.3l-64.5 11.3-31.1-31.1L51.7 376H88v48z"></path></svg>',

                'delete' => [
                    'class' => 'transition transform hover:scale-125',
                ],

                'deleteIcon' => [
                    'class' => 'w-6 h-6',
                ],

                'deleteIconName' => 'trash',

                'deleteIconSvg' => '<svg viewBox="0 0 512 512"><path fill="currentColor" d="M432 32H312l-9.4-18.7A24 24 0 0 0 281.1 0H166.8a23.72 23.72 0 0 0-21.4 13.3L136 32H16A16 16 0 0 0 0 48v32a16 16 0 0 0 16 16h416a16 16 0 0 0 16-16V48a16 16 0 0 0-16-16zM53.2 467a48 48 0 0 0 47.9 45h245.8a48 48 0 0 0 47.9-45L416 128H32z"></path></svg>',
            ],

            'input' => [
                'hidden' => [
                    'class' => 'hidden',
                ],

                'input' => [
                    'class' => 'block w-full py-2 px-3 outline-none focus:outline-none',
                ],

                'mask' => [
                    'data-tallkit-assets' => 'alpine,imask',
                    'x-data' => 'window.tallkit.component(\'mask\')',
                    'x-ref' => 'input',
                ],

                'cleave' => [
                    'data-tallkit-assets' => 'alpine,cleave',
                    'x-data' => 'window.tallkit.component(\'cleave\')',
                    'x-ref' => 'input',
                ],

                'tagify' => [
                    'data-tallkit-assets' => 'alpine,tagify',
                    'x-data' => 'window.tallkit.component(\'tagify\')',
                    'x-ref' => 'input',
                ],
            ],

            'label' => [
                'container' => [
                    'class' => 'block',
                ],
            ],

            'radio' => [
                'label' => [
                    'class' => 'inline-flex items-center',
                ],

                'labelText' => [
                    'class' => 'ml-3',
                ],

                'radio' => [
                    'class' => 'h-4 w-4 border-gray-200 shadow',
                ],
            ],

            'select' => [
                'multiselect' => [
                    'class' => 'block w-full py-2 px-3 outline-none focus:outline-none',
                ],

                'select' => [
                    'class' => 'block w-full py-2 px-3 outline-none focus:outline-none',
                ],
            ],

            'textarea' => [
                'textarea' => [
                    'class' => 'block w-full py-2 px-3 outline-none focus:outline-none',
                    'rows' => '5',
                ],
            ],

            'validation-errors' => [
                'message' => [
                    'class' => 'mb-4',
                ],

                'container' => [
                    'class' => 'mb-4',
                ],

                'title' => [
                    'class' => 'font-medium text-red-600',
                ],

                'ul' => [
                    'class' => 'mt-3 list-disc list-inside text-sm text-red-600',
                ],

                'li' => [],
            ],

            /**
             * Layouts.
             */
            'admin-panel' => [
                'container' => [
                    'class' => 'flex h-screen bg-gray-100',
                ],

                'sidebar' => [],

                'logo' => [
                    'class' => 'text-white',
                ],

                'box' => [
                    'class' => 'flex-1 flex flex-col overflow-hidden',
                ],

                'toolbar' => [],

                'toggler' => [
                    'data-tallkit-assets' => 'alpine',
                    'x-data' => '',
                ],

                'main' => [
                    'class' => 'flex-1 overflow-auto bg-transparent',
                ],

                'content' => [
                    'class' => 'px-6 py-8',
                ],
            ],

            'authentication-card' => [
                'container' => [
                    'class' => 'min-h-screen flex flex-col items-center pt-6 bg-gray-100',
                ],

                'header' => [],

                'logo' => [],

                'card' => [
                    'class' => 'w-full sm:max-w-md px-6 py-4 bg-white shadow overflow-hidden rounded',
                ],
            ],

            'container' => [
                'container' => [
                    'class' => 'container mx-auto',
                ],
            ],

            'html' => [
                'html' => [
                    'lang' => $lang,
                ],

                'head' => [],

                'body' => [
                    'class' => 'text-gray-700',
                ],
            ],

            'logo' => [
                'container' => [
                    'class' => 'flex items-center justify-center p-4',
                ],

                'image' => [
                    'class' => 'mx-auto',
                ],

                'name' => [
                    'class' => 'text-2xl font-semibold',
                ],
            ],

            'meta' => [],

            /**
             * Markdowns.
             */
            'markdown' => [
                'container' => [],
            ],

            'toc' => [
                'container' => [],

                'item' => [],

                'sub' => [],

                'link' => [],
            ],

            /**
             * Menus.
             */
            'menu-dropdown' => [
                'container' => [],

                'aligns' => [
                    'top' => [
                        'class' => 'top-0',
                    ],

                    'left' => [
                        'class' => 'left-0',
                    ],

                    'right' => [
                        'class' => 'right-0',
                    ],

                    'bottom' => [
                        'class' => 'bottom-0',
                    ],

                    'top-left' => [
                        'class' => 'top-0 left-0',
                    ],

                    'top-right' => [
                        'class' => 'top-0 right-0',
                    ],

                    'bottom-left' => [
                        'class' => 'bottom-0 left-0',
                    ],

                    'bottom-right' => [
                        'class' => 'bottom-0 right-0',
                    ],
                ],

                'dropdown' => [],

                'trigger' => [
                    'class' => 'bg-white w-8 h-8 transition hover:opacity-75',
                    'style' => 'padding: 0;',
                ],

                'iconName' => 'ellipsis-v',

                'iconSvg' => '<svg class="mx-auto w-4 h-4" viewBox="0 0 192 512"><path fill="currentColor" d="M96 184c39.8 0 72 32.2 72 72s-32.2 72-72 72-72-32.2-72-72 32.2-72 72-72zM24 80c0 39.8 32.2 72 72 72s72-32.2 72-72S135.8 8 96 8 24 40.2 24 80zm0 352c0 39.8 32.2 72 72 72s72-32.2 72-72-32.2-72-72-72-72 32.2-72 72z"></path></svg>',
            ],

            'menu' => [
                'container' => [
                    'class' => 'bg-white ring-1 ring-black ring-opacity-5 divide-gray-100 rounded shadow',

                    'theme:item' => [
                        'class' => 'hover:bg-gray-100 hover:text-gray-900',

                        'theme:active' => [
                            'class' => 'bg-gray-100 text-gray-900',
                        ],
                    ],
                ],

                'aligns' => [
                    'outline' => [
                        'class' => 'divide-y',
                    ],

                    'inline' => [
                        'class' => 'divide-x',
                    ],
                ],
            ],

            'user-menu' => [
                'container' => [],

                'user' => [
                    'class' => 'flex items-center space-x-2',
                ],

                'userAvatar' => [
                    'class' => 'w-8 h-8 rounded-full overflow-hidden border shadow bg-indigo-700 text-white flex items-center justify-center font-bold',
                ],

                'userAvatarContainer' => [
                    'theme:image' => [
                        'class' => 'w-full h-full',
                    ],

                    'theme:icon' => [
                        'class' => 'w-4 h-4',
                    ],
                ],

                'userName' => [],
            ],

            /**
             * Messages.
             */
            'message' => [
                'container' => [
                    'data-tallkit-assets' => 'alpine',
                    'x-cloak' => '',
                    'x-data' => 'window.tallkit.component(\'message\')',
                    'x-show' => 'isOpened()',
                    'x-transition:enter' => 'ease-out duration-300',
                    'x-transition:enter-start' => 'opacity-0',
                    'x-transition:enter-end' => 'opacity-100',
                    'x-transition:leave' => 'ease-in duration-200',
                    'x-transition:leave-start' => 'opacity-100',
                    'x-transition:leave-end' => 'opacity-0',
                    'class' => 'flex flex-row p-4 rounded relative transition',
                ],

                'icon' => [
                    'class' => 'flex items-center border-2 justify-center h-10 w-10 flex-shrink-0 rounded-full mr-4',
                ],

                'dismissible' => [
                    'button' => [
                        '@click' => 'close',
                        'class' => 'absolute top-0 right-0 transition hover:opacity-75 text-sm',
                    ],

                    'iconName' => 'close',

                    'iconSvg' => '<svg class="fill-current w-4 h-4" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>',
                ],

                'title' => [
                    'class' => 'font-semibold text-lg',
                ],

                'message' => [],

                'types' => [
                    'default' => [
                        'color' => 'gray',
                        'iconSvg' => false,
                        'iconName' => false,
                        'title' => false,
                    ],

                    'error' => [
                        'color' => 'red',
                        'iconName' => 'close',
                        'iconSvg' => '<svg class="fill-current w-6 h-6" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>',
                        'title' => 'Error',
                    ],

                    'info' => [
                        'color' => 'blue',
                        'iconName' => 'information',
                        'iconSvg' => '<svg class="fill-current w-6 h-6" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>',
                        'title' => 'Info',
                    ],

                    'success' => [
                        'color' => 'green',
                        'iconName' => 'check',
                        'iconSvg' => '<svg class="fill-current w-6 h-6" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>',
                        'title' => 'Success',
                    ],

                    'warning' => [
                        'color' => 'yellow',
                        'iconName' => 'alert',
                        'iconSvg' => '<svg class="fill-current w-6 h-6" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>',
                        'title' => 'Warning',
                    ],
                ],

                'modes' => [
                    'default' => [
                        'class' => 'border-2',
                    ],

                    'top' => [
                        'class' => 'border-t-2',
                    ],

                    'bottom' => [
                        'class' => 'border-b-2',
                    ],

                    'left' => [
                        'class' => 'border-l-2',
                    ],

                    'right' => [
                        'class' => 'border-r-2',
                    ],

                    'banner' => [
                        'class' => 'border-t-2 border-b-2',
                    ],

                    'outlined' => [
                        'class' => 'border-2 bg-transparent',
                    ],
                ],

                'rounded' => [
                    'default' => [
                        'class' => 'rounded',
                    ],

                    'sm' => [
                        'class' => 'rounded-sm',
                    ],

                    'md' => [
                        'class' => 'rounded-md',
                    ],

                    'lg' => [
                        'class' => 'rounded-lg',
                    ],

                    'full' => [
                        'class' => 'rounded-full',
                    ],
                ],

                'shadow' => [
                    'default' => [
                        'class' => 'shadow',
                    ],

                    'xs' => [
                        'class' => 'shadow-xs',
                    ],

                    'sm' => [
                        'class' => 'shadow-sm',
                    ],

                    'md' => [
                        'class' => 'shadow-md',
                    ],

                    'lg' => [
                        'class' => 'shadow-lg',
                    ],

                    'xl' => [
                        'class' => 'shadow-xl',
                    ],

                    '2xl' => [
                        'class' => 'shadow-2xl',
                    ],

                    'inner' => [
                        'class' => 'shadow-inner',
                    ],

                    'outline' => [
                        'class' => 'shadow-outline',
                    ],

                    'none' => [
                        'class' => 'shadow-none',
                    ],
                ],
            ],

            /**
             * Navigations.
             */
            'drawer' => [
                'container' => [],

                'drawer' => [
                    'x-show' => 'isOpened()',
                    'x-transition:enter' => 'ease-out duration-300',
                    'x-transition:leave' => 'ease-in duration-200',
                    'class' => 'fixed transform transition',
                ],

                'aligns' => [
                    'left' => [
                        'x-transition:enter-start' => '-translate-x-full',
                        'x-transition:enter-end' => 'translate-x-0',
                        'x-transition:leave-start' => 'translate-x-0',
                        'x-transition:leave-end' => '-translate-x-full',
                        'class' => 'h-full top-0 bottom-0 left-0 overflow-y-auto',
                    ],

                    'right' => [
                        'x-transition:enter-start' => 'translate-x-full',
                        'x-transition:enter-end' => 'translate-x-0',
                        'x-transition:leave-start' => 'translate-x-0',
                        'x-transition:leave-end' => 'translate-x-full',
                        'class' => 'h-full top-0 bottom-0 right-0 overflow-y-auto',
                    ],

                    'top' => [
                        'x-transition:enter-start' => '-translate-y-full',
                        'x-transition:enter-end' => 'translate-y-0',
                        'x-transition:leave-start' => 'translate-y-0',
                        'x-transition:leave-end' => '-translate-y-full',
                        'class' => 'w-full top-0 left-0 right-0 overflow-x-auto',
                    ],

                    'bottom' => [
                        'x-transition:enter-start' => 'translate-y-full',
                        'x-transition:enter-end' => 'translate-y-0',
                        'x-transition:leave-start' => 'translate-y-0',
                        'x-transition:leave-end' => 'translate-y-full',
                        'class' => 'w-full bottom-0 left-0 right-0 overflow-x-auto',
                    ],
                ],
            ],

            'dropdown' => [
                'trigger' => [
                    '@click' => 'toggle',
                    'class' => 'inline-block cursor-pointer',
                ],

                'dropdown' => [
                    'x-show' => 'isOpened()',
                    'x-transition:enter' => 'transition ease-out duration-300',
                    'x-transition:enter-start' => 'transform opacity-0 scale-95',
                    'x-transition:enter-end' => 'transform opacity-100 scale-100',
                    'x-transition:leave' => 'transition ease-in duration-200',
                    'x-transition:leave-start' => 'transform opacity-100 scale-100',
                    'x-transition:leave-end' => 'transform opacity-0 scale-95',
                    '@click.away' => 'close',
                    '@click.outside' => 'close',
                    '@keydown.escape.window' => 'close',
                    'class' => 'absolute',
                ],

                'aligns' => [
                    'top' => [
                        'class' => 'top-0',
                    ],

                    'left' => [
                        'class' => 'left-0',
                    ],

                    'right' => [
                        'class' => 'right-0',
                    ],

                    'bottom' => [
                        'class' => 'bottom-0',
                    ],

                    'top-left' => [
                        'class' => 'origin-top-left top-0 left-0',
                    ],

                    'top-right' => [
                        'class' => 'origin-top-right top-0 right-0',
                    ],

                    'bottom-left' => [
                        'class' => 'origin-bottom-left bottom-0 left-0',
                    ],

                    'bottom-right' => [
                        'class' => 'origin-bottom-right bottom-0 right-0',
                    ],
                ],
            ],

            'nav-item' => [
                'container' => [],

                'item' => [
                    'class' => 'w-full flex items-center py-2 px-4 transition outline-none focus:outline-none hover:opacity-75',
                ],

                'active' => [
                    'class' => 'font-semibold',
                ],

                'iconLeft' => [
                    'class' => 'mr-3',
                ],

                'iconRight' => [
                    'class' => 'ml-3',
                ],
            ],

            'nav' => [
                'container' => [
                    'class' => 'flex overflow-hidden whitespace-nowrap',
                ],

                'aligns' => [
                    'outline' => [
                        'class' => 'flex-col',
                    ],

                    'inline' => [
                        'class' => 'flex-row',
                    ],
                ],
            ],

            'toggleable' => [
                'container' => [
                    'data-tallkit-assets' => 'alpine',
                    'x-cloak' => '',
                    'x-data' => 'window.tallkit.component(\'toggleable\')',
                    '@keydown.escape.window' => 'close(false)',
                    ':class' => '{\'z-30\': isOpened()}',
                    'class' => 'relative',
                ],
            ],

            /**
             * Overlays.
             */
            'cookie-consent' => [
                'container' => [
                    'data-tallkit-assets' => 'alpine',
                    'x-cloak' => '',
                    'x-data' => 'window.tallkit.component(\'cookie-consent\')',
                ],

                'modal' => [
                    'theme:box.except.@keydown.escape.window' => 'true',
                    'theme:box.except.@keydown.tab.prevent' => 'true',
                    'theme:box.except.@keydown.shift.tab.prevent' => 'true',
                    'class' => 'border p-4',
                ],

                'section' => [],

                'content' => [
                    'class' => 'mb-2',
                ],

                'link' => [
                    'class' => 'underline',
                ],

                'button' => [],
            ],

            'modal' => [
                'container' => [
                    'data-tallkit-assets' => 'alpine',
                    'x-cloak' => '',
                    'x-data' => 'window.tallkit.component(\'modal\')',
                ],

                'trigger' => [
                    '@click' => 'toggle',
                    'class' => 'inline-block cursor-pointer',
                ],

                'box' => [
                    'x-show' => 'isOpened()',
                    '@close.stop' => 'close',
                    '@keydown.escape.window' => 'close',
                    '@keydown.tab.prevent' => '$event.shiftKey || nextFocusable().focus()',
                    '@keydown.shift.tab.prevent' => 'prevFocusable().focus()',
                    'class' => 'fixed inset-0 z-50 p-4 flex',
                ],

                'aligns' => [
                    'left' => [
                        'class' => 'items-center justify-start',
                    ],

                    'right' => [
                        'class' => 'items-center justify-end',
                    ],

                    'top' => [
                        'class' => 'items-start justify-center',
                    ],

                    'top-left' => [
                        'class' => 'items-start justify-start',
                    ],

                    'top-right' => [
                        'class' => 'items-start justify-end',
                    ],

                    'center' => [
                        'class' => 'items-center justify-center',
                    ],

                    'bottom' => [
                        'class' => 'items-end justify-center',
                    ],

                    'bottom-left' => [
                        'class' => 'items-end justify-start',
                    ],

                    'bottom-right' => [
                        'class' => 'items-end justify-end',
                    ],
                ],

                'modal' => [
                    'x-show' => 'isOpened()',
                    'x-transition:enter' => 'ease-out duration-300',
                    'x-transition:leave' => 'ease-in duration-200',
                    'class' => 'flex-initial bg-white overflow-hidden rounded shadow transform transition w-full',
                ],

                'transitions' => [
                    'opacity' => [
                        'x-transition:enter-start' => 'opacity-0',
                        'x-transition:enter-end' => 'opacity-100',
                        'x-transition:leave-start' => 'opacity-100',
                        'x-transition:leave-end' => 'opacity-0',
                    ],

                    'left' => [
                        'x-transition:enter-start' => '-translate-x-full',
                        'x-transition:enter-end' => 'translate-x-0',
                        'x-transition:leave-start' => 'translate-x-0',
                        'x-transition:leave-end' => '-translate-x-full',
                    ],

                    'right' => [
                        'x-transition:enter-start' => 'translate-x-full',
                        'x-transition:enter-end' => 'translate-x-0',
                        'x-transition:leave-start' => 'translate-x-0',
                        'x-transition:leave-end' => 'translate-x-full',
                    ],

                    'top' => [
                        'x-transition:enter-start' => '-translate-y-full',
                        'x-transition:enter-end' => 'translate-y-0',
                        'x-transition:leave-start' => 'translate-y-0',
                        'x-transition:leave-end' => '-translate-y-full',
                    ],

                    'bottom' => [
                        'x-transition:enter-start' => 'translate-y-full',
                        'x-transition:enter-end' => 'translate-y-0',
                        'x-transition:leave-start' => 'translate-y-0',
                        'x-transition:leave-end' => 'translate-y-full',
                    ],
                ],
            ],

            'overlay' => [
                'container' => [
                    'x-cloak' => '',
                    'x-show' => 'isOpened()',
                    'x-transition:enter' => 'ease-out duration-300',
                    'x-transition:enter-start' => 'opacity-0',
                    'x-transition:enter-end' => 'opacity-100',
                    'x-transition:leave' => 'ease-in duration-200',
                    'x-transition:leave-start' => 'opacity-100',
                    'x-transition:leave-end' => 'opacity-0',
                    '@click' => 'close(false)',
                    'class' => 'fixed inset-0 transform transition cursor-pointer',
                ],

                'backdrop' => [
                    'class' => 'absolute inset-0 bg-gray-500 opacity-70',
                ],
            ],

            'tooltip' => [
                'container' => [
                    'data-tallkit-assets' => 'alpine,tooltip',
                    'x-cloak' => '',
                    'x-data' => 'window.tallkit.component(\'tooltip\')',
                    'class' => 'inline-block',
                ],

                'options' => [],
            ],

            /**
             * Panels.
             */
            'accordion' => [
                'container' => [
                    'class' => 'border',
                ],
            ],

            'accordion-item' => [
                'container' => [
                    'data-tallkit-assets' => 'alpine',
                    'x-cloak' => '',
                    'x-data' => 'window.tallkit.component(\'accordion-item\')',
                    'class' => 'border-b',
                ],

                'trigger' => [
                    '@click' => 'toggle',
                    'class' => 'w-full text-left py-2 px-4 cursor-pointer',
                ],

                'disabled' => [
                    'class' => 'cursor-not-allowed',
                    'disabled' => true,
                ],

                'item' => [
                    'x-ref' => 'container',
                    ':style' => 'style()',
                    'class' => 'overflow-hidden transition-all max-h-0 duration-500',
                ],

                'content' => [
                    'class' => 'py-2 px-4',
                ],
            ],

            'card' => [
                'container' => [
                    'class' => 'bg-white shadow rounded relative',
                ],

                'link' => [
                    'class' => 'block transition hover:shadow-lg',
                ],

                'image-header' => [
                    'class' => 'w-full h-32 rounded-t',
                ],

                'header' => [
                    'class' => 'px-8 py-4 bg-gray-50 overflow-hidden',
                ],

                'content' => [
                    'class' => 'block p-8',
                ],

                'title' => [
                    'class' => 'block mb-1 text-lg font-medium text-gray-900',
                ],

                'text' => [],

                'footer' => [
                    'class' => 'px-8 py-4 bg-gray-50 overflow-hidden',
                ],

                'image-footer' => [
                    'class' => 'w-full h-32 rounded-b',
                ],
            ],

            'form-section' => [
                'container' => [
                    'class' => 'lg:grid lg:grid-cols-3 lg:gap-6',
                ],

                'section' => [
                    'class' => 'lg:col-span-1',
                ],

                'title' => [],

                'form' => [
                    'class' => 'mt-5 lg:mt-0 lg:col-span-2',
                ],

                'card' => [],
            ],

            'section' => [
                'container' => [
                    'class' => 'flex justify-between items-center',
                ],

                'content' => [],

                'header' => [],

                'title' => [
                    'class' => 'text-lg font-medium text-gray-900',
                ],

                'subtitle' => [
                    'class' => 'text-gray-500',
                ],

                'actions' => [
                    'class' => 'flex-shrink-0',
                ],
            ],

            'tab' => [
                'container' => [
                    'data-tallkit-assets' => 'alpine',
                    'x-cloak' => '',
                    'x-data' => 'window.tallkit.component(\'tab\')',
                ],

                'heading' => [
                    'class' => 'flex',
                    'role' => 'tablist',
                ],

                'item' => [
                    'x-html' => 'tab.header',
                    '@click' => 'setSelected(tab)',
                    'role' => 'tab',
                ],

                'selected' => [],

                'disabled' => [
                    'class' => 'cursor-not-allowed',
                ],

                'tabs' => [
                    'x-ref' => 'tabs',
                ],

                'tab-item' => [
                    'x-show' => 'isSelected(tab)',
                    'x-html' => 'tab.content',
                ],

                'modes-item' => [
                    'default' => [],

                    'border' => [],
                ],

                'modes-selected' => [
                    'default' => [
                        'class' => 'border-b-2 bg-white border-gray-500',
                    ],

                    'border' => [
                        'class' => 'border border-b-0 bg-white rounded-t',
                    ],
                ],

                'modes-disabled' => [
                    'default' => [],

                    'border' => [],
                ],

                'modes-tabs' => [
                    'default' => [
                        'class' => '-mt-px border-t',
                    ],

                    'border' => [
                        'class' => '-mt-px border rounded-b',
                    ],
                ],
            ],

            'tab-item' => [
                'container' => [
                    'class' => 'p-4',
                    'role' => 'tabpanel',
                ],
            ],

            /**
             * Pickers.
             */
            'flatpickr' => [
                'flatpickr' => [
                    'data-tallkit-assets' => 'alpine,flatpickr',
                    'x-data' => 'window.tallkit.component(\'flatpickr\')',
                    'x-ref' => 'input',
                    'autocomplete' => 'off',
                ],

                'options' => [
                    'enableTime' => true,
                ],
            ],

            'pickr' => [
                'container' => [
                    'data-tallkit-assets' => 'alpine,pickr',
                    'wire:ignore' => 'true',
                    'x-data' => 'window.tallkit.component(\'pickr\')',
                ],

                'input' => [
                    'x-ref' => 'input',
                ],

                'pickr' => [
                    'x-ref' => 'picker',
                ],

                'options' => [
                    'theme' => 'classic',

                    'swatches' => [
                        '000000',
                        'A0AEC0',
                        'F56565',
                        'ED8936',
                        'ECC94B',
                        '48BB78',
                        '38B2AC',
                        '4299E1',
                        '667EEA',
                        '9F7AEA',
                        'ED64A6',
                        'FFFFFF',
                    ],

                    'components' => [
                        'preview' => true,
                        'interaction' => [
                            'hex' => true,
                            'input' => true,
                            'clear' => true,
                            'save' => true,
                        ],
                    ],
                ],
            ],

            'pikaday' => [
                'pikaday' => [
                    'data-tallkit-assets' => 'alpine,moment,pikaday',
                    'x-data' => 'window.tallkit.component(\'pikaday\')',
                    'x-ref' => 'input',
                    'autocomplete' => 'off',
                ],

                'options' => [],
            ],

            /**
             * Sliders.
             */
            'flickity' => [
                'container' => [
                    'data-tallkit-assets' => 'alpine,flickity',
                    'x-cloak' => '',
                    'x-data' => 'window.tallkit.component(\'flickity\')',
                ],

                'options' => [
                    // see https://flickity.metafizzy.co/options.html
                ],
            ],

            'flickity-item' => [
                'container' => [],
            ],

            'slider' => [
                'container' => [
                    'data-tallkit-assets' => 'alpine',
                    'x-cloak' => '',
                    'x-data' => 'window.tallkit.component(\'slider\')',
                    '@mouseenter' => 'onMouseEnter',
                    '@mouseleave' => 'onMouseLeave',
                    'class' => 'relative',
                ],

                'options' => [
                    'selected' => 0,
                    'loop' => false,
                    'autoplay' => false,
                    'interval' => 10,
                    'controls' => true,
                    'paginator' => true,
                    'progressbar' => false,
                    'stopOnOver' => false,
                ],

                'slider' => [
                    'x-ref' => 'slider',
                    'class' => 'slider-snap overflow-auto relative flex-no-wrap flex transition-all',
                ],

                'prev' => [
                    '@click' => 'prev',
                    ':class' => 'prevClass()',
                    'class' => 'absolute top-0 left-0 h-full opacity-50 hover:opacity-100 z-20',
                ],

                'prevIcon' => [
                    'class' => 'w-6 h-6',
                ],

                'prevIconName' => 'chevron-left',

                'prevIconSvg' => [
                    '<svg viewBox="0 0 320 512"><path fill="currentColor" d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z"></path></svg>',
                ],

                'next' => [
                    '@click' => 'next',
                    ':class' => 'nextClass()',
                    'class' => 'absolute top-0 right-0 h-full opacity-50 hover:opacity-100 z-20',
                ],

                'nextIcon' => [
                    'class' => 'w-6 h-6',
                ],

                'nextIconName' => 'chevron-right',

                'nextIconSvg' => [
                    '<svg viewBox="0 0 320 512"><path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path></svg>',
                ],

                'paginator' => [
                    'x-show' => 'hasPaginator()',
                    'class' => 'p-4 flex items-center justify-center space-x-2 absolute bottom-0 w-full z-10',
                ],

                'page' => [
                    '@click' => 'go(index)',
                    ':class' => '{ \'bg-opacity-100\': is(index) }',
                    'class' => 'bg-opacity-25',
                    'style' => 'padding: 8px;',
                ],

                'progressbar' => [
                    'x-show' => 'hasProgressbar()',
                    ':style' => 'progressbarStyle()',
                    'class' => 'bg-gray-100 h-2 max-w-full',
                ],
            ],

            'slider-item' => [
                'container' => [
                    'class' => 'w-full flex-shrink-0',
                    'style' => 'scroll-snap-align:center;',
                ],
            ],

            'splide' => [
                'container' => [
                    'data-tallkit-assets' => 'alpine,splide',
                    'x-cloak' => '',
                    'x-data' => 'window.tallkit.component(\'splide\')',
                    'class' => 'splide',
                ],

                'options' => [
                    // see https://splidejs.com/options/
                ],

                'slider' => [
                    'class' => 'splide__slider',
                ],

                'track' => [
                    'class' => 'splide__track',
                ],

                'list' => [
                    'class' => 'splide__list',
                ],
            ],

            'splide-item' => [
                'container' => [
                    'class' => 'splide__slide',
                ],
            ],

            'swiper' => [
                'container' => [
                    'data-tallkit-assets' => 'alpine,swiper',
                    'x-cloak' => '',
                    'x-data' => 'window.tallkit.component(\'swiper\')',
                    'class' => 'swiper',
                ],

                'options' => [
                    // see https://swiperjs.com

                    'pagination' => [
                        'el' => '.swiper-pagination',
                    ],

                    'navigation' => [
                        'nextEl' => '.swiper-button-next',
                        'prevEl' => '.swiper-button-prev',
                    ],

                    'scrollbar' => [
                        'el' => '.swiper-scrollbar',
                    ],
                ],

                'wrapper' => [
                    'class' => 'swiper-wrapper',
                ],

                'pagination' => [
                    'class' => 'swiper-pagination',
                ],

                'button-prev' => [
                    'class' => 'swiper-button-prev',
                ],

                'button-next' => [
                    'class' => 'swiper-button-next',
                ],

                'scrollbar' => [
                    'class' => 'swiper-scrollbar',
                ],
            ],

            'swiper-item' => [
                'container' => [
                    'class' => 'swiper-slide',
                ],
            ],

            /**
             * Supports.
             */
            'avatar' => [
                'container' => [
                    'theme:iconName' => [
                        'user',
                    ],

                    'theme:iconSvg' => [
                        '<svg class="fill-current" viewBox="0 0 448 512"><path fill="currentColor" d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-74.2-60.2-134.4-134.4-134.4z"></path></svg>',
                    ],
                ],
            ],

            'cron' => [
                'container' => [],
            ],

            'image-loader' => [
                'container' => [
                    'data-tallkit-assets' => 'alpine',
                    'x-cloak' => '',
                    'x-data' => 'window.tallkit.component(\'image-loader\')',
                    'x-init' => 'setup',
                ],

                'image' => [
                    'x-show' => 'isCompleted()',
                    'x-ref' => 'image',
                ],

                'icon' => [
                    'x-show' => 'isLoading() || isFailed()',
                ],

                'iconName' => [
                    'image',
                ],

                'iconSvg' => [
                    '<svg class="fill-current" viewBox="0 0 512 512"><path fill="currentColor" d="M464 64H48C21.49 64 0 85.49 0 112v288c0 26.51 21.49 48 48 48h416c26.51 0 48-21.49 48-48V112c0-26.51-21.49-48-48-48zm-6 336H54a6 6 0 0 1-6-6V118a6 6 0 0 1 6-6h404a6 6 0 0 1 6 6v276a6 6 0 0 1-6 6zM128 152c-22.091 0-40 17.909-40 40s17.909 40 40 40 40-17.909 40-40-17.909-40-40-40zM96 352h320v-80l-87.515-87.515c-4.686-4.686-12.284-4.686-16.971 0L192 304l-39.515-39.515c-4.686-4.686-12.284-4.686-16.971 0L96 304v48z"></path></svg>',
                ],

                'loadingIcon' => [
                    'x-show' => 'isLoading()',
                    'class' => 'animate-spin',
                ],

                'loadingIconName' => [
                    'loading',
                ],

                'loadingIconSvg' => [
                    '<svg fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg>',
                ],

                'errorIcon' => [
                    'x-show' => 'isFailed()',
                ],

                'errorIconName' => [
                    'times',
                ],

                'errorIconSvg' => [
                    '<svg class="fill-current" viewBox="0 0 352 512"><path fill="currentColor" d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z"></path></svg>',
                ],
            ],

            'unsplash' => [
                'container' => [],
            ],

            /**
             * Tables.
             */
            'cell' => [
                'td' => [
                    'class' => 'px-6 py-4 whitespace-nowrap text-gray-500',
                ],
            ],

            'heading' => [
                'th' => [
                    'class' => 'px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider',
                    'scope' => 'col',
                ],

                'container' => [
                    'class' => 'flex items-center',
                ],

                'sortable' => [
                    'asc' => [
                        'iconName' => 'chevron-up',
                        'iconSvg' => '<svg class="fill-current w-4 h-4" viewBox="0 0 24 24"><path d="M7.41,15.41L12,10.83L16.59,15.41L18,14L12,8L6,14L7.41,15.41Z" /></svg>',
                    ],

                    'desc' => [
                        'iconName' => 'chevron-down',
                        'iconSvg' => '<svg class="fill-current w-4 h-4" viewBox="0 0 24 24"><path d="M7.41,8.58L12,13.17L16.59,8.58L18,10L12,16L6,10L7.41,8.58Z" /></svg>',
                    ],
                ],
            ],

            'row' => [
                'tr' => [],
            ],

            'table' => [
                'container' => [
                    'class' => 'shadow rounded overflow-hidden border-b border-gray-200',
                ],

                'table' => [
                    'class' => 'min-w-full divide-y divide-gray-200',
                ],

                'thead' => [],

                'tbody' => [
                    'class' => 'bg-white divide-y divide-gray-200',
                ],

                'tfoot' => [],

                'emptyText' => [
                    'class' => 'px-6 py-4 whitespace-nowrap text-lg text-gray-500 text-center',
                ],
            ],
        ],
    ],
];
