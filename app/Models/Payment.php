<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{

    use HasFactory;

    public function scopeFilter($query, array $filters)
    {
        if ($filters['search'] ?? false) {
            $query->where('name', 'like', '%' . request('search') . '%')
                ->orWhere('id', 'like', '%' . request('search') . '%')
                ->orWhere('amount', 'like', '%' . request('search') . '%')
                ->orWhere('currency', 'like', '%' . request('search') . '%')
                ->orWhere('payer', 'like', '%' . request('search') . '%')
                ->orWhere('debtors', 'like', '%' . request('search') . '%')
                ->orWhere('note', 'like', '%' . request('search') . '%');
        }
    }
}
