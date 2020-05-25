<?php
namespace extas\components\quality\users;

use extas\components\repositories\Repository;
use extas\interfaces\quality\users\IUserHistoryRepository;

/**
 * Class UserHistoryRepository
 *
 * @package extas\components\quality\users
 * @author jeyroik@gmail.com
 */
class UserHistoryRepository extends Repository implements IUserHistoryRepository
{
    protected string $scope = 'extas';
    protected string $pk = UserHistory::FIELD__ID;
    protected string $name = 'quality_users_histories';
    protected string $itemClass = UserHistory::class;
}
