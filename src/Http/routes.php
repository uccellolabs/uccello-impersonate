<?php

use Illuminate\Support\Facades\Route;

Route::middleware('web', 'auth')
    ->namespace('Uccello\Impersonate\Http\Controllers')
    ->name('impersonate.')
    ->group(function () {

        // This makes it possible to adapt the parameters according to the use or not of the multi domains
        if (!uccello()->useMultiDomains()) {
            $domainParam = '';
        } else {
            $domainParam = '{domain}';
        }

        // Starting impersonate
        Route::get($domainParam.'/user/impersonate/start/{user}', 'ImpersonateController@start')
            ->defaults('module', 'user')
            ->middleware('uccello.permissions:admin')
            ->name('start');

        // Stopping impersonate
        Route::get($domainParam.'/user/impersonate/stop', 'ImpersonateController@stop')
            ->defaults('module', 'user')
            ->name('stop');
    });
