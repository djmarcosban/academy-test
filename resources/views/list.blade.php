<ul>
    @foreach ($books as $book)
        <li>{{$book->title}}</li>
        <li>{{$book->author}}</li>
        <li>{{$book->release}}<hr></li>
    @endforeach
</ul>