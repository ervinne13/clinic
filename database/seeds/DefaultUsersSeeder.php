<?php

use App\Modules\Clinic\User\UserAccount;
use Illuminate\Database\Seeder;

class DefaultUsersSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $password = \Hash::make("secret");

        $admin               = new UserAccount();
        $admin->username     = "admin";
        $admin->display_name = "Administrator";
        $admin->role_name    = "System Administrator";
        $admin->password     = $password;

        $admin->save();
    }

}
