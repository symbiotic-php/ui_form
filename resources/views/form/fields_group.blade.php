<fieldset>
    <legend>{{$group->getTItle()}}</legend>
    @foreach($group->getFields() as $v)
        {!! $v->render() !!}
    @endforeach
</fieldset>