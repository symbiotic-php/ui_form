<?php
/**
 * @var  \Symbiotic\Form\Fields\Radio $field
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
            <div class="input-group">
                @foreach($field->getVariants() as $val => $label)
                    <input type="radio" name="{{$name}}" value="{{$val}}"
                           id="field-{{$name}}-{{md5($val)}}"
                           @if($value == $val || ($default===$val)) checked @endif>
                    <label for="field-{{$name}}-{{md5($val)}}">{{$label}}</label>
                    <br>
                @endforeach
            </div>
            @if(!empty($description))
                <br>
                <small>{{$description}}</small>
            @endif
            @if(!empty($error))
                <div class=" small error-message">{{$error}}</div>
            @endif
        </div>
    </div>

