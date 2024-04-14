<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')

    <title>Document</title>
</head>
<body>
    <div class="flex gap-6 mt-20">

    @foreach ( $countries as $country )
        <div class="bg-white w-1/3 shadow rounded-lg overflow-hidden">
            <div class="p-6">
                <span class="block text-slate-400 font-semibold text-sm">{{ $country->created_at }} </span>
                <h3 class="mt-3 font-bold text-lg pb-4 border-b border-slate-300">
                    <a href="{{route('foods',$country->id )}}">
                        food from Country : {{$country->name}}</a>
                </h3>
            </div>
        </div>
    @endforeach
</div>

</body>
</html>
