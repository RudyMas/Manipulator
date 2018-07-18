<?php

namespace RudyMas\Manipulator;

/**
 * Class DateManipulator (PHP version 7.1)
 * PHP class to manipulate date/timestamp
 *
 * @author      Rudy Mas <rudy.mas@rmsoft.be>
 * @copyright   2018, rmsoft.be. (http://www.rmsoft.be/)
 * @license     https://opensource.org/licenses/GPL-3.0 GNU General Public License, version 3 (GPL-3.0)
 * @version     0.1.0.5
 * @package     RudyMas\Manipulator
 */
class DateManipulator
{
    /**
     * Converts a correct formatted date to a Timestamp
     *
     * @param string $date
     * @return int
     */
    public function convertDateToTimestamp(string $date): int
    {
        return strtotime($date);
    }

    /**
     * Converts a Timestamp to a date (yyyy-mm-dd)
     *
     * @param int $timestamp
     * @return string
     */
    public function convertTimestampToDate(int $timestamp): string
    {
        return date('Y-m-d', $timestamp);
    }

    /**
     * Converts a Timestamp to a data (yyyy-mm-dd hh:mm:ss)
     *
     * @param int $timestamp
     * @return string
     */
    public function convertTimestampToDateTime(int $timestamp): string
    {
        return date('Y-m-d H:i:s', $timestamp);
    }
}