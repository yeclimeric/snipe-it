<?php

namespace Tests\Feature\Consumables\Ui;

use App\Models\Consumable;
use App\Models\User;
use Tests\TestCase;

class EditConsumableTest extends TestCase
{
    public function testPageRenders()
    {
        $this->actingAs(User::factory()->superuser()->create())
            ->get(route('consumables.edit', Consumable::factory()->create()))
            ->assertOk();
    }
}
