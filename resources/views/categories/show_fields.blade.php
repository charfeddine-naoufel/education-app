

<!-- Description Field -->
<div class="form-group w-100">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $categorie->description }}</p>
</div>

<!-- View Count Field -->
<div class="form-group w-100 small text_muted">
    {!! Form::label('view_count', 'View Count:') !!}
    <p>{{ $categorie->view_count }}</p>
</div>
<!-- created at Field -->
<div class="form-group w-100 small text_muted">
    {!! Form::label('created_at', 'Created at:') !!}
    <p>{{ $categorie->created_at->format('D d M Y h:m a') }}</p>
</div>
<!-- updated at Field -->
<div class="form-group w-100 small text_muted">
    {!! Form::label('updated_at', 'Updated at:') !!}
    <p>{{ $categorie->updated_at->format('D d M Y h:m a') }}</p>
</div>

