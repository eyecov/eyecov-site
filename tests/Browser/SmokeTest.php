<?php

declare(strict_types=1);

it('shows the homepage pitch and docs link', function (): void {
    visit('/')
        ->assertTitleContains('EyeCov')
        ->assertSee('Stop guessing what is tested.')
        ->assertSeeLink('Install from Marketplace')
        ->assertSeeLink('Install from Open VSX')
        ->assertDontSee('Coverage Diff')
        ->assertSeeLink('Read the Docs');
});

it('shows the docs installation section', function (): void {
    visit('/docs')
        ->assertTitleContains('EyeCov Docs')
        ->assertSee('Install EyeCov, use it in your editor, and connect it to your AI tools.')
        ->assertSeeLink('Install from Marketplace')
        ->assertSeeLink('Install from Open VSX')
        ->assertDontSee('Screenshot Placeholder')
        ->assertSee('Start with the extension, then point it at the coverage you already generate.');
});
