<div class="box box-info padding-1">
    <div class="box-body">
       
        <div class="form-group">
            {{ Form::label('categoty_id') }}
            {{ Form::select('categoty_id', $categories, $book->categoty_id, ['class' => 'form-control' . ($errors->has('categoty_id') ? ' is-invalid' : ''), 'placeholder' => 'Categoty Id']) }}
            {!! $errors->first('categoty_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('name') }}
            {{ Form::text('name', $book->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>