


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ultimate App</title>
    @vite(['resources/css/sidebar.css'])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container-fluid p-0">
        <div class="container m-0 p-0">
            {{-- sidebar container --}}
            <div class="sidebar  d-none d-md-flex flex-column   ">
                {{-- logo  --}}
                <div class="logo d-flex justify-content-center py-2 border-bottom">
                    <h2>Ultimate App</h2>
                </div>
                {{-- Menus  --}}
                <div class="menu-items flex-grow-1">
                    <ul class="list-unstyled m-0 p-3 px-2">
                        <li><a href="" class=" d-block "><i class="fa-solid fa-file text-primary"></i> Notes</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>
</html>