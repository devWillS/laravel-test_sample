<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EloquentCustomerPoint extends Model
{
    use HasFactory;

    protected $table = 'customer_points';
    protected $primaryKey = 'customer_id';

    public function addPoint(int $customerId, int $point): bool
    {
        return $this->newQuery()
            ->where('customer_id', $customerId)
            ->increment('point', $point) === 1;
    }

    public function findPoint(int $customerId): int
    {
        return $this->newQuery()
            ->where('customer_id', $customerId)
            ->value('point');
    }
}
