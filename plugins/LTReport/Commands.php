<?php
namespace LTReport;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\Server;
use pocketmine\command\CommandSender;
use pocketmine\nbt\tag\StringTag;
use pocketmine\command\defaults\BanCommand;
use pocketmine\Player;
class Commands{
	public function  __construct($event){
		$this->event=$event;
	}
	public function onCommand($Sender,$cmd,$label,$args){
		$name=strtolower($Sender->getName());
		if(!isset($args[0])){
			$Sender->sendMessage('§d------§a[举报系统]§d-------');
			$Sender->sendMessage('§d/report [玩家] §a举报一个玩家');
			return;
        }//举报系统帮助
        switch(strtolower($cmd[0])){
            case 'report':
            case 'jubao':
            case '举报':
                $Sender->sendMessage('§d----------LTCraft举报系统----------');
                $Sender->sendMessage('§d亲爱的玩家，游戏内举报系统正在开发中，如果您需要举报玩家或反馈问题，请前往qq群862859409 感谢您的配合');
                $Sender->sendMessage('------------------------------------');
                $Sender->sendMessage('----------LTCraft Report System----------');
                $Sender->sendMessage('§dDear Player,In game reporting system under development');
            break;
                case 'reporthelp':
                    case 'reporth':
                    $Sender->sendMessage('§d§l------§a[举报系统]§d-------');
                    $Sender->sendMessage('§d/report&/jubao&/举报 [玩家] §a举报一个玩家');
                    $Sender->sendMessage('§d/reporthelp&/reporth §a查看举报系统帮助');
                break;
                case 'getlist':
                    if($sender->getName() !== 'Angel_XX' AND $sender->getName() !== 'SenderFan' AND $sender instanceof \pocketmine\Player){
                        			return $sender->sendMessage('§l§a[提示]§c你不能使用这个指令。');
                        		}
                    $getworld = $this->server->getMotd();
                    /*$getplayer = $
                    由于我脑残，找不到player函数，先注释了，但是，我设置的获取玩家名变量是$getplayer 这将永远延续到后面
                    */
                    $Sender->sendMessage('-----LTCraft举报人员名单-----');
                    $Sender->sendMessage('玩家：'$getplayer '所在世界:'$getworld);

        }
                     break;
                case 'AdminReportHelp':
                case 'arh':
                case '举报管理帮助':
                    $Sender->sendMessage('§d§l------§a[举报系统]§d------');
                    $Sender->sendMessage('§d/reportjg [Players] [Reason] §a警告玩家的行为');
                    $Sender->sendMessage('§d/ban [Players] §a禁封举报玩家');
                break;
                case 'reportjg':
                    if($Sender->getName() !== 'Angel_XX' AND $sender->getName() !== 'SenderFan' AND $sender instanceof \pocketmine\Player){
                        return $sender->sendMessage('[提示]权限不足。');
                    }
                    if($player instanceof Player){
                        $sender->sendMessage('警告：你被管理员警告，请注意你的行为');
                        $player->sendMessage('警告成功');
                        $sender->getServer()->getLogger()->privacy('管理员警告了一个玩家');
                    }else{
                        $sender->sendMessage(new TranslationContainer("commands.generic.player.notFound"));
                    }
                break;
            
            