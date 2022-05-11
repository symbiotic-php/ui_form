<form action="{{$form->getAction()}}" method="{{$form->getMethod()}}">
    @foreach($form->getFields() as $v)
{!! $v->render() !!}
    @endforeach
</form>
<style>
    .error input, .error textarea, .error select {
        border-color: #fd5800;
    }
    .error-message {
        color: #fd5800;
    }
</style>