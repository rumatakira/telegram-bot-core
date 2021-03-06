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
 * @property-read int $value
 */
final class ChatMembersCount
{
    /**
     * Chat members count.
     *
     * @var int
     */
    public $value;
}
