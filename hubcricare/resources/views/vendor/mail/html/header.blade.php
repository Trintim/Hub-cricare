<tr>
    <td class="header">
        <a href="#" style="display: inline-block;">
            @if (trim($slot) === 'Hub do Cricaré')
            <h1 style="font-size: 24px; color: #fff">Hub do cricaré</h1>
            @else
            {{ $slot }}
            @endif
        </a>
    </td>
</tr>