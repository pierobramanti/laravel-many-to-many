@extends('layouts.dashboard')

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-12">
                <h1 class="mb-4">Projects List</h1>
                
                <a href="{{route('admin.projects.create')}}" class="btn btn-primary mb-4">Aggiungi Progetto</a>
            </div>

            <!-- Tabella Progetti -->
            <div class="col-12 mt-4">
                <table class="table table-hover table-bordered">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">Date</th>
                            <th scope="col">Actions</th> <!-- Colonna per il pulsante View -->
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($projects as $project)
                        <tr>
                            <td>{{ $project->title }}</td>
                            <td>{{ $project->description }}</td>
                            <td>{{ $project->date }}</td>
                            <td>
                                <!-- Pulsante View -->
                                <a href="{{ route('admin.projects.show', ['project' => $project->id]) }}" class="btn btn-info">View</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection


