@php
$letters = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];
@endphp

<section style="margin-top: 25px; margin-bottom: 25px;">
    <div>
        <ul style="background-color:#DDDDDD; border-radius: 15px; width: 70%; margin: auto; padding: 5px; text-align:center;">
            @foreach ($letters as $letter)
            <li style="display: inline; margin-left: 2%;">
                <a href="{{ route('artistLetter', ['letter' => $letter]) }}">
                    <span>
                        <strong style="font-size: 1.2em;">{{ $letter }}</strong>
                    </span>
                </a>
            </li>
            @endforeach
            <li style="display: inline; margin-left: 2%; margin-right: 2%;">
                <a href="{{ route('artistLetter', ['letter' => '0-9']) }}">
                    <span>
                        <strong style="font-size: 1.2em;">0-9</strong>
                    </span>
                </a>
            </li>
        </ul>
    </div>
</section>
