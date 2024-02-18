@include ('header')
<br><br>
<!-- affichage du nombre de notification dans AppServiceProvider.php -->
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Profil</th>
      <th scope="col">Nom</th>
      <th scope="col">E-mail</th>
      <th scope="col">Téléphone</th>
      <th scope="col">Message</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($contacts as $notifications)
    <tr>
      <th scope="row">{{$notifications->id}}</th>
      <td>{{$notifications->un}}</td>
      <td>{{$notifications->nom}}</td>
      <td>{{$notifications->email}}</td>
      <td>{{$notifications->tel}}</td>
      <td>{{$notifications->message}}</td>
      <td>
        <form action="{{ route('contacts.destroy', $notifications->id) }}" method="post">
        @csrf
        @method('Delete')
        <button class="btn btn-danger" type="submit" 
        onclick="return confirm('Voulez-vous vraiment supprimer ce message ?')">Delete</button>
        </form>
      </td>

    </tr>

    @endforeach
  </tbody>
</table>

<br><br><br><br>
@include ('footer')