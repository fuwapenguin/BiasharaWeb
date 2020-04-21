@extends('layouts.app')

@section('buttons')

    <a class="btn btn-primary" href="{{ route('company.create') }}" role="button">Add New Company</a>

@endsection

@section('content')
    <table class="table">
        <thead>
        <tr>
            <th>Companyname</th>
            <th>Registration number</th>
            <th>Country</th>
            <th>Adress</th>
            <th>Postal code</th>
            <th>Description</th>
            <th>Year of establishment</th>
            <th>Specialisation</th>
            <th>Email adress</th>
            <th>Phone number</th>
            <th>Employees</th>
            <th>Website</th>

            <th class="Actions">Actions</th>
        </tr>
        </thead>
        <tbody>
        @forelse ($company as $companys)
            <tr>
                <td>{{ $companys->company_name }}</td>
                <td>{{ $companys->business_registration_number }}</td>
                <td>{{ $companys->country_id }}</td>
                <td>{{ $companys->company_adress }}</td>
                <td>{{ $companys->company_postal_code }}</td>
                <td>{{ $companys->company_description }}</td>
                <td>{{ $companys->established }}</td>
                <td>{{ $companys->specialisation }}</td>
                <td>{{ $companys->company_email }}</td>
                <td>{{ $companys->phone_number }}</td>
                <td>{{ $companys->employees_amount }}</td>
                <td>{{ $companys->website }}</td>
                <td>{{ date('F d, Y', strtotime($companys->company_created_at)) }}</td>
                <td class="actions">
                    <a
                            href="{{ action('CompanyController@show', ['company' => $companys->company_id]) }}"
                            alt="View"
                            title="View">
                        View
                    </a>
                    <a
                            href="{{ action('CompanyController@edit', ['company' => $companys->company_id]) }}"
                            alt="Edit"
                            title="Edit">
                        Edit
                    </a>
                </td>
            </tr>
        @empty
        @endforelse
        </tbody>
    </table>
@endsection