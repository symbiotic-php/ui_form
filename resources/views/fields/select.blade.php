<?php
/**
 * @var  \Symbiotic\Form\Fields\Select $field
 */
$field_id = $field->getAttributes()['id'] ?? md5(uniqid());
?>

<div class="row responsive-label @if(!empty($error)) error @endif">
    <div class="col-sm-12 col-md-3">
        <label for="{{$field_id}}">{{$field->getLabel()}}</label>
    </div>
    <div class="col-sm-12 col-md">

        {{{$value = $field->getValue()}}}
        {{{$default = $field->getDefault()}}}
        {{{$error = $field->getError() }}}

        <select name="{{$field->getName()}}" {!! $field->getAttributesHtml() !!}>
            <option value="" @if($value==='') selected@endif>Не выбрано</option>
            @foreach($field->getVariants() as $val => $title)
                <option value="{{$val}}" @if($value===$val || ($default===$val)) selected@endif>
                    {{$title}}
                </option>
            @endforeach
        </select>
        @if(!empty($error))
            <div class=" small error-message">{{$error}}</div>
        @endif
    </div>

</div>