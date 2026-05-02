<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class DocsController extends Controller
{
    public function __invoke(): View
    {
        return view('docs', [
            'toc' => $this->toc(),
            'coreFormats' => $this->coreFormats(),
            'newerFormats' => $this->newerFormats(),
        ]);
    }

    private function toc(): array
    {
        return [
            ['id' => 'installation', 'label' => 'Installation'],
            ['id' => 'extension', 'label' => 'VS Code Extension'],
            ['id' => 'mcp', 'label' => 'MCP and AI Agents'],
            ['id' => 'report-cli', 'label' => 'Coverage Report CLI'],
            ['id' => 'contributing', 'label' => 'Contributing'],
        ];
    }

    private function coreFormats(): array
    {
        return [
            'PHPUnit HTML',
            'Cobertura XML',
            'Clover XML',
            'LCOV',
        ];
    }

    private function newerFormats(): array
    {
        return [
            'Istanbul/NYC JSON',
            'JaCoCo XML',
            'Go coverprofile',
            'Python coverage.py XML/JSON',
            '.NET OpenCover XML',
        ];
    }
}
