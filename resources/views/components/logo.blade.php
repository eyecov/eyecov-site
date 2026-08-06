@props([
    'size' => 'md',
    'decorative' => false,
])

@if ($size === 'sm')
    <span
        {{ $attributes->class('inline-flex items-center gap-2 leading-none') }}
        @if ($decorative)
            aria-hidden="true"
        @else
            role="img"
            aria-label="eyecov"
        @endif
    >
        <span class="inline-flex items-center gap-1">
            <span class="h-4 w-1.5 rounded-[1px] bg-accent-dark"></span>
            <span class="h-4 w-1.5 rounded-[1px] bg-accent"></span>
            <span class="h-4 w-1.5 rounded-[1px] bg-accent-light"></span>
        </span>
        <span class="font-sans text-2xl font-normal tracking-tight text-white">eyecov</span>
    </span>
@elseif ($size === 'lg')
    <span
        {{ $attributes->class('inline-flex items-center gap-5 leading-none') }}
        @if ($decorative)
            aria-hidden="true"
        @else
            role="img"
            aria-label="eyecov"
        @endif
    >
        <span class="inline-flex items-center gap-2.5">
            <span class="h-16 w-4 rounded-[2px] bg-accent-dark"></span>
            <span class="h-16 w-4 rounded-[2px] bg-accent"></span>
            <span class="h-16 w-4 rounded-[2px] bg-accent-light"></span>
        </span>
        <span class="font-sans text-7xl font-normal tracking-tight text-white">eyecov</span>
    </span>
@else
    <span
        {{ $attributes->class('inline-flex items-center gap-3 leading-none') }}
        @if ($decorative)
            aria-hidden="true"
        @else
            role="img"
            aria-label="eyecov"
        @endif
    >
        <span class="inline-flex items-center gap-1.5">
            <span class="h-8 w-2.5 rounded-[2px] bg-accent-dark"></span>
            <span class="h-8 w-2.5 rounded-[2px] bg-accent"></span>
            <span class="h-8 w-2.5 rounded-[2px] bg-accent-light"></span>
        </span>
        <span class="font-sans text-4xl font-normal tracking-tight text-white">eyecov</span>
    </span>
@endif
