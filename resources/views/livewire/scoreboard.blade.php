<div>
    <h1 class="text-5xl text-center font-bold my-16">Scoreboard</h1>
    <div class="mb-20 text-center">
        <a class="underline" href="/">Back to game</a>
    </div>
    <div class="max-w-lg mx-auto">
        <table class="w-full table-fixed">
            <thead class="text-left">
                <tr>
                    <th class="w-32">Color</th>
                    <th class="w-48">Name</th>
                    <th>Votes</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($colors as $i => $color)
                <tr style="background-color: {{ $i % 2 === 0 ? 'rgba(0,0,0,.025)' : 'rgb(255,255,255)' }}">
                    <td>
                        <div class="w-24 h-24" style="background-color: {{ $color->color }}; box-shadow: 1px 1px rgba(0,0,0,.1)"></div>
                    </td>
                    <td>{{ $color->color }}</td>
                    <td>{{ $color->votes }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <div class="mt-20 text-center">
        <a class="underline" href="/">Back to game</a>
    </div>
</div>
