<fieldset>
    <legend>{{$group->getTitle()}}</legend>
    @foreach($group->getFields() as $v)
        {!! $v->render() !!}
    @endforeach
</fieldset>