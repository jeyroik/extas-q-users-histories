<?php
namespace extas\interfaces\quality\users;

use extas\interfaces\IHasId;

/**
 * Interface IUserHistory
 *
 * @package extas\interfaces\quality\users
 * @author jeyroik@gmail.com
 */
interface IUserHistory extends IUser, IHasId
{
    public const FIELD__MONTH = 'month';
    public const FIELD__TIMESTAMP = 'timestamp';

    /**
     * @return int
     */
    public function getMonth(): int;

    /**
     * @return int
     */
    public function getTimestamp(): int;

    /**
     * @param int $month
     *
     * @return IUserHistory
     */
    public function setMonth(int $month): IUserHistory;

    /**
     * @param int $timestamp
     *
     * @return IUserHistory
     */
    public function setTimestamp(int $timestamp): IUserHistory;
}
