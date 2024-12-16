Schema::create('siswas', function (Blueprint $table) {
     $table->id();
     $table->integer('id_user');
     $table->string('image');
     $table->bigInteger('nis');
     $table->string('tingkatan');
     $table->string('jurusan');
     $table->string('kelas');
     $table->bigInteger('hp');
     $table->integer('status');
     $table->timestamps();
});