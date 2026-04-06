---
title: I created my first PHP package and it was actually fun
date: 2022-02-22
description: I created my first PHP package and it was actually fun
---
# I created my first php package and it was actually fun
One might think that is a lot of work to create a package but it is actually not. As you might now I mainly work in PHP and this is also the language in which I created the package. There are even boilerplate code generators available that make it even easier. In general I encourage others to also take the opportunity to at least try creating a package, you don’t have to release it 😉. You can find my package here: https://github.com/LarsWiegers/laravel-maps
![images/i-created-my-first-php-package-and-it-was-actually-fun/logo.png](./images/i-created-my-first-php-package-and-it-was-actually-fun/logo.png)

## Starting point
During one of my work projects I needed a map to be visible on the screen. The map should also support custom icons and be easy to use / maintainable. Seems pretty easy right? Well … It turns out there were no php 8 packages available for this (At least that I could find). And I had been toying with the idea to create a package for a while, but I had not found the right problem for it yet. Now I did.

## Starting up
So we have the idea and the goal to create package. I had been following @marcelpociot on twitter for a while and he shared that his company @beyondcode had created a boilerplate generator. Your can find it here https://laravelpackageboilerplate.com/ . So this is what I used. Later on I learned that the @Spatie guys also have a package generator and I assume it does mostly the same thing.

## The goal
I started with what I wanted the syntax to be which was a blade component. Blade is the templating language that Laravel uses. I wanted to be able to add this `<x-maps-leaflet></x-maps-leaflet>` to my and be able to see a map.

## Testing
As my code is hosted on GitHub so I used the GitHub actions system to run my tests on each push. This is easily done by adding a .github and inside of that a workflows folder with a .yaml file. Mine can be found here: https://github.com/LarsWiegers/laravel-maps/blob/master/.github/workflows/main.yml . The file uses something called a matrix. This matrix allows us to run tests on multiple platforms and multiple php and Laravel versions. That’s awesome. An example of the output of this matrix can be found here: https://github.com/LarsWiegers/laravel-maps/actions/runs/878392536 . On the left you see all the versions / platforms we test on and on the right you see the output of the tests.

Testing is done via the phpunit testing framework and uses the de facto standard testing package called testbench. While currently we have some basic tests for if the html that is rendered contains the expected values it would be a good idea to test if the maps actually load in the browser. For this one might use dusk. Dusk is Laravel’s browser API. You can actually start a browser and run assertions based on what the end user will see. Its really cool. As one can guess there is also a package to run this in the package environment called testbench-dusk. But this package is still in early development so one can expect bugs. More info here: https://github.com/orchestral/testbench-dusk.

## Gotcha’s
Testing blade components in a normal Laravel project is easy as you can just run the blade compiler inside your test case with `$this->blade(‘<x-maps-leaflet></x-maps-leaflet>’)`. But inside a Laravel package it is different. The testbench package as far as I understand does not yet support this. This is why I looked for a different solution.

Blade ui kit is a library that provides a bunch of blade components and as such has tests for it. They have written a few helper classes for this and I have taken those helper classes and added them to the package. This allows us to test our blade components as well.

## Review
In review I believe that creating this package was a good experience. Im going to continue supporting the package for as long as I have time. Let me know what you think on twitter my handle is @larswiegers.
