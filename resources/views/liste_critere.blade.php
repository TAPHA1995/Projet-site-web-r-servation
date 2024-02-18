
@include('header')
<br>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> 
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> 

<section  class="main">
        <div class="container">
            <div class="row col-sm-12 justify-content-end">
                <div class="col-lg-12 col-md-10 col-sm-12">
                   
                        <div class="row">
                        @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
@if (session('fail'))
    <div class="alert alert-danger">
        {{ session('fail') }}
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
        
        @foreach ($criteres as $critere)
                <tr>
                    <td>{{ $critere->nom }}</td>
                    <td>
                    {{ $critere->email }}
                   </td>
                   <td>
                    {{ $critere->numero_tel }}
                   </td>
                   <td>
                   @if ($critere->areas)
                    {{ $critere->areas->nomarea }}
                @else
                    Aucune area associée
                @endif
                   </td>
                   <td>
                   @if ($critere->cities)
                    {{ $critere->cities->nomcity }}
                @else
                    Aucune area associée
                @endif
                    
                 
                    {{ $critere->nombre_chambre }}
                        
                    
                    <form method="POST" action="{{ route('critere.supprimer', $critere->id) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Supprimer</button>
                    </form>
                        
                  
            @endforeach
  
   
    @include('footer')
  
