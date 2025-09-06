<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SessionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('sessions')->delete();
        
        \DB::table('sessions')->insert(array (
            0 => 
            array (
                'id' => 'BTfVYXIiO8cGOeEMAxkprzyCbPvKJUMpvX05M9DK',
                'user_id' => 6,
                'ip_address' => '127.0.0.1',
            'user_agent' => 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.182 Safari/537.36',
                'payload' => 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoia2V0cG9oZ3lpWXZsMkpTVzN0OEY5WnNaVVN4ZmNKMlFVOTJ5Y2ZiOSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzk6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9hcHBzL3ZpZGVvLXBsYXllciI7fXM6MzoidXJsIjthOjE6e3M6ODoiaW50ZW5kZWQiO3M6MzE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9hcHBzL2hvbWUiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTo2O30=',
                'last_activity' => 1618942165,
                'updated_at' => '2021-04-20 20:54:35',
            ),
            1 => 
            array (
                'id' => 'dEMFCrif9GWbkajV8kd6ZlU1VvZyU5GbPwuPARNP',
                'user_id' => NULL,
                'ip_address' => '127.0.0.1',
            'user_agent' => 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.182 Safari/537.36',
                'payload' => 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSkRLdzFYdVk5QTlVNklrcUlKeHUxUFRSaVpPaHdvNXFnWHBIeDhhaSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJuZXciO2E6MDp7fXM6Mzoib2xkIjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9mb3JleC1jb3Vyc2VzL2ZvcmdvdC1wYXNzd29yZCI7fX0=',
                'last_activity' => 1618939526,
                'updated_at' => '2021-04-20 20:25:15',
            ),
            2 => 
            array (
                'id' => 'n7NNPRK16UzwumGHrzjapg8OosMzZvStuo7h5VKk',
                'user_id' => 2,
                'ip_address' => '127.0.0.1',
            'user_agent' => 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.182 Safari/537.36',
                'payload' => 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiMkx2UTlSeEZDeHlwRFhUdWIwdk1vZjN4TlluOUFEd2psT1ZFRjk4NCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9hcHBzL2hvbWUiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToyO30=',
                'last_activity' => 1618989731,
                'updated_at' => '2021-04-21 08:19:44',
            ),
        ));
        
        
    }
}