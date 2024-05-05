<?php

declare(strict_types=1);

namespace WeProDev\LaraNav\Model;

use Illuminate\Database\Eloquent\Model;

class Navigation extends Model
{
    public function __construct()
    {
        $this->table = config('laranav.table');
    }

    protected $fillable = [
        'title',
        'type',
        'url',
        'permission',
        'active',
        'parent_id',
        'attributes',
        'parent_attributes',
    ];

    protected $casts = [
        'attributes' => 'array',
        'parent_attributes' => 'array',
    ];
}
