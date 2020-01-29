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
    protected $idAs = UserHistory::FIELD__ID;
    protected $scope = 'extas';
    protected $pk = UserHistory::FIELD__ID;
    protected $name = 'quality_users_histories';
    protected $itemClass = UserHistory::class;
}
