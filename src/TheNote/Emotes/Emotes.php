<?php

namespace TheNote\Emotes;

use pocketmine\command\CommandSender;
use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\event\Listener;
use pocketmine\player\Player;
use pocketmine\world\World;
use pocketmine\Server;

class Emotes extends PluginBase{


    public function onCommand(CommandSender $sender, Command $command, string $label, array $args): bool{

        switch ($command->getName()) {

            case "happy":

                if (!$sender instanceof Player) {
                    $sender->sendMessage("Der Command geht nur In-Game!");
                    return false;
                }
                Server::getInstance()->broadcastMessage("§a" . $sender->getName() . " is is Happy :D");

                break;

                case "geil":

                    if (!$sender instanceof Player) {
                        $sender->sendMessage("Der Command geht nur In-Game!");
                            return false;
                    }
                    Server::getInstance()->broadcastMessage("§6" . $sender->getName() . " is Geil 0_o");
                    break;

            case "sad":

                if (!$sender instanceof Player) {
                    $sender->sendMessage("Der Command geht nur In-Game!");
                    return false;
                }
                Server::getInstance()->broadcastMessage("§1" . $sender->getName() . " is Sad :(");

                break; 

            case "angry":

                if (!$sender instanceof Player) {
                    $sender->sendMessage("Der Command geht nur In-Game!");
                    return false;
                }
                Server::getInstance()->broadcastMessage("§c" . $sender->getName() . " is Angry >:(");
                break;

            case "kevin":

                if (!$sender instanceof Player) {
                    $sender->sendMessage("Der Command geht nur In-Game!");
                    return false;
                }
                Server::getInstance()->broadcastMessage("§d" . $sender->getName() . " asks if the Kevin is allowed to play?");

                break;

            case "stink":

                if (!$sender instanceof Player) {
                    $sender->sendMessage("Der Command geht nur In-Game!");
                    return false;
                }
                Server::getInstance()->broadcastMessage("§2" . $sender->getName() . " Stinks and goes showers now!");

                break;

            case "burb":

                if (!$sender instanceof Player) {
                    $sender->sendMessage("Der Command geht nur In-Game!");
                    return false;
                }
                Server::getInstance()->broadcastMessage("§b" . $sender->getName() . " has burped O_O");

                break;
                
            case "fart":

                if (!$sender instanceof Player) {
                    $sender->sendMessage("Der Command geht nur In-Game!");
                    return false;
                }
                Server::getInstance()->broadcastMessage("§e" . $sender->getName() . " has puped and land came with xD");

                break;
                
             case "toilet":

                if (!$sender instanceof Player) {
                    $sender->sendMessage("Der Command geht nur In-Game!");
                    return false;
                }
                Server::getInstance()->broadcastMessage("§3" . $sender->getName() . " goes to toilet.");

                break;
             case "sleepy":

                if (!$sender instanceof Player) {
                    $sender->sendMessage("Der Command geht nur In-Game!");
                    return false;
                }
                Server::getInstance()->broadcastMessage("§b" . $sender->getName() . " bis very sleepy.");

                break;

            case "emotes":

                if (!$sender instanceof Player) {
                    $sender->sendMessage("Der Command geht nur In-Game!");
                    return false;
                }
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
                break;
       
       }
    return true;
    }
}
