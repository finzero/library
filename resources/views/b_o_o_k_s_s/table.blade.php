<table class="table table-responsive" id="bOOKSS-table">
    <thead>
        <th>Title</th>
        <th>Description</th>
        <th>Author</th>
        <th>Year</th>
        <th>Image</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($bOOKSS as $bOOKS)
        <tr>
            <td>{!! $bOOKS->title !!}</td>
            <td>{!! $bOOKS->description !!}</td>
            <td>{!! $bOOKS->author !!}</td>
            <td>{!! $bOOKS->year !!}</td>
            <td>{!! $bOOKS->image !!}</td>
            <td>
                {!! Form::open(['route' => ['bOOKSS.destroy', $bOOKS->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('bOOKSS.show', [$bOOKS->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('bOOKSS.edit', [$bOOKS->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>