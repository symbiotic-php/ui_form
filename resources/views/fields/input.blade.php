<?php
/**
 * @var  \Symbiotic\Form\Fields\Input $field
 */
// todo : define id, classes,
$attributes = $field->getAttributes();
$field_id = $attributes['id'] ?? md5(uniqid());
$type = $attributes['type'] ?? 'text';
$name = $field->getName();
$description = $field->getDescription();
$value = $field->getValue();
$default = $field->getDefault();
$error = $field->getError();


?>
@if($type === 'hidden')
    <input type="hidden" id="{{$field_id}}"
           @if(!empty($name))
           name="{{$name}}"
           @endif
           {!! $field->getAttributesHtml() !!} value="{{($value===null?($default?:''):$value)}}">
@elseif($type === 'submit')
    <input type="submit" id="{{$field_id}}"
           @if(!empty($name))
           name="{{$name}}"
           @endif
           {!! $field->getAttributesHtml() !!} value="{{($value===null?($default?:''):$value)}}">
@else
    <div class="row responsive-label @if(!empty($error)) error @endif">
        <div class="col-sm-12 col-md-3">
            <label for="{{$field_id}}">{{$field->getLabel()}}</label>
        </div>
        <div class="col-sm-12 col-md">
            <input type="{{$type}}" id="{{$field_id}}" name="{{$name}}"
                   {!! $field->getAttributesHtml() !!} value="{{($value===null?($default?:''):$value)}}" placeholder="{{$field->getPlaceholder()}}">
            @if(!empty($description))
                <br>
                <small>{{$description}}</small>
            @endif
            @if(!empty($error))
                <div class=" small error-message">{{$error}}</div>
            @endif
        </div>
    </div>
@endif
