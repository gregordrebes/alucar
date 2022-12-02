<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\User;
use Tests\TestCase;

class UserTest extends TestCase
{
    public function testSaveUser()
    {
        $user            = new User;
        $user->name      = 'T1';
        $user->email     = 'T1';
        $user->password  = 'T1';

        $this->assertEquals(true, $user->save());
    }

    public function testUpdateUser(): void 
    {
        $modelUser       = new User;
        $user            = $modelUser::latest()->first();
        $user->name      = 'T2';
        $user->email     = 'T2';
        $user->password  = 'T2';

        $this->assertEquals(true, $user->save());
    }

    public function testDeleteUser(): void 
    {
        $modelUser  = new User;
        $user       = $modelUser::latest()->first();

        $this->assertEquals(true, $user->destroy($user->id));
    }
}
