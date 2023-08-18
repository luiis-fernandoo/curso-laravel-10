<h1>Duvida {{$support->id}}</h1>

@if ($errors->any())
    @foreach($errors->all() as $error)
        {{ $error }}
    @endforeach
@endif

<form action="{{ route('supports.update', $support->id) }}" method="post">
    @csrf()
    @method('put')
    <input type="text" name="subject" placeholder="Digite o assunto.." value="{{$support->subject}}">
    <textarea name="body" id="" cols="30" rows="5" placeholder="Digite a descrição">{{$support->body}}</textarea>
    <button type="submit">Enviar</button>

</form>