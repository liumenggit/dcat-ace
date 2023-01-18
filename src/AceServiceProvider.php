<?php

namespace Liumenggit\Ace;

use Dcat\Admin\Extend\ServiceProvider;
use Dcat\Admin\Admin;
use Dcat\Admin\Form;
use Liumenggit\Ace\Extensions\Forms\Ace;

class AceServiceProvider extends ServiceProvider
{
	protected $js = [
        'js/index.js',
        'js/wangeditor.js',
        'js/ace.js',
        'js/ext-language_tools.js',
        'js/theme-monokai.js',
        'js/mode-javascript.js',
        'js/snippets/javascript.js',
        'js/worker-javascript.js'
    ];
	protected $css = [
		'css/index.css',
	];

	public function register()
	{
		//
	}

	public function init()
	{
        parent::init();

        Admin::requireAssets('@liumenggit.ace');
        Form::extend('ace', Ace::class);


		//

	}

	public function settingForm()
	{
		return new Setting($this);
	}
}
