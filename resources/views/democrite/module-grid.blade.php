<div class="module relative" numero="{{ $a+1 }}">
    <i class="bi bi-trophy-fill finished hidden" numero="{{ $a+1 }}" style="box-shadow: 1px 1px 5px rgba(0,0,0,0.3);"></i>
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
            @for($i = 0; $i < 25; $i++)
                <div class="square bg-slate-100"></div>
            @endfor
        </div>
    </div>
    <span class="italic text-sm mt-2 module-titre">{{ $liste_modules[$a] }}</span>
</div>