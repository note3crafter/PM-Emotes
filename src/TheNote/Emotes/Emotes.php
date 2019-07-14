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
        $this->getLogger()->info("§aEmotes Aktiviert");
    }
	
	public static function getInstance() : self
	{
	return self::$instance;
	}

    public function onDisable()
    {
        $this->getLogger()->info("§cEmotes Deaktiviert!");
    }

    public function onCommand(CommandSender $sender, Command $command, string $label, array $args): bool
    {
        $player = $this->getServer()->getPlayer($sender->getName());
        $serv = $this->getServer();
        $nocmd = TextFormat::RED . "Du hast nicht die Benötigten rechte um diesen Befehl auszuführen";
        $notother = TextFormat::RED . "Du hast nicht die Benötigten rechte um diesen Befehl auszuführen";
        switch ($command->getName()) {
			case
            "traurig":
                if ($sender->hasPermission("emotes.traurig.command")) {
                    if (count($args) < 1) {
                        $this->getServer()->broadcastMessage($sender->getName()." §1ist Traurig :(");
                    }else{
$this->getServer()->broadcastMessage($args[0]." §1ist Traurig :(");
}
                } else {
                    $sender->sendMessage($nocmd);
                }
                break;

            case
            "sauer":
                if ($sender->hasPermission("emotes.sauer.command")) {
                    if (count($args) < 1) {
                        $this->getServer()->broadcastMessage($sender->getName()." §eist sauer");
                    }else{
$this->getServer()->broadcastMessage($args[0]." §eist sauer");
}
                } else {
                    $sender->sendMessage($nocmd);
                }
                break;

            case
            "happy":
                if ($sender->hasPermission("emotes.happy.command")) {
                    if (count($args) < 1) {
                        $this->getServer()->broadcastMessage($sender->getName()." §aist Fröhlich :D");
                    }else{
$this->getServer()->broadcastMessage($args[0]." §aist Fröhlich :D");
}
                } else {
                    $sender->sendMessage($nocmd);
                }
                break;
				
			case
            "gay":
                if ($sender->hasPermission("emotes.gay.command")) {
                    if (count($args) < 1) {
                        $this->getServer()->broadcastMessage($sender->getName()." §6ist Gay");
                    }else{
$this->getServer()->broadcastMessage($args[0]." §6ist Gay");
}
                } else {
                    $sender->sendMessage($nocmd);
                }
                break;

            case
            "kevin":
                if ($sender->hasPermission("emotes.kevin.command")) {
                    if (count($args) < 1) {
                        $this->getServer()->broadcastMessage($sender->getName()." §dFragt ob der Kevin spielen darf");
                    }else{
$this->getServer()->broadcastMessage($args[0]." §dFragt ob der Kevin spielen darf");
}
                } else {
                    $sender->sendMessage($nocmd);
                }
                break;

            case
            "stinken":
                if ($sender->hasPermission("emotes.stinken.command")) {
                    if (count($args) < 1) {
                        $this->getServer()->broadcastMessage($sender->getName()." §2Stinkt und geht jetzt Duschen");
                    }else{
$this->getServer()->broadcastMessage($args[0]." §2Stinkt und geht jetzt Duschen");
}
                } else {
                    $sender->sendMessage($nocmd);
                }
                break;

            case
            "burb":
                if ($sender->hasPermission("emotes.burb.command")) {
                    if (count($args) < 1) {
                        $this->getServer()->broadcastMessage($sender->getName()." §bhat gerülpst Mahlzeit");
                    }else{
$this->getServer()->broadcastMessage($args[0]." §bhat gerülpst Mahlzeit");
}
                } else {
                    $sender->sendMessage($nocmd);
                }
                break;

            case
            "pupsen":
                if ($sender->hasPermission("emotes.pupsen.command")) {
                    if (count($args) < 1) {
                        $this->getServer()->broadcastMessage($sender->getName()." §e hat gefurtzt und es kam Land mit xD");
                    }else{
$this->getServer()->broadcastMessage($args[0]." §e hat gefurtzt und es kam Land mit xD");
}
                } else {
                    $sender->sendMessage($nocmd);
                }
                break;

            case
            "kacken":
                if ($sender->hasPermission("emotes.kacken.command")) {
                    if (count($args) < 1) {
                        $this->getServer()->broadcastMessage($sender->getName()." §3geht das Klo vergasen wenn er sein würstschen legt");
                    }else{
$this->getServer()->broadcastMessage($args[0]." §3geht das Klo vergasen wenn er sein würstschen legt");
}
                } else {
                    $sender->sendMessage($nocmd);
                }
                break;
				
            case
            "emotes":
                if ($sender->hasPermission("emotes.command")) {
                    if (count($args) < 1) {
                        $sender->sendMessage("===Emotes===
/traurig
/sauer
/happy
/gay
/kevin
/stinken
/rülpsen
/pupsen
/kacken
===Emotes===");
                    }
                } else {
                    $sender->sendMessage($nocmd);
                }
                break;				
		
				}
		return true;
	}
}

