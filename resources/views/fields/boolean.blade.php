<?php
/**
 * @var  \Symbiotic\Form\Fields\Input $field
 */

// todo : define id, classes,
$field_id = $field->getAttributes()['id'] ?? md5(uniqid());
$type = $field->getAttributes()['type'] ?? 'text';
$name = $field->getName();
$description = $field->getDescription();
$value = $field->getValue();
$default = $field->getDefault();
$error = $field->getError();

?>
<div class="row responsive-label @if(!empty($error)) error @endif">
    <div class="col-sm-12 col-md-3">
        <label for="{{$field_id}}">{{$field->getLabel()}}</label>
    </div>
    <div class="col-sm-12 col-md">
        <input type="hidden"
               @if(!empty($name))
                   name="{{$field->getName()}}"
               @endif
               {!! $field->getAttributesHtml() !!} value="0">
        <input type="checkbox" id="{{$field_id}}"
               @if(!empty($name))
                   name="{{$field->getName()}}"
               @endif
               value="1" @if(!empty($value) || ( is_null($value) && !empty($default))) checked @endif
        >
        @if(!empty($description))
            <br>
            <small>{{$description}}</small>
        @endif
        @if(!empty($error))
            <div class=" small error-message">{{$error}}</div>
        @endif
    </div>
</div>
