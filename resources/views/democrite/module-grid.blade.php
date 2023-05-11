<div class="module" numero="{{ $a+1 }}">
    <h4 class="numero-module">
        Module 
        @if ($a < 9)
        0{{$a+1}}
        @else
        {{$a+1}}
        @endif
    </h4>
    <div class="h-[100px] w-[100px]">
        <div class="progress-module-container">
            @for($i = 0; $i < 100; $i++)
            <div class="square"></div>
            @endfor
        </div>
    </div>
    <span class="italic text-sm mt-2 module-titre">{{ $liste_modules[$a] }}</span>
</div>