@extends('entreprises.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Liste des entreprises</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('entreprises.create') }}"> Create New Product</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>nom</th>
            <th>email</th>
            <th>contact</th>
            <th>latitude</th>
            <th>longitude</th>
            <th>description</th>
            <th>doamine</th>
            <th>partenariat</th>
            <th>Auteur</th>
            <th width="280px">Action</th>
        </tr>


        @foreach ($entreprises as $entreprise)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $entreprise->nom }}</td>
            <td>{{ $entreprise->email }}</td>
            <td>{{ $entreprise->contact }}</td>
            <td>{{ $entreprise->latitude }}</td>
            <td>{{ $entreprise->longitude }}</td>
            <td>{{ $entreprise->description }}</td>
            <td>{{ $entreprise->doamine }}</td>
            <td>{{ $entreprise->partenariat }}</td>
            <td>{{ $entreprise->Auteur }}</td>
            <td>
                <form action="{{ route('entreprises.destroy',$entreprise->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('entreprises.show',$entreprise->id) }}">Show</a>

                    <a class="btn btn-primary" href="{{ route('entreprises.edit',$entreprise->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $entreprises->links() !!}

@endsection
