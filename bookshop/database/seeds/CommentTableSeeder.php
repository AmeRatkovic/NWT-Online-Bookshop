<?php

use Illuminate\Database\Seeder;
use App\Comment;
// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class CommentTableSeeder extends Seeder
{
    public function run()
    {
         Comment::create(array(
            'username' => 'Chris Sevilleja',
            'komentar' => 'Look I am a test comment.',
            'idUser' => 1,
            'idKnjiga' => 2
        ));
    
        Comment::create(array(
             'username' => 'AAAAA BBB',
            'komentar' => 'CCCC I am a test comment.',
            'idUser' => 1,
            'idKnjiga' => 2
        ));
    }
}
