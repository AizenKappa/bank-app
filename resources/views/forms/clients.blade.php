



<table class="table">

    <thead>
      <tr>
        <th scope="col">Cin</th>
        <th scope="col">Nom</th>
        <th scope="col">Prenom</th>
        <th scope="col">Telephone</th>
        <th scope="col">Adresse</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>

    <tbody>
      @foreach ($clients as $client)
        <tr>
          <th scope="row">{{ $client->cin }}</th>
          <td>{{ $client->nom }}</td>
          <td>{{ $client->prenom }}</td>
          <td>{{ $client->telephone }}</td>
          <td>{{ $client->adresse }}</td>
          <td class="d-flex gap-2">
            
            <form method="POST" action="/clients/{{ $client->id }}">
              @csrf
              @method('DELETE')
              
              <button type="submit">Supprimer</button>
            </form>

            <form method="GET" action="/clients/{{ $client->id }}">
              @csrf
              
              <button type="submit">Selectioner</button>
            </form>
          


          </td>
        </tr>
          
      @endforeach
    </tbody>

  </table>

