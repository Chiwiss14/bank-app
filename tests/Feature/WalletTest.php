<?php

namespace Tests\Feature;

use Tests\TestCase;

class WalletTest extends TestCase
{
    public function test_user_can_view_wallet_balance()
    {
        $user = \App\Models\User::factory()->create();

        $response = $this->actingAs($user)->get('/user/wallet');

        $response->assertStatus(200);
        $response->assertSee('Wallet Balance');

        
    }
}
// test('examptle', function () {
//     $response = $this->get('/');

//     $response->assertStatus(200);
// });
