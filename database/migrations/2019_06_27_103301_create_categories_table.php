<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateCategoriesTable.
 */
class CreateCategoriesTable extends Migration
{
	private const CATEGORY_ARTICLE_TABLE = 'categories';
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create(self::CATEGORY_ARTICLE_TABLE, function(Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('slug', 255);
            $table->boolean('isActive')->default(true);
            $table->datetime('createdDate');
            $table->string('createdBy');
            $table->datetime('updatedDate')->nullable();
            $table->string('updatedBy')->nullable();
            $table->tinyInteger('isDeleted')->default(0);
            $table->datetime('deletedDate')->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop(self::CATEGORY_ARTICLE_TABLE);
	}
}
