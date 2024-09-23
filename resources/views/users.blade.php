<x-header title="{{$name}}"/>
    <h1>users</h1>
    <p>{{$name}}</p>
    <form action="{{route("logData")}}" method="post">
        @csrf
        <input type="text" name="username">
        <button type="submit">submit</button>
    </form>
    <a href="{{ route('welcome') }}">go back</a>
<x-footer />