<div class="table-responsive">
    <table class="table" id="courses-table">
        <thead>
            <tr>


        <th>Description</th>

        <th>Dscount Price</th>
        <th>Actual Price</th>

        <th>View Count</th>
        <th>Subscriber Count</th>
        <th>Status</th>
        <th>Photo</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($courses as $course)
            <tr>


            <td>
                <h2>{{ $course->title }}</h2>
                {{ $course->photo }}
                {{ $course->description }}</td>

            <td>{{ $course->dscount_price }}</td>
            <td>{{ $course->actual_price }}</td>

            <td>{{ $course->view_count }}</td>
            <td>{{ $course->subscriber_count }}</td>
            <td>{{ $course->status }}</td>
            <td></td>
                <td>
                    {!! Form::open(['route' => ['courses.destroy', $course->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('courses.show', [$course->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('courses.edit', [$course->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
