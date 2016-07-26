<?php

namespace Camisa\Providers;

use Ciconia\Ciconia;
use Ciconia\Extension\Gfm;
use Illuminate\Support\ServiceProvider;

class MarkdownServiceProvider extends ServiceProvider
{
    protected $markdown;

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->markdown = new Ciconia();
        $this->markdown->addExtension(new Gfm\FencedCodeBlockExtension());
        $this->markdown->addExtension(new Gfm\TaskListExtension());
        $this->markdown->addExtension(new Gfm\InlineStyleExtension());
        $this->markdown->addExtension(new Gfm\WhiteSpaceExtension());
        $this->markdown->addExtension(new Gfm\TableExtension());
        $this->markdown->addExtension(new Gfm\UrlAutoLinkExtension());
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('markdown', function () {
            return $this->markdown;
        });
    }
}
