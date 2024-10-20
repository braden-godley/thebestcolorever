<div class="w-screen h-screen flex flex-col justify-center items-center">
    <h1 class="lg:text-5xl text-2xl font-bold mb-16">The Best Color Ever</h1>
    <p class="mb-20">Which color is better?</p>
    <div class="flex lg:gap-16 gap-4">
        <button wire:click="vote(1)">
            <livewire:color :color="$color1" />
        </button>
        <button wire:click="vote(2)">
            <livewire:color :color="$color2" />
        </button>
    </div>
    <a class="underline mt-20" href="/scoreboard">Scoreboard</a>
</div>
