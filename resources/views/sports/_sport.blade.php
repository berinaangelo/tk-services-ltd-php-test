<tr>
  <td>{{ $sport->id }}</td>
  <td>{{ $sport->name }}</td>
  <td>
    <form action="{{ url('/sports', ['id' => $sport->id]) }}" method="post">
      <a class="btn btn-info" href="sports/{{$sport->id}}/edit">Edit</a>
      <input class="btn btn-danger" onclick="return confirm('Remove sport?')" type="submit" value="Delete" />
      @method('delete')
      @csrf
    </form>
  </td>
</tr>