<?php
namespace tung; 
 
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\command\ConsoleCommandSender;
use pocketmine\plugin\PluginBase;
use pocketmine\Player;
use pocketmine\utils\Config;
use pocketmine\utils\TextFormat;
use pocketmine\permission\DefaultPermissions;

class Main extends PluginBase{
         public $dur = 60;
//         public $repeattime = 60;		 
	
    public function onEnable(){
//	     $this->saveDefaultConfig();
//       $this->reloadConfig();
//   	 $this->cfg = $this->getConfig()->getAll();
		 $this->getLogger()->info("ยงlยงdPlugin tra loi cau hoi ");
    }

    public function onCommand(CommandSender $sender, Command $command, string $label, array $args):bool{
		switch(strtolower($command->getName())){
	    	case "ask":
	         //cau hoi
			 $a = array(
	         0 => "Ai do",
	         1 => "1+1=?"
	         );
	         //cau tra loi
			 $b = array(
	         0=>"tung",
	         1=>"2"
	         );
             $c= rand(0,1);
			 //de loc ra cho do~ lag
			 $d= array(50,51,52,53,54,55,100,101,102,103,104,105,
			 150,151,152,153,154,155,200,201,202,203,204,205);
            foreach($a as $so => $cauhoi){
              foreach($b as $soo => $traloi){
			   foreach($d as $time){	  
                if($so == $c){ 
                    if($soo == $so){
                     for($i = 0; $i<= $this->dur * 20;$i++){
                       if($i == $time){	
                       continue;
	       	           }
		               $this->getServer()->broadcastPopup($cauhoi);
                     }
			      	 if($args[0]== $traloi){
				     $sender->sendMessage("Ban da tra loi dung");		
                     //ghi cac lenh khac o day, phia tren la vi du					 
				     }
                    }
                }
			   }
              }
            }	
//			 if($arg[0] == null ){
//				$sender->sendMessage("Hay Ghi Cau Tra Loi Phia Sau") 
//			 }
		}
	        return true; 
    }
  
}