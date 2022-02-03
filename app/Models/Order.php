<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'order_id',
        'parent_id',
        'customer_id',
        'order_key',
        'customer_ip_address',
        'customer_user_agent',
        'status',
        'date_created',
        'created_via',
        'prices_include_tax' ,
        'discount_tax',
        'shipping_tax',
        'cart_tax',
        'total_tax',

        'discount_total',
        'shipping_total',
        'total',

        'payment_method',
        'payment_method_title',
        'transaction_id',

        'date_completed',
        'date_paid' ,
        'cart_hash',

        'line_items',
        'shipping_lines',
        'fee_lines',
        'coupon_lines',

        'shipping',
        'billing',

        'delivery_date',
        'delivery_time',
        'delivery_type',

        'status_history',
        'order_currency' ,


        'billing_address_index',
        'shipping_address_index',

        
        
        'billing_address_name',
        'billing_house_number' ,
        'billing_building_code',
        'billing_house_enter',
        'billing_floor',
        'billing_apartment_number' ,

        'customer_note',
        'billing_leave_in_front_the_door',
        'billing_notfiy_me_on_way',
        'billing_door_ring' ,
        'billing_order_notes',

        'ccnumber',
        'credit_type',
        'creditguard_token' ,
        'creditguard_expiration' ,
        
    ];
}
