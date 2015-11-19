<?php namespace Demindo\Moneybird;


/**
 * 
 * @author Ronald van Eede <ronald@demindo.com>
 */
use Illuminate\Support\ServiceProvider;

class MoneybirdServiceProvider extends ServiceProvider {
    
    public function register() {
        $this->registerMoneybird();
    }
    
    private function registerMoneybird() {
        $this->app->bind('moneybird',function($app){
			return new Moneybird($app);
		});
    }
}