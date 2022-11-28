<?php
/***************************************************************************
*                                                                          *
*   (c) 2004 Vladimir V. Kalynyak, Alexey V. Vinokurov, Ilya M. Shalnev    *
*                                                                          *
* This  is  commercial  software,  only  users  who have purchased a valid *
* license  and  accept  to the terms of the  License Agreement can install *
* and use this program.                                                    *
*                                                                          *
****************************************************************************
* PLEASE READ THE FULL TEXT  OF THE SOFTWARE  LICENSE   AGREEMENT  IN  THE *
* "copyright.txt" FILE PROVIDED WITH THIS DISTRIBUTION PACKAGE.            *
****************************************************************************/

namespace Tygh\Enum;

/**
 * ProductTracking contains possible values for `products`.`tracking` DB field.
 *
 * @package Tygh\Enum
 */
class ProductTracking
{
    /**
     * Track product amount
     */
    const TRACK = 'B';

    /**
     * Backward compatibility
     */
    const TRACK_WITH_OPTIONS = self::TRACK;

    /**
     * Backward compatibility
     */
    const TRACK_WITHOUT_OPTIONS = self::TRACK;

    /**
     * Do not track product amount
     */
    const DO_NOT_TRACK = 'D';
}
