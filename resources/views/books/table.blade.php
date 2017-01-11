<table class="table table-responsive" id="books-table">
    <thead>
        <th>Title</th>
        <th>Description</th>
        <th>Author</th>
        <th>Year</th>
        <th>Image</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($books as $book)
        <tr>
            <td>{!! $book->title !!}</td>
            <td>{!! $book->description !!}</td>
            <td>{!! $book->author !!}</td>
            <td>{!! $book->year !!}</td>
            <td>{!! $book->image !!}</td>
            <td>
                {!! Form::open(['route' => ['books.destroy', $book->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('books.show', [$book->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('books.edit', [$book->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>