<?php
namespace extas\components\plugins\install;

use extas\components\quality\users\UserHistory;
use extas\interfaces\quality\users\IUserHistoryRepository;

/**
 * Class InstallQualityUsersHistories
 *
 * @package extas\components\plugins\install
 * @author jeyroik@gmail.com
 */
class InstallQualityUsersHistories extends InstallSection
{
    protected string $selfItemClass = UserHistory::class;
    protected string $selfName = 'quality user history';
    protected string $selfSection = 'quality_users_histories';
    protected string $selfRepositoryClass = 'qualityUserHistoryRepository';
    protected string $selfUID = UserHistory::FIELD__ID;
}
