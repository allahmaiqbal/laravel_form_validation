

<h1>wellcome page.</h1>
@php 
  $age="100";
  $name="iqbal";
  $list = array('rahim','larim','jadu','modu','luhan','rakib');
@endphp
<h1>{{ $name }}</h1>



@foreach ($list as $ln) 
<h1>{{ $ln}}</h1>
@endforeach

@if (count($list)==1)
   <h1> Single man.</h1>
@elseif(count($list)>1)
 <h1> more man.</h1>
  @else
     
  <h1>no man.</h1>

@endif

{{ $age >=18 ? 'you are adult' :'you are not adelt' }}


