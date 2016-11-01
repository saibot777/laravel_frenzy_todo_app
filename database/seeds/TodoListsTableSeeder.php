<?php

use Illuminate\Database\Seeder;

class TodoListsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement("SET FOREIGN_KEY_CHECKS=0");
        DB::table('tasks')->truncate();
        DB::table('todo_lists')->truncate();

        $todoLists = [];
        $tasks = [];
        for ($i = 0; $i < 10; $i++) {
            $date = date("Y-m-d H:i:s", strtotime("2016-10-27 10:00:00 +{$i} days"));
            $todoLists[] = [
                'id' => $i,
                'title' => "Todo list {$i}",
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.',
                'user_id' => rand(1, 2),
                'created_at' => $date,
                'updated_at' => $date,
            ];

            for ($j = 1; $j <= rand(1, 5); $j++) {
                $tasks[] = [
                    'todo_list_id' => $i,
                    'title' => "The Task {$j} of todo list {$i}",
                    'created_at' => $date,
                    'updated_at' => $date,
                    'completed_at' => rand(0, 1) == 0 ? NULL : $date
                ];
            }
        }
        DB::table('todo_lists')->insert($todoLists);
        DB::table('tasks')->insert($tasks);
    }
}
