<?php

/**
 * Telegram Bot API.
 *
 * @author  Maksim Masiukevich <dev@async-php.com>
 * @license MIT
 * @license https://opensource.org/licenses/MIT
 */

declare(strict_types = 1);

namespace ServiceBus\TelegramBot\Api\Type\Chat;

/**
 * Represents a chat photo.
 *
 * @see https://core.telegram.org/bots/api#chatphoto
 *
 * @property-read string $smallFileId
 * @property-read string $bigFileId
 */
final class ChatPhoto
{
    /**
     * Unique file identifier of small (160x160) chat photo. This file_id can be used only for photo download.
     *
     * @var string
     */
    public $smallFileId;

    /**
     * Unique file identifier of big (640x640) chat photo. This file_id can be used only for photo download.
     *
     * @var string
     */
    public $bigFileId;
}
