<?php

use App\Models\Person;
use App\Models\User;

test('access to "/hello', function() {
  $response = $this->get('/hello');
  $response->assertStatus(200);
});

test('access to "/person', function() {
  $response = $this->get("/person");
  $response->assertStatus(200);
});

test('access to "/board', function() {
  $response = $this->get("/board");
  $response->assertStatus(200);
});

test('check database User crate', function() {
  $user = User::factory()->create();
  expect($user)->not->toBeNull();
});

function createPerson() {
  $ob = new User();
  $ob->name = 'alice';
  $ob->email = 'alice@wonderland';
  $ob->password = 'wonderland';
  $ob->save();
  return $ob;
}

test('check database Person find', function() {
  $ob = createPerson();
  $res = User::where('name', 'alice')->first();
  expect($res)->not->toBeNull();
});

test('check database Person create', function() {
  $p = Person::factory()->create();
  expect($p)->not->toBeNull();
});

test('check database Person create and find', function() {
  $p = Person::factory()->create();
  $res = Person::where('name', $p->name)->first();
  expect($res)->not->toBeNull();
});

test('check database Person find all', function() {
  $arr = [
    Person::factory()->create(),
    Person::factory()->create(),
    Person::factory()->create(),
  ];
  $res = Person::all();
  expect($res->count())->toEqual(count($arr));
});

test('authenticated user can access', function() {
  // ユーザーを作成
  $user = User::factory()->create();
  // ユーザーとしてログイン
  $this->actingAs($user);

  $response = $this->get('/');
  $response->assertStatus(200);
});
