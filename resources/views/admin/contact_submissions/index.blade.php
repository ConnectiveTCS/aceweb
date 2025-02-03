@extends('layouts.app')

@section('header')
    <h1 class="text-3xl font-bold mb-6" style="color: #ff3b1d;">Contact Submissions</h1>
@endsection

@section('content')
<div class="container mx-auto p-6">
    <table class="min-w-full bg-white shadow rounded">
        <thead>
            <tr>
                <th class="py-2 px-4 border-b">ID</th>
                <th class="py-2 px-4 border-b">Name</th>
                <th class="py-2 px-4 border-b">Email</th>
                <th class="py-2 px-4 border-b">Phone</th>
                <th class="py-2 px-4 border-b">Service</th>
                <th class="py-2 px-4 border-b">Message</th>
                <th class="py-2 px-4 border-b">Submitted At</th>
            </tr>
        </thead>
        <tbody>
            @forelse($contactSubmissions as $submission)
                <tr>
                    <td class="py-2 px-4 border-b">{{ $submission->id }}</td>
                    <td class="py-2 px-4 border-b">{{ $submission->first_name }} {{ $submission->last_name }}</td>
                    <td class="py-2 px-4 border-b">{{ $submission->email }}</td>
                    <td class="py-2 px-4 border-b">{{ $submission->phone_number }}</td>
                    <td class="py-2 px-4 border-b">{{ $submission->service }}</td>
                    <td class="py-2 px-4 border-b">{{ $submission->message }}</td>
                    <td class="py-2 px-4 border-b">{{ $submission->created_at->format('Y-m-d H:i') }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="7" class="py-4 text-center">No submissions found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
