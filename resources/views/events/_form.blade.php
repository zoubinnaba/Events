<div class="form-group {{ $errors->has('title') ? 'has-error': '' }}">
	<label for="title" class="control-label" sr-only>Title</label>
	<input type="text" name="title" placeholder="Titre de l'evenement" value="{{ old('title') ?? $event->title }}" class="form-control">
	{!! $errors->first('title', '<span class="help-block">:message</span>') !!}
</div>
<div class="form-group {{ $errors->has('description') ? 'has-error': '' }}">
	<label for="description" class="control-label" sr-only>Description</label>
	<textarea name="description" id="description" placeholder="description de l'evenement" class="form-control">{{ old('description') ?? $event->description }}</textarea>
	{!! $errors->first('description', '<span class="help-block">:message</span>') !!}
</div>
<div class="form-group">
	<input type="submit" value="{{ $submitButton }}" class="btn btn-primary btn-block">
</div>