<x-header title="{{$name}}"/>
<h1>HELLO {{$name}}</h1>
<p>you have entered the hello page, and you are {{$age}} years old</p>
@if ($age > 9)
<p>you are above age</p>
@else
<p>you are NOT above age</p>
@endif
<a href="{{ route('welcome') }}">return</a>
<x-footer />