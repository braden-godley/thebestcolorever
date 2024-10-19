<div>
    <table class="w-full table-fixed">
        <thead class="text-left">
            <tr>
                <th class="w-32">Color</th>
                <th>Votes</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($colors as $i => $color)
            <tr style="background-color: {{ $i % 2 === 0 ? 'rgba(0,0,0,.1)' : 'rgb(255,255,255)' }}">
                <td>
                    <div class="w-24 h-24" style="background-color: {{ $color->hex }}"></div>
                </td>
                <td>{{ $color->votes }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
