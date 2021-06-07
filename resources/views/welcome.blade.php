<html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="./check" method="POST">
        @csrf
        @foreach ($questions as $question )
        <div>Question {{$question->id }}:　{{ $question->content }}</div>
        <input type="hidden" name="id" value="{{$question->id}}">
        <input type="radio" name="question{{$question->id}}" value="1">{{ $question->ans1 }} </br>
        <input type="radio" name="question{{$question->id}}" value="2">{{ $question->ans2 }} </br>
        <input type="radio" name="question{{$question->id}}" value="3">{{ $question->ans3 }} </br>
        <input type="radio" name="question{{$question->id}}" value="4">{{ $question->ans4 }} </br>
        @endforeach
        <button type="submit">Hoan tat</button>
    </form>
    <h1>So cau tra loi dung:</h1>
</body>

