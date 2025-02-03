@extends('layouts.app')

@section('header')
    <h1 class="text-3xl font-bold mb-6" style="color: #ff3b1d;">Manage Projects</h1>
@endsection

@section('content')
<div class="container mx-auto p-6">
    <div class="mb-4">
        <a href="{{ route('projects.create') }}" class="px-4 py-2 bg-primary text-white rounded">Create New Project</a>
    </div>
    <table class="min-w-full bg-white shadow rounded">
        <thead>
            <tr>
                <th class="py-2 px-4 border-b">ID</th>
                <th class="py-2 px-4 border-b">Company Name</th>
                <th class="py-2 px-4 border-b">Industry</th>
                <th class="py-2 px-4 border-b">Website</th>
                <th class="py-2 px-4 border-b">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($projects as $project)
                <tr>
                    <td class="py-2 px-4 border-b">{{ $project->id }}</td>
                    <td class="py-2 px-4 border-b">{{ $project->company_name }}</td>
                    <td class="py-2 px-4 border-b">{{ $project->industry }}</td>
                    <td class="py-2 px-4 border-b">
                        @if($project->website_url)
                            <a href="{{ $project->website_url }}" target="_blank" class="text-secondary">{{ $project->website_url }}</a>
                        @else
                            N/A
                        @endif
                    </td>
                    <td class="py-2 px-4 border-b">
                        <a href="{{ route('projects.show', $project->id) }}" class="text-blue-500 mr-2">View</a>
                        <a href="{{ route('projects.edit', $project->id) }}" class="text-green-500 mr-2">Edit</a>
                        <form action="{{ route('projects.destroy', $project->id) }}" method="POST" class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Are you sure?')" class="text-red-500">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="py-4 text-center">No projects found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
