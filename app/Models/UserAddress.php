<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserAddress extends Model
{
    use SoftDeletes;

    /**
     * $fillable属性或者$guarded属性，以表明哪些属性可以通过create方法设置，哪些不可以。
     * @var array
     */
    protected $fillable = [
        'province',
        'city',
        'district',
        'address',
        'zip',
        'contact_name',
        'contact_phone',
        'last_used_at',
    ];
    protected $guarded = [

    ];

    /**
     * 定义Carbon类型的字段
     * @var array
     */
    protected $dates = ['last_used_at'];

    /**
     * 一对多从属
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * 创建了一个访问器，在之后的代码里可以直接通过 $address->full_address 来获取完整的地址，而不用每次都去拼接
     * @return string
     */
    public function getFullAddressAttribute()
    {
        return "{$this->province}{$this->city}{$this->district}{$this->address}";
    }
}
