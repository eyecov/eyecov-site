<x-layouts.app
    title="EyeCov — Coverage in your editor. Coverage for your AI tools."
    description="EyeCov shows coverage in VS Code-compatible editors and exposes the same data to MCP-aware AI tools."
>
    <header class="fixed top-0 inset-x-0 z-20 border-b border-white/5 backdrop-blur bg-canvas/80">
        <div class="w-full px-6 md:px-8 py-4">
            <div class="max-w-6xl mx-auto flex items-center justify-between gap-6">
            <a href="/" class="flex items-center gap-3">
                <img src="/eyecov-logo.png" alt="EyeCov" class="h-6 w-auto mix-blend-screen">
            </a>
            <nav class="hidden md:flex items-center gap-6 text-sm text-fg-soft">
                <a href="#vscode" class="hover:text-fg transition-colors">VS Code</a>
                <a href="#agents" class="hover:text-fg transition-colors">MCP</a>
                <a href="/docs" class="hover:text-fg transition-colors">Docs</a>
                <a href="https://marketplace.visualstudio.com/items?itemName=eyecov.eyecov-vscode" class="hover:text-fg transition-colors">Marketplace</a>
                <a href="https://open-vsx.org/extension/eyecov/eyecov-vscode" class="hover:text-fg transition-colors">Open VSX</a>
                <a href="https://github.com/eyecov/eyecov-vscode" class="hover:text-fg transition-colors">GitHub</a>
            </nav>
            </div>
        </div>
    </header>

    <section class="relative min-h-screen flex items-center pt-24 px-6 md:px-8">
        <div class="hero-bg"></div>
        <div class="max-w-6xl mx-auto w-full grid lg:grid-cols-2 gap-16 items-center">
            <div class="lg:pr-6">
                <div class="mb-8 space-y-4">
                    <img src="/eyecov-logo.png" alt="EyeCov" class="h-14 w-auto mix-blend-screen" data-reveal="up">
                    <h1 class="text-4xl md:text-5xl font-medium tracking-tight text-fg leading-[1.05] max-w-2xl" data-reveal="up">
                        Stop guessing what is tested.
                    </h1>
                </div>
                <p class="text-xl text-fg-muted leading-relaxed mb-6 max-w-xl" data-reveal="up" data-reveal-delay="1">
                    EyeCov puts coverage straight into your editor, using the reports you already generate,
                    so you can see what is covered, what is not, and what might bite back.
                </p>
                <div class="flex flex-wrap gap-3" data-reveal="up" data-reveal-delay="2">
                    <a href="https://marketplace.visualstudio.com/items?itemName=eyecov.eyecov-vscode"
                       class="ec-button px-5 py-2.5 rounded-lg bg-white text-canvas font-medium hover:bg-fg text-sm">
                        Install from Marketplace
                    </a>
                    <a href="https://open-vsx.org/extension/eyecov/eyecov-vscode"
                       class="ec-button px-5 py-2.5 rounded-lg border border-border-default hover:border-fg-dim text-sm">
                        Install from Open VSX
                    </a>
                    <a href="/docs"
                       class="ec-button px-5 py-2.5 rounded-lg border border-border-default hover:border-fg-dim text-sm">
                        Read the Docs
                    </a>
                </div>
                <div class="mt-8 grid gap-3 text-sm text-fg-soft max-w-xl" data-reveal="up" data-reveal-delay="4">
                    <p>Field-tested support includes PHPUnit HTML, Cobertura XML, Clover XML, and LCOV.</p>
                    <p>Newer adapters include Istanbul/NYC JSON, JaCoCo XML, Go coverprofile, coverage.py JSON, Ruby SimpleCov JSON, and OpenCover XML.</p>
                </div>
            </div>

            <div class="ec-card rounded-xl overflow-hidden border border-border-default shadow-2xl text-sm font-mono lg:ml-4" data-reveal="right">
                <div class="flex items-center gap-1.5 px-4 py-3 bg-surface-chrome border-b border-border-default">
                    <div class="w-3 h-3 rounded-full bg-window-red"></div>
                    <div class="w-3 h-3 rounded-full bg-window-yellow"></div>
                    <div class="w-3 h-3 rounded-full bg-window-green"></div>
                    <span class="ml-3 text-xs text-fg-dim">AuthService.ts</span>
                    <span class="ml-auto text-xs text-fg-dim">49.0% (25/51)</span>
                </div>
                <div class="bg-surface py-3">
                    @php
                    $heroLines = [
                        [31, 'covered', 'export async function <span class="text-syntax-blue">login</span>(email: string, password: string) {'],
                        [32, 'covered', '  <span class="text-syntax-purple">const</span> user = <span class="text-syntax-purple">await</span> users.<span class="text-syntax-blue">findByEmail</span>(email)'],
                        [33, 'covered', '  <span class="text-syntax-purple">if</span> (!user) <span class="text-syntax-purple">throw new</span> AuthError(<span class="text-syntax-string">"User not found"</span>)'],
                        [34, 'none', ''],
                        [35, 'covered', '  <span class="text-syntax-purple">const</span> valid = <span class="text-syntax-purple">await</span> passwords.<span class="text-syntax-blue">verify</span>(password, user.hash)'],
                        [36, 'uncovered', '  <span class="text-syntax-purple">if</span> (!valid) <span class="text-syntax-purple">throw new</span> AuthError(<span class="text-syntax-string">"Invalid password"</span>)'],
                        [37, 'covered', '  <span class="text-syntax-purple">return</span> tokens.<span class="text-syntax-blue">issueFor</span>(user)'],
                        [38, 'covered', '}'],
                        [39, 'none', ''],
                        [40, 'uncoverable', '<span class="text-syntax-comment">// bootstrap wiring omitted</span>'],
                    ];
                    @endphp
                    @foreach($heroLines as [$num, $type, $code])
                        @php
                            $bg = match ($type) {
                                'covered' => 'bg-covered/10',
                                'uncovered' => 'bg-uncovered/10',
                                'uncoverable' => 'bg-uncoverable/10',
                                default => '',
                            };
                            $bar = match ($type) {
                                'covered' => 'bg-covered',
                                'uncovered' => 'bg-uncovered',
                                'uncoverable' => 'bg-uncoverable',
                                default => 'bg-transparent',
                            };
                        @endphp
                        <div class="flex items-stretch {{ $bg }}">
                            <div class="w-1 flex-shrink-0 {{ $bar }}"></div>
                            <span class="w-10 text-right pr-4 text-border-muted select-none flex-shrink-0">{{ $num }}</span>
                            <span class="text-code pr-6 whitespace-pre">{!! $code !!}</span>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section id="vscode" class="py-32 px-6 md:px-8">
        <div class="max-w-6xl mx-auto grid lg:grid-cols-2 gap-16 items-center">
            <div>
                <p class="text-xs font-semibold tracking-widest text-fg-dim uppercase mb-4" data-reveal="up">VS Code Extension</p>
                <h2 class="text-3xl font-semibold tracking-tight mb-4" data-reveal="up" data-reveal-delay="1">See exactly what your tests miss.</h2>
                <p class="text-fg-soft leading-relaxed mb-6" data-reveal="up" data-reveal-delay="2">
                    Covered lines, uncovered lines, file totals, gutter markers. EyeCov shows it all without leaving your editor.
                    And when the data is stale, EyeCov hides it instead of lying with confidence.
                </p>
                <ul class="space-y-2 text-sm text-fg-soft" data-reveal="up" data-reveal-delay="3">
                    <li class="flex items-center gap-2"><span class="text-green-400">✓</span> Line highlighting for covered, uncovered, and format-provided uncoverable lines</li>
                    <li class="flex items-center gap-2"><span class="text-fg">✓</span> Gutter markers, status bar coverage, and quick toggle commands</li>
                    <li class="flex items-center gap-2"><span class="text-fg">✓</span> Edit-tolerant tracking for simple inserts and deletes</li>
                    <li class="flex items-center gap-2"><span class="text-fg">✓</span> Broad format support, with newer adapters for Istanbul/NYC JSON, JaCoCo XML, Go coverprofile, coverage.py JSON, Ruby SimpleCov JSON, and OpenCover XML</li>
                </ul>
            </div>

            <div class="ec-card rounded-xl overflow-hidden border border-border-default shadow-2xl text-sm font-mono" data-reveal="left">
                <div class="flex items-center gap-1.5 px-4 py-3 bg-surface-chrome border-b border-border-default">
                    <div class="w-3 h-3 rounded-full bg-window-red"></div>
                    <div class="w-3 h-3 rounded-full bg-window-yellow"></div>
                    <div class="w-3 h-3 rounded-full bg-window-green"></div>
                    <span class="ml-3 text-xs text-fg-dim">BillingService.php</span>
                    <span class="ml-auto text-xs text-fg-dim">Coverage: 61%</span>
                </div>
                <div class="bg-surface py-3">
                    @php
                    $editorLines = [
                        [71, 'covered', '$invoice = $this->repository-><span class="text-syntax-blue">findPending</span>($accountId);'],
                        [72, 'covered', '<span class="text-syntax-purple">if</span> (! $invoice) <span class="text-syntax-purple">return</span> <span class="text-syntax-blue">null</span>;'],
                        [73, 'none', ''],
                        [74, 'covered', '$result = $this->gateway-><span class="text-syntax-blue">charge</span>($invoice);'],
                        [75, 'uncovered', '<span class="text-syntax-purple">if</span> (! $result->successful()) {'],
                        [76, 'uncovered', '    <span class="text-syntax-purple">throw new</span> ChargeFailed($result->message());'],
                        [77, 'uncovered', '}'],
                        [78, 'covered', '$this->repository-><span class="text-syntax-blue">markPaid</span>($invoice->id);'],
                    ];
                    @endphp
                    @foreach($editorLines as [$num, $type, $code])
                        @php
                            $bg = $type === 'covered' ? 'bg-covered/10' : ($type === 'uncovered' ? 'bg-uncovered/10' : '');
                            $bar = $type === 'covered' ? 'bg-covered' : ($type === 'uncovered' ? 'bg-uncovered' : 'bg-transparent');
                        @endphp
                        <div class="flex items-stretch {{ $bg }}">
                            <div class="w-1 flex-shrink-0 {{ $bar }}"></div>
                            <span class="w-10 text-right pr-4 text-border-muted select-none flex-shrink-0">{{ $num }}</span>
                            <span class="text-code pr-6 whitespace-pre">{!! $code !!}</span>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section id="agents" class="py-32 px-6 md:px-8 border-t border-border-subtle">
        <div class="max-w-6xl mx-auto grid lg:grid-cols-2 gap-16 items-center">
            <div class="ec-card rounded-xl overflow-hidden border border-border-default shadow-2xl text-sm font-mono" data-reveal="left">
                <div class="flex items-center gap-1.5 px-4 py-3 bg-surface-chrome border-b border-border-default">
                    <div class="w-2 h-2 rounded-full bg-green-400 animate-pulse"></div>
                    <span class="ml-2 text-xs text-fg-dim">MCP · eyecov</span>
                </div>
                <div class="bg-surface p-5 space-y-4">
                    <div>
                        <p class="text-fg-dim text-xs mb-1">tool call</p>
                        <p class="text-syntax-blue">coverage_test_priority<span class="text-fg">({</span></p>
                        <p class="text-fg pl-4"><span class="text-syntax-property">limit</span>: <span class="text-syntax-number">3</span></p>
                        <p class="text-fg">})</p>
                    </div>
                    <div class="border-t border-border-default pt-4">
                        <p class="text-fg-dim text-xs mb-1">result</p>
                        <p class="text-fg">{</p>
                        <p class="text-fg pl-4"><span class="text-syntax-property">scope</span>: <span class="text-syntax-string">"project"</span>,</p>
                        <p class="text-fg pl-4"><span class="text-syntax-property">cacheState</span>: <span class="text-syntax-string">"full"</span>,</p>
                        <p class="text-fg pl-4"><span class="text-syntax-property">items</span>: [</p>
                        <p class="text-fg pl-8">{ <span class="text-syntax-property">filePath</span>: <span class="text-syntax-string">"app/Domain/Automation/Foo.php"</span>, <span class="text-syntax-property">priorityScore</span>: <span class="text-syntax-number">92</span> },</p>
                        <p class="text-fg pl-8">{ <span class="text-syntax-property">filePath</span>: <span class="text-syntax-string">"app/Domain/Workspace/Bar.php"</span>, <span class="text-syntax-property">priorityScore</span>: <span class="text-syntax-number">87</span> },</p>
                        <p class="text-fg pl-8">{ <span class="text-syntax-property">filePath</span>: <span class="text-syntax-string">"app/Support/Baz.php"</span>, <span class="text-syntax-property">priorityScore</span>: <span class="text-syntax-number">80</span> }</p>
                        <p class="text-fg pl-4">]</p>
                        <p class="text-fg">}</p>
                    </div>
                </div>
            </div>

            <div>
                <p class="text-xs font-semibold tracking-widest text-fg-dim uppercase mb-4" data-reveal="up">MCP and AI Agents</p>
                <h2 class="text-3xl font-semibold tracking-tight mb-4" data-reveal="up" data-reveal-delay="1">Give agents real coverage, not vibes.</h2>
                <p class="text-fg-soft leading-relaxed mb-4" data-reveal="up" data-reveal-delay="2">
                    EyeCov ships with a built-in MCP server, backed by the exact same coverage data as the extension.
                    Your agent can inspect a file, find which tests cover a line, and target the gaps that matter.
                </p>
                <p class="text-sm font-medium tracking-tight text-fg mb-6" data-reveal="up" data-reveal-delay="3">
                    One source. Your editor and your agent see the same thing.
                </p>
                <ul class="space-y-2 text-sm text-fg-soft" data-reveal="up" data-reveal-delay="4">
                    <li class="flex items-center gap-2"><span class="text-fg">✓</span> Built-in MCP server with <code>coverage_file</code> and <code>coverage_line_tests</code></li>
                    <li class="flex items-center gap-2"><span class="text-fg">✓</span> Aggregate views via <code>coverage_path</code> and <code>coverage_project</code></li>
                    <li class="flex items-center gap-2"><span class="text-fg">✓</span> Test targeting via <code>coverage_test_priority</code></li>
                    <li class="flex items-center gap-2"><span class="text-fg">✓</span> Detailed docs and capture guides at <a href="/docs" class="underline decoration-fg-dim underline-offset-4 hover:text-fg">/docs</a></li>
                </ul>
            </div>
        </div>
    </section>

    <footer class="border-t border-border-subtle py-10 px-6 md:px-8">
        <div class="max-w-6xl mx-auto flex flex-col md:flex-row items-start md:items-center justify-between gap-6 text-sm text-fg-dim">
            <div class="flex items-center gap-2">
                <img src="/eyecov-logo.png" alt="" class="h-5 w-auto opacity-50 mix-blend-screen"> |
                <span>MIT License</span>
            </div>
            <div class="flex flex-wrap gap-6">
                <a href="/docs" class="hover:text-fg-soft transition-colors">Docs</a>
                <a href="https://github.com/eyecov/eyecov-vscode" class="hover:text-fg-soft transition-colors">GitHub</a>
                <a href="https://marketplace.visualstudio.com/items?itemName=eyecov.eyecov-vscode" class="hover:text-fg-soft transition-colors">VS Code Marketplace</a>
                <a href="https://open-vsx.org/extension/eyecov/eyecov-vscode" class="hover:text-fg-soft transition-colors">Open VSX</a>
            </div>
        </div>
    </footer>
</x-layouts.app>
