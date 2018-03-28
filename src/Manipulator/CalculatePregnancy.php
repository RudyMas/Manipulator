<?php

namespace RudyMas\Manipulator;

/**
 * Class CalculatePregnancy (PHP version 7.1)
 * PHP class to calculate weeks/days that someone is pregnant
 *
 * @author      Rudy Mas <rudy.mas@rmsoft.be>
 * @copyright   2018, rmsoft.be (http://www.rmsoft.be/)
 * @license     https://opensource.org/licenses/GPL-3.0 GNU General Public License, version 3 (GPL-3.0)
 * @version     1.1.1
 * @package     RudyMas\Manipulator
 */
class CalculatePregnancy
{
    private $DM;

    /**
     * CalculatePregnancy constructor.
     */
    public function __construct()
    {
        $this->DM = new DateManipulator();
    }

    /**
     * Calculate the weeks of pregnancy
     *
     * @param string $deliveryDate
     * @param string $referenceDate
     * @return int
     */
    public function calculateWeeks(string $deliveryDate, string $referenceDate): int
    {
        $timestampDeliveryDate = $this->DM->convertDateToTimestamp($deliveryDate);
        $timestampReferenceDate = $this->DM->convertDateToTimestamp($referenceDate);
        $timestampConceptionDate = $timestampDeliveryDate - (281 * 24 * 60 * 60);
        return ceil(($timestampReferenceDate - $timestampConceptionDate) / (7 * 24 * 60 * 60));
    }

    /**
     * Calculate the days of pregnancy
     *
     * @param string $deliveryDate
     * @param string $referenceDate
     * @return int
     */
    public function calculateDays(string $deliveryDate, string $referenceDate): int
    {
        $timestampDeliveryDate = $this->DM->convertDateToTimestamp($deliveryDate);
        $timestampReferenceDate = $this->DM->convertDateToTimestamp($referenceDate);
        $timestampConceptionDate = $timestampDeliveryDate - (281 * 24 * 60 * 60);
        return ceil(($timestampReferenceDate - $timestampConceptionDate) / (24 * 60 * 60));
    }

    /**
     * Calculate the weeks of pregnancy by Timestamp
     *
     * @param int $timestampDeliveryDate
     * @param int $timestampReferenceDate
     * @return int
     */
    public function calculateWeeksByTimestamp(int $timestampDeliveryDate, int $timestampReferenceDate): int
    {
        $timestampConceptionDate = $timestampDeliveryDate - (281 * 24 * 60 * 60);
        return ceil(($timestampReferenceDate - $timestampConceptionDate) / (7 * 24 * 60 * 60));
    }

    /**
     * Calculate the days of pregnancy by Timestamp
     *
     * @param int $timestampDeliveryDate
     * @param int $timestampReferenceDate
     * @return int
     */
    public function calculateDaysByTimestamp(int $timestampDeliveryDate, int $timestampReferenceDate): int
    {
        $timestampConceptionDate = $timestampDeliveryDate - (281 * 24 * 60 * 60);
        return ceil(($timestampReferenceDate - $timestampConceptionDate) / (24 * 60 * 60));
    }
}

/** End of File: CalculatePregnancy.php **/