// tests/Feature/AdminTest.php

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

beforeEach(function () {
    $this->admin = User::factory()->create(['role_id' => 1]); // Administrator role
    $this->standardUser = User::factory()->create(['role_id' => 2]); // Standard User role
});

test('admin can access admin dashboard', function () {
    $response = $this->actingAs($this->admin)->get('/admin');
    $response->assertStatus(200);
});

test('standard user cannot access admin dashboard', function () {
    $response = $this->actingAs($this->standardUser)->get('/admin');
    $response->assertStatus(403);
});

// More tests for admin functionality
