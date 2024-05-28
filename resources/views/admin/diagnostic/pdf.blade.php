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
            font-family: "DejaVu Sans", sans-serif !important;
            font-size: 14px;
        }
    </style>
</head>

<body>
<p style="font-size: 20px">Диагностика по {{$diagnostic['user']['name']}} период
    от {{$diagnostic['period']['created_at']}}</p>
<table class="table table-bordered">
    <tr>
        <th></th>
        <th></th>
    </tr>
    <tr>
        <td>СКПБ:</td>
        <td></td>
    </tr>
    <br>
    <tr>
        <td>Проверка состояния и целостности датчиков, индикаторов и кабельных соединений. Наличие резервного кабеля для
            сенсора нагрузки и инструкции пользователя СКПБ
        </td>
        <td style="font-weight: bold;">{{$diagnostic['skpb_first'] == 1 ? 'Да' : 'Нет'}}</td>
    </tr>
    <br>
    <tr>
        <td>Проверка состояния GPRS, блока памяти, блокировок, газоанализатора и звуковой сигнализации</td>
        <td style="font-weight: bold;">{{$diagnostic['skpb_second'] == 1 ? 'Да' : 'Нет'}}</td>
    </tr>
    <br>
    <tr>
        <td>Настройка прибора СКПБ (при необходимости)</td>
        <td style="font-weight: bold;">{{$diagnostic['skpb_third'] == 1 ? 'Да' : 'Нет'}}</td>
    </tr>
    <br>
    <br>
    <tr>
        <td>СТВ:</td>
        <td></td>
    </tr>
    <br>
    <tr>
        <td>Внешний осмотр технического состояния коммутационного шкафа, видеорегистратора, маршрутизатора, монитора,
            источников питания, видеокамеры, целостности кабелей и разъемов
        </td>
        <td style="font-weight: bold;">{{$diagnostic['stv_first'] == 1 ? 'Да' : 'Нет'}}</td>
    </tr>
    <br>
    <tr>
        <td>Проверка видеоархива, даты и времени на видеорегистраторе</td>
        <td style="font-weight: bold;">{{$diagnostic['stv_second'] == 1 ? 'Да' : 'Нет'}}</td>
    </tr>
    <br>
    <tr>
        <td>Настройка системы технологического видеонаблюдения Заказчика в соответствии с его требованиями (при
            необходимости)
        </td>
        <td style="font-weight: bold;">{{$diagnostic['stv_third'] == 1 ? 'Да' : 'Нет'}}</td>
    </tr>
</table>
<br>
<br>
<p>
    В результате проведения работ по техническому обслуживанию СИСТЕМ выявлены следующие неисправности: <br>
    {{$diagnostic['malfunctions']}}
</p>
<br>
<p>
    Особое мнение: <br>
    {{$diagnostic['opinion']}}
</p>
<br>
<br>
<p>Представитель ООО "ВэллТех" {{$diagnostic['representative']}}</p>
<br>
<p>Представитель ООО "ЛИНИИ" {{$diagnostic['our_representative']}}</p>
</body>
</html>
