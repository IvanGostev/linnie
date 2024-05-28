<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        @font-face {
            font-family: "DejaVu Sans";
            font-style: normal;
            font-weight: 400;
            src: url("/fonts/dejavu-sans/DejaVuSans.ttf");
            /* IE9 Compat Modes */
            src: local("DejaVu Sans"),
            local("DejaVu Sans"),
            url("/fonts/dejavu-sans/DejaVuSans.ttf") format("truetype");
        }
        body {
            font-family: DejaVu Sans!important;
            font-size: 14px;}
    </style>
    <style type="text/css">
        * {
            /*font-family: Helvetica, sans-serif;*/
            font-family: "DejaVu Sans", sans-serif;
        }
    </style>
</head>

<body>

<p style="font-size: 20px">{{'Отчет по заявке номер'}}</p>
<p style="font-size: 16px"> Заявка</p>
<p>
    Причина: <br>
    {{$problem['reason']}}
</p>
<p>
    Примечание:  <br>
    {{$problem['text']}}
</p>
<p style="font-size: 16px">Отчет</p>
<p>
    Комметарий: <br>
    {{$report['comment']}}
</p>
<p>
    Описание проведённых работ:  <br>
    {{$report['work']}}
</p>
</body>


</html>
