<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Project Name</th>
        <th>User Name</th>
        <th>Dials</th>
        <th>Hours</th>
        <th>Emails</th>
        @foreach($data['resultCodes'] as $key => $resultCode)
            <th>{{ ucwords($key) }}</th>
        @endforeach
    </tr>
    </thead>
    <tbody>
    @foreach($data['results'] as $result)
        <tr>
            <td>{{$result['contact_id']}}</td>
            <td>{{$result['project_name']}}</td>
            <td>{{$result['contact_name']}}</td>
            <td>-</td>
            <td>{{$result['hours']}}</td>
            <td>-</td>
            @foreach($data['resultCodes'] as $key => $resultCode)
                <td>{{ $result[$key] }}</td>
            @endforeach
        </tr>
    @endforeach
    </tbody>
</table>
