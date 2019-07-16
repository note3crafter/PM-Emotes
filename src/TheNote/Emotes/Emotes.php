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
    {
        $this->getLogger()->info("§aEmotes Enabled");
    }
	
	public static function getInstance() : self
	{
	return self::$instance;
	}

    public function onCommand(CommandSender $sender, Command $command, string $label, array $args): bool
    {
        $player = $this->getServer()->getPlayer($sender->getName());
        $serv = $this->getServer();
        $nocmd = TextFormat::RED . "You have no Permission to use this Command!";
        $notother = TextFormat::RED . "You have no Permission to use this Command!";
        switch ($command->getName()) {
            case
            "emotes":
                if ($sender->hasPermission("emotes.all")) {
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
                } else {
                    $sender->sendMessage($nocmd);
                }
                break;				
				
			case
            "sad":
                if ($sender->hasPermission("emotes.sad.command")) {
                    if (count($args) < 1) {
                        $this->getServer()->broadcastMessage("§1" . $sender->getName()." §1is Sad :(");
                    }else{
$this->getServer()->broadcastMessage($args[0]." §1is Sad :(");
}
                } else {
                    $sender->sendMessage($nocmd);
                }
                break;

            case
            "angry":
                if ($sender->hasPermission("emotes.angry.command")) {
                    if (count($args) < 1) {
                        $this->getServer()->broadcastMessage("§c" . $sender->getName()." §cis Angry >:(");
                    }else{
$this->getServer()->broadcastMessage($args[0]." §cis Angry >:");
}
                } else {
                    $sender->sendMessage($nocmd);
                }
                break;

            case
            "happy":
                if ($sender->hasPermission("emotes.happy.command")) {
                    if (count($args) < 1) {
                        $this->getServer()->broadcastMessage("§a" . $sender->getName()." §ais is Happy :D");
                    }else{
$this->getServer()->broadcastMessage($args[0]." §ais Happy :D");
}
                } else {
                    $sender->sendMessage($nocmd);
                }
                break;
				
			case
            "geil":
                if ($sender->hasPermission("emotes.geil.command")) {
                    if (count($args) < 1) {
                        $this->getServer()->broadcastMessage("§6" . $sender->getName()." §6is Geil O_o");
                    }else{
$this->getServer()->broadcastMessage($args[0]." §6is Geil O.o");
}
                } else {
                    $sender->sendMessage($nocmd);
                }
                break;

            case
            "kevin":
                if ($sender->hasPermission("emotes.kevin.command")) {
                    if (count($args) < 1) {
                        $this->getServer()->broadcastMessage("§d" . $sender->getName()." §dasks if the Kevin is allowed to play?");
                    }else{
$this->getServer()->broadcastMessage($args[0]." §dasks if the Kevin is allowed to play?");
}
                } else {
                    $sender->sendMessage($nocmd);
                }
                break;

            case
            "stink":
                if ($sender->hasPermission("emotes.stink.command")) {
                    if (count($args) < 1) {
                        $this->getServer()->broadcastMessage("§2" . $sender->getName()." §2Stinks and goes showers now!");
                    }else{
$this->getServer()->broadcastMessage($args[0]." §2Stinks and goes showers now!");
}
                } else {
                    $sender->sendMessage($nocmd);
                }
                break;

            case
            "burb":
                if ($sender->hasPermission("emotes.burb.command")) {
                    if (count($args) < 1) {
                        $this->getServer()->broadcastMessage("§b" . $sender->getName()." §bhas burped O_O");
                    }else{
$this->getServer()->broadcastMessage($args[0]." §bhas burped O_O");
}
                } else {
                    $sender->sendMessage($nocmd);
                }
                break;

            case
            "fart":
                if ($sender->hasPermission("emotes.fart.command")) {
                    if (count($args) < 1) {
                        $this->getServer()->broadcastMessage("§e" . $sender->getName()." §ehas puped and land came with xD");
                    }else{
$this->getServer()->broadcastMessage($args[0]." §ehas puped and land came with xD");
}
                } else {
                    $sender->sendMessage($nocmd);
                }
                break;

            case
            "toilet":
                if ($sender->hasPermission("emotes.toilet.command")) {
                    if (count($args) < 1) {
                        $this->getServer()->broadcastMessage("§3" . $sender->getName()." §3goes to the toilet.");
                    }else{
$this->getServer()->broadcastMessage($args[0]." §3goes to the toilet.");
}
                } else {
                    $sender->sendMessage($nocmd);
                }
                break;

            case
            "sleepy":
                if ($sender->hasPermission("emotes.sleepy.command")) {
                    if (count($args) < 1) {
                        $this->getServer()->broadcastMessage("§b" . $sender->getName()." §bis very sleepy.");
                    }else{
$this->getServer()->broadcastMessage($args[0]." §bis very sleepy.");
}
                } else {
                    $sender->sendMessage($nocmd);
                }
                break;			
				}
		return true;
	}
}

