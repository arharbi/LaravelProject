<h1>La somme</h1>
@php
    $f_num=20;
    $s_mum=80;
    $sum=$f_num+$s_mum;
@endphp

{{$sum}}

<h1>La boucle FOR:</h1>
@for($i=1;$i<=5;$i++)
    The current value is {{$i}}</br>
@endfor

