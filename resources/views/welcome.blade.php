<x-layouts.app title="EyeCov — Coverage in your editor. Coverage for your AI tools.">
    <header class="fixed top-0 inset-x-0 z-20 border-b border-white/5 backdrop-blur bg-[#0b0b0e]/80">
        <div class="w-full px-6 md:px-8 py-4">
            <div class="max-w-6xl mx-auto flex items-center justify-between gap-6">
            <a href="/" class="flex items-center gap-3">
                <img src="/eyecov-logo.png" alt="EyeCov" class="h-6 w-auto mix-blend-screen">
            </a>
            <nav class="flex items-center gap-6 text-sm text-[#a0a0a8]">
                <a href="#vscode" class="hover:text-[#e4e4e6] transition-colors">VS Code</a>
                <a href="#agents" class="hover:text-[#e4e4e6] transition-colors">MCP</a>
                <a href="/docs" class="hover:text-[#e4e4e6] transition-colors">Docs</a>
                <a href="https://github.com/eyecov/eyecov-vscode" class="hover:text-[#e4e4e6] transition-colors">GitHub</a>
            </nav>
            </div>
        </div>
    </header>

    <section class="min-h-screen flex items-center pt-24 px-6 md:px-8">
        <div class="max-w-6xl mx-auto w-full grid lg:grid-cols-2 gap-16 items-center">
            <div class="lg:pr-6">
                <div class="mb-8 space-y-4">
                    <img src="/eyecov-logo.png" alt="EyeCov" class="h-14 w-auto mix-blend-screen">
                    <h1 class="text-4xl md:text-5xl font-medium tracking-tight text-[#e4e4e6] leading-[1.05] max-w-2xl">
                        Coverage in your editor.
                    </h1>
                </div>
                <p class="text-xl text-[#b0b0b8] leading-relaxed mb-6 max-w-xl">
                    EyeCov turns the coverage artifacts you already generate into one shared runtime model for the editor,
                    developer tooling, and MCP-aware agents.
                </p>
                <p class="text-base font-medium tracking-tight text-[#e4e4e6] mb-8">
                    The same coverage picture powers your AI tools.
                </p>
                <div class="flex flex-wrap gap-3">
                    <a href="https://marketplace.visualstudio.com/items?itemName=eyecov.eyecov-vscode"
                       class="px-5 py-2.5 rounded-lg bg-white text-[#0b0b0e] font-medium hover:bg-[#e4e4e6] transition-colors text-sm">
                        Get the Extension
                    </a>
                    <a href="/docs"
                       class="px-5 py-2.5 rounded-lg border border-[#2a2a30] hover:border-[#4a4a54] text-sm transition-colors">
                        Read the Docs
                    </a>
                </div>
                <div class="mt-8 grid gap-3 text-sm text-[#a0a0a8] max-w-xl">
                    <p>Supports PHPUnit HTML, Cobertura XML, Clover XML, and LCOV.</p>
                    <p>More formats are on the roadmap. See the docs for current support and what is in development.</p>
                </div>
            </div>

            <div class="rounded-xl overflow-hidden border border-[#2a2a30] shadow-2xl text-sm font-mono lg:ml-4">
                <div class="flex items-center gap-1.5 px-4 py-3 bg-[#111116] border-b border-[#2a2a30]">
                    <div class="w-3 h-3 rounded-full bg-[#ff5f57]"></div>
                    <div class="w-3 h-3 rounded-full bg-[#febc2e]"></div>
                    <div class="w-3 h-3 rounded-full bg-[#28c840]"></div>
                    <span class="ml-3 text-xs text-[#4a4a54]">AuthService.ts</span>
                    <span class="ml-auto text-xs text-[#4a4a54]">49.0% (25/51)</span>
                </div>
                <div class="bg-[#0d0d12] py-3">
                    @php
                    $heroLines = [
                        [31, 'covered', 'export async function <span class="text-[#7aa2c8]">login</span>(email: string, password: string) {'],
                        [32, 'covered', '  <span class="text-[#c586c0]">const</span> user = <span class="text-[#c586c0]">await</span> users.<span class="text-[#7aa2c8]">findByEmail</span>(email)'],
                        [33, 'covered', '  <span class="text-[#c586c0]">if</span> (!user) <span class="text-[#c586c0]">throw new</span> AuthError(<span class="text-[#ce9178]">"User not found"</span>)'],
                        [34, 'none', ''],
                        [35, 'covered', '  <span class="text-[#c586c0]">const</span> valid = <span class="text-[#c586c0]">await</span> passwords.<span class="text-[#7aa2c8]">verify</span>(password, user.hash)'],
                        [36, 'uncovered', '  <span class="text-[#c586c0]">if</span> (!valid) <span class="text-[#c586c0]">throw new</span> AuthError(<span class="text-[#ce9178]">"Invalid password"</span>)'],
                        [37, 'covered', '  <span class="text-[#c586c0]">return</span> tokens.<span class="text-[#7aa2c8]">issueFor</span>(user)'],
                        [38, 'covered', '}'],
                        [39, 'none', ''],
                        [40, 'uncoverable', '<span class="text-[#6a9955]">// bootstrap wiring omitted</span>'],
                    ];
                    @endphp
                    @foreach($heroLines as [$num, $type, $code])
                        @php
                            $bg = match ($type) {
                                'covered' => 'bg-green-500/10',
                                'uncovered' => 'bg-red-500/10',
                                'uncoverable' => 'bg-yellow-500/10',
                                default => '',
                            };
                            $bar = match ($type) {
                                'covered' => 'bg-green-500',
                                'uncovered' => 'bg-red-500',
                                'uncoverable' => 'bg-yellow-400',
                                default => 'bg-transparent',
                            };
                        @endphp
                        <div class="flex items-stretch {{ $bg }}">
                            <div class="w-1 flex-shrink-0 {{ $bar }}"></div>
                            <span class="w-10 text-right pr-4 text-[#3a3a44] select-none flex-shrink-0">{{ $num }}</span>
                            <span class="text-[#d4d4d4] pr-6 whitespace-pre">{!! $code !!}</span>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section id="vscode" class="py-32 px-6 md:px-8">
        <div class="max-w-6xl mx-auto grid lg:grid-cols-2 gap-16 items-center">
            <div>
                <p class="text-xs font-semibold tracking-widest text-[#4a4a54] uppercase mb-4">VS Code Extension</p>
                <h2 class="text-3xl font-semibold tracking-tight mb-4">See coverage in the file you are already working in.</h2>
                <p class="text-[#a0a0a8] leading-relaxed mb-6">
                    EyeCov reads supported coverage artifacts, resolves the first format with data for the open file,
                    and marks coverage directly in the editor. It stays useful without pretending stale data is fresh.
                </p>
                <ul class="space-y-2 text-sm text-[#a0a0a8]">
                    <li class="flex items-center gap-2"><span class="text-green-400">✓</span> Line highlighting for covered, uncovered, and format-provided uncoverable lines</li>
                    <li class="flex items-center gap-2"><span class="text-[#e4e4e6]">✓</span> Gutter markers, status bar coverage, and quick toggle commands</li>
                    <li class="flex items-center gap-2"><span class="text-[#e4e4e6]">✓</span> Edit-tolerant tracking for simple inserts and deletes</li>
                    <li class="flex items-center gap-2"><span class="text-[#e4e4e6]">✓</span> Support for PHPUnit HTML, Cobertura XML, Clover XML, and LCOV</li>
                </ul>
            </div>

            <div class="rounded-xl overflow-hidden border border-[#2a2a30] shadow-2xl text-sm font-mono">
                <div class="flex items-center gap-1.5 px-4 py-3 bg-[#111116] border-b border-[#2a2a30]">
                    <div class="w-3 h-3 rounded-full bg-[#ff5f57]"></div>
                    <div class="w-3 h-3 rounded-full bg-[#febc2e]"></div>
                    <div class="w-3 h-3 rounded-full bg-[#28c840]"></div>
                    <span class="ml-3 text-xs text-[#4a4a54]">BillingService.php</span>
                    <span class="ml-auto text-xs text-[#4a4a54]">Coverage: 61%</span>
                </div>
                <div class="bg-[#0d0d12] py-3">
                    @php
                    $editorLines = [
                        [71, 'covered', '$invoice = $this->repository-><span class="text-[#7aa2c8]">findPending</span>($accountId);'],
                        [72, 'covered', '<span class="text-[#c586c0]">if</span> (! $invoice) <span class="text-[#c586c0]">return</span> <span class="text-[#569cd6]">null</span>;'],
                        [73, 'none', ''],
                        [74, 'covered', '$result = $this->gateway-><span class="text-[#7aa2c8]">charge</span>($invoice);'],
                        [75, 'uncovered', '<span class="text-[#c586c0]">if</span> (! $result->successful()) {'],
                        [76, 'uncovered', '    <span class="text-[#c586c0]">throw new</span> ChargeFailed($result->message());'],
                        [77, 'uncovered', '}'],
                        [78, 'covered', '$this->repository-><span class="text-[#7aa2c8]">markPaid</span>($invoice->id);'],
                    ];
                    @endphp
                    @foreach($editorLines as [$num, $type, $code])
                        @php
                            $bg = $type === 'covered' ? 'bg-green-500/10' : ($type === 'uncovered' ? 'bg-red-500/10' : '');
                            $bar = $type === 'covered' ? 'bg-green-500' : ($type === 'uncovered' ? 'bg-red-500' : 'bg-transparent');
                        @endphp
                        <div class="flex items-stretch {{ $bg }}">
                            <div class="w-1 flex-shrink-0 {{ $bar }}"></div>
                            <span class="w-10 text-right pr-4 text-[#3a3a44] select-none flex-shrink-0">{{ $num }}</span>
                            <span class="text-[#d4d4d4] pr-6 whitespace-pre">{!! $code !!}</span>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section id="agents" class="py-32 px-6 md:px-8 border-t border-[#1a1a20]">
        <div class="max-w-6xl mx-auto grid lg:grid-cols-2 gap-16 items-center">
            <div class="rounded-xl overflow-hidden border border-[#2a2a30] shadow-2xl text-sm font-mono">
                <div class="flex items-center gap-1.5 px-4 py-3 bg-[#111116] border-b border-[#2a2a30]">
                    <div class="w-2 h-2 rounded-full bg-green-400 animate-pulse"></div>
                    <span class="ml-2 text-xs text-[#4a4a54]">MCP · eyecov</span>
                </div>
                <div class="bg-[#0d0d12] p-5 space-y-4">
                    <div>
                        <p class="text-[#4a4a54] text-xs mb-1">tool call</p>
                        <p class="text-[#7aa2c8]">coverage_test_priority<span class="text-[#e4e4e6]">({</span></p>
                        <p class="text-[#e4e4e6] pl-4"><span class="text-[#9cdcfe]">limit</span>: <span class="text-[#b5cea8]">3</span></p>
                        <p class="text-[#e4e4e6]">})</p>
                    </div>
                    <div class="border-t border-[#2a2a30] pt-4">
                        <p class="text-[#4a4a54] text-xs mb-1">result</p>
                        <p class="text-[#e4e4e6]">{</p>
                        <p class="text-[#e4e4e6] pl-4"><span class="text-[#9cdcfe]">scope</span>: <span class="text-[#ce9178]">"project"</span>,</p>
                        <p class="text-[#e4e4e6] pl-4"><span class="text-[#9cdcfe]">cacheState</span>: <span class="text-[#ce9178]">"full"</span>,</p>
                        <p class="text-[#e4e4e6] pl-4"><span class="text-[#9cdcfe]">items</span>: [</p>
                        <p class="text-[#e4e4e6] pl-8">{ <span class="text-[#9cdcfe]">filePath</span>: <span class="text-[#ce9178]">"app/Domain/Automation/Foo.php"</span>, <span class="text-[#9cdcfe]">priorityScore</span>: <span class="text-[#b5cea8]">92</span> },</p>
                        <p class="text-[#e4e4e6] pl-8">{ <span class="text-[#9cdcfe]">filePath</span>: <span class="text-[#ce9178]">"app/Domain/Workspace/Bar.php"</span>, <span class="text-[#9cdcfe]">priorityScore</span>: <span class="text-[#b5cea8]">87</span> },</p>
                        <p class="text-[#e4e4e6] pl-8">{ <span class="text-[#9cdcfe]">filePath</span>: <span class="text-[#ce9178]">"app/Support/Baz.php"</span>, <span class="text-[#9cdcfe]">priorityScore</span>: <span class="text-[#b5cea8]">80</span> }</p>
                        <p class="text-[#e4e4e6] pl-4">]</p>
                        <p class="text-[#e4e4e6]">}</p>
                    </div>
                </div>
            </div>

            <div>
                <p class="text-xs font-semibold tracking-widest text-[#4a4a54] uppercase mb-4">MCP and AI Agents</p>
                <h2 class="text-3xl font-semibold tracking-tight mb-4">Give agents the same coverage picture you see in the editor.</h2>
                <p class="text-[#a0a0a8] leading-relaxed mb-4">
                    EyeCov ships a built-in MCP server backed by the same runtime coverage model as the extension.
                    Agents can inspect a file, ask which tests cover a line, aggregate coverage by path or project, and rank where new tests will matter most.
                </p>
                <p class="text-sm font-medium tracking-tight text-[#e4e4e6] mb-6">
                    One coverage model. Editor, tooling, and agent workflows aligned.
                </p>
                <ul class="space-y-2 text-sm text-[#a0a0a8]">
                    <li class="flex items-center gap-2"><span class="text-[#e4e4e6]">✓</span> Built-in MCP server with <code>coverage_file</code> and <code>coverage_line_tests</code></li>
                    <li class="flex items-center gap-2"><span class="text-[#e4e4e6]">✓</span> Aggregate views via <code>coverage_path</code> and <code>coverage_project</code></li>
                    <li class="flex items-center gap-2"><span class="text-[#e4e4e6]">✓</span> Test targeting via <code>coverage_test_priority</code></li>
                    <li class="flex items-center gap-2"><span class="text-[#e4e4e6]">✓</span> Detailed docs and capture guides at <a href="/docs" class="underline decoration-[#4a4a54] underline-offset-4 hover:text-[#e4e4e6]">/docs</a></li>
                </ul>
            </div>
        </div>
    </section>

    <footer class="border-t border-[#1a1a20] py-10 px-6 md:px-8">
        <div class="max-w-6xl mx-auto flex flex-col md:flex-row items-start md:items-center justify-between gap-6 text-sm text-[#4a4a54]">
            <div class="flex items-center gap-2">
                <img src="/eyecov-logo.png" alt="" class="h-5 w-auto opacity-50 mix-blend-screen"> |
                <span>MIT License</span>
            </div>
            <div class="flex flex-wrap gap-6">
                <a href="/docs" class="hover:text-[#a0a0a8] transition-colors">Docs</a>
                <a href="https://github.com/eyecov/eyecov-vscode" class="hover:text-[#a0a0a8] transition-colors">GitHub</a>
                <a href="https://marketplace.visualstudio.com/items?itemName=eyecov.eyecov-vscode" class="hover:text-[#a0a0a8] transition-colors">VS Code Marketplace</a>
            </div>
        </div>
    </footer>
</x-layouts.app>
