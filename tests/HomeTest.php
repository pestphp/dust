<?php

it('has a home page')
    ->browse('/')
    ->assertSeeLink('Get started');
