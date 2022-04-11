<?php

declare(strict_types=1);

namespace App\Models;

use Carbon\CarbonImmutable;

final class PointEvent
{
    /** @var int */
    private $customerId;
    /** @var string */
    private $event;
    /** @var int */
    private $point;
    /** @var CarbonImmutable */
    private $createdAt;

    /**
     * @param int $customerId
     * @param string $event
     * @param int $point
     * @param CarbonImmutable $createdAt
     */
    public function __construct(
        int $customerId,
        string $event,
        int $point,
        CarbonImmutable $createdAt
    ) {
        $this->customerId = $customerId;
        $this->event = $event;
        $this->point = $point;
        $this->createdAt = $createdAt;
    }

    /**
     * @return int
     */
    public function getCustomerId(): int
    {
        return $this->customerId;
    }

    /**
     * @return string
     */
    public function getEvent(): string
    {
        return $this->event;
    }

    /**
     * @return int
     */
    public function getPoint(): int
    {
        return $this->point;
    }
    /**
     * @return CarbonImmutable
     */
    public function getCreatedAt(): CarbonImmutable
    {
        return $this->createdAt;
    }
}
