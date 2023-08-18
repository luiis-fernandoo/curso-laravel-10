<h1>Detalhes da duvida {{$supports->id}}</h1>

<ul>
    <li>Assunto: {{$supports->subject}}</li>
    <li>Descrição: {{$supports->body}}</li>
    <li>Status: {{$supports->status}}</li>
</ul>

<form action="{{ route('supports.destroy', $supports->id) }}" method="post"> 
    @csrf
    @method('delete')
    <button type="submit">Deletar</button>
</form>