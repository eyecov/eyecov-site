<x-layouts.app title="EyeCov Docs — Install, Use, and Contribute">
    <header class="sticky top-0 inset-x-0 z-20 border-b border-white/5 backdrop-blur bg-canvas/85">
        <div class="max-w-6xl mx-auto px-6 py-4 flex items-center justify-between gap-6">
            <a href="/" class="flex items-center gap-3">
                <img src="/eyecov-logo.png" alt="EyeCov" class="h-8 w-auto mix-blend-screen">
                <span class="text-sm tracking-[0.18em] uppercase text-fg-faint">Docs</span>
            </a>
            <nav class="flex items-center gap-5 text-sm text-fg-soft">
                <a href="/" class="hover:text-fg transition-colors">Home</a>
                <a href="https://github.com/eyecov/eyecov-vscode" class="hover:text-fg transition-colors">GitHub</a>
                <a href="https://marketplace.visualstudio.com/items?itemName=eyecov.eyecov-vscode" class="hover:text-fg transition-colors">Marketplace</a>
            </nav>
        </div>
    </header>

    <main class="px-6 py-12 md:py-16">
        <div class="max-w-6xl mx-auto">
            <section class="grid gap-8 lg:grid-cols-[minmax(0,1fr)_18rem] items-start">
                <div class="ec-card rounded-3xl border border-border-strong bg-[linear-gradient(180deg,rgba(255,255,255,0.04),rgba(255,255,255,0.01))] p-8 md:p-10 shadow-2xl shadow-black/20" data-reveal="up">
                    <p class="text-xs font-semibold tracking-[0.24em] uppercase text-fg-faint mb-4">Documentation</p>
                    <h1 class="text-4xl md:text-5xl font-semibold tracking-tight text-fg-bright max-w-3xl">
                        Install EyeCov, use it in your editor, and connect it to your AI tools.
                    </h1>
                    <p class="mt-6 max-w-3xl text-lg leading-relaxed text-fg-muted">
                        This guide covers setup, the VS Code extension, MCP and AI-agent workflows, the coverage report CLI,
                        and the contributor path. It tracks the shipped product, not the roadmap.
                    </p>
                    <div class="mt-8 flex flex-wrap gap-3">
                        <a href="https://marketplace.visualstudio.com/items?itemName=eyecov.eyecov-vscode"
                           class="ec-button px-5 py-2.5 rounded-lg bg-white text-canvas font-medium hover:bg-fg transition-colors text-sm">
                            Install from Marketplace
                        </a>
                        <a href="https://github.com/eyecov/eyecov-vscode"
                           class="ec-button px-5 py-2.5 rounded-lg border border-border-default hover:border-fg-dim text-sm transition-colors">
                            View the Repo
                        </a>
                    </div>
                </div>

                <aside class="ec-card rounded-2xl border border-border-strong bg-surface-raised p-5 lg:sticky lg:top-24" data-reveal="right">
                    <p class="text-xs font-semibold tracking-[0.24em] uppercase text-fg-faint mb-4">On This Page</p>
                    <nav class="space-y-3 text-sm text-fg-muted">
                        @foreach($toc as $item)
                            <a href="#{{ $item['id'] }}" class="block hover:text-fg-bright transition-colors">{{ $item['label'] }}</a>
                        @endforeach
                    </nav>
                </aside>
            </section>

            <section class="mt-8 ec-card rounded-2xl border border-border-soft bg-surface-raised p-6 md:p-7" data-reveal="up">
                <p class="text-xs font-semibold tracking-[0.24em] uppercase text-fg-faint mb-3">Coverage Formats</p>
                <div class="grid gap-6 md:grid-cols-2">
                    <div>
                        <h2 class="text-xl font-semibold text-fg-bright mb-3">Field-tested support</h2>
                        <ul class="space-y-2 text-sm text-fg-muted">
                            @foreach($coreFormats as $format)
                                <li>{{ $format }}</li>
                            @endforeach
                        </ul>
                    </div>
                    <div>
                        <h2 class="text-xl font-semibold text-fg-bright mb-3">Newer support</h2>
                        <p class="text-sm text-fg-subtle mb-3">
                            Supported in the extension, but not yet as field-validated as the core formats above.
                        </p>
                        <ul class="space-y-2 text-sm text-[#b0b0b8]">
                            @foreach($newerFormats as $format)
                                <li>{{ $format }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </section>

            <section id="installation" class="mt-16 scroll-mt-24">
                <p class="text-xs font-semibold tracking-[0.24em] uppercase text-[#7b7b87] mb-4" data-reveal="up">Installation</p>
                <h2 class="text-3xl font-semibold tracking-tight mb-5" data-reveal="up" data-reveal-delay="1">Start with the extension, then point it at the coverage you already generate.</h2>
                <div class="grid gap-6 lg:grid-cols-2">
                    <div class="ec-card rounded-2xl border border-[#22222a] bg-[#101015] p-6" data-reveal="up" data-reveal-delay="2">
                        <h3 class="text-xl font-semibold text-[#f5f5f6] mb-4">Recommended path</h3>
                        <ol class="space-y-3 text-sm leading-relaxed text-[#b0b0b8] list-decimal pl-5">
                            <li>Install EyeCov from the VS Code Marketplace.</li>
                            <li>Open a workspace with at least one supported coverage artifact.</li>
                            <li>Open a covered source file and let EyeCov resolve coverage automatically.</li>
                        </ol>
                        <p class="mt-4 text-sm text-[#b0b0b8]">
                            The extension is documented to work in VS Code, Cursor, and Antigravity. Default artifact lookup order is
                            <code class="text-[#f5f5f6]">coverage-html/</code>, <code class="text-[#f5f5f6]">coverage/cobertura-coverage.xml</code>,
                            <code class="text-[#f5f5f6]">coverage/clover.xml</code>, <code class="text-[#f5f5f6]">coverage/lcov.info</code>,
                            <code class="text-[#f5f5f6]">coverage/coverage-final.json</code>, JaCoCo defaults, <code class="text-[#f5f5f6]">coverage.out</code>,
                            and <code class="text-[#f5f5f6]">coverage.json</code>. OpenCover is supported through explicit config.
                        </p>
                    </div>
                    <div class="ec-card rounded-2xl border border-[#22222a] bg-[#101015] p-6" data-reveal="up" data-reveal-delay="3">
                        <h3 class="text-xl font-semibold text-[#f5f5f6] mb-4">Build or install from source</h3>
                        <div class="rounded-xl border border-[#2b2b34] bg-[#0c0c11] p-4 text-sm font-mono text-[#d4d4d4] overflow-x-auto">
<pre><code>npm install
npm run compile
npm run package</code></pre>
                        </div>
                        <p class="mt-4 text-sm text-[#b0b0b8]">
                            Install the generated VSIX through the editor if you need a local build. Use an optional
                            <code class="text-[#f5f5f6]">.eyecov.json</code> file when you want to control format order or artifact paths per workspace.
                        </p>
                    </div>
                </div>
            </section>

            <section id="extension" class="mt-16 scroll-mt-24">
                <p class="text-xs font-semibold tracking-[0.24em] uppercase text-[#7b7b87] mb-4" data-reveal="up">VS Code Extension</p>
                <h2 class="text-3xl font-semibold tracking-tight mb-5" data-reveal="up" data-reveal-delay="1">Coverage where you write code, with controls that stay out of the way.</h2>
                <div class="grid gap-6 lg:grid-cols-[minmax(0,1fr)_24rem]">
                    <div class="ec-card rounded-2xl border border-[#22222a] bg-[#101015] p-6" data-reveal="up" data-reveal-delay="2">
                        <ul class="space-y-4 text-sm leading-relaxed text-[#b0b0b8]">
                            <li><span class="text-[#f5f5f6] font-medium">Line highlighting:</span> show covered, uncovered, and format-provided uncoverable lines directly in the editor.</li>
                            <li><span class="text-[#f5f5f6] font-medium">Gutter and line controls:</span> toggle gutter markers, line backgrounds, covered lines, and uncovered lines independently.</li>
                            <li><span class="text-[#f5f5f6] font-medium">Status bar:</span> read the current file coverage at a glance and toggle coverage from the editor chrome.</li>
                            <li><span class="text-[#f5f5f6] font-medium">Edit-tolerant tracking:</span> keep coverage aligned through simple inserts and deletes while avoiding fake precision on large or overlapping edits.</li>
                            <li><span class="text-[#f5f5f6] font-medium">Staleness handling:</span> hide coverage when the artifact is older than the file so the extension fails safe instead of showing stale data.</li>
                            <li><span class="text-[#f5f5f6] font-medium">Useful commands:</span> show, hide, toggle, re-read coverage, show coverage info, and toggle gutter, line, and edit-tracking behavior.</li>
                            <li><span class="text-[#f5f5f6] font-medium">Format coverage:</span> core support is strongest around PHPUnit HTML, Cobertura, Clover, and LCOV, with newer support now available for Istanbul/NYC JSON, JaCoCo XML, Go coverprofile, coverage.py JSON, and OpenCover XML.</li>
                        </ul>
                    </div>
                    <div class="ec-card rounded-2xl border border-[#22222a] bg-[#101015] p-6" data-reveal="up" data-reveal-delay="3">
                        <h3 class="text-lg font-semibold text-[#f5f5f6] mb-4">Relevant settings</h3>
                        <ul class="space-y-3 text-sm text-[#b0b0b8]">
                            <li><code class="text-[#f5f5f6]">eyecov.showCoverageOnOpen</code></li>
                            <li><code class="text-[#f5f5f6]">eyecov.showCovered</code></li>
                            <li><code class="text-[#f5f5f6]">eyecov.showUncovered</code></li>
                            <li><code class="text-[#f5f5f6]">eyecov.showLineCoverage</code></li>
                            <li><code class="text-[#f5f5f6]">eyecov.showGutterCoverage</code></li>
                            <li><code class="text-[#f5f5f6]">eyecov.trackCoverageThroughEdits</code></li>
                            <li><code class="text-[#f5f5f6]">eyecov.debug</code></li>
                        </ul>
                    </div>
                </div>

                <div class="mt-8 grid gap-6 lg:grid-cols-2">
                    @foreach($placeholders['extension'] as $placeholder)
                        <article class="ec-card rounded-2xl border border-dashed border-[#3a3a44] bg-[#0f0f14] p-6" data-reveal="up">
                            <p class="text-xs font-semibold tracking-[0.24em] uppercase text-[#7b7b87] mb-3">Screenshot Placeholder</p>
                            <h3 class="text-xl font-semibold text-[#f5f5f6]">{{ $placeholder['title'] }}</h3>
                            <p class="mt-2 text-sm text-[#8f8f99]">File: <code class="text-[#f5f5f6]">public/docs/{{ $placeholder['filename'] }}</code></p>
                            <p class="mt-4 text-sm leading-relaxed text-[#b0b0b8]">{{ $placeholder['purpose'] }}</p>
                            <ul class="mt-4 space-y-2 text-sm text-[#b0b0b8]">
                                @foreach($placeholder['requirements'] as $requirement)
                                    <li>- {{ $requirement }}</li>
                                @endforeach
                            </ul>
                        </article>
                    @endforeach
                </div>
            </section>

            <section id="mcp" class="mt-16 scroll-mt-24">
                <p class="text-xs font-semibold tracking-[0.24em] uppercase text-[#7b7b87] mb-4" data-reveal="up">MCP and AI Agents</p>
                <h2 class="text-3xl font-semibold tracking-tight mb-5" data-reveal="up" data-reveal-delay="1">The same coverage runtime model is available to your editor and your agents.</h2>
                <div class="grid gap-6 lg:grid-cols-2">
                    <div class="ec-card rounded-2xl border border-[#22222a] bg-[#101015] p-6" data-reveal="up" data-reveal-delay="2">
                        <p class="text-sm leading-relaxed text-[#b0b0b8] mb-4">
                            EyeCov ships a built-in MCP server that reuses the same resolver, adapters, and coverage model as the editor.
                            There is no separate agent-only pipeline to keep in sync.
                        </p>
                        <ul class="space-y-3 text-sm leading-relaxed text-[#b0b0b8]">
                            <li><code class="text-[#f5f5f6]">coverage_file</code> resolves one file and returns line coverage and uncovered lines.</li>
                            <li><code class="text-[#f5f5f6]">coverage_line_tests</code> returns covering tests for a line or range when the source format supports it.</li>
                            <li><code class="text-[#f5f5f6]">coverage_path</code> aggregates coverage for one or more folders or prefixes.</li>
                            <li><code class="text-[#f5f5f6]">coverage_project</code> returns project-wide totals and worst-file summaries.</li>
                            <li><code class="text-[#f5f5f6]">coverage_test_priority</code> ranks where new tests should have the highest coverage impact.</li>
                        </ul>
                    </div>
                    <div class="ec-card rounded-2xl border border-[#22222a] bg-[#101015] p-6" data-reveal="up" data-reveal-delay="3">
                        <h3 class="text-lg font-semibold text-[#f5f5f6] mb-4">Manual server setup</h3>
                        <div class="rounded-xl border border-[#2b2b34] bg-[#0c0c11] p-4 text-sm font-mono text-[#d4d4d4] overflow-x-auto">
<pre><code>{
  "mcpServers": {
    "eyecov": {
      "command": "node",
      "args": ["/path/to/extension/out/mcp/server.js"]
    }
  }
}</code></pre>
                        </div>
                        <p class="mt-4 text-sm text-[#b0b0b8]">
                            When the extension hosts the server, workspace roots are supplied automatically. Standalone runs can add
                            <code class="text-[#f5f5f6]">EYECOV_WORKSPACE_ROOTS</code> explicitly if needed.
                        </p>
                    </div>
                </div>

                <div class="mt-8 grid gap-6 lg:grid-cols-2">
                    @foreach($placeholders['mcp'] as $placeholder)
                        <article class="ec-card rounded-2xl border border-dashed border-[#3a3a44] bg-[#0f0f14] p-6" data-reveal="up">
                            <p class="text-xs font-semibold tracking-[0.24em] uppercase text-[#7b7b87] mb-3">Capture Placeholder</p>
                            <h3 class="text-xl font-semibold text-[#f5f5f6]">{{ $placeholder['title'] }}</h3>
                            <p class="mt-2 text-sm text-[#8f8f99]">File: <code class="text-[#f5f5f6]">public/docs/{{ $placeholder['filename'] }}</code></p>
                            <p class="mt-4 text-sm leading-relaxed text-[#b0b0b8]">{{ $placeholder['purpose'] }}</p>
                            <ul class="mt-4 space-y-2 text-sm text-[#b0b0b8]">
                                @foreach($placeholder['requirements'] as $requirement)
                                    <li>- {{ $requirement }}</li>
                                @endforeach
                            </ul>
                        </article>
                    @endforeach
                </div>
            </section>

            <section id="report-cli" class="mt-16 scroll-mt-24">
                <p class="text-xs font-semibold tracking-[0.24em] uppercase text-[#7b7b87] mb-4" data-reveal="up">Coverage Report CLI</p>
                <h2 class="text-3xl font-semibold tracking-tight mb-5" data-reveal="up" data-reveal-delay="1">Validate real coverage artifacts outside the editor.</h2>
                <div class="grid gap-6 lg:grid-cols-2">
                    <div class="ec-card rounded-2xl border border-[#22222a] bg-[#101015] p-6" data-reveal="up" data-reveal-delay="2">
                        <p class="text-sm leading-relaxed text-[#b0b0b8] mb-4">
                            The report CLI is a dev-only tool that runs the same parser stack against one artifact, then reports summary totals,
                            samples, and optional verification results.
                        </p>
                        <div class="rounded-xl border border-[#2b2b34] bg-[#0c0c11] p-4 text-sm font-mono text-[#d4d4d4] overflow-x-auto">
<pre><code>npm run compile
npm run report -- --path coverage/lcov.info
npm run report:json -- --path coverage/lcov.info
npm run report:verify -- --path coverage/lcov.info</code></pre>
                        </div>
                    </div>
                    <div class="ec-card rounded-2xl border border-[#22222a] bg-[#101015] p-6" data-reveal="up" data-reveal-delay="3">
                        <h3 class="text-lg font-semibold text-[#f5f5f6] mb-4">Useful flags</h3>
                        <ul class="space-y-3 text-sm text-[#b0b0b8]">
                            <li><code class="text-[#f5f5f6]">--path</code> points at one artifact file or one PHPUnit HTML directory.</li>
                            <li><code class="text-[#f5f5f6]">--format</code> overrides auto-detection.</li>
                            <li><code class="text-[#f5f5f6]">--workspace-root</code> controls path resolution.</li>
                            <li><code class="text-[#f5f5f6]">--json</code> emits structured output.</li>
                            <li><code class="text-[#f5f5f6]">--verify-report-totals</code> compares EyeCov totals with report-declared totals where supported.</li>
                            <li><code class="text-[#f5f5f6]">--sample-files</code>, <code class="text-[#f5f5f6]">--theme</code>, and <code class="text-[#f5f5f6]">--no-color</code> control output detail and presentation.</li>
                        </ul>
                    </div>
                </div>

                <div class="mt-8 grid gap-6 lg:grid-cols-2">
                    @foreach($placeholders['report'] as $placeholder)
                        <article class="ec-card rounded-2xl border border-dashed border-[#3a3a44] bg-[#0f0f14] p-6" data-reveal="up">
                            <p class="text-xs font-semibold tracking-[0.24em] uppercase text-[#7b7b87] mb-3">Output Placeholder</p>
                            <h3 class="text-xl font-semibold text-[#f5f5f6]">{{ $placeholder['title'] }}</h3>
                            <p class="mt-2 text-sm text-[#8f8f99]">File: <code class="text-[#f5f5f6]">public/docs/{{ $placeholder['filename'] }}</code></p>
                            <p class="mt-4 text-sm leading-relaxed text-[#b0b0b8]">{{ $placeholder['purpose'] }}</p>
                            <ul class="mt-4 space-y-2 text-sm text-[#b0b0b8]">
                                @foreach($placeholder['requirements'] as $requirement)
                                    <li>- {{ $requirement }}</li>
                                @endforeach
                            </ul>
                        </article>
                    @endforeach
                </div>
            </section>

            <section id="contributing" class="mt-16 scroll-mt-24">
                <p class="text-xs font-semibold tracking-[0.24em] uppercase text-[#7b7b87] mb-4" data-reveal="up">Contributing</p>
                <h2 class="text-3xl font-semibold tracking-tight mb-5" data-reveal="up" data-reveal-delay="1">Contribute like a maintainer, not a drive-by patch bot.</h2>
                <div class="grid gap-6 lg:grid-cols-2">
                    <div class="ec-card rounded-2xl border border-[#22222a] bg-[#101015] p-6" data-reveal="up" data-reveal-delay="2">
                        <h3 class="text-lg font-semibold text-[#f5f5f6] mb-4">Setup and checks</h3>
                        <div class="rounded-xl border border-[#2b2b34] bg-[#0c0c11] p-4 text-sm font-mono text-[#d4d4d4] overflow-x-auto">
<pre><code>git clone &lt;your fork or repo&gt;
cd eyecov-vscode
npm install
npm run compile
npm test</code></pre>
                        </div>
                        <p class="mt-4 text-sm text-[#b0b0b8]">
                            Press <code class="text-[#f5f5f6]">F5</code> in VS Code to launch the Extension Development Host.
                            Before pushing, make sure compile and tests pass locally.
                        </p>
                    </div>
                    <div class="ec-card rounded-2xl border border-[#22222a] bg-[#101015] p-6" data-reveal="up" data-reveal-delay="3">
                        <h3 class="text-lg font-semibold text-[#f5f5f6] mb-4">Naming and workflow</h3>
                        <ul class="space-y-3 text-sm leading-relaxed text-[#b0b0b8]">
                            <li>Use <code class="text-[#f5f5f6]">eyecov</code> for commands, config keys, paths, identifiers, package names, and technical surfaces.</li>
                            <li>Use <span class="text-[#f5f5f6] font-medium">EyeCov</span> for product prose, docs copy, and user-facing labels.</li>
                            <li>Create a branch from <code class="text-[#f5f5f6]">main</code>, push it, and open a pull request against <code class="text-[#f5f5f6]">main</code>.</li>
                            <li>Use the repo docs for deeper architecture and testing detail once you are inside the codebase.</li>
                        </ul>
                    </div>
                </div>
            </section>
        </div>
    </main>
</x-layouts.app>
