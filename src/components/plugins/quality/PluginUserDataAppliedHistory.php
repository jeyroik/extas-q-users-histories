<?php
namespace extas\components\plugins\quality;

use extas\components\plugins\Plugin;
use extas\components\quality\users\UserHistory;
use extas\components\SystemContainer;
use extas\interfaces\quality\users\IUser;
use extas\interfaces\quality\users\IUserHistoryRepository;

/**
 * Class PluginUserDataAppliedHistory
 *
 * @package extas\components\plugins\quality
 * @author jeyroik@gmail.com
 */
class PluginUserDataAppliedHistory extends Plugin
{
    /**
     * @param IUser $user
     */
    public function __invoke(IUser $user)
    {
        /**
         * @var $repo IUserHistoryRepository
         */
        $repo = SystemContainer::getItem(IUserHistoryRepository::class);

        $history = new UserHistory($user->__toArray());
        $history->setMonth(date('Ym'))->setTimestamp(time());
        $repo->create($history);
    }
}
