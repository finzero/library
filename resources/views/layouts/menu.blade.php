<li class="{{ Request::is('bOOKSS*') ? 'active' : '' }}">
    <a href="{!! route('bOOKSS.index') !!}"><i class="fa fa-edit"></i><span>BOOKSS</span></a>
</li>

<li class="{{ Request::is('books*') ? 'active' : '' }}">
    <a href="{!! route('books.index') !!}"><i class="fa fa-edit"></i><span>Books</span></a>
</li>

