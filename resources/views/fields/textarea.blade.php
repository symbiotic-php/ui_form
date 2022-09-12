<?php
/**
 * @var  \Symbiotic\Form\Fields\Textarea $field
 */

$attributes = $field->getAttributes();
$field_id = $attributes['id'] ?? md5(uniqid());
$type = $attributes['type'] ?? 'text';
$name = $field->getName();
$value = $field->getValue();
$default = $field->getDefault();
$error = $field->getError();

?>

<div class="row responsive-label @if(!empty($error)) error @endif">
    <div class="col-sm-12 col-md-3">
        <label for="{{$field_id}}">{{$field->getLabel()}}</label>
    </div>
    <div class="col-sm-12 col-md">
        <textarea name="{{$name}}" id="{{$field_id}}" {!! $field->getAttributesHtml() !!} placeholder="{{$field->getPlaceholder()}}">{{($value===null?($default?:''):$value)}}</textarea>
        @if(!empty($error))
            <div class=" small error-message">{{$error}}</div>
        @endif
    </div>
</div>
