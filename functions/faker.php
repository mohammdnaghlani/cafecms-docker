<?php

function faker() : object
{
    $faker = \Faker\Factory::create();
    return $faker ;
}

function fakeUser(int $size = 1)
{
    $faker = faker();
    for($i = 0 ; $i <= $size ; $i ++){
    
        $data = array(
            'email' => $faker->email()  ,
            'password' => $faker->text(rand(5,7)),
            'full_name' => $faker->name,
            'mobile' => $faker->phoneNumber,
            'role' => rand(1,2),
            'confirmed' => rand(0,1),
        );
        newUser($data);
    }
    return true ;
}