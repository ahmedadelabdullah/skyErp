@extends('admin.layouts.app')

@section('breadcrumb')
    <div class="container-scroller w-100 mt-5 d-flex flex-row">
        <div class="title w-75">ahmed</div>
        <nav aria-label="breadcrumb" class="w-25 float-right">
            <ol class="breadcrumb border-0">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item "><a href="">suppliers</a></li>
            </ol>
        </nav>


    </div>
        @endsection


@section('content')
    <div class="table-responsive">
        <table class="table">
            <thead>
            <tr>
                <th>Profile</th>
                <th>VatNo.</th>
                <th>Created</th>
                <th>Status</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Jacob</td>
                <td>53275531</td>
                <td>12 May 2017</td>
                <td><label class="badge badge-danger">Pending</label></td>
            </tr>
            <tr>
                <td>Messsy</td>
                <td>53275532</td>
                <td>15 May 2017</td>
                <td><label class="badge badge-warning">In progress</label></td>
            </tr>
            <tr>
                <td>John</td>
                <td>53275533</td>
                <td>14 May 2017</td>
                <td><label class="badge badge-info">Fixed</label></td>
            </tr>
            <tr>
                <td>Peter</td>
                <td>53275534</td>
                <td>16 May 2017</td>
                <td><label class="badge badge-success">Completed</label></td>
            </tr>
            <tr>
                <td>Dave</td>
                <td>53275535</td>
                <td>20 May 2017</td>
                <td><label class="badge badge-warning">In progress</label></td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection