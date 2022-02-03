<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            
            //order
            $table->string('order_id')->nullable();
            $table->string('parent_id')->nullable();
            $table->string('customer_id')->nullable();
            $table->string('order_key')->nullable();
            $table->string('customer_ip_address')->nullable();
            $table->string('customer_user_agent')->nullable();
            
            $table->string('status')->nullable();
            $table->string('date_created')->nullable();
            $table->string('created_via')->nullable();

            //tax
            $table->string('prices_include_tax')->nullable();
            $table->string('discount_tax')->nullable();
            $table->string('shipping_tax')->nullable();
            $table->string('cart_tax')->nullable();
            $table->string('total_tax')->nullable();
            
            //total
            $table->string('discount_total')->nullable();
            $table->string('shipping_total')->nullable();
            $table->string('total')->nullable();

            // $table->string('barcode_value');

            //payment data
            $table->string('payment_method')->nullable();
            $table->string('payment_method_title')->nullable();
            $table->string('transaction_id')->nullable();

            //order date data
            $table->string('date_completed')->nullable();
            $table->string('date_paid')->nullable();
            $table->string('cart_hash')->nullable();

            //items array
            $table->string('line_items',1000)->nullable();
            $table->string('shipping_lines')->nullable();
            $table->string('fee_lines')->nullable();
            $table->string('coupon_lines')->nullable();

            //billing,shipping array
            $table->string('shipping')->nullable();
            $table->string('billing')->nullable();

            //date,time
            $table->string('delivery_date')->nullable();
            $table->string('delivery_time')->nullable();
            $table->string('delivery_type')->nullable();

            $table->string('status_history',2000)->nullable();
            $table->string('order_currency')->nullable();

            //address index
            $table->string('billing_address_index')->nullable();
            $table->string('shipping_address_index')->nullable();

            //billing custom
            $table->string('billing_address_name')->nullable();
            $table->string('billing_house_number')->nullable();
            $table->string('billing_building_code')->nullable();
            $table->string('billing_house_enter')->nullable();
            $table->string('billing_floor')->nullable();
            $table->string('billing_apartment_number')->nullable();

            //notes
            $table->string('customer_note')->nullable();
            $table->string('billing_leave_in_front_the_door')->nullable();
            $table->string('billing_notfiy_me_on_way')->nullable();
            $table->string('billing_door_ring')->nullable();
            $table->string('billing_order_notes')->nullable();


            //credit card
            $table->string('ccnumber')->nullable();
            $table->string('credit_type')->nullable();
            $table->string('creditguard_token')->nullable();
            $table->string('creditguard_expiration')->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
