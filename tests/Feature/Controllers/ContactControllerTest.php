<?php

namespace Tests\Feature\Controllers;

use App\Models\User;
use App\Models\Contact;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ContactControllerTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    protected function setUp(): void
    {
        parent::setUp();

        $this->actingAs(
            User::factory()->create(['email' => 'admin@admin.com'])
        );

        $this->seed(\Database\Seeders\PermissionsSeeder::class);

        $this->withoutExceptionHandling();
    }

    /**
     * @test
     */
    public function it_displays_index_view_with_contacts(): void
    {
        $contacts = Contact::factory()
            ->count(5)
            ->create();

        $response = $this->get(route('contacts.index'));

        $response
            ->assertOk()
            ->assertViewIs('app.contacts.index')
            ->assertViewHas('contacts');
    }

    /**
     * @test
     */
    public function it_displays_create_view_for_contact(): void
    {
        $response = $this->get(route('contacts.create'));

        $response->assertOk()->assertViewIs('app.contacts.create');
    }

    /**
     * @test
     */
    public function it_stores_the_contact(): void
    {
        $data = Contact::factory()
            ->make()
            ->toArray();

        $response = $this->post(route('contacts.store'), $data);

        unset($data['name']);
        unset($data['phone']);

        $this->assertDatabaseHas('contacts', $data);

        $contact = Contact::latest('id')->first();

        $response->assertRedirect(route('contacts.edit', $contact));
    }

    /**
     * @test
     */
    public function it_displays_show_view_for_contact(): void
    {
        $contact = Contact::factory()->create();

        $response = $this->get(route('contacts.show', $contact));

        $response
            ->assertOk()
            ->assertViewIs('app.contacts.show')
            ->assertViewHas('contact');
    }

    /**
     * @test
     */
    public function it_displays_edit_view_for_contact(): void
    {
        $contact = Contact::factory()->create();

        $response = $this->get(route('contacts.edit', $contact));

        $response
            ->assertOk()
            ->assertViewIs('app.contacts.edit')
            ->assertViewHas('contact');
    }

    /**
     * @test
     */
    public function it_updates_the_contact(): void
    {
        $contact = Contact::factory()->create();

        $data = [
            'name' => $this->faker->name(),
            'from' => $this->faker->text(),
            'subject' => $this->faker->text(),
            'phone' => $this->faker->phoneNumber(),
            'to' => $this->faker->text(),
            'cc' => $this->faker->text(),
            'cco' => $this->faker->text(),
            'body' => $this->faker->text(),
            'code' => $this->faker->numberBetween(0, 32767),
        ];

        $response = $this->put(route('contacts.update', $contact), $data);

        unset($data['name']);
        unset($data['phone']);

        $data['id'] = $contact->id;

        $this->assertDatabaseHas('contacts', $data);

        $response->assertRedirect(route('contacts.edit', $contact));
    }

    /**
     * @test
     */
    public function it_deletes_the_contact(): void
    {
        $contact = Contact::factory()->create();

        $response = $this->delete(route('contacts.destroy', $contact));

        $response->assertRedirect(route('contacts.index'));

        $this->assertSoftDeleted($contact);
    }
}
