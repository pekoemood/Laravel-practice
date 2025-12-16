<div style="border:solid 1px gray; padding: 0px 10px; margin: 10px 0px">
    <p style="color: red;">Message component</p>
    <p style="font-size:12pt;">{{ $msg }}</p>
    <hr>
    <div style="margin: 0px 100px; font-size: 12pt; color: blue;">
        {{ $slot }}
    </div>
    <hr>
    <li>[id] {{$data['id']}}</li>
    <li>[title] {{$data['title']}}</li>
    <li>[content] {{$data['body']}}</li>
</div>