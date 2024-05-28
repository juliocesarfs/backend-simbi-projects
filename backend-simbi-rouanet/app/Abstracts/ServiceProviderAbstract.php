<?php

namespace App\Abstracts;

use Illuminate\Support\ServiceProvider;

abstract class ServiceProviderAbstract extends ServiceProvider
{

    abstract public function getBusinessAbstract(): string;

    abstract public function getBusinessConcrete(): string;

    public function register(): void
    {
        $this->app->bind($this->getBusinessAbstract(), function () {

            $business = $this->app->make($this->getBusinessConcrete());

            return $business;
        });
    }
}
