<?php
namespace LTReport;

use pocketmine\Server;
use Pocketmine\Player;
use pocketmine\utils\Config;
use pocketmine\plugin\Plugin; 
use pocketmine\plugin\PluginBase;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use LTReport\Commands;
use pocketmine\event\Listener;
class Main extends PluginBase{
    public function onCommand(CommandSender $sender, Command $cmd, $label, array $args){
		if(!($sender instanceof Player)){
			$sender->sendMessage('§d无法获取玩家信息，请重试！');
			return;
		}
		$this->command->onCommand($sender,$cmd,$label,$args);
	}//如果发送者不是一个玩家
}
