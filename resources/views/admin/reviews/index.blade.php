@extends('layouts.backend')

@section('main')

<div class="container mt-4">

    <h2 class="mb-4">Product Reviews</h2>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Product</th>
                <th>User</th>
                <th>Rating</th>
                <th>Title</th>
                <th>Comment</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>

        @forelse($reviews as $review)

            <tr>
                <td>{{ $review->product->title ?? '' }}</td>
                <td>{{ $review->user->name ?? '' }}</td>
                <td>{{ $review->rating }}/5</td>
                <td>{{ $review->title }}</td>
                <td>{{ $review->comment }}</td>
                <td>
                @if($review->status == 'approved')
                    <span class="badge bg-success">Approved</span>
                    @else
                    <span class="badge bg-warning">Pending</span>
                    @endif
                </td>

    <td>

    @if($review->status == 'pending')
        <a href="{{ route('admin.reviews.approve', $review->id) }}"
           class="btn btn-success btn-sm">
            Approve
        </a>
    @endif

    <a href="{{ route('admin.reviews.delete', $review->id) }}"
       class="btn btn-danger btn-sm"
       onclick="return confirm('Are you sure you want to delete this review?')">
        Delete
    </a>

</td>

            </tr>

        @empty

            <tr>
                <td colspan="7" class="text-center">
                    No Reviews Found
                </td>
            </tr>

        @endforelse

        </tbody>
    </table>

</div>

@endsection