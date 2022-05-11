<?php
/**
 * @var  \Symbiotic\Form\Fields\Checkbox $field
 */
// todo : define id, classes,
$field_id = $field->getAttributes()['id'] ?? md5(uniqid());
$type = $field->getAttributes()['type'] ?? 'text';
$name = $field->getName();
$value = $field->getValue();
$variants = $field->getVariants();
$default = $field->getDefault();
$error = $field->getError();

?>

    <div class="row responsive-label @if(!empty($error)) error @endif">
        <div class="col-sm-12 col-md-3">
            <label for="{{$field_id}}">{{$field->getLabel()}}</label>
        </div>
        <div class="col-sm-12 col-md">
            <div class="input-group">
                @foreach($variants as $val => $label)
                    <input type="checkbox" name="{{$name}}[{{$val}}]" value="{{$val}}"
                           id="field-{{$name}}-{{md5($val)}}"
                           @if(in_array($val, is_array($value)?$value:[]) || in_array($val, is_array($default)?$default:[])) checked @endif>
                    <label for="field-{{$name}}-{{md5($val)}}">{{$label}}</label>
                    <br>
                @endforeach
            </div>
            @if(!empty($error))
                <div class=" small error-message">{{$error}}</div>
            @endif
        </div>
    </div>

