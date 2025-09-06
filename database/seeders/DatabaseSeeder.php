<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(UsersTableSeeder::class);
        $this->call(AboutsTableSeeder::class);
        $this->call(AccountbalanceTableSeeder::class);
        $this->call(B2bApiResponseTableSeeder::class);
        $this->call(BannersTableSeeder::class);
        $this->call(BlogsTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(CommentsTableSeeder::class);
        $this->call(CopyrightTableSeeder::class);
        $this->call(CopyrightsTableSeeder::class);
        $this->call(CoursesTableSeeder::class);
        $this->call(EmailSettingsTableSeeder::class);
        $this->call(FaqTableSeeder::class);
        $this->call(HowsTableSeeder::class);
        $this->call(LnmoApiResponseTableSeeder::class);
        $this->call(MessagesTableSeeder::class);
        $this->call(MobilePaymentsTableSeeder::class);
        $this->call(NotificationsTableSeeder::class);
        $this->call(PasswordResetsTableSeeder::class);
        $this->call(PostViewsTableSeeder::class);
        $this->call(PrivaciesTableSeeder::class);
        $this->call(ReverseTransactionTableSeeder::class);
        $this->call(SessionsTableSeeder::class);
        $this->call(SignalsTableSeeder::class);
        $this->call(SlidersTableSeeder::class);
        $this->call(TermsTableSeeder::class);
        $this->call(TestimonialsTableSeeder::class);
        $this->call(TopicsTableSeeder::class);
        $this->call(TransactionStatusTableSeeder::class);
        $this->call(CredentialsTableSeeder::class);
        $this->call(SiteSettingsTableSeeder::class);
    }
}
