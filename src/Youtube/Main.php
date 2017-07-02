<?php
namespace Youtube;
use pocketmine\plugin\PluginBase;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;

class Main extends PluginBase{

public function onEnable(){
 $this->getServer()->getLogger()->info("plugin has been enable");
  $this->getLogger()->info("by groupPluginer");
   }
   public function onDisable(){
    $this->getServer()->getLogger()->info("plugin has been disable");
    }
    public function onCommand(CommandSender $sender, Command $cmd, $label, array $args){
     switch ($cmd->getName()){
      case 'Youtube':
       $player = $sender->getPlayer();
        $player->setGamemode(1);
        break;
        }
       }
      }
