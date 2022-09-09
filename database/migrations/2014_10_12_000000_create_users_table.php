<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("CREATE TABLE users (
            id SERIAL PRIMARY KEY,
            name VARCHAR(255) NOT NULL,
            birthdate DATE NOT NULL,
            cpf VARCHAR(11) NOT NULL,
            gender VARCHAR(1) NOT NULL,
            phone VARCHAR(11) NOT NULL,
            email VARCHAR(255) NOT NULL,
            created_at TIMESTAMP,
            updated_at TIMESTAMP)");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP TABLE users");
    }
}
