<?php 
dd($form_data['lead_type']);

?>


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
        <td>{{ @$params['data']->leadtype->name}}</td>
    </tr>
    <tr>
        <th>Report Link</th>
        <td>{{ $params['data']->report_id != 0 ? @'https://www.xcellentinsights.com/reports/'.$params['data']->report->slug : ''}}</td>
    </tr>
    <tr>
        <th>Report UniqueID</th>
        <td>{{ $params['data']->report_id != 0 ? @$params['data']->report->unique_id : ''}}</td>
    </tr>
    <tr>
        <th>Report Title</th>
        <td>{{ $params['data']->report_id != 0 ? @$params['data']->report->title : ''}}</td>
    </tr>
    <tr>
        <th>Website</th>
        <td>{{ $params['data']->website}}</td>
    </tr>
    <tr>
        <th>Country</th>
        <td>{{ $params['data']->country}}</td>
    </tr>
    <tr>
        <th>Description</th>
        <td>{{ $params['data']->description}}</td>
    </tr>
    <tr>
        <th>Company</th>
        <td>{{ $params['data']->company}}</td>
    </tr>
    <tr>
        <th>Job Title</th>
        <td>{{ $params['data']->job_title}}</td>
    </tr>
    </table>
    <!-- Xcellent Insights Team</p> -->
</body>
</html>


