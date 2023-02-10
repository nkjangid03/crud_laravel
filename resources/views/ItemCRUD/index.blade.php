@extends('layouts.default')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Items CRUD</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('item.create') }}"> Create New Item</a>
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
            <th>Title</th>
            <th>Description</th>
            <th width="280px">Action</th>
        </tr>
    <?php $i=0; ?>
    @foreach ($items as $key => $item)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $item->title }}</td>
        <td>{{ $item->description }}</td>
        <td>
            <a class="btn btn-info" href="{{ route('item.show',$item->id) }}">Show</a>
            <a class="btn btn-primary" href="{{ route('item.edit',$item->id) }}">Edit</a>
            <a class="btn btn-danger" href="{{ route('item.destroy',$item->id) }}">Delete</a>
        </td>
    </tr>
    @endforeach
    </table>
    {{ $items->links() }}

@endsection
