<!DOCTYPE html>
<html>
<head>
    <title></title>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 5px;
  text-align: left;
}
</style>
</head>

<body>

    <h2>Lead Details:</h2>

    <table style="width:100%">
    <tr>
        <th>Name:</th>
        <td>{{$form_data['name']}}</td>
    </tr>
    <tr>
        <th>Email:</th>
        <td>{{$form_data['email']}}</td>
    </tr>
    <tr>
        <th>Number:</th>
        <td>{{$form_data['number']}}</td>
    </tr>
    <tr>
        <th>Lead Type</th>
        <td>{{ $lead_name}}</td>
    </tr>
    <tr>
        <th>Report Link</th>
        <td>{{ $form_data['report_id'] != 0 ? @'https://www.xcellentinsights.com/reports/'.$report_slug : ''}}</td>
    </tr>
    <tr>
        <th>Report UniqueID</th>
        <td>{{ $form_data['report_id'] != 0 ? $report_unique_id : ''}}</td>
    </tr>
    <tr>
        <th>Report Title</th>
        <td>{{ $form_data['report_id'] != 0 ? $report_title : ''}}</td>
    </tr>
    <tr>
        <th>Website</th>
        <td>{{$form_data['website']}}</td>
    </tr>
    <tr>
        <th>Country</th>
        <td>{{$form_data['country']}}</td>
    </tr>
    <tr>
        <th>Description</th>
        <td>{{$form_data['description']}}</td>
    </tr>
    <tr>
        <th>Company</th>
        <td>{{$form_data['company']}}</td>
    </tr>
    <tr>
        <th>Job Title</th>
        <td>{{$form_data['job_title']}}</td>
    </tr>
    </table>
    <!-- Xcellent Insights Team</p> -->
</body>
</html>


