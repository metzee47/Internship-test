@php
    $type ??= 'text';
    $placeholder ??= '';
    $name ??= '';
    $label ??= '';
    $value ??= ''
@endphp


<div class="form-group">
    <label for="{{$name}}">{{$label}}</label>
    <input type="{{$type}}" placeholder="{{$placeholder}}" name="{{$name}}" value="{{old($name, $value)}}">
    @error($name)
        <div class="error"><b>{{$message}}</b></div>        
    @enderror
</div>