<?php
/**
 * Part of the Caffeinated PHP packages.
 *
 * MIT License and copyright information bundled with this package in the LICENSE file
 */
namespace Caffeinated\Bonsai;

use Caffeinated\Beverage\ServiceProvider;

/**
 * This is the BonsaiServiceProvider.
 *
 * @package        Caffeinated\Bonsai
 * @author         Caffeinated Dev Team
 * @copyright      Copyright (c) 2015, Caffeinated
 * @license        https://tldrlegal.com/license/mit-license MIT License
 */
class BonsaiServiceProvider extends ServiceProvider
{
    /**
     * @var string
     */
    protected $dir = __DIR__;

    /**
     * @var array
     */
    protected $configFiles = [ 'caffeinated.bonsai' ];

    /**
     * @var array
     */
    protected $providers = [
        \Caffeinated\Beverage\BeverageServiceProvider::class,
        Providers\ConsoleServiceProvider::class,
        \Collective\Html\HtmlServiceProvider::class
    ];

    /**
     * @var array
     */
    protected $provides = [ 'caffeinated.bonsai' ];

    /**
     * @var array
     */
    protected $singletons = [
        'caffeinated.bonsai' => Factory::class
    ];

    /**
     * @var array
     */
    protected $aliases = [
        'caffeinated.bonsai' => Contracts\Factory::class
    ];

    public function register()
    {
        $a = 'a';
        return parent::register();
    }

    public function boot()
    {
        return parent::boot();
        $b = 'a';
    }
}
