<div class="card-body">
    <div class="form-group row">
        {!! Form::label(
        'title',
        'Blog Title',
        [
        'class' => 'col-sm-2
        col-form-label',
        ],
        false,
        ) !!}
        <div class="col-sm-10">
            {!! Form::text('title', null, ['class' => 'form-control ' . ($errors->has('title') ? 'is-invalid' : '')])
            !!}
        </div>
    </div>
    
    <div class="form-group row">
        {!! Form::label(
        'body',
        'Body',
        [
        'class' => 'col-sm-2
        col-form-label',
        ],
        false,
        ) !!}
        <div class="col-sm-10">
            {!! Form::textarea('body', null, [
            'class' => 'form-control summernote',
            ]) !!}
            @error('body')
                <div class="error text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        {!! Form::label(
        'image',
        'Blog Image<span class="required-marker">*</span>',
        [
        'class' => 'col-sm-2
        col-form-label',
        ],
        false,
        ) !!}
        <div class="col-sm-10">
            {!! Form::file('image', null, [
            'class' => "custom-file-input
            {{ $errors->has('image') ? 'is-invalid' : '' }}",
            ]) !!}
            @error('image')
                <div class="error text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
</div>

<div class="card-footer">
    <button type="submit" class="btn btn-primary">Submit</button>
</div>
