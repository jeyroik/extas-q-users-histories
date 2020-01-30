<?php
namespace extas\components\plugins\quality;

use extas\components\plugins\Plugin;
use extas\components\quality\users\UserHistory;
use extas\components\SystemContainer;
use extas\interfaces\quality\users\IUser;
use extas\interfaces\quality\users\IUserHistoryRepository;
use Symfony\Component\Console\Output\OutputInterface;

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
     * @param OutputInterface $output
     */
    public function __invoke(IUser $user, OutputInterface $output)
    {
        /**
         * @var $repo IUserHistoryRepository
         */
        $repo = SystemContainer::getItem(IUserHistoryRepository::class);

        $history = new UserHistory($user->__toArray());
        $history->setMonth(date('Ym'))->setTimestamp(time());
        $exists = $repo->one([$history->__toArray()]);
        if (!$exists) {
            $repo->create($history);
            $output->writeln([
                '<success>History for user "' . $user->getName() . '" saved</success>'
            ]);
        }
    }
}
