<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {

        // svg-directive for include svg, example:
        // @svg('/svg/section-1/bulb-icon.svg', 'id="id_svg" width="100" height="100" class="icon"')
        Blade::directive('svg', function ($arguments) {
            $args = explode(',', trim($arguments, "() "));
            $path = trim($args[0], "' ");
            $attributes = isset($args[1]) ? trim($args[1], "' ") : '';
            $svg = new \DOMDocument();
            $svgStr = '';

            if (@$svg->load(resource_path($path))) {
                if (!empty($attributes)) {
                    $attrPairs = explode(' ', $attributes);
                    foreach ($attrPairs as $pair) {
                        list($attr, $value) = explode('=', $pair);
                        $attr = trim($attr);
                        $value = trim($value, '"');
                        $svg->documentElement->setAttribute($attr, $value);
                    }
                }
                $svgStr = $svg->saveXML($svg->documentElement);
            }
            return $svgStr;
        });

        Blade::directive('svgPublic', function ($arguments) {
            $args = explode(',', trim($arguments, "() "));
            $path = trim($args[0], "' ");
            $attributes = isset($args[1]) ? trim($args[1], "' ") : '';
            $svg = new \DOMDocument();
            $svgStr = '';

            if (@$svg->load(public_path($path))) {
                if (!empty($attributes)) {
                    $attrPairs = explode(' ', $attributes);
                    foreach ($attrPairs as $pair) {
                        list($attr, $value) = explode('=', $pair);
                        $attr = trim($attr);
                        $value = trim($value, '"');
                        $svg->documentElement->setAttribute($attr, $value);
                    }
                }
                $svgStr = $svg->saveXML($svg->documentElement);
            }
            return $svgStr;
        });
    }
}