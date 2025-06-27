@extends($layout)

@section('content')
<div class="container mt-4">
    <h3 class="mb-4 text-primary fw-bold">📝 Jobs You Applied For</h3>

    @if($appliedJobs->isEmpty())
    <div class="alert alert-warning">You haven't applied for any jobs yet.</div>
    @else
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead class="bg-primary text-white">
                <tr>
                    <th>#</th>
                    <th>Position</th>
                    <th>Company</th>
                    <th>Salary</th>
                    <th>Applied Date</th>
                    <th>Closing Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse($appliedJobs as $index => $job)
                <tr>
                    <td>{{ $appliedJobs->firstItem() + $index }}</td>
                    <td>{{ $job->job_seeker_job_category_data->name ?? 'N/A' }}</td>
                    <td>{{ $job->company->company_name ?? 'N/A' }}</td>
                    <td>{{ $job->salary_offer_currency }} {{ $job->salary_offer ?? 'Not specified' }}</td>
                    <td>{{ $job->jobApplicants->first()->created_at->format('d M Y') ?? 'N/A' }}</td>
                    <td>{{ $job->closing_date ? $job->closing_date->format('d M Y') : 'N/A' }}</td>
                    <td>
                        <a href="{{ route('recent.job.details', $job->id) }}" class="btn btn-info btn-sm">View More</a>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="7" class="text-center">No applied jobs found.</td>
                </tr>
                @endforelse
            </tbody>
        </table>

        
    </div>
      <!-- Pagination at bottom left -->
        <div class="d-flex justify-content-start">
            {{ $appliedJobs->links() }}
        </div>


        
    @endif
</div>
@endsection