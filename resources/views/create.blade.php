<form action="{{route('create')}}" method="POST">
@csrf
<input type="text" name="title" placeholder="title">
<br>
<input type="text" name="author" placeholder="author">
<br>
<input type="text" name="release" placeholder="release">
<br>
<input type="submit" value="Enviar">
</form>