<h1>Listagem dos suportes</h1>
<a href="{{ route('supports.create') }}"><button>Nova Dúvida</button></a>

<table border="1">
    <thead>
        <th>ID</th>
        <th>Assunto</th>
        <th>Status</th>
        <th>Conteúdo</th>
        <th>Ações</th>
    </thead>
    <tbody>
        @foreach($support as $supports)
        <tr>
            <td>{{ $supports->id }}</td>
            <td>{{ $supports->subject }}</td>
            <td>{{ $supports->status }}</td>
            <td>{{ $supports->body }}</td>
            <td><a href="{{ route('supports.show', $supports->id) }}">Detalhar</a> </td>
            <td><a href="{{ route('supports.edit', $supports->id) }}">Editar</a> </td>
        </tr>
        @endforeach
    </tbody>
</table>