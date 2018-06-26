<?php
namespace tung;
use pocketmine\scheduler\PluginTask;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\command\ConsoleCommandSender;
use pocketmine\plugin\PluginBase;
use pocketmine\Player;
use pocketmine\utils\Config;
use pocketmine\utils\TextFormat;
use pocketmine\permission\DefaultPermissions;


class PopupTask extends PluginTask {
	         public $dur = 3;
	
    
    public function onRun($tick){
	 $this->onCommand();
	}
	
	 public function onCommand(CommandSender $sender, Command $command, string $label, array $args):bool{
	     for($i = 0; $i<= 3 * 10;$i++){
	         $this->getServer()->broadcastPopup("Helllo");
	     }
	 
	 }
}