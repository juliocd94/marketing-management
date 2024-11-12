<?php

namespace Database\Seeders;

use App\Models\BusinessProfile;
use App\Models\PersonalProfile;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Enums\UserType;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $user = new User();
        $user->name = 'John';
        $user->email = 'johndoe@example.com';
        $user->password = Hash::make('password');
        $user->user_type = UserType::INDIVIDUAL;
        $user->save();

        $personalProfile = new PersonalProfile();
        $personalProfile->user_id = $user->id;
        $personalProfile->first_name = 'John';
        $personalProfile->last_name = 'Doe';
        $personalProfile->save();

        $user2 = new User();
        $user2->name = 'Company test inc.';
        $user2->email = 'company@example.com';
        $user2->password = Hash::make('password');
        $user2->user_type = UserType::BUSINESS;
        $user2->save();

        $businessProfile2 = new BusinessProfile();
        $businessProfile2->user_id = $user2->id;
        $businessProfile2->name = 'Company test inc.';
        $businessProfile2->registration_country = 'United Kingdom';
        $businessProfile2->save();
    }
}
