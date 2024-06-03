<div class="form-group has-feedback @error($name) has-error @enderror">
	<label class="control-label" for="{{ $name }}Input">{{ $slot }}{{ isset($required) && $required ? '*' : '' }}</label>
	<input name="{{ $name }}" value="{{ old($name) }}" type="{{ $type ?? 'text' }}" class="form-control @error($name) is-invalid @enderror" id="{{ $name }}Input" {{ isset($required) && $required ? 'required' : '' }}>
	@error($name)
		<div class="invalid-feedback">
        	{{ $message }}
      	</div>
	@enderror
</div>