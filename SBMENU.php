<?php

declare(strict_types=1);

namespace SBMENU\Legend;

use pocketmine\Server;
use pocketmine\player\Player;
use pocketmine\item\ItemFactory;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;


use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\event\inventory\InventoryTransactionEvent;
use pocketmine\event\player\PlayerDropItemEvent;

use jojoe77777\FormAPI\SimpleForm;
use jojoe77777\FormAPI\CustomForm;

class SBMENU extends PluginBase implements Listener {
    public function onEnable() : void {
      $this->getLogger()->info(" SbMenu Enabled By Legend 🌈 Subcribe My Channel Or Your server will be delete :) youtube.com/c/ItzLegendOP");
      $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }


    public function onJoin(PlayerJoinEvent $event) {
        $sender = $event->getPlayer();
        $item = ItemFactory::getInstance()->get(399, 0, 1);
        $item->setCustomName("§r§l§aSKYBLOCK MENU\n§r§e(Right-Click)");
        $sender->getInventory()->setItem(8, $item, true);
      }
  
  
    public function onClick(PlayerInteractEvent $event) {
        $sender = $event->getPlayer();
        $item = $event->getItem();
        if ($item->getId() === 399 && $item->getCustomName() === "§r§l§aSKYBLOCK MENU\n§r§e(Right-Click)") {
           $this->sbmenu($sender);
        }
      }


      public function onTransaction(InventoryTransactionEvent $event) {
        $transaction = $event->getTransaction();
        foreach ($transaction->getActions() as $action) {
          $item = $action->getSourceItem();
          $source = $transaction->getSource();
          if ($source instanceof Player && $item->getId() === 399 && $item->getCustomName() === "§r§l§aSKYBLOCK MENU\n§r§e(Right-Click)") {
            $event->cancel();
          }
        }
      }


      public function sbmenu(Player $player) {
          $form = $this->getServer()->getPluginManager()->getPlugin("FormAPI")->createSimpleForm(Function (Player $player, int $data = null){
              if($data === null) {
                  return true;
                }
              switch($data) {
                  case 0:

                    $this->getServer()->dispatchCommand($player, "skyblock");

                  break;


                  case 1:
                    $this->getServer()->dispatchCommand($player, "recipes");
                  break;
                  

                  case 2:
                    $this->getServer()->dispatchCommand($player, "skills");
                  break;
                  

                  case 3:
                    $this->getServer()->dispatchCommand($player, "shop");
                  break;
                
                
                  case 4:
                    $this->getServer()->dispatchCommand($player, "quests");
                  break;
                
                
                  case 5:
                    $this->getServer()->dispatchCommand($player, "ceshop");
                  break;
                 
                  
                  case 6:
                    $this->getServer()->dispatchCommand($player, "ec");
                  break;


                  case 7:
                    $this->getServer()->dispatchCommand($player, "shop Potions");
                  break;


                  case 8:
                    $this->getServer()->dispatchCommand($player, "pets");
                  break;


                  case 9:

                    $this->getServer()->dispatchCommand($player, "invcraft");

                  break;
                  

                  case 10:
                    $this->getServer()->dispatchCommand($player, "ah");
                  break;
                  

                  case 11:
                    $this->getServer()->dispatchCommand($player, "bank");
                  break;
                
                
                  case 12:
                    $this->getServer()->dispatchCommand($player, "blacksmith");
                  break;
                
                
                  case 13:
                    $this->getServer()->dispatchCommand($player, "bazaar");
                  break;
                 
                  
                  case 14:
                    $this->getServer()->dispatchCommand($player, "sbui");
                  break;


                  case 15:
                    $this->getServer()->dispatchCommand($player, "fasttravel");
                  break;
                }
            });
  $form->setTitle("§l§6SKYBLOCK MENU");
  $form->setContent("§dPlease Select The Next Menu:", 0, );
  $form->addButton("§l§eSKYBLOCK\n§l§9»» §l§3TAP TO OPEN", 0, "textures/ui/skyblock");
  $form->addButton("§l§eRECIPE BOOK\n§l§9»» §l§3TAP TO OPEN", 0, "textures/ui/recipes");
  $form->addButton("§l§eSKILLS\n§l§9»» §l§3TAP TO OPEN", 0, "textures/ui/armor");
  $form->addButton("§l§eSHOP\n§l§9»» §l§3TAP TO OPEN", 0, "textures/ui/shop");
  $form->addButton("§l§eQUESTS\n§l§9»» §l§3TAP TO OPEN", 0, "textures/ui/quest");
  $form->addButton("§l§eENCHANTMENT SHOP\n§l§9»» §l§3TAP TO OPEN", 0, "textures/ui/network_hub");
  $form->addButton("§l§eENDER CHEST\n§l§9»» §l§3TAP TO OPEN", 0, "textures/blocks/ender_chest_front");
  $form->addButton("§l§ePOTIONS SHOP\n§l§9»» §l§3TAP TO OPEN", 0, "textures/ui/icon_potion");
  $form->addButton("§l§ePETS\n§l§9»» §l§3TAP TO OPEN", 0, "textures/ui/promo_wolf");
  $form->addButton("§l§eWORK BENCH\n§l§9»» §l§3TAP TO OPEN", 0, "textures/ui/crafting");
  $form->addButton("§l§eAUCTION HOUSE\n§l§9»» §l§3TAP TO OPEN", 0, "textures/ui/job");
  $form->addButton("§l§eBANK\n§l§9»» §l§3TAP TO OPEN", 0, "textures/ui/banker");
  $form->addButton("§l§eBLACKSMITH\n§l§9»» §l§3TAP TO OPEN", 0, "textures/ui/mining");
  $form->addButton("§l§eBAZAAR\n§l§9»» §l§3TAP TO OPEN", 0, "textures/ui/bazaar");
  $form->addButton("§l§eTRAVEL ISLAND\n§l§9»» §l§3TAP TO OPEN", 0, "textures/ui/earth");
  $form->addButton("§l§eFAST TRAVEL\n§l§9»» §l§3TAP TO OPEN", 0, "textures/ui/travel");
            $form->sendToPlayer($player);
            return $form;
        }
}