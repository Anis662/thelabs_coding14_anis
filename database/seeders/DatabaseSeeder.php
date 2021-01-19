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
        $this->call(VerificationSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(NavbarSeeder::class);
        $this->call(LogoSeeder::class);
        $this->call(BannerSeeder::class);
        $this->call(ServiceHomeSeeder::class);
        $this->call(AboutContentSeeder::class);
        $this->call(TitreTestiSeeder::class);
        $this->call(TestimonialSeeder::class);
        $this->call(TitreServiceSeeder::class);
        $this->call(TitreTeamSeeder::class);
        $this->call(ProfilTeamSeeder::class);
        $this->call(TitreSloganSeeder::class);
        $this->call(ReadySeeder::class);
        $this->call(HomeContactSeeder::class);
        $this->call(ServicePrimeSeeder::class);
        $this->call(IconePrimeSeeder::class);
        $this->call(BlogRapidSeeder::class);
        $this->call(ArticleSeeder::class);
        $this->call(CommentaireSeeder::class);
        $this->call(NewsletterSeeder::class);
        $this->call(FooterSeeder::class);
        $this->call(AdresseSeeder::class);
        $this->call(TagSeeder::class);
        $this->call(Article_TagSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(Article_CategorySeeder::class);
        // \App\Models\User::factory(10)->create();
    }
}
