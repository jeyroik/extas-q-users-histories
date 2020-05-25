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
    protected string $selfItemClass = UserHistory::class;
    protected string $selfName = 'quality user history';
    protected string $selfSection = 'quality_users_histories';
    protected string $selfRepositoryClass = IUserHistoryRepository::class;
    protected string $selfUID = UserHistory::FIELD__ID;
}
