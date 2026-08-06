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
            'formatMappings' => $this->formatMappings(),
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
            'Ruby SimpleCov JSON',
            '.NET OpenCover XML',
        ];
    }

    private function formatMappings(): array
    {
        return [
            [
                'language' => 'PHP',
                'format' => 'PHPUnit HTML',
                'artifact' => 'coverage-html/',
                'status' => 'Field-tested',
            ],
            [
                'language' => 'PHP, JS/TS, Python, Ruby, .NET, JVM',
                'format' => 'Cobertura XML',
                'artifact' => 'coverage/cobertura-coverage.xml',
                'status' => 'Field-tested',
            ],
            [
                'language' => 'PHP',
                'format' => 'Clover XML',
                'artifact' => 'coverage/clover.xml',
                'status' => 'Field-tested',
            ],
            [
                'language' => 'JS/TS, PHP, Ruby, Python',
                'format' => 'LCOV',
                'artifact' => 'coverage/lcov.info',
                'status' => 'Field-tested',
            ],
            [
                'language' => 'JS/TS',
                'format' => 'Istanbul/NYC JSON',
                'artifact' => 'coverage/coverage-final.json',
                'status' => 'Newer',
            ],
            [
                'language' => 'Java, Kotlin, JVM',
                'format' => 'JaCoCo XML',
                'artifact' => 'build/reports/jacoco/test/jacocoTestReport.xml',
                'status' => 'Newer',
            ],
            [
                'language' => 'Go',
                'format' => 'Go coverprofile',
                'artifact' => 'coverage.out',
                'status' => 'Newer',
            ],
            [
                'language' => 'Python',
                'format' => 'coverage.py XML/JSON',
                'artifact' => 'coverage.xml or coverage.json',
                'status' => 'Newer',
            ],
            [
                'language' => 'Ruby',
                'format' => 'SimpleCov JSON',
                'artifact' => 'coverage/.resultset.json',
                'status' => 'Newer',
            ],
            [
                'language' => '.NET',
                'format' => 'OpenCover XML',
                'artifact' => 'Explicit config',
                'status' => 'Newer',
            ],
        ];
    }
}
