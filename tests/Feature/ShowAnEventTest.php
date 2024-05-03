<?php

use App\Models\Event;
use App\Models\Location;

use function Pest\Laravel\get;
use function Pest\Laravel\withoutExceptionHandling;

it('can display 1 specific event', function () {

    //withoutExceptionHandling();
    $event = Event::factory()->has(Location::factory(3))->create();
    //$locations = Location::factory(3)->create();

    //$event->locations()->attach($locations);

    // Requete GET pour afficher
    get("event/{$event->id}")
        ->assertOk()
        ->assertSee($event->name)
        ->assertSee($event->description)
        // ->assertSee($event->locations[0]->name)
        // ->assertSee($event->locations[1]->name)
        // ->assertSee($event->locations[2]->name)
        ->assertSee([
            $event->locations[0]->city->name,
            $event->locations[1]->city->name,
            $event->locations[2]->city->name,
        ])
        ->assertSee($event->locations[0]->city->name)
        ->assertSee($event->locations[1]->city->name)
        ->assertSee($event->locations[2]->city->name);

});

test('a 404 error is sent when accessing an event that do not exist', function() {
    //withoutExceptionHandling();
    get("event/1")->assertStatus(404);
    get("event/bonjour")->assertStatus(404);

});

it('displays all the events name with locations name and city name', function() {

    withoutExceptionHandling();

    $events = Event::factory(2)->has(Location::factory(3))->create();

    $response = get("events")->assertStatus(200);

    $events->each(function ($event) use ($response) {

        $response
            ->assertSee($event->name)
            ->assertSee([
                $event->locations[0]->name,
                $event->locations[1]->name,
                $event->locations[2]->name,
            ])
            ->assertSee([
                $event->locations[0]->city->name,
                $event->locations[1]->city->name,
                $event->locations[2]->city->name,
            ]);
    });


});
