<fieldset>
    <legend>{{$group->getTitle()}}</legend>
    @if($group->isMulti())
        <div class="multigroup">
            @foreach($group->getSubGroups() as $v)
                {!! $v->render() !!}
            @endforeach
        </div>
    @else
        @foreach($group->getFields() as $v)
            {!! $v->render() !!}
        @endforeach
    @endif
</fieldset>