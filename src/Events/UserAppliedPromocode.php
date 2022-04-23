<?php

declare(strict_types=1);

namespace NagSamayam\Promocodes\Events;

use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Auth\User;
use NagSamayam\Promocodes\Contracts\PromocodeContract;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class UserAppliedPromocode
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * @var PromocodeContract
     */
    public PromocodeContract $promocode;

    /**
     * @var User
     */
    public User $user;

    /**
     * @param PromocodeContract $promocode
     * @param User $user
     */
    public function __construct(PromocodeContract $promocode, User $user)
    {
        $this->promocode = $promocode;
        $this->user = $user;
    }
}
