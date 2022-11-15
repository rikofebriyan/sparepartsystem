<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations. php artisan migrate:refresh --path=/database/migrations/2022_11_07_012831_create_requestrepairs_table.php
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requestrepairs', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->nullable();
            $table->string('reg')->nullable();
            $table->string('machine_name')->nullable();
            $table->string('line_name')->nullable();
            $table->string('part_name')->nullable();
            $table->string('part_type')->nullable();
            $table->string('serial_no')->nullable();
            $table->string('maker')->nullable();
            $table->text('problem')->nullable();
            $table->text('detail_standard')->nullable();
            $table->string('ampere')->nullable();
            $table->string('meger')->nullable();
            $table->string('pressure')->nullable();
            $table->string('flow')->nullable();
            $table->string('temperature')->nullable();
            $table->string('rpm')->nullable();
            $table->string('ohm')->nullable();
            $table->string('volt')->nullable();
            $table->string('flatness')->nullable();
            $table->string('gather')->nullable();
            $table->string('load')->nullable();
            $table->string('runout')->nullable();

                                    // ADMIN FORM
            $table->string('type_of_part')->nullable();
            $table->string('sparepart_ETA')->nullable();
            $table->string('part_price')->nullable();
            $table->string('stock_sparepart')->nullable();
            $table->string('urgency')->nullable();

                                      // REPAIRMAN FORM        
            $table->string('action')->nullable();
            $table->string('suggest')->nullable();
            $table->string('starttime_repair')->nullable();
            $table->string('planfinishtime_repair')->nullable();
            $table->string('actfinishtime_repair')->nullable();
            $table->string('repair_time')->nullable();

            $table->string('result_of_trial')->nullable();

                            // MOTOR/PUMO/BLOWE/VACUUM
            $table->string('trial_ampere')->nullable();
            $table->string('trial_merger')->nullable();
            $table->string('trial_flow')->nullable();
            $table->string('trial_pressure_water')->nullable();
            $table->string('trial_RPM')->nullable();
            $table->string('trial_temperature_motor')->nullable();
            $table->string('trial_resistanse')->nullable();
            $table->string('trial_pressure_air')->nullable();
            $table->string('trial_load')->nullable();
            $table->string('trial_leak')->nullable();
            $table->string('trial_rotation')->nullable();
            $table->string('trial_noise_motor')->nullable();
            $table->string('trial_vibration_motor')->nullable();

                            // SPINDLE/TAILSTOCK/INDEX TABLE
            $table->string('trial_runout')->nullable();
            $table->string('trial_gather')->nullable();
            $table->string('trial_flatness')->nullable();
            $table->string('trial_noise_spindle')->nullable();
            $table->string('trial_vibration_spindle')->nullable();
            $table->string('trial_load_spindle')->nullable();
            $table->string('trial_temperature_spindle')->nullable();
            $table->string('status')->nullable();

                            // ladle/gearbox
            $table->string('break_puring')->nullable();
            $table->string('break_travling')->nullable();
            $table->string('rotation')->nullable();
            $table->string('rantai_gear')->nullable();
            $table->string('electrode')->nullable();
            $table->string('cyclo')->nullable();
            $table->string('cable')->nullable();
            $table->string('px_sensor')->nullable();
            $table->string('arm_puring')->nullable();
            $table->string('moving_traveling')->nullable();
            $table->string('moving_puring')->nullable();

                            // Cylinder
            $table->string('trial_sensor')->nullable();
            $table->string('trial_moving')->nullable();
            $table->string('trial_leak_cylinder')->nullable();
            $table->string('trial_other')->nullable();
            $table->string('trial_other2')->nullable();

            $table->string('judgement')->nullable();
            $table->string('no_code_repair')->nullable();
            
            $table->string('name_admin')->nullable();
            $table->string('name_repairman')->nullable();

            $table->timestamp('time_progress')->nullable();
            $table->timestamp('time_repair')->nullable();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('requestrepairs');
    }
};
