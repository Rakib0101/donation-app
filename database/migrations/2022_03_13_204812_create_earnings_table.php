<?php

use App\Models\ManualPayment;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEarningsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('earnings', function (Blueprint $table) {
            $table->id();
            $table->string('order_id');
            $table->enum('payment_provider', ['flutterwave', 'mollie', 'midtrans', 'paypal', 'paystack', 'razorpay', 'sslcommerz', 'stripe', 'instamojo', 'offline']);
            $table->foreignId('company_id')->constrained('companies')->onDelete('cascade');
            $table->string('amount')->nullable();
            $table->string('currency_symbol')->nullable();
            $table->string('usd_amount')->nullable();
            $table->enum('payment_status', ['paid', 'unpaid'])->default('unpaid');

            $table->string('transaction_id')->nullable();

            $table->foreignIdFor(ManualPayment::class, 'manual_payment_id')->nullable()->constrained()->onDelete('cascade');

            $table->unsignedBigInteger('plan_id')->nullable();
            $table->foreign('plan_id')->references('id')->on('plans')->onDelete('cascade');
            $table->enum('payment_type', ['subscription_based', 'per_job_based'])->default('subscription_based');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('earnings');
    }
}
