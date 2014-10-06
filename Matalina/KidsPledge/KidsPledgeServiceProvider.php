<?php namespace Matalina\KidsPledge;

use Illuminate\Support\ServiceProvider;

class KidsPledgeServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('Matalina\KidsPledge\Interfaces\AllowanceInterface','Matalina\KidsPledge\Repository\AllowanceDb');
        $this->app->bind('Matalina\KidsPledge\Interfaces\ChoreInterface','Matalina\KidsPledge\Repository\ChoreDb');
        $this->app->bind('Matalina\KidsPledge\Interfaces\ChecklistInterface','Matalina\KidsPledge\Repository\ChecklistDb');
        $this->app->bind('Matalina\KidsPledge\Interfaces\EventInterface','Matalina\KidsPledge\Repository\EventDb');
        $this->app->bind('Matalina\KidsPledge\Interfaces\MoneyInterface','Matalina\KidsPledge\Repository\MoenyDb');
        $this->app->bind('Matalina\KidsPledge\Interfaces\PunishmentInterface','Matalina\KidsPledge\Repository\PunishmentDb');
        $this->app->bind('Matalina\KidsPledge\Interfaces\SettingInterface','Matalina\KidsPledge\Repository\SettingDb');
        $this->app->bind('Matalina\KidsPledge\Interfaces\UserInterface','Matalina\KidsPledge\Repository\UserDb');
    }
}