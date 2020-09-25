<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="{{ route('post-a-blog') }}" method="POST">
        @csrf
        {{-- input title --}}
        <div>
            <input type="text" name="title" id="">
        </div>

        {{-- input body text --}}
        <div>
            <textarea name="" id="" cols="30" rows="10"></textarea>
        </div>

        <div>
            <button class="" type="submit">Post</button>
        </div>
        
    </form>

</body>
</html>