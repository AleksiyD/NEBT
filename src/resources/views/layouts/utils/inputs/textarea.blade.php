<div class="form-group has-feedback @error($name) has-error @enderror">
	<label class="control-label" for="{{ $name }}Input">{{ $slot }}{{ isset($required) && $required ? '*' : '' }}</label>
	<textarea name="{{ $name }}" class="form-control @error($name) is-invalid @enderror" id="{{ $name }}Input" {{ isset($required) && $required ? 'required' : '' }} rows="{{ $rows ?? 3 }}">
		{{ old($name) }}
	</textarea>
	@error($name)
		<div class="invalid-feedback">
        	{{ $message }}
      	</div>
	@enderror
</div>