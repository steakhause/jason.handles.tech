<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        // n8n_chats (many → one users)
        Schema::create('n8n_chats', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->uuid('session_id');      
            $table->longText('input');
            $table->longText('output');
            $table->timestamps();

            $table->index('session_id');
            $table->index(['user_id','session_id']);
        });

        // documents (many → one users)
        Schema::create('documents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('doc_id', 255);   
            $table->string('title');
            $table->text('url');             
            $table->string('platform', 50);  
            $table->timestamps();

            $table->index('doc_id');
            $table->index(['user_id','doc_id']);
            // If you want each user to have a single row per platform+doc:
            // $table->unique(['user_id','platform','doc_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('documents');
        Schema::dropIfExists('n8n_chats');
    }
};

