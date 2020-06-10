<?php
namespace extas\components\plugins\uninstall;

use extas\components\quality\users\UserHistory;

/**
 * Class UninstallQualityUsersHistories
 *
 * @package extas\components\plugins\uninstall
 * @author jeyroik@gmail.com
 */
class UninstallQualityUsersHistories extends UninstallSection
{
    protected string $selfItemClass = UserHistory::class;
    protected string $selfName = 'quality user history';
    protected string $selfSection = 'quality_users_histories';
    protected string $selfRepositoryClass = 'qualityUserHistoryRepository';
    protected string $selfUID = UserHistory::FIELD__ID;
}
