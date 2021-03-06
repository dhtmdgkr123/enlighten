<?php

namespace Styde\Enlighten\Facades;

use Closure;
use Illuminate\Support\Facades\Facade;
use Styde\Enlighten\Contracts\RunBuilder;

/**
 * @method static RunBuilder getDriver()
 * @method static bool dashboardEnabled()
 * @method static self setCustomAreaResolver(Closure $callback)
 * @method static string getAreaSlug(string $className)
 * @method static self setCustomTitleGenerator(Closure $callback)
 * @method static self setCustomSlugGenerator(Closure $callback)
 * @method static string generateTitle(string $type, string $classOrMethodName)
 * @method static string generateSlugFromClassName($className)
 * @method static string generateSlugFromMethodName($methodName)
 * @method static bool hide(string $sectionName)
 * @method static bool show(string $sectionName)
 *
 * @see \Styde\Enlighten\Settings
 */
class Settings extends Facade
{
    public static function getFacadeAccessor()
    {
        return \Styde\Enlighten\Settings::class;
    }
}
