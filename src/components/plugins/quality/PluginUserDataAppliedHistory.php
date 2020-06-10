<?php
namespace extas\components\plugins\quality;

use extas\components\plugins\Plugin;
use extas\components\quality\users\UserHistory;
use extas\interfaces\quality\users\IUser;
use extas\interfaces\repositories\IRepository;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class PluginUserDataAppliedHistory
 *
 * @method IRepository qualityUserHistoryRepository()
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
        $repo = $this->qualityUserHistoryRepository();
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
