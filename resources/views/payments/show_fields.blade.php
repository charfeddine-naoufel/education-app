<!-- User Id Field -->
<div class="form-group">
    {!! Form::label('user_id', 'User Id:') !!}
    <p>{{ $payment->user_id }}</p>
</div>

<!-- Category Id Field -->
<div class="form-group">
    {!! Form::label('category_id', 'Category Id:') !!}
    <p>{{ $payment->category_id }}</p>
</div>

<!-- Course Id Field -->
<div class="form-group">
    {!! Form::label('course_id', 'Course Id:') !!}
    <p>{{ $payment->course_id }}</p>
</div>

<!-- Amount Field -->
<div class="form-group">
    {!! Form::label('amount', 'Amount:') !!}
    <p>{{ $payment->amount }}</p>
</div>

<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', 'Status:') !!}
    <p>{{ $payment->status }}</p>
</div>

<!-- Mode Of Payment Field -->
<div class="form-group">
    {!! Form::label('mode_of_payment', 'Mode Of Payment:') !!}
    <p>{{ $payment->mode_of_payment }}</p>
</div>

<!-- Payment Processor Field -->
<div class="form-group">
    {!! Form::label('payment_processor', 'Payment Processor:') !!}
    <p>{{ $payment->payment_processor }}</p>
</div>

