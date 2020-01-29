<?php
namespace extas\components\plugins;

use extas\components\quality\users\UserHistory;
use extas\interfaces\quality\users\IUserHistoryRepository;

/**
 * Class PluginInstallQualityUsersHistories
 *
 * @package extas\components\plugins
 * @author jeyroik@gmail.com
 */
class PluginInstallQualityUsersHistories extends PluginInstallDefault
{
    protected $selfItemClass = UserHistory::class;
    protected $selfName = 'quality user history';
    protected $selfSection = 'quality_users_histories';
    protected $selfRepositoryClass = IUserHistoryRepository::class;
    protected $selfUID = UserHistory::FIELD__ID;
}
