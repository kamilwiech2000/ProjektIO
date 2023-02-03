<?php

use App\Models\Fish;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFisheriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fisheries', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text('voivodeship');
            $table->text('fishery');
            $table->foreignIdFor(Fish::class)->constrained();
            $table->text('creationdate');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fisheries');
    }
}
