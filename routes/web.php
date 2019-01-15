<?php

$this->group(['middleware' => ['auth'], 'namespace' => 'Admin', 'prefix' => 'admin'], function() {
    $this->get('/', 'AdminController@index')->name('admin.home');
    $this->get('balance', 'BalanceController@index')->name('admin.balance');
    $this->post('deposit', 'BalanceController@depositStore')->name('deposit.store');
    $this->get('balance/deposit', 'BalanceController@deposit')->name('balance.deposit');
});

$this->get('/', 'Site\SiteController@index')->name('home');

Auth::routes();