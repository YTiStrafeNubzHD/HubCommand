<?php

namespace HubCommand;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\plugin\PluginBase;
use pocketmine\Player;

class HubCommand extends PluginBase {

    public function onCommand(CommandSender $sender, Command $command, string $label, array $args) : bool {
        $spawnLocation = $this->getServer()->getDefaultLevel()->getSpawnLocation();
        switch ($command->getName()) {
            case "hub":
            case "lobby":
                if ($sender instanceof Player) {
                    $sender->getPlayer()->teleport($spawnLocation);
                    $sender->sendMessage("§aDu wirst zur Lobby teleportiert...");
                    return true;
                } else {
                    $sender->sendMessage("Please use this command in-game");
                }
                return true;
        }
        return true;
    }

}
