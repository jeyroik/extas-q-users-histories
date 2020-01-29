<?php
namespace extas\components\quality\users;

use extas\components\THasId;
use extas\interfaces\quality\users\IUserHistory;

/**
 * Class UserHistory
 *
 * @package extas\components\quality\users
 * @author jeyroik@gmail.com
 */
class UserHistory extends User implements IUserHistory
{
    use THasId;

    /**
     * @return int
     */
    public function getMonth(): int
    {
        return $this->config[static::FIELD__MONTH] ?? 0;
    }

    /**
     * @return int
     */
    public function getTimestamp(): int
    {
        return $this->config[static::FIELD__TIMESTAMP] ?? 0;
    }

    /**
     * @param int $month
     *
     * @return IUserHistory
     */
    public function setMonth(int $month): IUserHistory
    {
        $this->config[static::FIELD__MONTH] = $month;

        return $this;
    }

    /**
     * @param int $timestamp
     *
     * @return IUserHistory
     */
    public function setTimestamp(int $timestamp): IUserHistory
    {
        $this->config[static::FIELD__TIMESTAMP] = $timestamp;

        return $this;
    }

    /**
     * @return string
     */
    protected function getSubjectForExtension(): string
    {
        return static::SUBJECT . '.history';
    }
}
