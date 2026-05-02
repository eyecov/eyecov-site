<?php

it('shows the homepage extension surface', function (): void {
    $response = $this->get('/');
    $content = $response->content();

    expect($response->status())->toBe(200)
        ->and($content)->toContain('Install from Marketplace')
        ->toContain('Install from Open VSX')
        ->and(str_contains($content, 'Coverage Diff'))->toBeFalse()
        ->and(str_contains($content, 'coverage_diff'))->toBeFalse();
});

it('shows the docs extension surface', function (): void {
    $response = $this->get('/docs');
    $content = $response->content();

    expect($response->status())->toBe(200)
        ->and($content)->toContain('Install from Marketplace')
        ->toContain('Install from Open VSX')
        ->toContain('coverage_file')
        ->toContain('coverage_line_tests')
        ->and(str_contains($content, 'Screenshot Placeholder'))->toBeFalse()
        ->and(str_contains($content, 'Capture Placeholder'))->toBeFalse()
        ->and(str_contains($content, 'Output Placeholder'))->toBeFalse();
});
