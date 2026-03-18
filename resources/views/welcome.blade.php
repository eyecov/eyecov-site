<x-layouts.app title="EyeCov — See test coverage where you write code">
    {{-- Nav --}}
    <header class="fixed top-0 inset-x-0 z-10 flex items-center justify-between px-8 py-4 border-b border-white/5 backdrop-blur bg-[#0b0b0e]/80">
        <img src="/eyecov-logo.png" alt="eyecov" class="h-8 w-auto mix-blend-screen">
        <nav class="flex items-center gap-6 text-sm text-[#a0a0a8]">
            <a href="#vscode" class="hover:text-[#e4e4e6] transition-colors">VS Code</a>
            <a href="#agents" class="hover:text-[#e4e4e6] transition-colors">For AI Agents</a>
            <a href="https://github.com/eyecov/eyecov-vscode" class="hover:text-[#e4e4e6] transition-colors">GitHub</a>
        </nav>
    </header>

    {{-- Hero --}}
    <section class="min-h-screen flex items-center pt-20 px-8">
        <div class="max-w-6xl mx-auto w-full grid grid-cols-2 gap-16 items-center">

            <div>
                <div class="mb-8 space-y-4">
                    <img src="/eyecov-logo.png" alt="eyecov" class="h-20 w-auto mix-blend-screen">
                    <h1 class="text-3xl font-medium tracking-tight text-[#e4e4e6] leading-tight max-w-lg">
                        See test coverage where you write code.
                    </h1>
                </div>
                <p class="text-xl text-[#b0b0b8] leading-relaxed mb-6">
                    Check uncovered lines in VS Code and let your agents pull the same data.
                </p>
                <p class="text-base font-medium tracking-tight text-[#e4e4e6] mb-8">
                    Stop guessing what to test next.
                </p>
                <div class="flex gap-3">
                    <a href="https://marketplace.visualstudio.com/items?itemName=eyecov.eyecov-vscode"
                       class="px-5 py-2.5 rounded-lg bg-white text-[#0b0b0e] font-medium hover:bg-[#e4e4e6] transition-colors text-sm">
                        Get the Extension
                    </a>
                    <a href="https://github.com/eyecov/eyecov-vscode"
                       class="px-5 py-2.5 rounded-lg border border-[#2a2a30] hover:border-[#4a4a54] text-sm transition-colors">
                        View on GitHub
                    </a>
                </div>
            </div>

            {{-- Editor mockup --}}
            <div class="rounded-xl overflow-hidden border border-[#2a2a30] shadow-2xl text-sm font-mono">
                <div class="flex items-center gap-1.5 px-4 py-3 bg-[#111116] border-b border-[#2a2a30]">
                    <div class="w-3 h-3 rounded-full bg-[#ff5f57]"></div>
                    <div class="w-3 h-3 rounded-full bg-[#febc2e]"></div>
                    <div class="w-3 h-3 rounded-full bg-[#28c840]"></div>
                    <span class="ml-3 text-xs text-[#4a4a54]">calculator.ts</span>
                </div>
                <div class="bg-[#0d0d12] py-3">
                    @php
                    $lines = [
                        [1,  'covered',   'export function <span class="text-[#7aa2c8]">add</span>(a: number, b: number) {'],
                        [2,  'covered',   '  <span class="text-[#c586c0]">return</span> a + b'],
                        [3,  'covered',   '}'],
                        [4,  'none',      ''],
                        [5,  'covered',   'export function <span class="text-[#7aa2c8]">multiply</span>(a: number, b: number) {'],
                        [6,  'covered',   '  <span class="text-[#c586c0]">return</span> a * b'],
                        [7,  'covered',   '}'],
                        [8,  'none',      ''],
                        [9,  'uncovered', 'export function <span class="text-[#7aa2c8]">divide</span>(a: number, b: number) {'],
                        [10, 'uncovered', '  <span class="text-[#c586c0]">if</span> (b === <span class="text-[#b5cea8]">0</span>) <span class="text-[#c586c0]">throw new</span> Error(<span class="text-[#ce9178]">\'Division by zero\'</span>)'],
                        [11, 'uncovered', '  <span class="text-[#c586c0]">return</span> a / b'],
                        [12, 'uncovered', '}'],
                    ];
                    @endphp
                    @foreach($lines as [$num, $type, $code])
                        @php
                            $bg    = $type === 'covered'   ? 'bg-green-500/10'  : ($type === 'uncovered' ? 'bg-red-500/10' : '');
                            $bar   = $type === 'covered'   ? 'bg-green-500'     : ($type === 'uncovered' ? 'bg-red-500'    : 'bg-transparent');
                        @endphp
                        <div class="flex items-stretch {{ $bg }}">
                            <div class="w-1 flex-shrink-0 {{ $bar }}"></div>
                            <span class="w-8 text-right pr-4 text-[#3a3a44] select-none flex-shrink-0">{{ $num }}</span>
                            <span class="text-[#d4d4d4] pr-6 whitespace-pre">{!! $code !!}</span>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </section>

    {{-- VS Code section --}}
    <section id="vscode" class="py-32 px-8">
        <div class="max-w-6xl mx-auto grid grid-cols-2 gap-16 items-center">

            <div>
                <p class="text-xs font-semibold tracking-widest text-[#4a4a54] uppercase mb-4">VS Code Extension</p>
                <h2 class="text-3xl font-semibold tracking-tight mb-4">Spot gaps in the file<br>you’re in</h2>
                <p class="text-[#a0a0a8] leading-relaxed mb-6">
                    EyeCov reads your coverage report and marks each line in the gutter.
                    You stay in the file. You see what your tests hit, what they miss,
                    and what to test next.
                </p>
                <ul class="space-y-2 text-sm text-[#a0a0a8]">
                    <li class="flex items-center gap-2"><span class="text-green-400">✓</span> Covered lines stay quiet in green</li>
                    <li class="flex items-center gap-2"><span class="text-red-400">✓</span> Missed lines demand attention in red</li>
                    <li class="flex items-center gap-2"><span class="text-[#e4e4e6]">✓</span> Reads the coverage reports you already have</li>
                    <li class="flex items-center gap-2"><span class="text-[#e4e4e6]">✓</span> Updates when your coverage changes</li>
                </ul>
            </div>

            {{-- Gutter mockup --}}
            <div class="rounded-xl overflow-hidden border border-[#2a2a30] shadow-2xl text-sm font-mono">
                <div class="flex items-center gap-1.5 px-4 py-3 bg-[#111116] border-b border-[#2a2a30]">
                    <div class="w-3 h-3 rounded-full bg-[#ff5f57]"></div>
                    <div class="w-3 h-3 rounded-full bg-[#febc2e]"></div>
                    <div class="w-3 h-3 rounded-full bg-[#28c840]"></div>
                    <span class="ml-3 text-xs text-[#4a4a54]">auth.ts</span>
                    <span class="ml-auto text-xs text-[#4a4a54]">Coverage: 61%</span>
                </div>
                <div class="bg-[#0d0d12] py-3">
                    @php
                    $authLines = [
                        [1,  'covered',   '<span class="text-[#c586c0]">export async function</span> <span class="text-[#7aa2c8]">login</span>(email: string, password: string) {'],
                        [2,  'covered',   '  <span class="text-[#c586c0]">const</span> user = <span class="text-[#c586c0]">await</span> User.<span class="text-[#7aa2c8]">findByEmail</span>(email)'],
                        [3,  'covered',   '  <span class="text-[#c586c0]">if</span> (!user) {'],
                        [4,  'covered',   '    <span class="text-[#c586c0]">throw new</span> AuthError(<span class="text-[#ce9178]">\'User not found\'</span>)'],
                        [5,  'covered',   '  }'],
                        [6,  'covered',   '  <span class="text-[#c586c0]">const</span> valid = <span class="text-[#c586c0]">await</span> <span class="text-[#7aa2c8]">verifyPassword</span>(password, user.hash)'],
                        [7,  'uncovered', '  <span class="text-[#c586c0]">if</span> (!valid) {'],
                        [8,  'uncovered', '    <span class="text-[#c586c0]">throw new</span> AuthError(<span class="text-[#ce9178]">\'Invalid password\'</span>)'],
                        [9,  'uncovered', '  }'],
                        [10, 'uncovered', '  <span class="text-[#c586c0]">return</span> <span class="text-[#7aa2c8]">generateToken</span>(user)'],
                        [11, 'covered',   '}'],
                    ];
                    @endphp
                    @foreach($authLines as [$num, $type, $code])
                        @php
                            $bg  = $type === 'covered' ? 'bg-green-500/10' : ($type === 'uncovered' ? 'bg-red-500/10' : '');
                            $bar = $type === 'covered' ? 'bg-green-500'    : ($type === 'uncovered' ? 'bg-red-500'    : 'bg-transparent');
                        @endphp
                        <div class="flex items-stretch {{ $bg }}">
                            <div class="w-1 flex-shrink-0 {{ $bar }}"></div>
                            <span class="w-8 text-right pr-4 text-[#3a3a44] select-none flex-shrink-0">{{ $num }}</span>
                            <span class="text-[#d4d4d4] pr-6 whitespace-pre">{!! $code !!}</span>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </section>


    {{-- AI Agents section --}}
    <section id="agents" class="py-32 px-8 border-t border-[#1a1a20]">
        <div class="max-w-6xl mx-auto grid grid-cols-2 gap-16 items-center">

            {{-- Agent output mockup --}}
            <div class="rounded-xl overflow-hidden border border-[#2a2a30] shadow-2xl text-sm font-mono">
                <div class="flex items-center gap-1.5 px-4 py-3 bg-[#111116] border-b border-[#2a2a30]">
                    <div class="w-2 h-2 rounded-full bg-green-400 animate-pulse"></div>
                    <span class="ml-2 text-xs text-[#4a4a54]">MCP · eyecov</span>
                </div>
                <div class="bg-[#0d0d12] p-5 space-y-4">
                    <div>
                        <p class="text-[#4a4a54] text-xs mb-1">tool call</p>
                        <p class="text-[#7aa2c8]">get_coverage<span class="text-[#e4e4e6]">({</span></p>
                        <p class="text-[#e4e4e6] pl-4"><span class="text-[#9cdcfe]">file</span>: <span class="text-[#ce9178]">"src/auth.ts"</span></p>
                        <p class="text-[#e4e4e6]">})</p>
                    </div>
                    <div class="border-t border-[#2a2a30] pt-4">
                        <p class="text-[#4a4a54] text-xs mb-1">result</p>
                        <p class="text-[#e4e4e6]">{</p>
                        <p class="text-[#e4e4e6] pl-4"><span class="text-[#9cdcfe]">file</span>: <span class="text-[#ce9178]">"src/auth.ts"</span>,</p>
                        <p class="text-[#e4e4e6] pl-4"><span class="text-[#9cdcfe]">coverage</span>: <span class="text-[#b5cea8]">61</span>,</p>
                        <p class="text-[#e4e4e6] pl-4"><span class="text-[#9cdcfe]">uncovered_lines</span>: [<span class="text-[#b5cea8]">7, 8, 9, 10</span>],</p>
                        <p class="text-[#e4e4e6] pl-4"><span class="text-[#9cdcfe]">uncovered_context</span>: <span class="text-[#ce9178]">"invalid password branch"</span>,</p>
                        <p class="text-[#e4e4e6] pl-4"><span class="text-[#9cdcfe]">suggested_test</span>: <span class="text-[#ce9178]">"throws on invalid password"</span>,</p>
                        <p class="text-[#e4e4e6] pl-4"><span class="text-[#9cdcfe]">priority</span>: <span class="text-[#ce9178]">"high"</span>,</p>
                        <p class="text-[#e4e4e6] pl-4"><span class="text-[#9cdcfe]">reason</span>: <span class="text-[#ce9178]">"error path is uncovered"</span></p>
                        <p class="text-[#e4e4e6]">}</p>
                    </div>
                </div>
            </div>

            <div>
                <p class="text-xs font-semibold tracking-widest text-[#4a4a54] uppercase mb-4">AI Agent Integration</p>
                <h2 class="text-3xl font-semibold tracking-tight mb-4">Let agents see what<br>your tests miss</h2>
                <p class="text-[#a0a0a8] leading-relaxed mb-4">
                    EyeCov serves coverage through MCP. Your agent can ask for a file,
                    inspect the missed branch, and work directly from the same gaps you see.
                </p>
                <p class="text-sm font-medium tracking-tight text-[#e4e4e6] mb-6">
                    Coverage where you already work. For you and your agent.
                </p>
                <ul class="space-y-2 text-sm text-[#a0a0a8]">
                    <li class="flex items-center gap-2"><span class="text-[#e4e4e6]">✓</span> Ships with an MCP server</li>
                    <li class="flex items-center gap-2"><span class="text-[#e4e4e6]">✓</span> Query by file, function, or line range</li>
                    <li class="flex items-center gap-2"><span class="text-[#e4e4e6]">✓</span> Works with Claude, Cursor, and other MCP clients</li>
                </ul>
            </div>

        </div>
    </section>

    {{-- Footer --}}
    <footer class="border-t border-[#1a1a20] py-10 px-8">
        <div class="max-w-6xl mx-auto flex items-center justify-between text-sm text-[#4a4a54]">
            <div class="flex items-center gap-2">
                <img src="/eyecov-logo.png" alt="" class="h-5 w-auto opacity-50 mix-blend-screen"> |
                <span>MIT License</span>
            </div>
            <div class="flex gap-6">
                <a href="https://github.com/eyecov/eyecov-vscode" class="hover:text-[#a0a0a8] transition-colors">GitHub</a>
                <a href="https://marketplace.visualstudio.com/items?itemName=eyecov.eyecov-vscode" class="hover:text-[#a0a0a8] transition-colors">VS Code Marketplace</a>
            </div>
        </div>
    </footer>

</x-layouts.app>
