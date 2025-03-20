<?php

namespace Database\Seeds;

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
        // $this->call(UserSeeder::class);
        $this->call(AdminsTableSeeder::class);
        $this->call(AlbumsTableSeeder::class);
        $this->call(BannersTableSeeder::class);
        $this->call(BravoAttrsTableSeeder::class);
        $this->call(BravoAttrsTranslationsTableSeeder::class);
        $this->call(BravoBookingMetaTableSeeder::class);
        $this->call(BravoBookingPaymentsTableSeeder::class);
        $this->call(BravoBookingsTableSeeder::class);
        $this->call(BravoContactTableSeeder::class);
        $this->call(BravoHotelRoomBookingsTableSeeder::class);
        $this->call(BravoHotelRoomCalendarsTableSeeder::class);
        $this->call(BravoHotelRoomListCalendarsTableSeeder::class);
        $this->call(BravoHotelRoomsTableSeeder::class);
        $this->call(BravoHotelTermTableSeeder::class);
        $this->call(BravoHotelsTableSeeder::class);
        $this->call(BravoLocationsTableSeeder::class);
        $this->call(BravoPartnerMembersTableSeeder::class);
        $this->call(BravoTermsTableSeeder::class);
        $this->call(CategorynewsrelationshipTableSeeder::class);
        $this->call(CommentsTableSeeder::class);
        $this->call(ConfigTableSeeder::class);
        $this->call(ContactsTableSeeder::class);
        $this->call(CountryTableSeeder::class);
        $this->call(CustomersTableSeeder::class);
        $this->call(EmailPromotionTableSeeder::class);
        $this->call(FailedJobsTableSeeder::class);
        $this->call(FaqTableSeeder::class);
        $this->call(GalleryTableSeeder::class);
        $this->call(HistoryTableSeeder::class);
        $this->call(LocationTableSeeder::class);
        $this->call(MediaFilesTableSeeder::class);
        $this->call(MembersTableSeeder::class);
        $this->call(MenusTableSeeder::class);
        $this->call(MenusAdminTableSeeder::class);
        $this->call(MigrationsTableSeeder::class);
        $this->call(NewsTableSeeder::class);
        $this->call(NewsCatalogTableSeeder::class);
        $this->call(PagesTableSeeder::class);
        $this->call(PasswordResetsTableSeeder::class);
        $this->call(QATableSeeder::class);
        $this->call(TableUseronlineTableSeeder::class);
        $this->call(TableVisitTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(UsersfTableSeeder::class);
        $this->call(VideosTableSeeder::class);
    }
}
