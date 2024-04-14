<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>

<body class="">

    <div class="flex gap-6 mt-20">
        @foreach ($foods as $food)
            <div class="bg-white w-1/3 shadow rounded-lg overflow-hidden">
                <div class="p-6">
                    <span class="block text-slate-400 font-semibold text-sm">{{ $food->created_at }} </span>
                    <h3 class="mt-3 font-bold text-lg pb-4 border-b border-slate-300">
                        <a href="https://play.tailwindcss.com/TGny89rOkl?layout=horizontal">
                            food from Country : {{$food->name}}</a>
                    </h3>
                    <h3 class="mt-3 font-bold text-lg pb-4 border-b border-slate-300">
                        <a href="https://play.tailwindcss.com/TGny89rOkl?layout=horizontal">
                            food from Country : {{$food->country->name}}</a>
                    </h3>
                    <div class="flex mt-4 gap-4 items-center">
                        <h3 class="mt-3 font-bold text-lg pb-4 border-b border-slate-300">
                            <a href="https://play.tailwindcss.com/TGny89rOkl?layout=horizontal">
                                food price : {{$food->price}}</a>
                        </h3>
                        <h3 class="mt-3 font-bold text-lg pb-4 border-b border-slate-300">
                            <a href="https://play.tailwindcss.com/TGny89rOkl?layout=horizontal">
                                food weight : {{$food->weight}}</a>
                        </h3>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</body>

</html>
