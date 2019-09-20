<?php

declare(strict_types=1);

namespace TheNote\Emotes;

use pocketmine\plugin\PluginBase;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\utils\TextFormat;

class Emotes extends PluginBase
{
    public function onEnable()
	
	public static function getInstance() : self
	{
	return self::$instance;
	}

    public function onCommand(CommandSender $sender, Command $command, string $label, array $args): bool
    {
        $player = $this->getServer()->getPlayer($sender->getName());
        $serv = $this->getServer();
        switch ($command->getName()) {
            case
            "emotes":
                 if (count($args) < 1) {
                        $sender->sendMessage("§6===§f[§cEmotes§f]§6===§e
/sad
/angry
/happy
/geil
/kevin
/stink
/burb
/fart
/toilet
/sleepy
§6===§f[§cEmotes§f]§6===");
                }
            break;				
				
	    case
            "sad":
                if (count($args) < 1) {
                $this->getServer()->broadcastMessage("§1" . $sender->getName()." §1is Sad :(");
                }
            break;

            case
            "angry":
                if (count($args) < 1) {
                $this->getServer()->broadcastMessage("§c" . $sender->getName()." §cis Angry >:(");
                }
            break;

            case
            "happy":
                 if (count($args) < 1) {
                 $this->getServer()->broadcastMessage("§a" . $sender->getName()." §ais is Happy :D");
		 } 
            break;
				
            case
            "geil":
                 if (count($args) < 1) {
                 $this->getServer()->broadcastMessage("§6" . $sender->getName()." §6is Geil O_o");
                 }
            break;

            case
            "kevin":
                 if (count($args) < 1) {
                 $this->getServer()->broadcastMessage("§d" . $sender->getName()." §dasks if the Kevin is allowed to play?");
                 }
            break;

            case
            "stink":
                 if (count($args) < 1) {
                 $this->getServer()->broadcastMessage("§2" . $sender->getName()." §2Stinks and goes showers now!");
                 }
            break;

            case
            "burb":
                 if (count($args) < 1) {
                 $this->getServer()->broadcastMessage("§b" . $sender->getName()." §bhas burped O_O");
                }
             break;

            case
            "fart":
                 if (count($args) < 1) {
                 $this->getServer()->broadcastMessage("§e" . $sender->getName()." §ehas puped and land came with xD");
                 }
            break;

            case
            "toilet":
                  if (count($args) < 1) {
                  $this->getServer()->broadcastMessage("§3" . $sender->getName()." §3goes to the toilet.");
                  }
            break;

            case
            "sleepy":
                  if (count($args) < 1) {
                  $this->getServer()->broadcastMessage("§b" . $sender->getName()." §bis very sleepy.");
	          }
            break;			
	}
	return true;
    }
}

