<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class DocsController extends Controller
{
    public function __invoke(): View
    {
        return view('docs', [
            'toc' => $this->toc(),
            'placeholders' => $this->placeholders(),
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

    private function placeholders(): array
    {
        return [
            'extension' => [
                [
                    'title' => 'Line Highlighting Screenshot',
                    'filename' => 'coverage-lines.png',
                    'purpose' => 'Show realistic covered and uncovered lines directly in the editor.',
                    'requirements' => [
                        'Use a real application file with meaningful control flow, not toy math examples.',
                        'Include both covered and uncovered lines in the same frame.',
                        'Keep the editor tab, activity bar, and line numbers visible.',
                        'Avoid terminals, personal notifications, or unrelated tabs.',
                    ],
                ],
                [
                    'title' => 'Gutter Coverage Screenshot',
                    'filename' => 'coverage-gutter.png',
                    'purpose' => 'Show gutter markers and line highlights together for quick scanning.',
                    'requirements' => [
                        'Crop tightly enough that the left gutter remains readable.',
                        'Show at least one covered region and one uncovered region.',
                        'Keep line numbers visible.',
                        'Use the same theme and UI scale as the other screenshots.',
                    ],
                ],
                [
                    'title' => 'Status Bar Screenshot',
                    'filename' => 'coverage-statusbar.png',
                    'purpose' => 'Show the EyeCov status item with visible file context above it.',
                    'requirements' => [
                        'Keep the status bar percentage/count readable.',
                        'Include enough editor context above the status bar to show which file is active.',
                        'Avoid zooming out so far that the status text becomes tiny.',
                    ],
                ],
                [
                    'title' => 'Edit Tracking Screenshot',
                    'filename' => 'coverage-edit-tracking.png',
                    'purpose' => 'Optional: show inserted or deleted lines while coverage stays aligned.',
                    'requirements' => [
                        'Use only if the edit story is visually obvious.',
                        'Show an edited file where decoration alignment still makes sense.',
                        'If this is visually ambiguous, skip the screenshot and keep the feature text-only.',
                    ],
                ],
            ],
            'mcp' => [
                [
                    'title' => 'coverage_file Chat Capture',
                    'filename' => 'mcp-chat-coverage-file.png',
                    'purpose' => 'Show an MCP-enabled host using EyeCov to inspect file-level coverage.',
                    'requirements' => [
                        'Capture a real prompt plus the relevant tool result or grounded assistant response.',
                        'Include the file path and either uncovered lines or line coverage percent.',
                        'Keep the chat history clean and focused on this workflow only.',
                    ],
                ],
                [
                    'title' => 'coverage_line_tests Chat Capture',
                    'filename' => 'mcp-chat-line-tests.png',
                    'purpose' => 'Show how EyeCov identifies which tests cover a given line or range.',
                    'requirements' => [
                        'Use a PHPUnit HTML-backed example so per-line tests are available.',
                        'Show the queried line plus the returned tests or summarized response.',
                        'If a full chat screenshot is too noisy, capture a clean structured result view instead.',
                    ],
                ],
                [
                    'title' => 'coverage_test_priority Chat Capture',
                    'filename' => 'mcp-chat-priority.png',
                    'purpose' => 'Optional: show EyeCov ranking where tests should be added first.',
                    'requirements' => [
                        'Show at least three ranked files.',
                        'Keep any visible reasons readable, such as low coverage or many uncovered lines.',
                        'Skip it if it duplicates the surrounding text without adding clarity.',
                    ],
                ],
            ],
            'report' => [
                [
                    'title' => 'Human Report Output',
                    'filename' => 'report-cli-human.png',
                    'purpose' => 'Show a successful human-readable CLI run against a real artifact.',
                    'requirements' => [
                        'Capture the command itself at the top of the terminal.',
                        'Include the summary and sample file output.',
                        'Use a terminal width that avoids ugly line wrapping.',
                    ],
                ],
                [
                    'title' => 'JSON Report Output',
                    'filename' => 'report-cli-json.png',
                    'purpose' => 'Show the structured JSON shape from the report CLI.',
                    'requirements' => [
                        'Use a real run from `npm run report:json -- --path <artifact>`.',
                        'Keep top-level keys like format, totals, verification, samples, and warnings visible.',
                        'Crop to the most informative portion rather than the full payload.',
                    ],
                ],
                [
                    'title' => 'Verification Output',
                    'filename' => 'report-cli-verify.png',
                    'purpose' => 'Optional: show verification-focused output from a `--verify-report-totals` run.',
                    'requirements' => [
                        'Keep the verification state readable: match, unsupported, or mismatch.',
                        'Only include if it adds something the main human-output capture does not.',
                    ],
                ],
            ],
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
