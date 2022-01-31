<tr>
    <td class="header">
        <a href="#" style="display: inline-block;">
            @if (trim($slot) === 'Hub do Cricaré')
            <img src="assets/img/logo.png" class="logo" alt="Hub Logo">
            @else
            {{ $slot }}
            @endif
        </a>
    </td>
</tr>