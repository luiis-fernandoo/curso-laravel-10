<h1>Nova duvida</h1>

@if ($errors->any())
    @foreach($errors->all() as $error)
        {{ $error }}
    @endforeach

@endif

<form action="{{ route('supports.store') }}" method="post">
    @csrf()
    <input type="text" name="subject" placeholder="Digite o assunto.." value="{{old('subject')}}">
    <textarea name="body" id="" cols="30" rows="5" placeholder="Digite a descrição">{{ old('body') }}</textarea>
    <button type="submit">Enviar</button>

</form>