<?php

/*
 * This file is part of Laravel Timeable.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DraperStudio\Timeable;

/**
 * This is the package class.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
 class ServiceProvider extends \DraperStudio\ServiceProvider\ServiceProvider
 {
     /**
      * Bootstrap the application services.
      */
     public function boot()
     {
         $this->publishMigrations();
     }

     /**
      * Get the default package name.
      *
      * @return string
      */
     public function getPackageName()
     {
         return 'timeable';
     }
 }
