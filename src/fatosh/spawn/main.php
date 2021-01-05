<?php

namespace fatosh\spawn;

use pocketmine\Server;
use pocketmine\Player;

use pocketmine\plugin\PluginBase;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;

use pocketmine\event\Listener;

class main extends PluginBase implements Listener {

    public function onEnable(){

    }

    public function onCommand(CommandSender $sender, Command $cmd, String $label, Array $args) : bool {

        switch($cmd->getName()){
            case "spawn":
               $this->getscheduler()->schedulerepeatingtask(new exampletask($this, $sender->getname()), 20);
         }
    return true;
    }


}