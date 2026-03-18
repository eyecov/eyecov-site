<?php

it('shows the homepage pitch and docs link', function () {
    visit('/')
        ->assertTitleContains('EyeCov')
        ->assertSee('Stop guessing what is tested.')
        ->assertSeeLink('Read the Docs');
});

it('shows the docs installation section', function () {
    visit('/docs')
        ->assertTitleContains('EyeCov Docs')
        ->assertSee('Install EyeCov, use it in your editor, and connect it to your AI tools.')
        ->assertSee('Start with the extension, then point it at the coverage you already generate.');
});
