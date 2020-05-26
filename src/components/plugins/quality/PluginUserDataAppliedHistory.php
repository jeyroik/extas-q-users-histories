<?php
namespace extas\components\plugins\quality;

use extas\components\plugins\Plugin;
use extas\components\quality\users\UserHistory;
use extas\interfaces\quality\users\IUser;
use extas\interfaces\quality\users\IUserHistoryRepository;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class PluginUserDataAppliedHistory
 *
 * @method userHistoryRepository()
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
        $repo = $this->userHistoryRepository();

        $history = new UserHistory($user->__toArray());
        $history->setMonth((int) date('Ym'))->setTimestamp(time());
        $exists = $repo->one([
            UserHistory::FIELD__NAME => $history->getName(),
            UserHistory::FIELD__MONTH => $history->getMonth()
        ]);
        if (!$exists) {
            $repo->create($history);
            $output->writeln([
                '<info>History for user "' . $user->getName() . '" saved</info>'
            ]);
        }
    }
}
