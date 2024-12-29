<?php

/*
 *               _ _
 *         /\   | | |
 *        /  \  | | |_ __ _ _   _
 *       / /\ \ | | __/ _` | | | |
 *      / ____ \| | || (_| | |_| |
 *     /_/    \_|_|\__\__,_|\__, |
 *                           __/ |
 *                          |___/
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * @author TuranicTeam
 * @link https://github.com/TuranicTeam/Altay
 *
 */


declare(strict_types=1);

namespace pocketmine\event\player;

use pocketmine\entity\Entity;
use pocketmine\event\Cancellable;
use pocketmine\item\Item;
use pocketmine\math\Vector3;
use pocketmine\player\Player;

/**
 * Called when a player interacts with an entity.
 */
class PlayerInteractEntityEvent extends PlayerEvent implements Cancellable {

    public function __construct(
        public readonly Player $player,
        public readonly Entity $entity,
        public readonly Item $item,
        public readonly Vector3 $clickPos
    ) {}

    public function getEntity(): Entity {
        return $this->entity;
    }

    public function getItem(): Item {
        return $this->item;
    }

    public function getClickPosition(): Vector3 {
        return $this->clickPos;
    }
}
