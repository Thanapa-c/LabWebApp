
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car</title>
</head>
<style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
<body>
    <h1>Car List</h1>
        <table>
            <thead>
                <tr>
                    <th>ชื่อรถยนต์</th>
                    <th>ประเภทรถยนต์(TH)</th>
                    <th>ประเภทรถยนต์(EN)</th>
                    <th>ชื่อเจ้าของรถยนต์</th>
                </tr>
            </thead>
            <tbody>
            @foreach($cars as $car)
            <?php
                 $carTypeInThai = '';
                 switch ($car->car_type) {
                     case 'Pickup':
                         $carTypeInThai = 'รถกระบะ';
                         break;
                     case 'Van':
                         $carTypeInThai = 'รถตู้';
                         break;
                     case 'Cabrio':
                         $carTypeInThai = 'รถเปิดประทุน';
                         break;
                     case 'Sport Car':
                         $carTypeInThai = 'สปอร์ตคาร์';
                         break;
                     default:
                         $carTypeInThai = 'ไม่ทราบประเภท';
                         break;
                 }
            ?>
            <tr>
                    <td>{{ $car->car_name }}</td>
                    <td>{{ $carTypeInThai }}</td>
                    <td>{{ $car->car_type }}</td>
                    <td>{{ $car->user->name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>




<!-- <body>
    @foreach($cars as $car)
    {{$car->id}} -> {{$car->car_name}} -> {{$car->car_type}} -> {{$car->owner_id}}<br>
    @endforeach
</body> -->