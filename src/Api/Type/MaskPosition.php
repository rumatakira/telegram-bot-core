<?php

/**
 * Telegram Bot API.
 *
 * @author  Maksim Masiukevich <dev@async-php.com>
 * @license MIT
 * @license https://opensource.org/licenses/MIT
 */

declare(strict_types = 1);

namespace ServiceBus\TelegramBot\Api\Type;

/**
 * Describes the position on faces where a mask should be placed by default.
 *
 * @see https://core.telegram.org/bots/api#maskposition
 *
 * @property-read MaskPositionType $point
 * @property-read float            $xShift
 * @property-read float            $yShift
 * @property-read float            $scale
 */
final class MaskPosition
{
    /**
     * The part of the face relative to which the mask should be placed.
     *
     * @var MaskPositionType
     */
    public $point;

    /**
     * Shift by X-axis measured in widths of the mask scaled to the face size, from left to right. For example,
     * choosing -1.0 will place mask just to the left of the default mask position.
     *
     * @var float
     */
    public $xShift;

    /**
     * Shift by Y-axis measured in heights of the mask scaled to the face size, from top to bottom. For example, 1.0
     * will place the mask just below the default mask position.
     *
     * @var float
     */
    public $yShift;

    /**
     * Mask scaling coefficient. For example, 2.0 means double size.
     *
     * @var float
     */
    public $scale;
}
